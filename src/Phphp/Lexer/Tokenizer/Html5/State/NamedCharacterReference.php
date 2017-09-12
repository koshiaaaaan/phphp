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
        $tokenizer->setState(new CharacterReferenceEnd());
    }
}
