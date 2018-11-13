<?php
namespace Phphp\Lexer\Tokenizer;

use Phphp\Contracts\Lexer\Scanner;
use Phphp\Contracts\Lexer\Tokenizer;
use Phphp\Contracts\Lexer\Tokenizer\Html5\Token;
use Phphp\Lexer\Tokenizer\Html5\State\Data;
use Phphp\Lexer\Tokenizer\Html5\TokenQueue;
use Phphp\Lexer\Tokenizer\Html5\Traits\Consumer;
use Phphp\Lexer\Tokenizer\Html5\Traits\ErrorManager;
use Phphp\Lexer\Tokenizer\Html5\Traits\StateHandler;

class Html5 implements Tokenizer
{
    use Consumer;
    use StateHandler;
    use ErrorManager;

    /**
     * @var \Phphp\Contracts\Lexer\Scanner
     */
    protected $scanner;

    /**
     * @var \Phphp\Lexer\Tokenizer\Html5\TokenQueue
     */
    protected $tokenQueue;

    /**
     * @param \Phphp\Contracts\Lexer\Scanner $scanner
     */
    public function __construct(Scanner $scanner)
    {
        $this->setState(Data::class);
        $this->scanner = $scanner;
        $this->tokenQueue = new TokenQueue();
    }

    /**
     * @return \Phphp\Contracts\Lexer\Tokenizer\Html5\Token | null
     *
     * TODO: PHP >= v7.1 => use nullable return type
     */
    public function getNextToken()
    {
        return $this->tokenQueue->dequeue();
    }

    /**
     * @param \Phphp\Contracts\Lexer\Tokenizer\Html5\Token $token
     * @return TokenQueue
     */
    public function emitToken(Token $token)
    {
        return $this->tokenQueue->enqueue($token);
    }

    public function setTemporaryBuffer(string $buffer)
    {
        $this->temporaryBuffer->set($buffer);
    }

    public function appendTemporaryBuffer(string $buffer)
    {
        $this->temporaryBuffer->append($buffer);
    }
}