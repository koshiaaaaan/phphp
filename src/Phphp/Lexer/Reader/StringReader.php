<?php
namespace Phphp\Lexer\Reader;

use Phphp\Lexer\Tokenizer\Html5\Character;

class StringReader implements Reader
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
    private $pos = -1;

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

    private $cr = false;
    private $lf = false;
    private $line = 1;
    private $cols = [];

    public function __construct($data)
    {
        if (!is_string($data)) {
            throw new \InvalidArgumentException(sprintf(
                '与えられたパラメータの型が `string` ではありません。: `%s`',
                gettype($data)
            ));
        }
        $this->data = $data;
        $this->pos = (substr($data, 0, 3) === Character::BOM) ? 2 : -1;
        $this->firstCharPos = $this->pos;
        $this->lastCharPos = strlen($data);
        $this->cols[$this->line] = 0;
    }

    /**
     * @param  integer $length
     * @return string
     */
    public function peek($length = 1)
    {
        return substr($this->data, $this->pos, $length);
    }

    /**
     * {@inheritdoc}
     */
    public function advance()
    {
        $this->pos++;

        if ($this->pos >= $this->lastCharPos) {
            $this->pos = $this->lastCharPos;
            return Character::EOF;
        }

        $char = $this->data[$this->pos];
        $next = isset($this->data[$this->pos+1]) ? $this->data[$this->pos+1] : '';

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

        return $char;
    }

    /**
     * {@inheritdoc}
     */
    public function retreat()
    {
        $this->pos--;

        if ($this->pos <= $this->firstCharPos) {
            $this->pos = $this->firstCharPos;
            return '';
        }

        $char = $this->data[$this->pos];
        $next = isset($this->data[$this->pos+1]) ? $this->data[$this->pos+1] : '';

        if ($char === Character::CARRIAGE_RETURN) {
            if ($next !== Character::LINE_FEED) {
                $this->line--;
            }
        } elseif ($char === Character::LINE_FEED) {
            $this->line--;
        } else {
            $this->cols[$this->line]--;
        }

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
