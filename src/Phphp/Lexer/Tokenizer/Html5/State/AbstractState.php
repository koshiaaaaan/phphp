<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Html5Tokenizer;

class AbstractState implements State
{
    /**
     * @var Html5Tokenizer
     */
    private $tokenizer;

    public function handle()
    {
    }

    /**
     * @param Html5Tokenizer $tokenizer
     * @return $this
     */
    public function setTokenizer(Html5Tokenizer $tokenizer)
    {
        $this->tokenizer    = $tokenizer;
        return  $this;
    }

    /**
     * @return Html5Tokenizer
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
        return  $this->isDigit($char)                   ||
                $this->isUppercaseAsciiHexDigit($char)  ||
                $this->isLowercaseAsciiHexDigit($char);
    }

    /**
     * @param  string  $char
     * @return boolean
     */
    protected function isDigit($char)
    {
        return  $char >= Character::DIGIT_0 &&
                $char <= Character::DIGIT_9;
    }

    /**
     * @param  string  $char
     * @return boolean
     */
    protected function isUppercaseAsciiHexDigit($char)
    {
        return  $char >= Character::LATIN_CAPITAL_A &&
                $char <= Character::LATIN_CAPITAL_F;
    }

    /**
     * @param  string  $char
     * @return boolean
     */
    protected function isLowercaseAsciiHexDigit($char)
    {
        return  $char >= Character::LATIN_SMALL_A &&
                $char <= Character::LATIN_SMALL_F;
    }
}