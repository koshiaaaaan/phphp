<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Html5\Character;

/**
 * Class NumericCharacterReferenceState
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class NumericCharacterReferenceState extends AbstractState
{
    public function handle()
    {
        $tokenizer = $this->getTokenizer();
        $tokenizer->setCharacterReferenceCode(0);
        $char = $tokenizer->consume();

        if (Character::LATIN_SMALL_X || Character::LATIN_CAPITAL_X) {
            // Append the current input character to the temporary buffer.
            // Switch to the hexademical character reference start state.
            $tmpBuff = $tokenizer->getTemporaryBuffer();
            $tmpBuff->append($char);
            $tokenizer->setState(new HexademicalCharacterReferenceStartState());
        } else {
            // Reconsume in the decimal character reference start state.
            $tokenizer->unconsume();
            $tokenizer->setState(new DecimalCharacterReferenceStartState());
        }
    }
}