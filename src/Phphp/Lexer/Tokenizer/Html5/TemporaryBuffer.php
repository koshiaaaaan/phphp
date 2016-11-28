<?php
namespace Phphp\Lexer\Tokenizer\Html5;

/**
 * Class TemporaryBuffer
 * @package Phphp\Lexer\Tokenizer\Html5
 */
class TemporaryBuffer
{
    /**
     * @var string
     */
    private $buffer = '';

    /**
     * Set the temporary buffer to the empty string.
     *
     * @return $this
     */
    public function reset()
    {
        $this->buffer = '';
        return $this;
    }

    /**
     * Append the temporary buffer to the character.
     *
     * @param string $char
     * @return $this
     */
    public function append($char)
    {
        $this->buffer = $char;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuffer()
    {
        return $this->buffer;
    }
}
