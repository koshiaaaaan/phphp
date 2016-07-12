<?php
namespace Phphp\Lexer\Reader;

use Phphp\Lexer\Character;

class String implements ReaderInterface
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

    private $skipNextNewLine = false;
    private $gapStack = [];
    private $lastGapPos = -1;

    public function __construct($data)
    {
        if (!is_string($data)) {
            throw new \InvalidArgumentException(sprintf(
                '与えられたパラメータの型が `string` ではありません。: `%s`',
                gettype($data)
            ));
        }
        $this->data         = $data;
        $this->pos          = (substr($data, 0, 3) === Character::BOM) ? 2 : -1;
        $this->lastCharPos  = strlen($data);
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

        if ($this->skipNextNewLine && $char === Character::LINE_FEED) {
            $this->skipNextNewLine = false;
            $this->addGap();
            return $this->advance();
        }

        if ($char === Character::CARRIAGE_RETURN) {
            $this->skipNextNewLine = true;
            return $char;
        }

        $this->skipNextNewLine = false;

        return $char;
    }

    /**
     * {@inheritdoc}
     */
    public function retreat()
    {
        if ($this->pos === $this->lastGapPos) {
            $this->lastGapPos = array_pop($this->gapStack);
            $this->pos--;
        }
        return $this->pos--;
    }

    private function addGap()
    {
        $this->gapStack[]   = $this->lastGapPos;
        $this->lastGapPos   = $this->pos;
    }
}