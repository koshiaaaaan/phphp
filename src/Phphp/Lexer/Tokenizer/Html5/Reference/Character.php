<?php
namespace Phphp\Lexer\Tokenizer\Html5\Reference;

class Character
{
    const EOF                   = -1;
    const NULL                  = "\x00";                           // U+0000   "\u{0000}"  "\0"
    const TABULATION            = "\x09";                           // U+0009   "\u{0009}"  "\t"
    const CARRIAGE_RETURN       = "\x0D";                           // U+000D   "\u{000D}"  "\r"
    const LINE_FEED             = "\x0A";                           // U+000A   "\u{000A}"  "\n"
    const FORM_FEED             = "\x0C";                           // U+000C   "\u{000C}"  "\f"
    const SPACE                 = "\x20";                           // U+0020   "\u{0020}"  " "
    const EXCLAMATION_MARK      = "\x21";                           // U+0021   "\u{0021}"  "!"
    const QUOTATION_MARK        = "\x22";                           // U+0022   "\u{0022}"  '"'
    const NUMBER_SIGN           = "\x23";                           // U+0023   "\u{0023}"  "#"
    const AMPERSAND             = "\x26";                           // U+0026   "\u{0026}"  "&"
    const APOSTROPHE            = "\x27";                           // U+0027   "\u{0027}"  "'"
    const HYPHEN_MINUS          = "\x2D";                           // U+002D   "\u{002D}"  "-"
    const SOLIDUS               = "\x2F";                           // U+002F   "\u{002F}"  "/"
    const DIGIT_0               = "\x30";                           // U+0030   "\u{0030}"  "0"
    const DIGIT_9               = "\x39";                           // U+0039   "\u{0039}"  "9"
    const SEMICOLON             = "\x3B";                           // U+003B   "\u{003B}"  ";"
    const LESS_THAN_SIGN        = "\x3C";                           // U+003C   "\u{003C}"  "<"
    const EQUALS_SIGN           = "\x3D";                           // U+003D   "\u{003D}"  "="
    const GREATER_THAN_SIGN     = "\x3E";                           // U+003E   "\u{003E}"  ">"
    const QUESTION_MARK         = "\x3F";                           // U+003F   "\u{003F}"  "?"
    const LATIN_CAPITAL_A       = "\x41";                           // U+0041   "\u{0041}"  "A"
    const LATIN_CAPITAL_F       = "\x46";                           // U+0046   "\u{0046}"  "F"
    const LATIN_CAPITAL_X       = "\x58";                           // U+0058   "\u{0058}"  "X"
    const LATIN_CAPITAL_Z       = "\x5A";                           // U+005A   "\u{005A}"  "Z"
    const GRAVE_ACCENT          = "\x60";                           // U+0060   "\u{0060}"  "`"
    const LATIN_SMALL_A         = "\x61";                           // U+0061   "\u{0061}"  "a"
    const LATIN_SMALL_F         = "\x66";                           // U+0066   "\u{0066}"  "f"
    const LATIN_SMALL_X         = "\x78";                           // U+0078   "\u{0078}"  "x"
    const LATIN_SMALL_Z         = "\x7A";                           // U+007A   "\u{007A}"  "z"
    const BOM                   = "\xEF\xBB\xBF";                   // U+FEFF   "\u{FEFF}"
    const REPLACEMENT_CHARACTER = "\xEF\xBF\xBD";                   // U+FFFD   "\u{FFFD}"

    const SEQUENCE_DASH_DASH    = "\x2D\x2D";                       // --
    const SEQUENCE_DOCTYPE      = "\x44\x4F\x43\x54\x59\x50\x45";   // DOCTYPE
    const SEQUENCE_CDATA_START  = "\x5B\x43\x44\x41\x54\x41\x5B";   // [CDATA[
    const SEQUENCE_CDATA_END    = "\x5D\x5D\x3E";                   // ]]>
    const SEQUENCE_SCRIPT       = "\x73\x63\x72\x69\x70\x74";       // script
    const SEQUENCE_PUBLIC       = "\x50\x55\x42\x4C\x49\x43";       // PUBLIC
    const SEQUENCE_SYSTEM       = "\x53\x59\x53\x54\x45\x4D";       // SYSTEM

    /**
     * @param string $char
     * @return bool
     */
    public static function isAsciiAlphanumeric($char)
    {
        // An ASCII alphanumeric is an ASCII digit or ASCII alpha.
        return static::isAsciiDigit($char) || static::isAsciiAlpha($char);
    }

    /**
     * @param string $char
     * @return bool
     */
    public static function isAsciiDigit($char)
    {
        // An ASCII digit is a code point in the range U+0030 (0) to U+0039 (9), inclusive.
        $ord = ord($char);
        return $ord >= ord(Character::DIGIT_0)
            && $ord <= ord(Character::DIGIT_9);
    }

    /**
     * @param string $char
     * @return bool
     */
    public static function isAsciiAlpha($char)
    {
        // An ASCII alpha is an ASCII upper alpha or ASCII lower alpha.
        return static::isAsciiUpperAlpha($char) || static::isAsciiLowerAlpha($char);
    }

    /**
     * @param string $char
     * @return bool
     */
    public static function isAsciiUpperAlpha($char)
    {
        // An ASCII upper alpha is a code point in the range U+0041 (A) to U+005A (Z), inclusive.
        $ord = ord($char);
        return $ord >= ord(Character::LATIN_CAPITAL_A)
            && $ord <= ord(Character::LATIN_CAPITAL_Z);
    }

    /**
     * @param string $char
     * @return bool
     */
    public static function isAsciiLowerAlpha($char)
    {
        // An ASCII lower alpha is a code point in the range U+0061 (a) to U+007A (z), inclusive.
        $ord = ord($char);
        return $ord >= ord(Character::LATIN_SMALL_A)
            && $ord <= ord(Character::LATIN_SMALL_Z);
    }
}
