<?php
namespace Phphp\Lexer\Tokenizer;

use Phphp\Lexer\Reader\ReaderInterface;
use Phphp\Lexer\Tokenizer\Html5\State;
use Phphp\Lexer\Tokenizer\Html5\Token\TokenInterface;

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
     * @var State\StateInterface
     */
    private $state;

    /**
     * @var State\StateInterface[]
     */
    private $stateCache = [];

    /**
     * @var TokenInterface[]
     */
    private $tokenQueue = [];

    /**
     * Html5 constructor.
     * @param ReaderInterface $reader
     */
    public function __construct(ReaderInterface $reader)
    {
        $this->reader   = $reader;
        $this->setState('Data');
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $class  = 'Phphp\\Lexer\\Tokenizer\\Html5\\State\\' . $state;
        if (isset($this->stateCache[$class])) {
            $state  = $this->stateCache[$class];
        } else {
            $state  = new $class($this);
            $this->stateCache[$class]   = $state;
        }
        $this->state    = $state;
    }

    /**
     * @return TokenInterface
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
     * @param TokenInterface $token
     */
    public function addTokenQueue(TokenInterface $token)
    {
        $this->tokenQueue[] = $token;
    }

    /**
     * @return string
     */
    public function consume()
    {
        return $this->reader->advance();
    }

    /**
     * @param integer $type
     */
    public function error($type)
    {
    }
}