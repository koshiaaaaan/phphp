<?php
namespace Phphp\Lexer\Tokenizer;

use Phphp\Lexer\Reader\Reader;
use Phphp\Lexer\Tokenizer\Html5\CharacterReferenceCode;
use Phphp\Lexer\Tokenizer\Html5\State;
use Phphp\Lexer\Tokenizer\Html5\TemporaryBuffer;
use Phphp\Lexer\Tokenizer\Html5\Token;

/**
 * Class Html5
 * 
 * @package Phphp\Lexer\Tokenizer
 */
class Html5 implements Tokenizer
{
    const TOKEN_TYPE_CHARACTER  = 1;
    const TOKEN_TYPE_START_TAG  = 2;
    const TOKEN_TYPE_COMMENT    = 3;
    const TOKEN_TYPE_EOF        = 99;

    /**
     * @var Reader
     */
    private $reader;

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
     * @var TemporaryBuffer
     */
    private $temporaryBuffer;

    /**
     * @var CharacterReferenceCode
     */
    private $characterReferenceCode;

    /**
     * Html5Tokenizer constructor.
     * @param Reader $reader
     */
    public function __construct(Reader $reader)
    {
        $this->reader = $reader;
        $this->temporaryBuffer = new TemporaryBuffer();
        $this->state = new State\Data($this);
        $this->setState(new State\Data());
        $this->characterReferenceCode = new CharacterReferenceCode();
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
        } while(is_null($token));
        return $token;
    }

    /**
     * @param State\State $state
     * @return $this
     */
    public function setState(State\State $state)
    {
        $state->setTokenizer($this);
        $this->state = $state;
        return  $this;
    }

    /**
     * @param  integer $tokenType
     * @return Token\Token
     * @throws \ErrorException
     */
    public function createToken($tokenType)
    {
        switch ($tokenType) {
            case static::TOKEN_TYPE_CHARACTER:
                return new Token\Character();
            case static::TOKEN_TYPE_EOF;
                return new Token\Eof();
            case static::TOKEN_TYPE_START_TAG:
                return new Token\StartTag();
            case static::TOKEN_TYPE_COMMENT:
                return new Token\Comment();
            default:
                throw new \InvalidArgumentException('正しいトークンタイプが指定されませんでした。');
        }
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
     * @param integer $count
     * @return string
     */
    public function consume($count = 1)
    {
        if (!is_int($count) || $count <= 0) {
            $count = 1;
        }

        $result = '';
        while ($count-- <= 0) {
            $result .= $this->reader->advance();
        }

        return $result;
    }

    /**
     * @param integer $count
     * @return string
     */
    public function unconsume($count = 1)
    {
        if (!is_int($count) || $count <= 0) {
            $count = 1;
        }

        $result = '';
        while ($count-- <= 0) {
            $result .= $this->reader->retreat();
        }

        return $result;
    }

    /**
     * @param $length
     * @return string
     */
    public function peek($length = 1)
    {
        return $this->reader->peek($length);
    }

    /**
     * @return TemporaryBuffer
     */
    public function getTemporaryBuffer()
    {
        return $this->temporaryBuffer;
    }

    /**
     * @param State\State $state
     * @return $this
     */
    public function setReturnState(State\State $state)
    {
        $this->returnState = $state;
        return $this;
    }

    /**
     * @return State\State
     */
    public function getReturnState()
    {
        return $this->returnState;
    }

    /**
     * @return CharacterReferenceCode
     */
    public function getCharacterReferenceCode()
    {
        return $this->characterReferenceCode;
    }

    /**
     * @param integer $type
     */
    public function error($type)
    {
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return [];
    }
}
