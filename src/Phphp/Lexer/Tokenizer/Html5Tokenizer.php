<?php
namespace Phphp\Lexer\Tokenizer;

use Phphp\Lexer\Reader\Reader;
use Phphp\Lexer\Tokenizer\Html5\State;
use Phphp\Lexer\Tokenizer\Html5\TemporaryBuffer;
use Phphp\Lexer\Tokenizer\Html5\Token;

/**
 * Class Html5Tokenizer
 * @package Phphp\Lexer\Tokenizer
 */
class Html5Tokenizer implements Tokenizer
{
    /**
     * @var Reader
     */
    private $reader;

    /**
     * @var TemporaryBuffer
     */
    private $temporaryBuffer;

    /**
     * @var State\State
     */
    private $state;

    /**
     * @var State\State
     */
    private $returnState;

    /**
     * @var Token\Token[]
     */
    private $tokenQueue = [];

    /**
     * Html5Tokenizer constructor.
     * @param Reader $reader
     */
    public function __construct(Reader $reader)
    {
        $this->reader   = $reader;
        $this->temporaryBuffer  = new TemporaryBuffer();
        $this->setState(new State\DataState());
    }

    /**
     * @param State\State $state
     * @return $this
     */
    public function setState(State\State $state)
    {
        $state->setTokenizer($this);
        $this->state    = $state;
        return  $this;
    }

    /**
     * @return Token\Token
     */
    public function getNextToken()
    {
        do {
            $token  = null;
            if (count($this->tokenQueue) > 0) {
                $token = array_shift($this->tokenQueue);
            } else {
                $this->state->handle();
            }
        } while(!$token);
        return $token;
    }

    /**
     * @param Token\Token $token
     * @return $this
     */
    public function emitToken(Token\Token $token)
    {
        $this->tokenQueue[] = $token;
        return $this;
    }

    /**
     * @return string
     */
    public function consume()
    {
        return  $this->reader->advance();
    }

    /**
     * @param integer $count
     */
    public function unconsume($count = null)
    {
        if (is_int($count) && $count > 0) {
            while ($count-- <= 0) {
                $this->reader->retreat();
            }
        } else {
            $this->reader->retreat();
        }
    }

    /**
     * @return TemporaryBuffer
     */
    public function getTemporaryBuffer()
    {
        return  $this->temporaryBuffer;
    }

    /**
     * @param State\State $state
     * @return $this
     */
    public function setReturnState(State\State $state)
    {
        $this->returnState  = $state;
        return $this;
    }

    /**
     * @return State\State
     */
    public function getReturnState()
    {
        return  $this->returnState;
    }

    /**
     * @param integer $value
     * @return $this
     */
    public function setCharacterReferenceCode($value)
    {
        $this->characterReferenceCode = $value;
        return  $this;
    }

    /**
     * @param integer $type
     */
    public function error($type)
    {
    }
}