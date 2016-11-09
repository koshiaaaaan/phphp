<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Html5\CharacterReferenceCode;
use Phphp\Lexer\Tokenizer\Tokenizer;

/**
 * Class NumericCharacterReferenceEndState
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class NumericCharacterReferenceEnd extends AbstractState
{
    public function handle()
    {
        $tokenizer = $this->getTokenizer();

        // Check the character reference code.
        $code   = $tokenizer->getCharacterReferenceCode();

        // If that number is one of the numbers in the first column of the following table, then this is a parse error.
        // Find the row with that number in the first column, and set the character reference code to the number in the
        // second column of that row.
        //
        // https://html.spec.whatwg.org/multipage/syntax.html#numeric-character-reference-end-state
        if ($code->isOverrideTarget()) {
            $tokenizer->error(Tokenizer::PARSE_ERROR);
            $code->override();
        }

        // If the number is in the range 0xD800 to 0xDFFF or is greater than
        // 0x10FFFF, then this is a parse error. Set the character reference
        // code to 0xFFFD.
        else if ($code->isSanitizationTarget()) {
            $tokenizer->error(Tokenizer::PARSE_ERROR);
            $code->sanitize();
        }

        else if ($code->isInvalidTarget()) {
            $tokenizer->error(Tokenizer::PARSE_ERROR);
        }

        // Set the temporary buffer to the empty string. Append the Unicode
        // character with code point equal to the character reference code to
        // the temporary buffer.
        $tmpBuff = $tokenizer->getTemporaryBuffer();
        $tmpBuff->reset();
        // TODO:
        $tmpBuff->append();
    }
}
