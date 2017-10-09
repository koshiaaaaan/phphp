<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Html5 as Tokenizer;
use Phphp\Lexer\Tokenizer\Html5\Reference\Character;
use Phphp\Lexer\Tokenizer\Html5\NamedCharacterReferences;

/**
 * Class NamedCharacterReference
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class NamedCharacterReference extends AbstractState
{
    public function handle()
    {
        // Consume the maximum number of characters possible, with the consumed characters matching one of the
        // identifiers in the first column of the named character references table (in a case-sensitive manner).
        // Append each character to the temporary buffer when it's consumed.

        $maxlen = Character::getNamedCharacterReferenceMaxLength();

        $char = $tokenizer->consume();

        $entity = null;
        if (!Character::isEof($char)) {
            $chars = Character::AMPERSAND . $char;
            while (strlen($chars) <= $maxlen) {
                $entity = Character::getNamedCharacterReference($chars);
                $char = $tokenizer->consume();
                if (Character::isEof($char)) break;
                $chars .= $char;
            }
        }

        // If there is a match
        if (!is_null($entity)) {

            // If the character reference was consumed as part of an attribute,
            // and the last character matched is not a U+003B SEMICOLON
            // character (;), and the next input character is either
            // a U+003D EQUALS SIGN character (=) or an ASCII alphanumeric,
            // then, for historical reasons, flush code points consumed as a
            // character reference and switch to the return state.

            $returnState = $tokenizer->getReturnState();
            $nextInputCharacter = $tokenizer->getNextInputCharacter();
            $lastCharacter = substr($chars, -1);
            if (
                (
                    $returnState instanceof AttributeValueDoubleQuoted ||
                    $returnState instanceof AttributeValueSingleQuoted ||
                    $returnState instanceof AttributeValueUnquoted
                ) &&
                $lastCharacter === Character::SEMICOLON &&
                (
                    $nextInputCharacter === Character::EQUALS_SIGN ||
                    Character::isAsciiAlphanumeric($nextInputCharacter)
                )
            ) {
                // TODO: flush code points consumed as a character reference and switch to the return state.
                $tokenizer->setState($returnState);
            } else {
                if ($lastCharacter !== Character::SEMICOLON) {
                    // If the last character matched is not a U+003B SEMICOLON character (;),
                    // then this is a missing-semicolon-after-character-reference parse error.
                    $tokenizer->parseError(Tokenizer::MISSING_SEMICOLON_AFTER_CHARACTER_REFERENCE);
                }
                // Set the temporary buffer to the empty string. Append one or
                // two characters corresponding to the character reference name
                // (as given by the second column of the named character
                // references table) to the temporary buffer.
                $tmpBuff = $tokenizer->getTemporaryBuffer();
                $tmpBuff->reset();
                // TODO: Append
                $tmpBuff->append();

                // Flush code points consumed as a character reference. Switch to the return state.
                // TODO: Flush code points consumed as a character reference.
            }

        } else {
            // Flush code points consumed as a character reference. Switch to the ambiguous ampersand state.
            // TODO:
        }

        // $referencedCodepoints = null;
        // $referencedCharacter = null;
        // $entityConsumedCount = 0;
        // $consumedCount = 1;
        // $entity = '';
        //
        // $maxlen = NamedCharacterReferences::getNamedCharacterMaxLength();
        // $ncrs = NamedCharacterReferences::getNamedCharacterReferences();
        // $chars = Character::AMPERSAND . $char;
        // while (
        //     $char !== Character::EOF &&
        //     strlen($chars) <= $maxlen
        // ) {
        //     if (isset($ncrs[$chars])) {
        //         $referencedCodepoints = $ncrs[$chars]['codepoints'];
        //         $referencedCharacter = $ncrs[$chars]['characters'];
        //         $entity = $chars;
        //         $entityConsumedCount = $consumedCount;
        //     }
        //
        //     if ($char === Character::SEMICOLON) break;
        //
        //     $chars .= $char = $tokenizer->consume();
        //     $consumedCount++;
        // }
        //
        // if ($referencedCharacter) {
        //     if (substr($entity, -1) !== Character::SEMICOLON) {
        //         $tokenizer->unconsume($consumedCount - $entityConsumedCount);
        //         $tokenizer->error(Tokenizer::PARSE_ERROR);
        //     }
        //     $tmpBuff->reset();
        //     $tmpBuff->append($referencedCharacter);
        // }
        //
        // $tokenizer->unconsume($consumedCount);
        // $tokenizer->setState(new CharacterReferenceEnd());
    }
}
