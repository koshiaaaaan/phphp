<?php
namespace Phphp\Lexer\Tokenizer_back\Html5\State;

use Phphp\Lexer\Tokenizer_back\Html5 as Tokenizer;
use Phphp\Lexer\Tokenizer_back\Html5\Character;
use LogicException;

abstract class AbstractState implements State
{
    /**
     * @var Tokenizer
     */
    private $tokenizer;

    abstract public function handle();

    /**
     * @param Tokenizer $tokenizer
     * @return $this
     */
    public function setTokenizer(Tokenizer $tokenizer)
    {
        $this->tokenizer = $tokenizer;
        return  $this;
    }

    /**
     * @return Tokenizer
     * @throws LogicException
     */
    public function getTokenizer()
    {
        if (!$this->tokenizer) {
            throw new LogicException('Tokenizerがセットされていません');
        }
        return  $this->tokenizer;
    }

    /**
     * @param int $count
     * @return string
     */
    protected function consume($count = 1)
    {
        return $this->tokenizer->consume($count);
    }

    /**
     * @param  string  $char
     * @return boolean
     */
    protected function isAsciiLetter($char)
    {
        return $this->isUppercaseAsciiLetter($char)
            || $this->isLowercaseAsciiLetter($char);
    }

    /**
     * @param  string  $char
     * @return boolean
     */
    protected function isUppercaseAsciiLetter($char)
    {
        $ord = ord($char);
        return $ord >= ord(Character::LATIN_CAPITAL_A)
            && $ord <= ord(Character::LATIN_CAPITAL_Z);
    }

    /**
     * @param  string  $char
     * @return boolean
     */
    protected function isLowercaseAsciiLetter($char)
    {
        $ord = ord($char);
        return $ord >= ord(Character::LATIN_SMALL_A)
            && $ord <= ord(Character::LATIN_SMALL_Z);
    }

    /**
     * @param  string  $char
     * @return boolean
     */
    protected function isAsciiHexDigit($char)
    {
        return $this->isAsciiDigit($char)
            || $this->isUppercaseAsciiHexDigit($char)
            || $this->isLowercaseAsciiHexDigit($char);
    }

    /**
     * @param  string  $char
     * @return boolean
     */
    protected function isAsciiDigit($char)
    {
        $ord = ord($char);
        return $ord >= ord(Character::DIGIT_0)
            && $ord <= ord(Character::DIGIT_9);
    }

    /**
     * @param  string  $char
     * @return boolean
     */
    protected function isUppercaseAsciiHexDigit($char)
    {
        $ord = ord($char);
        return $ord >= ord(Character::LATIN_CAPITAL_A)
            && $ord <= ord(Character::LATIN_CAPITAL_F);
    }

    /**
     * @param  string  $char
     * @return boolean
     */
    protected function isLowercaseAsciiHexDigit($char)
    {
        $ord = ord($char);
        return $ord >= ord(Character::LATIN_SMALL_A)
            && $ord <= ord(Character::LATIN_SMALL_F);
    }
}
