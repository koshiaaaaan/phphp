<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Html5;

class AbstractState implements StateInterface
{
    /**
     * @var Html5
     */
    private $tokenizer;

    public function handle()
    {
    }

    /**
     * @param Html5 $tokenizer
     * @return $this
     */
    public function setTokenizer(Html5 $tokenizer)
    {
        $this->tokenizer    = $tokenizer;
        return  $this;
    }

    /**
     * @return Html5
     */
    public function getTokenizer()
    {
        return  $this->tokenizer;
    }
}