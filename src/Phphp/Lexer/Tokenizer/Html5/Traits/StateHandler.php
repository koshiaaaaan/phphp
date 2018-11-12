<?php
namespace Phphp\Lexer\Tokenizer\Html5\Traits;


use Phphp\Contracts\Lexer\Tokenizer\Html5\State;

trait StateHandler
{
    /**
     * @var string
     */
    protected $currentState = '';

    /**
     * @var string
     */
    protected $returnState = '';

    /**
     * @return $this
     */
    public function handle(): self
    {
        return $this->setState($this->newState()->handle());
    }

    /**
     * @return \Phphp\Contracts\Lexer\Tokenizer\Html5\State
     */
    protected function newState(): State
    {
        return new $this->currentState($this);
    }

    /**
     * @param string $stateClass
     * @return $this
     */
    public function setState(string $stateClass): self
    {
        $this->currentState = $stateClass;
        return $this;
    }

    /**
     * @param string $stateClass
     * @return $this
     */
    public function setReturnState(string $stateClass): self
    {
        $this->returnState = $stateClass;
        return $this;
    }
}