<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Html5 as Tokenizer;

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
        $this->tokenizer    = $tokenizer;
        return  $this;
    }

    /**
     * @return Tokenizer
     */
    public function getTokenizer()
    {
        return  $this->tokenizer;
    }

    /**
     * @param  string  $char
     * @return boolean
     */
    protected function isAsciiHexDigit($char)
    {
        return $this->isDigit($char)                   ||
                $this->isUppercaseAsciiHexDigit($char)  ||
                $this->isLowercaseAsciiHexDigit($char);
    }

    /**
     * @param  string  $char
     * @return boolean
     */
    protected function isDigit($char)
    {
        $ord = ord($char);
        return $ord >= ord(Tokenizer\Character::DIGIT_0) &&
                $ord <= ord(Tokenizer\Character::DIGIT_9);
    }

    /**
     * @param  string  $char
     * @return boolean
     */
    protected function isUppercaseAsciiHexDigit($char)
    {
        $ord = ord($char);
        return $ord >= ord(Tokenizer\Character::LATIN_CAPITAL_A) &&
                $ord <= ord(Tokenizer\Character::LATIN_CAPITAL_F);
    }

    /**
     * @param  string  $char
     * @return boolean
     */
    protected function isLowercaseAsciiHexDigit($char)
    {
        $ord = ord($char);
        return $ord >= ord(Tokenizer\Character::LATIN_SMALL_A) &&
                $ord <= ord(Tokenizer\Character::LATIN_SMALL_F);
    }

    /**
     * @param  integer $code
     * @param  integer $min
     * @param  integer $max
     * @return boolean
     */
    protected function inRange($code, $min, $max)
    {
        return ($code >= $min && $code < $max);
    }
}
