<?php
namespace Phphp\Lexer\Tokenizer\Html5;

use Phphp\Contracts\Lexer\Scanner;
use Phphp\Contracts\Lexer\Tokenizer\Html5\State;
use Phphp\Lexer\Tokenizer\Html5\State\Data;
use Phphp\Lexer\Tokenizer\Html5\Traits\Consumer;
use Phphp\Lexer\Tokenizer\Html5\Traits\StateHandler;

class TokenizeManager
{
    use Consumer;
    use StateHandler;

    /**
     * @var \Phphp\Contracts\Lexer\Scanner
     */
    protected $scanner;

    /**
     * @var \Phphp\Lexer\Tokenizer\Html5\TokenQueue
     */
    protected $tokenQueue;

    /**
     * StateManager constructor.
     * @param \Phphp\Contracts\Lexer\Scanner $scanner
     */
    public function __construct(Scanner $scanner)
    {
        $this->setState(Data::class);
        $this->scanner = $scanner;
        $this->tokenQueue = new TokenQueue();
    }

    public function getTokenQueue()
    {
        return $this->tokenQueue;
    }
}