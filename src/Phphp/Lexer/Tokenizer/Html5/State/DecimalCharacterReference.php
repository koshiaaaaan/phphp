<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Tokenizer;
use Phphp\Lexer\Tokenizer\Html5\Character;

/**
 * Class DecimalCharacterReference
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class DecimalCharacterReference extends AbstractState
{
    public function handle()
    {
        $tokenizer = $this->getTokenizer();

        // Consume the next input character:
        $char = $tokenizer->consume();

        $code = $tokenizer->getCharacterReferenceCode();

        if ($this->isAsciiDigit($char)) {
            // Multiply the character reference code by 10. Add a numeric version
            // of the current input character (subtract 0x0030 from the character's
            // code point) to the character reference code.
            $code->multiply(10)
                 ->add(ord($char) - 0x0030);
        } elseif ($char === Character::SEMICOLON) {
            // Switch to the numeric character reference end state.
            $tokenizer->setState(new NumericCharacterReferenceEnd());
        } else {
            // Parse error. Reconsume in the numeric character reference end state.
            $tokenizer->error(Tokenizer::PARSE_ERROR);
            $tokenizer->unconsume();
            $tokenizer->setState(new NumericCharacterReferenceEnd());
        }
    }
}
