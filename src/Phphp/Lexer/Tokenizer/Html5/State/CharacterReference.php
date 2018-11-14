<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Character;

class CharacterReference extends State
{
    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        // Set the temporary buffer to the empty string.
        // Append a U+0026 AMPERSAND (&) character to the temporary buffer.
        $this->setTemporaryBuffer(Character::AMPERSAND);
        // Consume the next input character:
        $char = $this->consume();

        // ASCII alphanumeric
        if (Character::isAsciiAlphaNumeric($char)) {
            // Reconsume in the named character reference state.
            $this->unconsume();
            return NamedCharacterReference::class;
        }
        // U+0023 NUMBER SIGN (#)
        elseif (Character::isNumberSign($char)) {
            // Append the current input character to the temporary buffer.
            $this->appendTemporaryBuffer($char);
            // Switch to the numeric character reference state.
            return NumericCharacterReference::class;
        }
        // Anything else
        else {
            // Flush code points consumed as a character reference.
            // Reconsume in the return state.
            $this->unconsume();
            return $this->getReturnState();
        }
    }
}