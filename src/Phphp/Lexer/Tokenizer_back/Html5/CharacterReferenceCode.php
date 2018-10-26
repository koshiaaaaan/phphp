<?php
namespace Phphp\Lexer\Tokenizer_back\Html5;

class CharacterReferenceCode
{
    private $overrideTable = [
        0x00    => 0xFFFD,  // REPLACEMENT CHARACTER
        0x80    => 0x20AC,  // EURO SIGN (€)
        0x82    => 0x201A,  // SINGLE LOW-9 QUOTATION MARK (‚)
        0x83    => 0x0192,  // LATIN SMALL LETTER F WITH HOOK (ƒ)
        0x84    => 0x201E,  // DOUBLE LOW-9 QUOTATION MARK („)
        0x85    => 0x2026,  // HORIZONTAL ELLIPSIS (…)
        0x86    => 0x2020,  // DAGGER (†)
        0x87    => 0x2021,  // DOUBLE DAGGER (‡)
        0x88    => 0x02C6,  // MODIFIER LETTER CIRCUMFLEX ACCENT (ˆ)
        0x89    => 0x2030,  // PER MILLE SIGN (‰)
        0x8A    => 0x0160,  // LATIN CAPITAL LETTER S WITH CARON (Š)
        0x8B    => 0x2039,  // SINGLE LEFT-POINTING ANGLE QUOTATION MARK (‹)
        0x8C    => 0x0152,  // LATIN CAPITAL LIGATURE OE (Œ)
        0x8E    => 0x017D,  // LATIN CAPITAL LETTER Z WITH CARON (Ž)
        0x91    => 0x2018,  // LEFT SINGLE QUOTATION MARK (‘)
        0x92    => 0x2019,  // RIGHT SINGLE QUOTATION MARK (’)
        0x93    => 0x201C,  // LEFT DOUBLE QUOTATION MARK (“)
        0x94    => 0x201D,  // RIGHT DOUBLE QUOTATION MARK (”)
        0x95    => 0x2022,  // BULLET (•)
        0x96    => 0x2013,  // EN DASH (–)
        0x97    => 0x2014,  // EM DASH (—)
        0x98    => 0x02DC,  // SMALL TILDE (˜)
        0x99    => 0x2122,  // TRADE MARK SIGN (™)
        0x9A    => 0x0161,  // LATIN SMALL LETTER S WITH CARON (š)
        0x9B    => 0x203A,  // SINGLE RIGHT-POINTING ANGLE QUOTATION MARK (›)
        0x9C    => 0x0153,  // LATIN SMALL LIGATURE OE (œ)
        0x9E    => 0x017E,  // LATIN SMALL LETTER Z WITH CARON (ž)
        0x9F    => 0x0178,  // LATIN CAPITAL LETTER Y WITH DIAERESIS (Ÿ)
    ];

    private $sanitizeCode = 0xFFFD;

    private $code = 0;

    /**
     * @return boolean
     */
    public function isOverrideTarget()
    {
        return in_array($this->code, array_keys($this->overrideTable), true);
    }

    /**
     * @return CharacterReferenceCode
     * @throws \ErrorException
     */
    public function override()
    {
        if (!$this->isOverrideTarget()) {
            throw new \ErrorException(sprintf('Does not in override table. `%d`', $this->code));
        }
        $this->code = $this->overrideTable[$this->code];
        return $this;
    }

    /**
     * @return boolean
     */
    public function isSanitizationTarget()
    {
        return ($this->code >= 0xD800 && $this->code <= 0xDFFF) || $this->code > 0x10FFFF;
    }

    /**
     * @return CharacterReferenceCode
     * @throws \ErrorException
     */
    public function sanitize()
    {
        if (!$this->isSanitizationTarget()) {
            throw new \ErrorException(sprintf('Larger than 0x10FFFD. or High and low surrogate halves are invalid unicode codepoints (U+D800 through U+DFFF, is U+%04X).', $cp));
        }
        $this->code = $this->sanitizeCode;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isInvalidTarget()
    {
        return ($this->code >= 0x0001 && $this->code <= 0x0008) ||
                ($this->code >= 0x000D && $this->code <= 0x001F) ||
                ($this->code >= 0x007F && $this->code <= 0x009F) ||
                ($this->code >= 0xFDD0 && $this->code <= 0xFDEF) ||
                in_array($this->code, [
                    0x000B, 0xFFFE,  0xFFFF,  0x1FFFE, 0x1FFFF, 0x2FFFE, 0x2FFFF,
                    0x3FFFE, 0x3FFFF, 0x4FFFE, 0x4FFFF, 0x5FFFE, 0x5FFFF, 0x6FFFE,
                    0x6FFFF, 0x7FFFE, 0x7FFFF, 0x8FFFE, 0x8FFFF, 0x9FFFE, 0x9FFFF,
                    0xAFFFE, 0xAFFFF, 0xBFFFE, 0xBFFFF, 0xCFFFE, 0xCFFFF, 0xDFFFE,
                    0xDFFFF, 0xEFFFE, 0xEFFFF, 0xFFFFE, 0xFFFFF, 0x10FFFE, 0x10FFFF
                ], true);
    }

    /**
     * @param integer $code
     * @return CharacterReferenceCode
     */
    public function set($code)
    {
        $code = (int) $code;
        $this->code = ($code >= 0) ? $code : 0;
        return $this;
    }

    /**
     * @return integer
     */
    public function get()
    {
        return $this->code;
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

    /**
     * @return string
     */
    public function toString()
    {
        $cp = $this->code;
        if ($this->isOverrideTarget() || $this->isSanitizationTarget()) {
            return '';
        }
        if ($cp <= 0x7F) {
            return  chr($cp);
        }
        if ($cp <= 0x7FF) {
            return  chr(0xC0 | $cp >> 6 & 0x1F)
                  . chr(0x80 | $cp & 0x3F);
        }
        if ($cp <= 0xFFFF) {
            return  chr(0xE0 | $cp >> 12 & 0xF)
                  . chr(0x80 | $cp >> 6 & 0x3F)
                  . chr(0x80 | $cp & 0x3F);
        }
        return  chr(0xF0 | $cp >> 18 & 0x7)
              . chr(0x80 | $cp >> 12 & 0x3F)
              . chr(0x80 | $cp >> 6 & 0x3F)
              . chr(0x80 | $cp & 0x3F);
    }
}
