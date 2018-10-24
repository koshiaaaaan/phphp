<?php
namespace Phphp;

use BadMethodCallException;
use InvalidArgumentException;

/**
 * Class Character
 * @package Phphp
 *
 * @method static bool isEot(string $char)
 * @method static bool isNull(string $char)
 * @method static bool isTabulation(string $char)
 * @method static bool isCarriageReturn(string $char)
 * @method static bool isLineFeed(string $char)
 * @method static bool isFormFeed(string $char)
 * @method static bool isSpace(string $char)
 * @method static bool isExclamationMark(string $char)
 * @method static bool isQuotationMark(string $char)
 * @method static bool isNumberSign(string $char)
 * @method static bool isAmpersand(string $char)
 * @method static bool isApostrophe(string $char)
 * @method static bool isHyphenMinus(string $char)
 * @method static bool isSolidus(string $char)
 * @method static bool isDigit0(string $char)
 * @method static bool isDigit9(string $char)
 * @method static bool isSemicolon(string $char)
 * @method static bool isLessThanSign(string $char)
 * @method static bool isEqualsSign(string $char)
 * @method static bool isGreaterThanSign(string $char)
 * @method static bool isQuestionMark(string $char)
 * @method static bool isLatinCapitalA(string $char)
 * @method static bool isLatinCapitalF(string $char)
 * @method static bool isLatinCapitalX(string $char)
 * @method static bool isLatinCapitalZ(string $char)
 * @method static bool isGraveAccent(string $char)
 * @method static bool isLatinSmallA(string $char)
 * @method static bool isLatinSmallF(string $char)
 * @method static bool isLatinSmallX(string $char)
 * @method static bool isLatinSmallZ(string $char)
 * @method static bool isBom(string $string)
 * @method static bool isReplacementCharacter(string $string)
 *
 * @method static bool isSequenceDashDash(string $string)
 * @method static bool isSequenceDoctype(string $string)
 * @method static bool isSequenceCdataStart(string $string)
 * @method static bool isSequenceCdataEnd(string $string)
 * @method static bool isSequenceScript(string $string)
 * @method static bool isSequencePublic(string $string)
 * @method static bool isSequenceSystem(string $string)
 */
class Character
{
    const EOT                   = -1;
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
     * このクラスの各定数値と比較を行う
     *
     * @param string $name
     * @param array $arguments
     * @return bool
     *
     * @throws \BadMethodCallException
     */
    public static function __callStatic(string $name, array $arguments)
    {
        if (!isset($arguments[0]) || !is_string($arguments[0])) {
            throw new InvalidArgumentException('Invalid arguments');
        }
        if ('is' === substr($name, 0, 2) && strlen($name) >= 3) {
            $name = substr($name, 2);
            if (!ctype_upper($name)) {
                $name = strtoupper(preg_replace('/(.)(?=[A-Z])/u', '$1_', $name));
            }
            if (defined('static::'.$name)) {
                return strcmp(constant('static::'.$name), $arguments[0]) === 0;
            }
        }
        throw new BadMethodCallException('Invalid method name');
    }
}