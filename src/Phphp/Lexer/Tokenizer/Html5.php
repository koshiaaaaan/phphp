<?php
namespace Phphp\Lexer\Tokenizer;

use Phphp\Lexer\Reader\ReaderInterface;
use Phphp\Lexer\Tokenizer\Html5\State;
use Phphp\Lexer\Tokenizer\Html5\TemporaryBuffer;
use Phphp\Lexer\Tokenizer\Html5\Token;

/**
 * Class Html5
 * @package Phphp\Lexer\Tokenizer
 */
class Html5 implements TokenizerInterface
{
    /**
     * @var ReaderInterface
     */
    private $reader;

    /**
     * @var TemporaryBuffer
     */
    private $temporaryBuffer;

    /**
     * @var State\StateInterface
     */
    private $state;

    /**
     * @var State\StateInterface
     */
    private $returnState;

    /**
     * @var Token\TokenInterface[]
     */
    private $tokenQueue = [];

    /**
     * Html5 constructor.
     * @param ReaderInterface $reader
     */
    public function __construct(ReaderInterface $reader)
    {
        $this->reader   = $reader;
        $this->temporaryBuffer  = new TemporaryBuffer();
        $this->setState(new State\Data());
    }

    /**
     * @param State\StateInterface $state
     * @return $this
     */
    public function setState(State\StateInterface $state)
    {
        $state->setTokenizer($this);
        $this->state    = $state;
        return  $this;
    }

    /**
     * @return Token\TokenInterface
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
     * @param Token\TokenInterface $token
     */
    public function emitToken(Token\TokenInterface $token)
    {
        $this->tokenQueue[] = $token;
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
     * @param State\StateInterface $state
     */
    public function setReturnState(State\StateInterface $state)
    {
        $this->returnState  = $state;
    }

    /**
     * @return State\StateInterface
     */
    public function getReturnState()
    {
        return  $this->returnState;
    }

    /**
     * @param integer $type
     */
    public function error($type)
    {
    }
}