<?php
namespace Phphp\Reader;

use Phphp\Character;
use InvalidArgumentException;
use OutOfRangeException;

class File implements Reader
{
    /**
     * @var resource
     */
    private $handle;

    /**
     * Current cursor position
     *
     * @var int $current
     **/
    private $current = 0;

    /**
     * Start cursor position
     *
     * @var int $start
     **/
    private $start = 0;

    /**
     * End cursor position
     *
     * @var int $end
     **/
    private $end = -1;

    /**
     * Current cursor line
     *
     * @var int $line
     */
    private $line = 1;

    /**
     * Current cursor column
     *
     * @var int[] $cols
     */
    private $cols = [];

    /**
     * File constructor.
     *
     * @param string $path
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(string $path)
    {
        clearstatcache(false, $path);
        if (!is_file($path) || !is_readable($path) || !$this->handle = @fopen($path, 'r')) {
            throw new InvalidArgumentException('読み込み可能なファイルではないか、ファイルが存在しません');
        }
        flock($this->handle, LOCK_SH);

        $this->start = $this->current = $this->peek(3) === Character::BOM ? 3 : 0;
        fseek($this->handle, $this->start, SEEK_SET);
        $this->end = filesize($path);
        $this->line = 1;
        $this->cols[$this->line] = 0;
    }

    /**
     * ファイルハンドラをクローズする
     */
    public function __destruct()
    {
        if (is_resource($this->handle)) {
            flock($this->handle, LOCK_UN);
            fclose($this->handle);
        }
    }

    /**
     * カーソルはそのままで、先の文字（列）を取得する
     *
     * @param  int $length = 1
     * @return string
     */
    public function peek($length = 1): string
    {
        if ($length === 0) {
            return '';
        }

        $current = $this->current;
        if ($length < 0) {
            $length = abs($length);
            $current = $current - $length;
            if ($current < $this->start) {
                $length = $this->current - $this->start;
                $current = $this->start;
                if ($length === 0) {
                    return '';
                }
            }
            fseek($this->handle, $current, SEEK_SET);
            return fread($this->handle, $length);
        }

        $result = fread($this->handle, $length);
        fseek($this->handle, $current, SEEK_SET);
        return $result;
    }

    /**
     * 次の１文字を取得し、カーソルを進める
     *
     * @return string
     *
     * @throws \OutOfRangeException
     */
    public function advance(): string
    {
        $next = $this->current + 1;
        if ($next > $this->end) {
            return Character::EOT;
        }

        if (feof($this->handle) || $this->current !== ftell($this->handle)) {
            throw new OutOfRangeException('Data length mismatch');
        }

        $currChar = fgetc($this->handle);
        $this->current++;
        $nextChar = $this->peek(1);

        if ($currChar === Character::LINE_FEED) {
            $this->line++;
            $this->cols[$this->line] = 0;
        } elseif ($currChar === Character::CARRIAGE_RETURN) {
            if ($nextChar !== Character::LINE_FEED) {
                $this->line++;
                $this->cols[$this->line] = 0;
            }
        } else {
            $this->cols[$this->line]++;
        }

        return $currChar;
    }

    /**
     * 前の１文字を取得し、カーソルを戻す
     *
     * @return string
     *
     * @throws \OutOfRangeException
     */
    public function retreat(): string
    {
        $this->current--;

        if ($this->current < $this->start) {
            $this->current = $this->start;
            return '';
        }
        fseek($this->handle, $this->current, SEEK_SET);

        if (feof($this->handle) || $this->current !== ftell($this->handle)) {
            throw new OutOfRangeException('Data length mismatch');
        }

        $currChar = $this->peek(1);
        $prevChar = $this->peek(-1);

        if ($currChar === Character::LINE_FEED) {
            if ($prevChar !== Character::CARRIAGE_RETURN) {
                $this->line--;
            }
        } elseif ($currChar === Character::CARRIAGE_RETURN) {
            $this->line--;
        } else {
            $this->cols[$this->line]--;
        }

        return $currChar;
    }

    /**
     * カーソルのカレント行を取得する
     *
     * @return int
     */
    public function getLine(): int
    {
        return $this->line;
    }

    /**
     * カーソルのカレント列を取得する
     *
     * @return int
     */
    public function getColumn(): int
    {
        return $this->cols[$this->line];
    }
}
