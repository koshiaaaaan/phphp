<?php
namespace Phphp\Lexer\Tokenizer;

use Phphp\Contracts\Lexer\Scanner;
use Phphp\Contracts\Lexer\Tokenizer;
use Phphp\Contracts\Lexer\Tokenizer\Html5\Token;
use Phphp\Lexer\Tokenizer\Html5\State\Data;
use Phphp\Lexer\Tokenizer\Html5\Support\Consumer;
use Phphp\Lexer\Tokenizer\Html5\Support\ErrorManager;
use Phphp\Lexer\Tokenizer\Html5\Support\StateHandler;
use Phphp\Lexer\Tokenizer\Html5\Support\TemporaryBuffer;

class Html5 implements Tokenizer
{
    use Consumer;
    use StateHandler;
    use ErrorManager;
    use TemporaryBuffer;

    /**
     * @var \Phphp\Contracts\Lexer\Scanner
     */
    protected $scanner;

    /**
     * @var \Phphp\Contracts\Lexer\Tokenizer\Html5\Token[]
     */
    protected $tokenQueue = [];

    /**
     * @param \Phphp\Contracts\Lexer\Scanner $scanner
     */
    public function __construct(Scanner $scanner)
    {
        $this->setState(Data::class);
        $this->scanner = $scanner;
    }

    /**
     * Dequeue token queue
     *
     * @return \Phphp\Contracts\Lexer\Tokenizer\Html5\Token | null
     *
     * TODO: PHP >= v7.1 => use nullable return type
     */
    public function getNextToken()
    {
        return array_shift($this->tokenQueue);
    }

    /**
     * Enqueue token queue
     * @param \Phphp\Contracts\Lexer\Tokenizer\Html5\Token $token
     * @return $this
     */
    public function emitToken(Token $token): self
    {
        $this->tokenQueue[] = $token;
        return $this;
    }
}