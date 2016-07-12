<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Html5;
use Phphp\Lexer\Tokenizer\Html5\Token;

class AbstractState implements StateInterface
{
    /**
     * @var Html5
     */
    private $tokenizer;

    private $currentToken;

    /**
     * AbstractState constructor.
     * @param Html5 $tokenizer
     */
    public function __construct(Html5 $tokenizer)
    {
        $this->tokenizer    = $tokenizer;
    }

    public function handle()
    {
    }

    /**
     * @return Html5
     */
    protected function getTokenizer()
    {
        return  $this->tokenizer;
    }

    /**
     * Emit a token
     */
    protected function emitToken()
    {
        if ($this->currentToken) {
            $this->tokenizer->addTokenQueue($this->currentToken);
            $this->currentToken = null;
        }
    }

    /**
     * Emit a character token.
     * @param string $char
     */
    protected function emitCharacterToken($char)
    {
        if (!$this->currentToken) {
            $this->currentToken = new Token\Character();
        }
        if ($this->currentToken instanceof Token\Character) {
            $this->currentToken->appendCharacter($char);
        } else {
            $this->emitToken();
        }
    }

    /**
     * Emit an end-of-file token.
     */
    protected function emitEofToken()
    {
        $this->emitToken();
        $this->currentToken = new Token\Eof();
        $this->emitToken();
    }
}