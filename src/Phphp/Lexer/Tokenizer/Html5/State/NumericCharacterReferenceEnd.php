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
    private $characterReferenceCodeMap  = [
        0x00    => CharacterReferenceCode::REPLACEMENT_CHARACTER,  // REPLACEMENT CHARACTER
        0x80    => CharacterReferenceCode::EURO_SIGN,  // EURO SIGN (€)
        0x82    => CharacterReferenceCode::SINGLE_LOW_9_QUOTATION_MARK,  // SINGLE LOW-9 QUOTATION MARK (‚)
        0x83    => CharacterReferenceCode::LATIN_SMALL_LETTER_F_WITH_HOOK,  // LATIN SMALL LETTER F WITH HOOK (ƒ)
        0x84    => CharacterReferenceCode::DOUBLE_LOW_9_QUOTATION_MARK,  // DOUBLE LOW-9 QUOTATION MARK („)
        0x85    => CharacterReferenceCode::HORIZONTAL_ELLIPSIS,  // HORIZONTAL ELLIPSIS (…)
        0x86    => CharacterReferenceCode::DAGGER,  // DAGGER (†)
        0x87    => CharacterReferenceCode::DOUBLE_DAGGER,  // DOUBLE DAGGER (‡)
        0x88    => CharacterReferenceCode::MODIFIER_LETTER_CIRCUMFLEX_ACCENT,  // MODIFIER LETTER CIRCUMFLEX ACCENT (ˆ)
        0x89    => CharacterReferenceCode::PER_MILLE_SIGN,  // PER MILLE SIGN (‰)
        0x8A    => CharacterReferenceCode::LATIN_CAPITAL_LETTER_S_WITH_CARON,  // LATIN CAPITAL LETTER S WITH CARON (Š)
        0x8B    => CharacterReferenceCode::SINGLE_LEFT_POINTING_ANGLE_QUOTATION_MARK,  // SINGLE LEFT-POINTING ANGLE QUOTATION MARK (‹)
        0x8C    => CharacterReferenceCode::LATIN_CAPITAL_LIGATURE_OE,  // LATIN CAPITAL LIGATURE OE (Œ)
        0x8E    => CharacterReferenceCode::LATIN_CAPITAL_LETTER_Z_WITH_CARON,  // LATIN CAPITAL LETTER Z WITH CARON (Ž)
        0x91    => CharacterReferenceCode::LEFT_SINGLE_QUOTATION_MARK,  // LEFT SINGLE QUOTATION MARK (‘)
        0x92    => CharacterReferenceCode::RIGHT_SINGLE_QUOTATION_MARK,  // RIGHT SINGLE QUOTATION MARK (’)
        0x93    => CharacterReferenceCode::LEFT_DOUBLE_QUOTATION_MARK,  // LEFT DOUBLE QUOTATION MARK (“)
        0x94    => CharacterReferenceCode::RIGHT_DOUBLE_QUOTATION_MARK,  // RIGHT DOUBLE QUOTATION MARK (”)
        0x95    => CharacterReferenceCode::BULLET,  // BULLET (•)
        0x96    => CharacterReferenceCode::EN_DASH,  // EN DASH (–)
        0x97    => CharacterReferenceCode::EM_DASH,  // EM DASH (—)
        0x98    => CharacterReferenceCode::SMALL_TILDE,  // SMALL TILDE (˜)
        0x99    => CharacterReferenceCode::TRADE_MARK_SIGN,  // TRADE MARK SIGN (™)
        0x9A    => CharacterReferenceCode::LATIN_SMALL_LETTER_S_WITH_CARON,  // LATIN SMALL LETTER S WITH CARON (š)
        0x9B    => CharacterReferenceCode::SINGLE_RIGHT_POINTING_ANGLE_QUOTATION_MARK,  // SINGLE RIGHT-POINTING ANGLE QUOTATION MARK (›)
        0x9C    => CharacterReferenceCode::LATIN_SMALL_LIGATURE_OE,  // LATIN SMALL LIGATURE OE (œ)
        0x9E    => CharacterReferenceCode::LATIN_SMALL_LETTER_Z_WITH_CARON,  // LATIN SMALL LETTER Z WITH CARON (ž)
        0x9F    => CharacterReferenceCode::LATIN_CAPITAL_LETTER_Y_WITH_DIAERESIS,  // LATIN CAPITAL LETTER Y WITH DIAERESIS (Ÿ)
    ];

    public function handle()
    {
        $tokenizer = $this->getTokenizer();

        // Check the character reference code.
        $code   = $tokenizer->getCharacterReferenceCode();

        if (in_array($code, array_keys($this->characterReferenceCodeMap), true)) {
            $tokenizer->error(Tokenizer::PARSE_ERROR);
            $code = $this->characterReferenceCodeMap[$code];
            $tokenizer->setCharacterReferenceCode($code);
        }

        // If the number is in the range 0xD800 to 0xDFFF or is greater than
        // 0x10FFFF, then this is a parse error. Set the character reference
        // code to 0xFFFD.
        else if ($this->inRange($code, 0xD800, 0xDFFF) || $code > 0x10FFFF) {
            $tokenizer->error(Tokenizer::PARSE_ERROR);
            $tokenizer->setCharacterReferenceCode($code);
        }

        else if (
            $this->inRange($code, 0x0001, 0x0008) ||
            $this->inRange($code, 0x000D, 0x001F) ||
            $this->inRange($code, 0x007F, 0x009F) ||
            $this->inRange($code, 0xFDD0, 0xFDEF) ||
            in_array($code, [
                0x000B, 0xFFFE, 0xFFFF, 0x1FFFE, 0x1FFFF, 0x2FFFE, 0x2FFFF,
                0x3FFFE, 0x3FFFF, 0x4FFFE, 0x4FFFF, 0x5FFFE, 0x5FFFF, 0x6FFFE,
                0x6FFFF, 0x7FFFE, 0x7FFFF, 0x8FFFE, 0x8FFFF, 0x9FFFE, 0x9FFFF,
                0xAFFFE, 0xAFFFF, 0xBFFFE, 0xBFFFF, 0xCFFFE, 0xCFFFF, 0xDFFFE,
                0xDFFFF, 0xEFFFE, 0xEFFFF, 0xFFFFE, 0xFFFFF, 0x10FFFE, 0x10FFFF
            ], true)
        ) {
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
