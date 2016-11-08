<?php
namespace Phphp\Lexer\Tokenizer\Html5;

class CharacterReferenceCode
{
    const REPLACEMENT_CHARACTER                         = 0xFFFD;  // REPLACEMENT CHARACTER
    const EURO_SIGN                                     = 0x20AC;  // EURO SIGN (€)
    const SINGLE_LOW_9_QUOTATION_MARK                   = 0x201A;  // SINGLE LOW-9 QUOTATION MARK (‚)
    const LATIN_SMALL_LETTER_F_WITH_HOOK                = 0x0192;  // LATIN SMALL LETTER F WITH HOOK (ƒ)
    const DOUBLE_LOW_9_QUOTATION_MARK                   = 0x201E;  // DOUBLE LOW-9 QUOTATION MARK („)
    const HORIZONTAL_ELLIPSIS                           = 0x2026;  // HORIZONTAL ELLIPSIS (…)
    const DAGGER                                        = 0x2020;  // DAGGER (†)
    const DOUBLE_DAGGER                                 = 0x2021;  // DOUBLE DAGGER (‡)
    const MODIFIER_LETTER_CIRCUMFLEX_ACCENT             = 0x02C6;  // MODIFIER LETTER CIRCUMFLEX ACCENT (ˆ)
    const PER_MILLE_SIGN                                = 0x2030;  // PER MILLE SIGN (‰)
    const LATIN_CAPITAL_LETTER_S_WITH_CARON             = 0x0160;  // LATIN CAPITAL LETTER S WITH CARON (Š)
    const SINGLE_LEFT_POINTING_ANGLE_QUOTATION_MARK     = 0x2039;  // SINGLE LEFT-POINTING ANGLE QUOTATION MARK (‹)
    const LATIN_CAPITAL_LIGATURE_OE                     = 0x0152;  // LATIN CAPITAL LIGATURE OE (Œ)
    const LATIN_CAPITAL_LETTER_Z_WITH_CARON             = 0x017D;  // LATIN CAPITAL LETTER Z WITH CARON (Ž)
    const LEFT_SINGLE_QUOTATION_MARK                    = 0x2018;  // LEFT SINGLE QUOTATION MARK (‘)
    const RIGHT_SINGLE_QUOTATION_MARK                   = 0x2019;  // RIGHT SINGLE QUOTATION MARK (’)
    const LEFT_DOUBLE_QUOTATION_MARK                    = 0x201C;  // LEFT DOUBLE QUOTATION MARK (“)
    const RIGHT_DOUBLE_QUOTATION_MARK                   = 0x201D;  // RIGHT DOUBLE QUOTATION MARK (”)
    const BULLET                                        = 0x2022;  // BULLET (•)
    const EN_DASH                                       = 0x2013;  // EN DASH (–)
    const EM_DASH                                       = 0x2014;  // EM DASH (—)
    const SMALL_TILDE                                   = 0x02DC;  // SMALL TILDE (˜)
    const TRADE_MARK_SIGN                               = 0x2122;  // TRADE MARK SIGN (™)
    const LATIN_SMALL_LETTER_S_WITH_CARON               = 0x0161;  // LATIN SMALL LETTER S WITH CARON (š)
    const SINGLE_RIGHT_POINTING_ANGLE_QUOTATION_MARK    = 0x203A;  // SINGLE RIGHT-POINTING ANGLE QUOTATION MARK (›)
    const LATIN_SMALL_LIGATURE_OE                       = 0x0153;  // LATIN SMALL LIGATURE OE (œ)
    const LATIN_SMALL_LETTER_Z_WITH_CARON               = 0x017E;  // LATIN SMALL LETTER Z WITH CARON (ž)
    const LATIN_CAPITAL_LETTER_Y_WITH_DIAERESIS         = 0x0178;  // LATIN CAPITAL LETTER Y WITH DIAERESIS (Ÿ)
    
    private $code = 0;

    /**
     * @param integer $code
     * @return CharacterReferenceCode
     */
    public function set($code)
    {
        $this->code = (int) $code;
        return $this;
    }

    /**
     * @param integer $value
     * @return CharacterReferenceCode
     */
    public function multiply($value)
    {
        $this->code *= $value;
        return $this;
    }

    /**
     * @param integer $value
     * @return CharacterReferenceCode
     */
    public function add($value)
    {
        $this->code += $value;
        return $this;
    }
}