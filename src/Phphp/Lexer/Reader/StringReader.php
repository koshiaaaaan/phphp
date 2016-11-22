<?php
namespace Phphp\Lexer\Reader;

use Phphp\Lexer\Tokenizer\Html5\Character;

class StringReader implements Reader
{
    /**
     * Raw data
     * @var string
     **/
    private $data   = '';

    /**
     * Current position
     * @var integer
     **/
    private $pos = -1;

    /**
     * Last character position
     * @var integer
     **/
    private $lastCharPos    = -1;

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
            return Character::EOF;
        }

        $char = $this->data[$this->pos];

        if ($char === Character::LINE_FEED) {
            if (!$this->cr) {
                $this->line++;
                $this->cols[$this->line] = 0;
            }
            $this->lf = true;
        } elseif ($char === Character::CARRIAGE_RETURN) {
            $this->cr = true;
            $this->line++;
            $this->cols[$this->line] = 0;
            return $char;
        } else {
            $this->cols[$this->line]++;
        }

        $this->cr = false;

        return $char;
    }

    /**
     * {@inheritdoc}
     */
    public function retreat()
    {
        if ($this->pos > 0) {
            $this->pos--;
        }

        $char = $this->data[$this->pos];

        $this->cr = false;

        if ($char === Character::CARRIAGE_RETURN) {
            if (!$this->lf) {
                $this->line--;
            }
            $this->cr = true;
        } elseif ($char === Character::LINE_FEED) {
            $this->line--;
            $this->lf = true;
            return $char;
        } else {
            $this->cols[$this->line]--;
        }

        $this->lf = false;

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
