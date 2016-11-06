<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Tokenizer;
use Phphp\Lexer\Tokenizer\Html5\Character;

/**
 * Class HexademicalCharacterReferenceState
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class HexademicalCharacterReferenceState extends AbstractState
{
    public function handle()
    {
        $tokenizer = $this->getTokenizer();
        $tmpBuff = $tokenizer->getTemporaryBuffer();

        // Consume the next input character:
        $char = $tokenizer->consume();

        $code = $tokenizer->getCharacterReferenceCode();

        if ($this->isUppercaseAsciiHexDigit($char)) {
            // Multiply the character reference code by 16. Add a numeric
            // version of the current input character as a hexademical digit
            // (subtract 0x0037 from the character's code point) to the
            // character reference code.
            $tokenizer->setCharacterReferenceCode(($code << 4) + (ord($char) - 0x0037));
        } elseif ($this->isLowercaseAsciiHexDigit($char)) {
            // Multiply the character reference code by 16. Add a numeric
            // version of the current input character as a hexademical digit
            // (subtract 0x0057 from the character's code point) to the
            // character reference code.
            $tokenizer->setCharacterReferenceCode(($code << 4) + (ord($char) - 0x0057));
        } elseif ($this->isAsciiDigit($char)) {
            // Multiply the character reference code by 16. Add a numeric
            // version of the current input character (subtract 0x0030 from
            // the character's code point) to the character reference code.
            $tokenizer->setCharacterReferenceCode(($code << 4) + (ord($char) - 0x0030));
        } elseif ($char === Charcter::SEMICOLON) {
            // Switch to the numeric character reference end state.
            $this->setState(new NumericCharacterReferenceEndState());
        } else {
            // Parse error. Reconsume in the numeric character reference end state.
            $tokenizer->error(Tokenizer::PARSE_ERROR);
            $tokenizer->unconsume();
            $tokenizer->setState(new NumericCharacterReferenceEndState());
        }
    }
}
