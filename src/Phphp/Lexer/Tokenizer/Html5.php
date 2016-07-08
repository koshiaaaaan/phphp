<?php
namespace Phphp\Lexer\Tokenizer;

use Phphp\Lexer\Reader\ReaderInterface;
use Phphp\Lexer\Tokenizer\Html5\State;

class Html5 implements TokenizerInterface
{
    private $reader;
    private $state;

    public function __construct(ReaderInterface $reader)
    {
        $this->reader   = $reader;
        $this->setState(new State\Data());
    }

    public function setState(State\StateInterface $state)
    {
        $this->state    = $state;
    }

    public function getNextToken()
    {
        do {
            $token = $this->state->handle($this);
        } while(!$token);
        return $token;
    }

    public function consume()
    {
        return $this->reader->advance();
    }
}