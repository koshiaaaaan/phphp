<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Html5\Character;

/**
 * Class NumericCharacterReference
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class NumericCharacterReference extends AbstractState
{
    public function handle()
    {
        $tokenizer = $this->getTokenizer();

        // Set the character reference code to zero (0).
        $tokenizer->getCharacterReferenceCode()->set(0);

        // Consume the next input character:
        $char = $tokenizer->consume();

        if (
            $char === Character::LATIN_SMALL_X   ||
            $char === Character::LATIN_CAPITAL_X
        ) {
            // Append the current input character to the temporary buffer.
            // Switch to the hexademical character reference start state.
            $tmpBuff = $tokenizer->getTemporaryBuffer();
            $tmpBuff->append($char);
            $tokenizer->setState(new HexademicalCharacterReferenceStart());
        } else {
            // Reconsume in the decimal character reference start state.
            $tokenizer->unconsume();
            $tokenizer->setState(new DecimalCharacterReferenceStart());
        }
    }
}
