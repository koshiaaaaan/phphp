<?php
namespace Phphp\Lexer\Tokenizer\Html5;

class TemporaryBuffer
{
    protected $buffer;

    public function set(string $buffer)
    {
        $this->buffer = $buffer;
    }

    public function append(string $buffer)
    {
        $this->buffer .= $buffer;
    }

    public function prepend(string $buffer)
    {
        $this->buffer = $buffer . $this->buffer;
    }
}