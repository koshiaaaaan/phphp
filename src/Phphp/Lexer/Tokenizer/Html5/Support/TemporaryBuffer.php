<?php
namespace Phphp\Lexer\Tokenizer\Html5\Support;

trait TemporaryBuffer
{
    /**
     * @var string
     */
    protected $temporaryBuffer = '';

    /**
     * @param string $buffer
     * @return $this
     */
    public function setTemporaryBuffer(string $buffer): self
    {
        $this->temporaryBuffer = $buffer;
        return $this;
    }

    /**
     * @param string $buffer
     * @return $this
     */
    public function appendTemporaryBuffer(string $buffer): self
    {
        return $this->setTemporaryBuffer($this->temporaryBuffer.$buffer);
    }

    /**
     * @return string
     */
    public function getTemporaryBuffer(): string
    {
        return $this->temporaryBuffer;
    }
}