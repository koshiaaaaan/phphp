<?php
namespace Phphp\Lexer\Tokenizer\Html5;

use Countable;
use Exception;

class ExceptionHandler implements Countable
{
    /**
     * @var array \Phphp\Contracts\Lexer\Tokenizer\Html5\Token[]
     */
    protected $queue = [];

    /**
     * @param \Exception $exception
     * @return $this
     */
    public function enqueue(Exception $exception): self
    {
        array_push($this->queue, $exception);
        return $this;
    }

    /**
     * @return \Exception
     */
    public function dequeue(): Exception
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