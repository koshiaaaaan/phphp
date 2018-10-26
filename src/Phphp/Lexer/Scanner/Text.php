<?php
namespace Phphp\Lexer\Scanner;

use OutOfRangeException;
use Phphp\Character;
use Phphp\Contracts\Lexer\Scanner;

class Text implements Scanner
{
    /**
     * Raw data
     *
     * @var string $data
     **/
    private $data = '';

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
     * Text constructor.
     *
     * @param string $data
     */
    public function __construct(string $data)
    {
        $this->data = $data;
        $this->start = $this->current = $this->peek(3) === Character::BOM ? 3 : 0;
        $this->end = strlen($data);
        $this->line = 1;
        $this->cols[$this->line] = 0;
    }

    /**
     * カーソルはそのままで、先の文字（列）を取得する
     *
     * @param  int $length = 1
     * @return string
     */
    public function peek($length = 1): string
    {
        $current = $this->current;
        if ($length < 0) {
            $length = abs($length);
            $current = $current - $length;
            if ($current < $this->start) {
                $length = $this->current - $this->start;
                $current = $this->start;
            }
        }
        return substr($this->data, $current, $length);
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

        if (!isset($this->data[$this->current])) {
            throw new OutOfRangeException('Data length mismatch');
        }

        $currChar = $this->data[$this->current];
        $nextChar = $this->data[$next] ?? null;
        $this->current++;

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
        $prev = $this->current - 1;

        if ($this->current < $this->start) {
            $this->current = $this->start;
            return '';
        }

        if (!isset($this->data[$this->current])) {
            throw new OutOfRangeException('Data length mismatch');
        }

        $currChar = $this->data[$this->current];
        $prevChar = $this->data[$prev] ?? null;

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
