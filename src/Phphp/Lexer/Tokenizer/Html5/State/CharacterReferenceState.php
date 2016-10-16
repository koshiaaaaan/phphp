<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Tokenizer;
use Phphp\Lexer\Tokenizer\Html5\Character;
use Phphp\Lexer\Tokenizer\Html5\NamedCharacterReferences;

/**
 * Class CharacterReferenceState
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class CharacterReferenceState extends AbstractState
{
    public function handle()
    {
        $tokenizer = $this->getTokenizer();

        // Set the temporary buffer to the empty string.
        // Append a U+0026 AMPERSAND (&) character to the temporary buffer.
        $tmpBuff = $tokenizer->getTemporaryBuffer();
        $tmpBuff->reset();
        $tmpBuff->append(Character::AMPERSAND);

        // Consume the next input character:
        $char = $tokenizer->consume();

        if (
            $char === Character::TABULATION     ||
            $char === Character::LINE_FEED      ||
            $char === Character::FORM_FEED      ||
            $char === Character::SPACE          ||
            $char === Character::LESS_THAN_SIGN ||
            $char === Character::AMPERSAND      ||
            $char === Character::EOF
        ) {
            // Reconsume in the character reference end state.
            $tokenizer->unconsume();
            $tokenizer->setState(new CharacterReferenceEndState());
        } elseif ($char === Character::NUMBER_SIGN) { // &#...
            // Append the current input character to the temporary buffer.
            // Switch to the numeric character reference state.
            $tmpBuff->append($char);
            $tokenizer->setState(new NumericCharacterReferenceState());
        } else {
            $referencedCodepoints = null;
            $referencedCharacter = null;
            $entityConsumedCount = 0;
            $consumedCount = 1;
            $entity = '';

            $maxlen = NamedCharacterReferences::getNamedCharacterMaxLength();
            $ncrs = NamedCharacterReferences::getNamedCharacterReferences();
            $chars = Character::AMPERSAND . $char;
            while (
                $char !== Character::EOF &&
                strlen($chars) <= $maxlen
            ) {
                if (isset($ncrs[$chars])) {
                    $referencedCodepoints = $ncrs[$chars]['codepoints'];
                    $referencedCharacter = $ncrs[$chars]['characters'];
                    $entity = $chars;
                    $entityConsumedCount = $consumedCount;
                }

                if ($char === Character::SEMICOLON) break;

                $chars .= $char = $tokenizer->consume();
                $consumedCount++;
            }

            if ($referencedCharacter) {
                if (substr($entity, -1) !== Character::SEMICOLON) {
                    $tokenizer->unconsume($consumedCount - $entityConsumedCount);
                    $tokenizer->error(Tokenizer::PARSE_ERROR);
                }
                $tmpBuff->reset();
                $tmpBuff->append($referencedCharacter);
            }

            $tokenizer->unconsume($consumedCount);
            $tokenizer->setState(new CharacterReferenceEndState());
        }
    }
}
