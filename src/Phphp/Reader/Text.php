<?php
namespace Phphp\Reader;

use Phphp\Character;
use OutOfRangeException;

class Text implements Reader
{
    /**
     * Raw data
     * @var string
     **/
    private $data = '';

    /**
     * Current position
     * @var integer
     **/
    private $pos = 0;

    /**
     * First character position
     * @var integer
     **/
    private $firstCharPos = 0;

    /**
     * Last character position
     * @var integer
     **/
    private $lastCharPos = -1;

    private $line = 1;
    private $cols = [];

    public function __construct(string $data)
    {
        $this->data = $data;
        $this->pos = $this->peek(3) === Character::BOM ? 3 : 0;
        $this->firstCharPos = $this->pos;
        $this->lastCharPos = strlen($data);
        $this->line = 1;
        $this->cols[$this->line] = 0;
    }

    /**
     * @param  integer $length
     * @return string
     */
    public function peek($length = 1): string
    {
        return substr($this->data, $this->pos, $length);
    }

    public function advance()
    {
        $nextPos = $this->pos + 1;
        if ($nextPos > $this->lastCharPos) {
            return Character::EOT;
        }

        if (!isset($this->data[$this->pos])) {
            throw new OutOfRangeException('Data length mismatch');
        }

        $char = $this->data[$this->pos];
        $next = $this->data[$nextPos] ?? null;

        if ($char === Character::LINE_FEED) {
            $this->line++;
            $this->cols[$this->line] = 0;
        } elseif ($char === Character::CARRIAGE_RETURN) {
            if ($next !== Character::LINE_FEED) {
                $this->line++;
                $this->cols[$this->line] = 0;
            }
        } else {
            $this->cols[$this->line]++;
        }

        $this->pos++;
        return $char;
    }

    /**
     * {@inheritdoc}
     */
    public function retreat()
    {
        $prevPos = $this->pos - 1;

        if ($prevPos < $this->firstCharPos) {
            return '';
        }

        if (!isset($this->data[$prevPos])) {
            throw new OutOfRangeException('Data length mismatch');
        }

        $char = $this->data[$prevPos];
        $prev = $this->data[$prevPos-1] ?? null;

        if ($char === Character::LINE_FEED) {
            if ($prev !== Character::CARRIAGE_RETURN) {
                $this->line--;
            }
        } elseif ($char === Character::CARRIAGE_RETURN) {
            $this->line--;
        } else {
            $this->cols[$this->line]--;
        }

        $this->pos--;
        return $char;
    }

    public function getLine()
    {
        return $this->line;
    }

    public function getColumn()
    {
        return $this->cols[$this->line];
    }
}
