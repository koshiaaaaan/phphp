<?php
namespace Phphp\Lexer\Tokenizer\Html5;

use Countable;
use Phphp\Contracts\Lexer\Tokenizer\Html5\Token;

class TokenQueue implements Countable
{
    /**
     * @var array \Phphp\Contracts\Lexer\Tokenizer\Html5\Token[]
     */
    protected $queue = [];

    /**
     * @param \Phphp\Contracts\Lexer\Tokenizer\Html5\Token $token
     * @return $this
     */
    public function enqueue(Token $token): self
    {
        array_push($this->queue, $token);
        return $this;
    }

    /**
     * @return \Phphp\Contracts\Lexer\Tokenizer\Html5\Token | null
     *
     * TODO: PHP >= v7.1 => use nullable return type
     */
    public function dequeue()
    {
        return array_shift($this->queue);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->queue);
    }
}