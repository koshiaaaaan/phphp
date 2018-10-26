<?php
namespace Phphp\Lexer\Tokenizer_back\Html5;

/**
 * Class NamedCharacterReferences
 * @package Phphp\Lexer\Tokenizer\Html5
 */
class NamedCharacterReferences
{
    /**
     * Named characters max name length.
     * @var int
     */
    protected static $namedCharacterMaxLength = 33;

    /**
     * Named character references table.
     * @var array
     */
    protected static $namedCharacterReferences = [
        '&AElig' => [
            'codepoints' => [198],
            'characters' => "\xC3\x86",
        ],
        '&AElig;' => [
            'codepoints' => [198],
            'characters' => "\xC3\x86",
        ],
        '&AMP' => [
            'codepoints' => [38],
            'characters' => "\x26",
        ],
        '&AMP;' => [
            'codepoints' => [38],
            'characters' => "\x26",
        ],
        '&Aacute' => [
            'codepoints' => [193],
            'characters' => "\xC3\x81",
        ],
        '&Aacute;' => [
            'codepoints' => [193],
            'characters' => "\xC3\x81",
        ],
        '&Abreve;' => [
            'codepoints' => [258],
            'characters' => "\xC4\x82",
        ],
        '&Acirc' => [
            'codepoints' => [194],
            'characters' => "\xC3\x82",
        ],
        '&Acirc;' => [
            'codepoints' => [194],
            'characters' => "\xC3\x82",
        ],
        '&Acy;' => [
            'codepoints' => [1040],
            'characters' => "\xD0\x90",
        ],
        '&Afr;' => [
            'codepoints' => [120068],
            'characters' => "\xF0\x9D\x94\x84",
        ],
        '&Agrave' => [
            'codepoints' => [192],
            'characters' => "\xC3\x80",
        ],
        '&Agrave;' => [
            'codepoints' => [192],
            'characters' => "\xC3\x80",
        ],
        '&Alpha;' => [
            'codepoints' => [913],
            'characters' => "\xCE\x91",
        ],
        '&Amacr;' => [
            'codepoints' => [256],
            'characters' => "\xC4\x80",
        ],
        '&And;' => [
            'codepoints' => [10835],
            'characters' => "\xE2\xA9\x93",
        ],
        '&Aogon;' => [
            'codepoints' => [260],
            'characters' => "\xC4\x84",
        ],
        '&Aopf;' => [
            'codepoints' => [120120],
            'characters' => "\xF0\x9D\x94\xB8",
        ],
        '&ApplyFunction;' => [
            'codepoints' => [8289],
            'characters' => "\xE2\x81\xA1",
        ],
        '&Aring' => [
            'codepoints' => [197],
            'characters' => "\xC3\x85",
        ],
        '&Aring;' => [
            'codepoints' => [197],
            'characters' => "\xC3\x85",
        ],
        '&Ascr;' => [
            'codepoints' => [119964],
            'characters' => "\xF0\x9D\x92\x9C",
        ],
        '&Assign;' => [
            'codepoints' => [8788],
            'characters' => "\xE2\x89\x94",
        ],
        '&Atilde' => [
            'codepoints' => [195],
            'characters' => "\xC3\x83",
        ],
        '&Atilde;' => [
            'codepoints' => [195],
            'characters' => "\xC3\x83",
        ],
        '&Auml' => [
            'codepoints' => [196],
            'characters' => "\xC3\x84",
        ],
        '&Auml;' => [
            'codepoints' => [196],
            'characters' => "\xC3\x84",
        ],
        '&Backslash;' => [
            'codepoints' => [8726],
            'characters' => "\xE2\x88\x96",
        ],
        '&Barv;' => [
            'codepoints' => [10983],
            'characters' => "\xE2\xAB\xA7",
        ],
        '&Barwed;' => [
            'codepoints' => [8966],
            'characters' => "\xE2\x8C\x86",
        ],
        '&Bcy;' => [
            'codepoints' => [1041],
            'characters' => "\xD0\x91",
        ],
        '&Because;' => [
            'codepoints' => [8757],
            'characters' => "\xE2\x88\xB5",
        ],
        '&Bernoullis;' => [
            'codepoints' => [8492],
            'characters' => "\xE2\x84\xAC",
        ],
        '&Beta;' => [
            'codepoints' => [914],
            'characters' => "\xCE\x92",
        ],
        '&Bfr;' => [
            'codepoints' => [120069],
            'characters' => "\xF0\x9D\x94\x85",
        ],
        '&Bopf;' => [
            'codepoints' => [120121],
            'characters' => "\xF0\x9D\x94\xB9",
        ],
        '&Breve;' => [
            'codepoints' => [728],
            'characters' => "\xCB\x98",
        ],
        '&Bscr;' => [
            'codepoints' => [8492],
            'characters' => "\xE2\x84\xAC",
        ],
        '&Bumpeq;' => [
            'codepoints' => [8782],
            'characters' => "\xE2\x89\x8E",
        ],
        '&CHcy;' => [
            'codepoints' => [1063],
            'characters' => "\xD0\xA7",
        ],
        '&COPY' => [
            'codepoints' => [169],
            'characters' => "\xC2\xA9",
        ],
        '&COPY;' => [
            'codepoints' => [169],
            'characters' => "\xC2\xA9",
        ],
        '&Cacute;' => [
            'codepoints' => [262],
            'characters' => "\xC4\x86",
        ],
        '&Cap;' => [
            'codepoints' => [8914],
            'characters' => "\xE2\x8B\x92",
        ],
        '&CapitalDifferentialD;' => [
            'codepoints' => [8517],
            'characters' => "\xE2\x85\x85",
        ],
        '&Cayleys;' => [
            'codepoints' => [8493],
            'characters' => "\xE2\x84\xAD",
        ],
        '&Ccaron;' => [
            'codepoints' => [268],
            'characters' => "\xC4\x8C",
        ],
        '&Ccedil' => [
            'codepoints' => [199],
            'characters' => "\xC3\x87",
        ],
        '&Ccedil;' => [
            'codepoints' => [199],
            'characters' => "\xC3\x87",
        ],
        '&Ccirc;' => [
            'codepoints' => [264],
            'characters' => "\xC4\x88",
        ],
        '&Cconint;' => [
            'codepoints' => [8752],
            'characters' => "\xE2\x88\xB0",
        ],
        '&Cdot;' => [
            'codepoints' => [266],
            'characters' => "\xC4\x8A",
        ],
        '&Cedilla;' => [
            'codepoints' => [184],
            'characters' => "\xC2\xB8",
        ],
        '&CenterDot;' => [
            'codepoints' => [183],
            'characters' => "\xC2\xB7",
        ],
        '&Cfr;' => [
            'codepoints' => [8493],
            'characters' => "\xE2\x84\xAD",
        ],
        '&Chi;' => [
            'codepoints' => [935],
            'characters' => "\xCE\xA7",
        ],
        '&CircleDot;' => [
            'codepoints' => [8857],
            'characters' => "\xE2\x8A\x99",
        ],
        '&CircleMinus;' => [
            'codepoints' => [8854],
            'characters' => "\xE2\x8A\x96",
        ],
        '&CirclePlus;' => [
            'codepoints' => [8853],
            'characters' => "\xE2\x8A\x95",
        ],
        '&CircleTimes;' => [
            'codepoints' => [8855],
            'characters' => "\xE2\x8A\x97",
        ],
        '&ClockwiseContourIntegral;' => [
            'codepoints' => [8754],
            'characters' => "\xE2\x88\xB2",
        ],
        '&CloseCurlyDoubleQuote;' => [
            'codepoints' => [8221],
            'characters' => "\xE2\x80\x9D",
        ],
        '&CloseCurlyQuote;' => [
            'codepoints' => [8217],
            'characters' => "\xE2\x80\x99",
        ],
        '&Colon;' => [
            'codepoints' => [8759],
            'characters' => "\xE2\x88\xB7",
        ],
        '&Colone;' => [
            'codepoints' => [10868],
            'characters' => "\xE2\xA9\xB4",
        ],
        '&Congruent;' => [
            'codepoints' => [8801],
            'characters' => "\xE2\x89\xA1",
        ],
        '&Conint;' => [
            'codepoints' => [8751],
            'characters' => "\xE2\x88\xAF",
        ],
        '&ContourIntegral;' => [
            'codepoints' => [8750],
            'characters' => "\xE2\x88\xAE",
        ],
        '&Copf;' => [
            'codepoints' => [8450],
            'characters' => "\xE2\x84\x82",
        ],
        '&Coproduct;' => [
            'codepoints' => [8720],
            'characters' => "\xE2\x88\x90",
        ],
        '&CounterClockwiseContourIntegral;' => [
            'codepoints' => [8755],
            'characters' => "\xE2\x88\xB3",
        ],
        '&Cross;' => [
            'codepoints' => [10799],
            'characters' => "\xE2\xA8\xAF",
        ],
        '&Cscr;' => [
            'codepoints' => [119966],
            'characters' => "\xF0\x9D\x92\x9E",
        ],
        '&Cup;' => [
            'codepoints' => [8915],
            'characters' => "\xE2\x8B\x93",
        ],
        '&CupCap;' => [
            'codepoints' => [8781],
            'characters' => "\xE2\x89\x8D",
        ],
        '&DD;' => [
            'codepoints' => [8517],
            'characters' => "\xE2\x85\x85",
        ],
        '&DDotrahd;' => [
            'codepoints' => [10513],
            'characters' => "\xE2\xA4\x91",
        ],
        '&DJcy;' => [
            'codepoints' => [1026],
            'characters' => "\xD0\x82",
        ],
        '&DScy;' => [
            'codepoints' => [1029],
            'characters' => "\xD0\x85",
        ],
        '&DZcy;' => [
            'codepoints' => [1039],
            'characters' => "\xD0\x8F",
        ],
        '&Dagger;' => [
            'codepoints' => [8225],
            'characters' => "\xE2\x80\xA1",
        ],
        '&Darr;' => [
            'codepoints' => [8609],
            'characters' => "\xE2\x86\xA1",
        ],
        '&Dashv;' => [
            'codepoints' => [10980],
            'characters' => "\xE2\xAB\xA4",
        ],
        '&Dcaron;' => [
            'codepoints' => [270],
            'characters' => "\xC4\x8E",
        ],
        '&Dcy;' => [
            'codepoints' => [1044],
            'characters' => "\xD0\x94",
        ],
        '&Del;' => [
            'codepoints' => [8711],
            'characters' => "\xE2\x88\x87",
        ],
        '&Delta;' => [
            'codepoints' => [916],
            'characters' => "\xCE\x94",
        ],
        '&Dfr;' => [
            'codepoints' => [120071],
            'characters' => "\xF0\x9D\x94\x87",
        ],
        '&DiacriticalAcute;' => [
            'codepoints' => [180],
            'characters' => "\xC2\xB4",
        ],
        '&DiacriticalDot;' => [
            'codepoints' => [729],
            'characters' => "\xCB\x99",
        ],
        '&DiacriticalDoubleAcute;' => [
            'codepoints' => [733],
            'characters' => "\xCB\x9D",
        ],
        '&DiacriticalGrave;' => [
            'codepoints' => [96],
            'characters' => "\x60",
        ],
        '&DiacriticalTilde;' => [
            'codepoints' => [732],
            'characters' => "\xCB\x9C",
        ],
        '&Diamond;' => [
            'codepoints' => [8900],
            'characters' => "\xE2\x8B\x84",
        ],
        '&DifferentialD;' => [
            'codepoints' => [8518],
            'characters' => "\xE2\x85\x86",
        ],
        '&Dopf;' => [
            'codepoints' => [120123],
            'characters' => "\xF0\x9D\x94\xBB",
        ],
        '&Dot;' => [
            'codepoints' => [168],
            'characters' => "\xC2\xA8",
        ],
        '&DotDot;' => [
            'codepoints' => [8412],
            'characters' => "\xE2\x83\x9C",
        ],
        '&DotEqual;' => [
            'codepoints' => [8784],
            'characters' => "\xE2\x89\x90",
        ],
        '&DoubleContourIntegral;' => [
            'codepoints' => [8751],
            'characters' => "\xE2\x88\xAF",
        ],
        '&DoubleDot;' => [
            'codepoints' => [168],
            'characters' => "\xC2\xA8",
        ],
        '&DoubleDownArrow;' => [
            'codepoints' => [8659],
            'characters' => "\xE2\x87\x93",
        ],
        '&DoubleLeftArrow;' => [
            'codepoints' => [8656],
            'characters' => "\xE2\x87\x90",
        ],
        '&DoubleLeftRightArrow;' => [
            'codepoints' => [8660],
            'characters' => "\xE2\x87\x94",
        ],
        '&DoubleLeftTee;' => [
            'codepoints' => [10980],
            'characters' => "\xE2\xAB\xA4",
        ],
        '&DoubleLongLeftArrow;' => [
            'codepoints' => [10232],
            'characters' => "\xE2\x9F\xB8",
        ],
        '&DoubleLongLeftRightArrow;' => [
            'codepoints' => [10234],
            'characters' => "\xE2\x9F\xBA",
        ],
        '&DoubleLongRightArrow;' => [
            'codepoints' => [10233],
            'characters' => "\xE2\x9F\xB9",
        ],
        '&DoubleRightArrow;' => [
            'codepoints' => [8658],
            'characters' => "\xE2\x87\x92",
        ],
        '&DoubleRightTee;' => [
            'codepoints' => [8872],
            'characters' => "\xE2\x8A\xA8",
        ],
        '&DoubleUpArrow;' => [
            'codepoints' => [8657],
            'characters' => "\xE2\x87\x91",
        ],
        '&DoubleUpDownArrow;' => [
            'codepoints' => [8661],
            'characters' => "\xE2\x87\x95",
        ],
        '&DoubleVerticalBar;' => [
            'codepoints' => [8741],
            'characters' => "\xE2\x88\xA5",
        ],
        '&DownArrow;' => [
            'codepoints' => [8595],
            'characters' => "\xE2\x86\x93",
        ],
        '&DownArrowBar;' => [
            'codepoints' => [10515],
            'characters' => "\xE2\xA4\x93",
        ],
        '&DownArrowUpArrow;' => [
            'codepoints' => [8693],
            'characters' => "\xE2\x87\xB5",
        ],
        '&DownBreve;' => [
            'codepoints' => [785],
            'characters' => "\xCC\x91",
        ],
        '&DownLeftRightVector;' => [
            'codepoints' => [10576],
            'characters' => "\xE2\xA5\x90",
        ],
        '&DownLeftTeeVector;' => [
            'codepoints' => [10590],
            'characters' => "\xE2\xA5\x9E",
        ],
        '&DownLeftVector;' => [
            'codepoints' => [8637],
            'characters' => "\xE2\x86\xBD",
        ],
        '&DownLeftVectorBar;' => [
            'codepoints' => [10582],
            'characters' => "\xE2\xA5\x96",
        ],
        '&DownRightTeeVector;' => [
            'codepoints' => [10591],
            'characters' => "\xE2\xA5\x9F",
        ],
        '&DownRightVector;' => [
            'codepoints' => [8641],
            'characters' => "\xE2\x87\x81",
        ],
        '&DownRightVectorBar;' => [
            'codepoints' => [10583],
            'characters' => "\xE2\xA5\x97",
        ],
        '&DownTee;' => [
            'codepoints' => [8868],
            'characters' => "\xE2\x8A\xA4",
        ],
        '&DownTeeArrow;' => [
            'codepoints' => [8615],
            'characters' => "\xE2\x86\xA7",
        ],
        '&Downarrow;' => [
            'codepoints' => [8659],
            'characters' => "\xE2\x87\x93",
        ],
        '&Dscr;' => [
            'codepoints' => [119967],
            'characters' => "\xF0\x9D\x92\x9F",
        ],
        '&Dstrok;' => [
            'codepoints' => [272],
            'characters' => "\xC4\x90",
        ],
        '&ENG;' => [
            'codepoints' => [330],
            'characters' => "\xC5\x8A",
        ],
        '&ETH' => [
            'codepoints' => [208],
            'characters' => "\xC3\x90",
        ],
        '&ETH;' => [
            'codepoints' => [208],
            'characters' => "\xC3\x90",
        ],
        '&Eacute' => [
            'codepoints' => [201],
            'characters' => "\xC3\x89",
        ],
        '&Eacute;' => [
            'codepoints' => [201],
            'characters' => "\xC3\x89",
        ],
        '&Ecaron;' => [
            'codepoints' => [282],
            'characters' => "\xC4\x9A",
        ],
        '&Ecirc' => [
            'codepoints' => [202],
            'characters' => "\xC3\x8A",
        ],
        '&Ecirc;' => [
            'codepoints' => [202],
            'characters' => "\xC3\x8A",
        ],
        '&Ecy;' => [
            'codepoints' => [1069],
            'characters' => "\xD0\xAD",
        ],
        '&Edot;' => [
            'codepoints' => [278],
            'characters' => "\xC4\x96",
        ],
        '&Efr;' => [
            'codepoints' => [120072],
            'characters' => "\xF0\x9D\x94\x88",
        ],
        '&Egrave' => [
            'codepoints' => [200],
            'characters' => "\xC3\x88",
        ],
        '&Egrave;' => [
            'codepoints' => [200],
            'characters' => "\xC3\x88",
        ],
        '&Element;' => [
            'codepoints' => [8712],
            'characters' => "\xE2\x88\x88",
        ],
        '&Emacr;' => [
            'codepoints' => [274],
            'characters' => "\xC4\x92",
        ],
        '&EmptySmallSquare;' => [
            'codepoints' => [9723],
            'characters' => "\xE2\x97\xBB",
        ],
        '&EmptyVerySmallSquare;' => [
            'codepoints' => [9643],
            'characters' => "\xE2\x96\xAB",
        ],
        '&Eogon;' => [
            'codepoints' => [280],
            'characters' => "\xC4\x98",
        ],
        '&Eopf;' => [
            'codepoints' => [120124],
            'characters' => "\xF0\x9D\x94\xBC",
        ],
        '&Epsilon;' => [
            'codepoints' => [917],
            'characters' => "\xCE\x95",
        ],
        '&Equal;' => [
            'codepoints' => [10869],
            'characters' => "\xE2\xA9\xB5",
        ],
        '&EqualTilde;' => [
            'codepoints' => [8770],
            'characters' => "\xE2\x89\x82",
        ],
        '&Equilibrium;' => [
            'codepoints' => [8652],
            'characters' => "\xE2\x87\x8C",
        ],
        '&Escr;' => [
            'codepoints' => [8496],
            'characters' => "\xE2\x84\xB0",
        ],
        '&Esim;' => [
            'codepoints' => [10867],
            'characters' => "\xE2\xA9\xB3",
        ],
        '&Eta;' => [
            'codepoints' => [919],
            'characters' => "\xCE\x97",
        ],
        '&Euml' => [
            'codepoints' => [203],
            'characters' => "\xC3\x8B",
        ],
        '&Euml;' => [
            'codepoints' => [203],
            'characters' => "\xC3\x8B",
        ],
        '&Exists;' => [
            'codepoints' => [8707],
            'characters' => "\xE2\x88\x83",
        ],
        '&ExponentialE;' => [
            'codepoints' => [8519],
            'characters' => "\xE2\x85\x87",
        ],
        '&Fcy;' => [
            'codepoints' => [1060],
            'characters' => "\xD0\xA4",
        ],
        '&Ffr;' => [
            'codepoints' => [120073],
            'characters' => "\xF0\x9D\x94\x89",
        ],
        '&FilledSmallSquare;' => [
            'codepoints' => [9724],
            'characters' => "\xE2\x97\xBC",
        ],
        '&FilledVerySmallSquare;' => [
            'codepoints' => [9642],
            'characters' => "\xE2\x96\xAA",
        ],
        '&Fopf;' => [
            'codepoints' => [120125],
            'characters' => "\xF0\x9D\x94\xBD",
        ],
        '&ForAll;' => [
            'codepoints' => [8704],
            'characters' => "\xE2\x88\x80",
        ],
        '&Fouriertrf;' => [
            'codepoints' => [8497],
            'characters' => "\xE2\x84\xB1",
        ],
        '&Fscr;' => [
            'codepoints' => [8497],
            'characters' => "\xE2\x84\xB1",
        ],
        '&GJcy;' => [
            'codepoints' => [1027],
            'characters' => "\xD0\x83",
        ],
        '&GT' => [
            'codepoints' => [62],
            'characters' => "\x3E",
        ],
        '&GT;' => [
            'codepoints' => [62],
            'characters' => "\x3E",
        ],
        '&Gamma;' => [
            'codepoints' => [915],
            'characters' => "\xCE\x93",
        ],
        '&Gammad;' => [
            'codepoints' => [988],
            'characters' => "\xCF\x9C",
        ],
        '&Gbreve;' => [
            'codepoints' => [286],
            'characters' => "\xC4\x9E",
        ],
        '&Gcedil;' => [
            'codepoints' => [290],
            'characters' => "\xC4\xA2",
        ],
        '&Gcirc;' => [
            'codepoints' => [284],
            'characters' => "\xC4\x9C",
        ],
        '&Gcy;' => [
            'codepoints' => [1043],
            'characters' => "\xD0\x93",
        ],
        '&Gdot;' => [
            'codepoints' => [288],
            'characters' => "\xC4\xA0",
        ],
        '&Gfr;' => [
            'codepoints' => [120074],
            'characters' => "\xF0\x9D\x94\x8A",
        ],
        '&Gg;' => [
            'codepoints' => [8921],
            'characters' => "\xE2\x8B\x99",
        ],
        '&Gopf;' => [
            'codepoints' => [120126],
            'characters' => "\xF0\x9D\x94\xBE",
        ],
        '&GreaterEqual;' => [
            'codepoints' => [8805],
            'characters' => "\xE2\x89\xA5",
        ],
        '&GreaterEqualLess;' => [
            'codepoints' => [8923],
            'characters' => "\xE2\x8B\x9B",
        ],
        '&GreaterFullEqual;' => [
            'codepoints' => [8807],
            'characters' => "\xE2\x89\xA7",
        ],
        '&GreaterGreater;' => [
            'codepoints' => [10914],
            'characters' => "\xE2\xAA\xA2",
        ],
        '&GreaterLess;' => [
            'codepoints' => [8823],
            'characters' => "\xE2\x89\xB7",
        ],
        '&GreaterSlantEqual;' => [
            'codepoints' => [10878],
            'characters' => "\xE2\xA9\xBE",
        ],
        '&GreaterTilde;' => [
            'codepoints' => [8819],
            'characters' => "\xE2\x89\xB3",
        ],
        '&Gscr;' => [
            'codepoints' => [119970],
            'characters' => "\xF0\x9D\x92\xA2",
        ],
        '&Gt;' => [
            'codepoints' => [8811],
            'characters' => "\xE2\x89\xAB",
        ],
        '&HARDcy;' => [
            'codepoints' => [1066],
            'characters' => "\xD0\xAA",
        ],
        '&Hacek;' => [
            'codepoints' => [711],
            'characters' => "\xCB\x87",
        ],
        '&Hat;' => [
            'codepoints' => [94],
            'characters' => "\x5E",
        ],
        '&Hcirc;' => [
            'codepoints' => [292],
            'characters' => "\xC4\xA4",
        ],
        '&Hfr;' => [
            'codepoints' => [8460],
            'characters' => "\xE2\x84\x8C",
        ],
        '&HilbertSpace;' => [
            'codepoints' => [8459],
            'characters' => "\xE2\x84\x8B",
        ],
        '&Hopf;' => [
            'codepoints' => [8461],
            'characters' => "\xE2\x84\x8D",
        ],
        '&HorizontalLine;' => [
            'codepoints' => [9472],
            'characters' => "\xE2\x94\x80",
        ],
        '&Hscr;' => [
            'codepoints' => [8459],
            'characters' => "\xE2\x84\x8B",
        ],
        '&Hstrok;' => [
            'codepoints' => [294],
            'characters' => "\xC4\xA6",
        ],
        '&HumpDownHump;' => [
            'codepoints' => [8782],
            'characters' => "\xE2\x89\x8E",
        ],
        '&HumpEqual;' => [
            'codepoints' => [8783],
            'characters' => "\xE2\x89\x8F",
        ],
        '&IEcy;' => [
            'codepoints' => [1045],
            'characters' => "\xD0\x95",
        ],
        '&IJlig;' => [
            'codepoints' => [306],
            'characters' => "\xC4\xB2",
        ],
        '&IOcy;' => [
            'codepoints' => [1025],
            'characters' => "\xD0\x81",
        ],
        '&Iacute' => [
            'codepoints' => [205],
            'characters' => "\xC3\x8D",
        ],
        '&Iacute;' => [
            'codepoints' => [205],
            'characters' => "\xC3\x8D",
        ],
        '&Icirc' => [
            'codepoints' => [206],
            'characters' => "\xC3\x8E",
        ],
        '&Icirc;' => [
            'codepoints' => [206],
            'characters' => "\xC3\x8E",
        ],
        '&Icy;' => [
            'codepoints' => [1048],
            'characters' => "\xD0\x98",
        ],
        '&Idot;' => [
            'codepoints' => [304],
            'characters' => "\xC4\xB0",
        ],
        '&Ifr;' => [
            'codepoints' => [8465],
            'characters' => "\xE2\x84\x91",
        ],
        '&Igrave' => [
            'codepoints' => [204],
            'characters' => "\xC3\x8C",
        ],
        '&Igrave;' => [
            'codepoints' => [204],
            'characters' => "\xC3\x8C",
        ],
        '&Im;' => [
            'codepoints' => [8465],
            'characters' => "\xE2\x84\x91",
        ],
        '&Imacr;' => [
            'codepoints' => [298],
            'characters' => "\xC4\xAA",
        ],
        '&ImaginaryI;' => [
            'codepoints' => [8520],
            'characters' => "\xE2\x85\x88",
        ],
        '&Implies;' => [
            'codepoints' => [8658],
            'characters' => "\xE2\x87\x92",
        ],
        '&Int;' => [
            'codepoints' => [8748],
            'characters' => "\xE2\x88\xAC",
        ],
        '&Integral;' => [
            'codepoints' => [8747],
            'characters' => "\xE2\x88\xAB",
        ],
        '&Intersection;' => [
            'codepoints' => [8898],
            'characters' => "\xE2\x8B\x82",
        ],
        '&InvisibleComma;' => [
            'codepoints' => [8291],
            'characters' => "\xE2\x81\xA3",
        ],
        '&InvisibleTimes;' => [
            'codepoints' => [8290],
            'characters' => "\xE2\x81\xA2",
        ],
        '&Iogon;' => [
            'codepoints' => [302],
            'characters' => "\xC4\xAE",
        ],
        '&Iopf;' => [
            'codepoints' => [120128],
            'characters' => "\xF0\x9D\x95\x80",
        ],
        '&Iota;' => [
            'codepoints' => [921],
            'characters' => "\xCE\x99",
        ],
        '&Iscr;' => [
            'codepoints' => [8464],
            'characters' => "\xE2\x84\x90",
        ],
        '&Itilde;' => [
            'codepoints' => [296],
            'characters' => "\xC4\xA8",
        ],
        '&Iukcy;' => [
            'codepoints' => [1030],
            'characters' => "\xD0\x86",
        ],
        '&Iuml' => [
            'codepoints' => [207],
            'characters' => "\xC3\x8F",
        ],
        '&Iuml;' => [
            'codepoints' => [207],
            'characters' => "\xC3\x8F",
        ],
        '&Jcirc;' => [
            'codepoints' => [308],
            'characters' => "\xC4\xB4",
        ],
        '&Jcy;' => [
            'codepoints' => [1049],
            'characters' => "\xD0\x99",
        ],
        '&Jfr;' => [
            'codepoints' => [120077],
            'characters' => "\xF0\x9D\x94\x8D",
        ],
        '&Jopf;' => [
            'codepoints' => [120129],
            'characters' => "\xF0\x9D\x95\x81",
        ],
        '&Jscr;' => [
            'codepoints' => [119973],
            'characters' => "\xF0\x9D\x92\xA5",
        ],
        '&Jsercy;' => [
            'codepoints' => [1032],
            'characters' => "\xD0\x88",
        ],
        '&Jukcy;' => [
            'codepoints' => [1028],
            'characters' => "\xD0\x84",
        ],
        '&KHcy;' => [
            'codepoints' => [1061],
            'characters' => "\xD0\xA5",
        ],
        '&KJcy;' => [
            'codepoints' => [1036],
            'characters' => "\xD0\x8C",
        ],
        '&Kappa;' => [
            'codepoints' => [922],
            'characters' => "\xCE\x9A",
        ],
        '&Kcedil;' => [
            'codepoints' => [310],
            'characters' => "\xC4\xB6",
        ],
        '&Kcy;' => [
            'codepoints' => [1050],
            'characters' => "\xD0\x9A",
        ],
        '&Kfr;' => [
            'codepoints' => [120078],
            'characters' => "\xF0\x9D\x94\x8E",
        ],
        '&Kopf;' => [
            'codepoints' => [120130],
            'characters' => "\xF0\x9D\x95\x82",
        ],
        '&Kscr;' => [
            'codepoints' => [119974],
            'characters' => "\xF0\x9D\x92\xA6",
        ],
        '&LJcy;' => [
            'codepoints' => [1033],
            'characters' => "\xD0\x89",
        ],
        '&LT' => [
            'codepoints' => [60],
            'characters' => "\x3C",
        ],
        '&LT;' => [
            'codepoints' => [60],
            'characters' => "\x3C",
        ],
        '&Lacute;' => [
            'codepoints' => [313],
            'characters' => "\xC4\xB9",
        ],
        '&Lambda;' => [
            'codepoints' => [923],
            'characters' => "\xCE\x9B",
        ],
        '&Lang;' => [
            'codepoints' => [10218],
            'characters' => "\xE2\x9F\xAA",
        ],
        '&Laplacetrf;' => [
            'codepoints' => [8466],
            'characters' => "\xE2\x84\x92",
        ],
        '&Larr;' => [
            'codepoints' => [8606],
            'characters' => "\xE2\x86\x9E",
        ],
        '&Lcaron;' => [
            'codepoints' => [317],
            'characters' => "\xC4\xBD",
        ],
        '&Lcedil;' => [
            'codepoints' => [315],
            'characters' => "\xC4\xBB",
        ],
        '&Lcy;' => [
            'codepoints' => [1051],
            'characters' => "\xD0\x9B",
        ],
        '&LeftAngleBracket;' => [
            'codepoints' => [10216],
            'characters' => "\xE2\x9F\xA8",
        ],
        '&LeftArrow;' => [
            'codepoints' => [8592],
            'characters' => "\xE2\x86\x90",
        ],
        '&LeftArrowBar;' => [
            'codepoints' => [8676],
            'characters' => "\xE2\x87\xA4",
        ],
        '&LeftArrowRightArrow;' => [
            'codepoints' => [8646],
            'characters' => "\xE2\x87\x86",
        ],
        '&LeftCeiling;' => [
            'codepoints' => [8968],
            'characters' => "\xE2\x8C\x88",
        ],
        '&LeftDoubleBracket;' => [
            'codepoints' => [10214],
            'characters' => "\xE2\x9F\xA6",
        ],
        '&LeftDownTeeVector;' => [
            'codepoints' => [10593],
            'characters' => "\xE2\xA5\xA1",
        ],
        '&LeftDownVector;' => [
            'codepoints' => [8643],
            'characters' => "\xE2\x87\x83",
        ],
        '&LeftDownVectorBar;' => [
            'codepoints' => [10585],
            'characters' => "\xE2\xA5\x99",
        ],
        '&LeftFloor;' => [
            'codepoints' => [8970],
            'characters' => "\xE2\x8C\x8A",
        ],
        '&LeftRightArrow;' => [
            'codepoints' => [8596],
            'characters' => "\xE2\x86\x94",
        ],
        '&LeftRightVector;' => [
            'codepoints' => [10574],
            'characters' => "\xE2\xA5\x8E",
        ],
        '&LeftTee;' => [
            'codepoints' => [8867],
            'characters' => "\xE2\x8A\xA3",
        ],
        '&LeftTeeArrow;' => [
            'codepoints' => [8612],
            'characters' => "\xE2\x86\xA4",
        ],
        '&LeftTeeVector;' => [
            'codepoints' => [10586],
            'characters' => "\xE2\xA5\x9A",
        ],
        '&LeftTriangle;' => [
            'codepoints' => [8882],
            'characters' => "\xE2\x8A\xB2",
        ],
        '&LeftTriangleBar;' => [
            'codepoints' => [10703],
            'characters' => "\xE2\xA7\x8F",
        ],
        '&LeftTriangleEqual;' => [
            'codepoints' => [8884],
            'characters' => "\xE2\x8A\xB4",
        ],
        '&LeftUpDownVector;' => [
            'codepoints' => [10577],
            'characters' => "\xE2\xA5\x91",
        ],
        '&LeftUpTeeVector;' => [
            'codepoints' => [10592],
            'characters' => "\xE2\xA5\xA0",
        ],
        '&LeftUpVector;' => [
            'codepoints' => [8639],
            'characters' => "\xE2\x86\xBF",
        ],
        '&LeftUpVectorBar;' => [
            'codepoints' => [10584],
            'characters' => "\xE2\xA5\x98",
        ],
        '&LeftVector;' => [
            'codepoints' => [8636],
            'characters' => "\xE2\x86\xBC",
        ],
        '&LeftVectorBar;' => [
            'codepoints' => [10578],
            'characters' => "\xE2\xA5\x92",
        ],
        '&Leftarrow;' => [
            'codepoints' => [8656],
            'characters' => "\xE2\x87\x90",
        ],
        '&Leftrightarrow;' => [
            'codepoints' => [8660],
            'characters' => "\xE2\x87\x94",
        ],
        '&LessEqualGreater;' => [
            'codepoints' => [8922],
            'characters' => "\xE2\x8B\x9A",
        ],
        '&LessFullEqual;' => [
            'codepoints' => [8806],
            'characters' => "\xE2\x89\xA6",
        ],
        '&LessGreater;' => [
            'codepoints' => [8822],
            'characters' => "\xE2\x89\xB6",
        ],
        '&LessLess;' => [
            'codepoints' => [10913],
            'characters' => "\xE2\xAA\xA1",
        ],
        '&LessSlantEqual;' => [
            'codepoints' => [10877],
            'characters' => "\xE2\xA9\xBD",
        ],
        '&LessTilde;' => [
            'codepoints' => [8818],
            'characters' => "\xE2\x89\xB2",
        ],
        '&Lfr;' => [
            'codepoints' => [120079],
            'characters' => "\xF0\x9D\x94\x8F",
        ],
        '&Ll;' => [
            'codepoints' => [8920],
            'characters' => "\xE2\x8B\x98",
        ],
        '&Lleftarrow;' => [
            'codepoints' => [8666],
            'characters' => "\xE2\x87\x9A",
        ],
        '&Lmidot;' => [
            'codepoints' => [319],
            'characters' => "\xC4\xBF",
        ],
        '&LongLeftArrow;' => [
            'codepoints' => [10229],
            'characters' => "\xE2\x9F\xB5",
        ],
        '&LongLeftRightArrow;' => [
            'codepoints' => [10231],
            'characters' => "\xE2\x9F\xB7",
        ],
        '&LongRightArrow;' => [
            'codepoints' => [10230],
            'characters' => "\xE2\x9F\xB6",
        ],
        '&Longleftarrow;' => [
            'codepoints' => [10232],
            'characters' => "\xE2\x9F\xB8",
        ],
        '&Longleftrightarrow;' => [
            'codepoints' => [10234],
            'characters' => "\xE2\x9F\xBA",
        ],
        '&Longrightarrow;' => [
            'codepoints' => [10233],
            'characters' => "\xE2\x9F\xB9",
        ],
        '&Lopf;' => [
            'codepoints' => [120131],
            'characters' => "\xF0\x9D\x95\x83",
        ],
        '&LowerLeftArrow;' => [
            'codepoints' => [8601],
            'characters' => "\xE2\x86\x99",
        ],
        '&LowerRightArrow;' => [
            'codepoints' => [8600],
            'characters' => "\xE2\x86\x98",
        ],
        '&Lscr;' => [
            'codepoints' => [8466],
            'characters' => "\xE2\x84\x92",
        ],
        '&Lsh;' => [
            'codepoints' => [8624],
            'characters' => "\xE2\x86\xB0",
        ],
        '&Lstrok;' => [
            'codepoints' => [321],
            'characters' => "\xC5\x81",
        ],
        '&Lt;' => [
            'codepoints' => [8810],
            'characters' => "\xE2\x89\xAA",
        ],
        '&Map;' => [
            'codepoints' => [10501],
            'characters' => "\xE2\xA4\x85",
        ],
        '&Mcy;' => [
            'codepoints' => [1052],
            'characters' => "\xD0\x9C",
        ],
        '&MediumSpace;' => [
            'codepoints' => [8287],
            'characters' => "\xE2\x81\x9F",
        ],
        '&Mellintrf;' => [
            'codepoints' => [8499],
            'characters' => "\xE2\x84\xB3",
        ],
        '&Mfr;' => [
            'codepoints' => [120080],
            'characters' => "\xF0\x9D\x94\x90",
        ],
        '&MinusPlus;' => [
            'codepoints' => [8723],
            'characters' => "\xE2\x88\x93",
        ],
        '&Mopf;' => [
            'codepoints' => [120132],
            'characters' => "\xF0\x9D\x95\x84",
        ],
        '&Mscr;' => [
            'codepoints' => [8499],
            'characters' => "\xE2\x84\xB3",
        ],
        '&Mu;' => [
            'codepoints' => [924],
            'characters' => "\xCE\x9C",
        ],
        '&NJcy;' => [
            'codepoints' => [1034],
            'characters' => "\xD0\x8A",
        ],
        '&Nacute;' => [
            'codepoints' => [323],
            'characters' => "\xC5\x83",
        ],
        '&Ncaron;' => [
            'codepoints' => [327],
            'characters' => "\xC5\x87",
        ],
        '&Ncedil;' => [
            'codepoints' => [325],
            'characters' => "\xC5\x85",
        ],
        '&Ncy;' => [
            'codepoints' => [1053],
            'characters' => "\xD0\x9D",
        ],
        '&NegativeMediumSpace;' => [
            'codepoints' => [8203],
            'characters' => "\xE2\x80\x8B",
        ],
        '&NegativeThickSpace;' => [
            'codepoints' => [8203],
            'characters' => "\xE2\x80\x8B",
        ],
        '&NegativeThinSpace;' => [
            'codepoints' => [8203],
            'characters' => "\xE2\x80\x8B",
        ],
        '&NegativeVeryThinSpace;' => [
            'codepoints' => [8203],
            'characters' => "\xE2\x80\x8B",
        ],
        '&NestedGreaterGreater;' => [
            'codepoints' => [8811],
            'characters' => "\xE2\x89\xAB",
        ],
        '&NestedLessLess;' => [
            'codepoints' => [8810],
            'characters' => "\xE2\x89\xAA",
        ],
        '&NewLine;' => [
            'codepoints' => [10],
            'characters' => "\x0A",
        ],
        '&Nfr;' => [
            'codepoints' => [120081],
            'characters' => "\xF0\x9D\x94\x91",
        ],
        '&NoBreak;' => [
            'codepoints' => [8288],
            'characters' => "\xE2\x81\xA0",
        ],
        '&NonBreakingSpace;' => [
            'codepoints' => [160],
            'characters' => "\xC2\xA0",
        ],
        '&Nopf;' => [
            'codepoints' => [8469],
            'characters' => "\xE2\x84\x95",
        ],
        '&Not;' => [
            'codepoints' => [10988],
            'characters' => "\xE2\xAB\xAC",
        ],
        '&NotCongruent;' => [
            'codepoints' => [8802],
            'characters' => "\xE2\x89\xA2",
        ],
        '&NotCupCap;' => [
            'codepoints' => [8813],
            'characters' => "\xE2\x89\xAD",
        ],
        '&NotDoubleVerticalBar;' => [
            'codepoints' => [8742],
            'characters' => "\xE2\x88\xA6",
        ],
        '&NotElement;' => [
            'codepoints' => [8713],
            'characters' => "\xE2\x88\x89",
        ],
        '&NotEqual;' => [
            'codepoints' => [8800],
            'characters' => "\xE2\x89\xA0",
        ],
        '&NotEqualTilde;' => [
            'codepoints' => [8770, 824],
            'characters' => "\xE2\x89\x82\xCC\xB8",
        ],
        '&NotExists;' => [
            'codepoints' => [8708],
            'characters' => "\xE2\x88\x84",
        ],
        '&NotGreater;' => [
            'codepoints' => [8815],
            'characters' => "\xE2\x89\xAF",
        ],
        '&NotGreaterEqual;' => [
            'codepoints' => [8817],
            'characters' => "\xE2\x89\xB1",
        ],
        '&NotGreaterFullEqual;' => [
            'codepoints' => [8807, 824],
            'characters' => "\xE2\x89\xA7\xCC\xB8",
        ],
        '&NotGreaterGreater;' => [
            'codepoints' => [8811, 824],
            'characters' => "\xE2\x89\xAB\xCC\xB8",
        ],
        '&NotGreaterLess;' => [
            'codepoints' => [8825],
            'characters' => "\xE2\x89\xB9",
        ],
        '&NotGreaterSlantEqual;' => [
            'codepoints' => [10878, 824],
            'characters' => "\xE2\xA9\xBE\xCC\xB8",
        ],
        '&NotGreaterTilde;' => [
            'codepoints' => [8821],
            'characters' => "\xE2\x89\xB5",
        ],
        '&NotHumpDownHump;' => [
            'codepoints' => [8782, 824],
            'characters' => "\xE2\x89\x8E\xCC\xB8",
        ],
        '&NotHumpEqual;' => [
            'codepoints' => [8783, 824],
            'characters' => "\xE2\x89\x8F\xCC\xB8",
        ],
        '&NotLeftTriangle;' => [
            'codepoints' => [8938],
            'characters' => "\xE2\x8B\xAA",
        ],
        '&NotLeftTriangleBar;' => [
            'codepoints' => [10703, 824],
            'characters' => "\xE2\xA7\x8F\xCC\xB8",
        ],
        '&NotLeftTriangleEqual;' => [
            'codepoints' => [8940],
            'characters' => "\xE2\x8B\xAC",
        ],
        '&NotLess;' => [
            'codepoints' => [8814],
            'characters' => "\xE2\x89\xAE",
        ],
        '&NotLessEqual;' => [
            'codepoints' => [8816],
            'characters' => "\xE2\x89\xB0",
        ],
        '&NotLessGreater;' => [
            'codepoints' => [8824],
            'characters' => "\xE2\x89\xB8",
        ],
        '&NotLessLess;' => [
            'codepoints' => [8810, 824],
            'characters' => "\xE2\x89\xAA\xCC\xB8",
        ],
        '&NotLessSlantEqual;' => [
            'codepoints' => [10877, 824],
            'characters' => "\xE2\xA9\xBD\xCC\xB8",
        ],
        '&NotLessTilde;' => [
            'codepoints' => [8820],
            'characters' => "\xE2\x89\xB4",
        ],
        '&NotNestedGreaterGreater;' => [
            'codepoints' => [10914, 824],
            'characters' => "\xE2\xAA\xA2\xCC\xB8",
        ],
        '&NotNestedLessLess;' => [
            'codepoints' => [10913, 824],
            'characters' => "\xE2\xAA\xA1\xCC\xB8",
        ],
        '&NotPrecedes;' => [
            'codepoints' => [8832],
            'characters' => "\xE2\x8A\x80",
        ],
        '&NotPrecedesEqual;' => [
            'codepoints' => [10927, 824],
            'characters' => "\xE2\xAA\xAF\xCC\xB8",
        ],
        '&NotPrecedesSlantEqual;' => [
            'codepoints' => [8928],
            'characters' => "\xE2\x8B\xA0",
        ],
        '&NotReverseElement;' => [
            'codepoints' => [8716],
            'characters' => "\xE2\x88\x8C",
        ],
        '&NotRightTriangle;' => [
            'codepoints' => [8939],
            'characters' => "\xE2\x8B\xAB",
        ],
        '&NotRightTriangleBar;' => [
            'codepoints' => [10704, 824],
            'characters' => "\xE2\xA7\x90\xCC\xB8",
        ],
        '&NotRightTriangleEqual;' => [
            'codepoints' => [8941],
            'characters' => "\xE2\x8B\xAD",
        ],
        '&NotSquareSubset;' => [
            'codepoints' => [8847, 824],
            'characters' => "\xE2\x8A\x8F\xCC\xB8",
        ],
        '&NotSquareSubsetEqual;' => [
            'codepoints' => [8930],
            'characters' => "\xE2\x8B\xA2",
        ],
        '&NotSquareSuperset;' => [
            'codepoints' => [8848, 824],
            'characters' => "\xE2\x8A\x90\xCC\xB8",
        ],
        '&NotSquareSupersetEqual;' => [
            'codepoints' => [8931],
            'characters' => "\xE2\x8B\xA3",
        ],
        '&NotSubset;' => [
            'codepoints' => [8834, 8402],
            'characters' => "\xE2\x8A\x82\xE2\x83\x92",
        ],
        '&NotSubsetEqual;' => [
            'codepoints' => [8840],
            'characters' => "\xE2\x8A\x88",
        ],
        '&NotSucceeds;' => [
            'codepoints' => [8833],
            'characters' => "\xE2\x8A\x81",
        ],
        '&NotSucceedsEqual;' => [
            'codepoints' => [10928, 824],
            'characters' => "\xE2\xAA\xB0\xCC\xB8",
        ],
        '&NotSucceedsSlantEqual;' => [
            'codepoints' => [8929],
            'characters' => "\xE2\x8B\xA1",
        ],
        '&NotSucceedsTilde;' => [
            'codepoints' => [8831, 824],
            'characters' => "\xE2\x89\xBF\xCC\xB8",
        ],
        '&NotSuperset;' => [
            'codepoints' => [8835, 8402],
            'characters' => "\xE2\x8A\x83\xE2\x83\x92",
        ],
        '&NotSupersetEqual;' => [
            'codepoints' => [8841],
            'characters' => "\xE2\x8A\x89",
        ],
        '&NotTilde;' => [
            'codepoints' => [8769],
            'characters' => "\xE2\x89\x81",
        ],
        '&NotTildeEqual;' => [
            'codepoints' => [8772],
            'characters' => "\xE2\x89\x84",
        ],
        '&NotTildeFullEqual;' => [
            'codepoints' => [8775],
            'characters' => "\xE2\x89\x87",
        ],
        '&NotTildeTilde;' => [
            'codepoints' => [8777],
            'characters' => "\xE2\x89\x89",
        ],
        '&NotVerticalBar;' => [
            'codepoints' => [8740],
            'characters' => "\xE2\x88\xA4",
        ],
        '&Nscr;' => [
            'codepoints' => [119977],
            'characters' => "\xF0\x9D\x92\xA9",
        ],
        '&Ntilde' => [
            'codepoints' => [209],
            'characters' => "\xC3\x91",
        ],
        '&Ntilde;' => [
            'codepoints' => [209],
            'characters' => "\xC3\x91",
        ],
        '&Nu;' => [
            'codepoints' => [925],
            'characters' => "\xCE\x9D",
        ],
        '&OElig;' => [
            'codepoints' => [338],
            'characters' => "\xC5\x92",
        ],
        '&Oacute' => [
            'codepoints' => [211],
            'characters' => "\xC3\x93",
        ],
        '&Oacute;' => [
            'codepoints' => [211],
            'characters' => "\xC3\x93",
        ],
        '&Ocirc' => [
            'codepoints' => [212],
            'characters' => "\xC3\x94",
        ],
        '&Ocirc;' => [
            'codepoints' => [212],
            'characters' => "\xC3\x94",
        ],
        '&Ocy;' => [
            'codepoints' => [1054],
            'characters' => "\xD0\x9E",
        ],
        '&Odblac;' => [
            'codepoints' => [336],
            'characters' => "\xC5\x90",
        ],
        '&Ofr;' => [
            'codepoints' => [120082],
            'characters' => "\xF0\x9D\x94\x92",
        ],
        '&Ograve' => [
            'codepoints' => [210],
            'characters' => "\xC3\x92",
        ],
        '&Ograve;' => [
            'codepoints' => [210],
            'characters' => "\xC3\x92",
        ],
        '&Omacr;' => [
            'codepoints' => [332],
            'characters' => "\xC5\x8C",
        ],
        '&Omega;' => [
            'codepoints' => [937],
            'characters' => "\xCE\xA9",
        ],
        '&Omicron;' => [
            'codepoints' => [927],
            'characters' => "\xCE\x9F",
        ],
        '&Oopf;' => [
            'codepoints' => [120134],
            'characters' => "\xF0\x9D\x95\x86",
        ],
        '&OpenCurlyDoubleQuote;' => [
            'codepoints' => [8220],
            'characters' => "\xE2\x80\x9C",
        ],
        '&OpenCurlyQuote;' => [
            'codepoints' => [8216],
            'characters' => "\xE2\x80\x98",
        ],
        '&Or;' => [
            'codepoints' => [10836],
            'characters' => "\xE2\xA9\x94",
        ],
        '&Oscr;' => [
            'codepoints' => [119978],
            'characters' => "\xF0\x9D\x92\xAA",
        ],
        '&Oslash' => [
            'codepoints' => [216],
            'characters' => "\xC3\x98",
        ],
        '&Oslash;' => [
            'codepoints' => [216],
            'characters' => "\xC3\x98",
        ],
        '&Otilde' => [
            'codepoints' => [213],
            'characters' => "\xC3\x95",
        ],
        '&Otilde;' => [
            'codepoints' => [213],
            'characters' => "\xC3\x95",
        ],
        '&Otimes;' => [
            'codepoints' => [10807],
            'characters' => "\xE2\xA8\xB7",
        ],
        '&Ouml' => [
            'codepoints' => [214],
            'characters' => "\xC3\x96",
        ],
        '&Ouml;' => [
            'codepoints' => [214],
            'characters' => "\xC3\x96",
        ],
        '&OverBar;' => [
            'codepoints' => [8254],
            'characters' => "\xE2\x80\xBE",
        ],
        '&OverBrace;' => [
            'codepoints' => [9182],
            'characters' => "\xE2\x8F\x9E",
        ],
        '&OverBracket;' => [
            'codepoints' => [9140],
            'characters' => "\xE2\x8E\xB4",
        ],
        '&OverParenthesis;' => [
            'codepoints' => [9180],
            'characters' => "\xE2\x8F\x9C",
        ],
        '&PartialD;' => [
            'codepoints' => [8706],
            'characters' => "\xE2\x88\x82",
        ],
        '&Pcy;' => [
            'codepoints' => [1055],
            'characters' => "\xD0\x9F",
        ],
        '&Pfr;' => [
            'codepoints' => [120083],
            'characters' => "\xF0\x9D\x94\x93",
        ],
        '&Phi;' => [
            'codepoints' => [934],
            'characters' => "\xCE\xA6",
        ],
        '&Pi;' => [
            'codepoints' => [928],
            'characters' => "\xCE\xA0",
        ],
        '&PlusMinus;' => [
            'codepoints' => [177],
            'characters' => "\xC2\xB1",
        ],
        '&Poincareplane;' => [
            'codepoints' => [8460],
            'characters' => "\xE2\x84\x8C",
        ],
        '&Popf;' => [
            'codepoints' => [8473],
            'characters' => "\xE2\x84\x99",
        ],
        '&Pr;' => [
            'codepoints' => [10939],
            'characters' => "\xE2\xAA\xBB",
        ],
        '&Precedes;' => [
            'codepoints' => [8826],
            'characters' => "\xE2\x89\xBA",
        ],
        '&PrecedesEqual;' => [
            'codepoints' => [10927],
            'characters' => "\xE2\xAA\xAF",
        ],
        '&PrecedesSlantEqual;' => [
            'codepoints' => [8828],
            'characters' => "\xE2\x89\xBC",
        ],
        '&PrecedesTilde;' => [
            'codepoints' => [8830],
            'characters' => "\xE2\x89\xBE",
        ],
        '&Prime;' => [
            'codepoints' => [8243],
            'characters' => "\xE2\x80\xB3",
        ],
        '&Product;' => [
            'codepoints' => [8719],
            'characters' => "\xE2\x88\x8F",
        ],
        '&Proportion;' => [
            'codepoints' => [8759],
            'characters' => "\xE2\x88\xB7",
        ],
        '&Proportional;' => [
            'codepoints' => [8733],
            'characters' => "\xE2\x88\x9D",
        ],
        '&Pscr;' => [
            'codepoints' => [119979],
            'characters' => "\xF0\x9D\x92\xAB",
        ],
        '&Psi;' => [
            'codepoints' => [936],
            'characters' => "\xCE\xA8",
        ],
        '&QUOT' => [
            'codepoints' => [34],
            'characters' => "\x22",
        ],
        '&QUOT;' => [
            'codepoints' => [34],
            'characters' => "\x22",
        ],
        '&Qfr;' => [
            'codepoints' => [120084],
            'characters' => "\xF0\x9D\x94\x94",
        ],
        '&Qopf;' => [
            'codepoints' => [8474],
            'characters' => "\xE2\x84\x9A",
        ],
        '&Qscr;' => [
            'codepoints' => [119980],
            'characters' => "\xF0\x9D\x92\xAC",
        ],
        '&RBarr;' => [
            'codepoints' => [10512],
            'characters' => "\xE2\xA4\x90",
        ],
        '&REG' => [
            'codepoints' => [174],
            'characters' => "\xC2\xAE",
        ],
        '&REG;' => [
            'codepoints' => [174],
            'characters' => "\xC2\xAE",
        ],
        '&Racute;' => [
            'codepoints' => [340],
            'characters' => "\xC5\x94",
        ],
        '&Rang;' => [
            'codepoints' => [10219],
            'characters' => "\xE2\x9F\xAB",
        ],
        '&Rarr;' => [
            'codepoints' => [8608],
            'characters' => "\xE2\x86\xA0",
        ],
        '&Rarrtl;' => [
            'codepoints' => [10518],
            'characters' => "\xE2\xA4\x96",
        ],
        '&Rcaron;' => [
            'codepoints' => [344],
            'characters' => "\xC5\x98",
        ],
        '&Rcedil;' => [
            'codepoints' => [342],
            'characters' => "\xC5\x96",
        ],
        '&Rcy;' => [
            'codepoints' => [1056],
            'characters' => "\xD0\xA0",
        ],
        '&Re;' => [
            'codepoints' => [8476],
            'characters' => "\xE2\x84\x9C",
        ],
        '&ReverseElement;' => [
            'codepoints' => [8715],
            'characters' => "\xE2\x88\x8B",
        ],
        '&ReverseEquilibrium;' => [
            'codepoints' => [8651],
            'characters' => "\xE2\x87\x8B",
        ],
        '&ReverseUpEquilibrium;' => [
            'codepoints' => [10607],
            'characters' => "\xE2\xA5\xAF",
        ],
        '&Rfr;' => [
            'codepoints' => [8476],
            'characters' => "\xE2\x84\x9C",
        ],
        '&Rho;' => [
            'codepoints' => [929],
            'characters' => "\xCE\xA1",
        ],
        '&RightAngleBracket;' => [
            'codepoints' => [10217],
            'characters' => "\xE2\x9F\xA9",
        ],
        '&RightArrow;' => [
            'codepoints' => [8594],
            'characters' => "\xE2\x86\x92",
        ],
        '&RightArrowBar;' => [
            'codepoints' => [8677],
            'characters' => "\xE2\x87\xA5",
        ],
        '&RightArrowLeftArrow;' => [
            'codepoints' => [8644],
            'characters' => "\xE2\x87\x84",
        ],
        '&RightCeiling;' => [
            'codepoints' => [8969],
            'characters' => "\xE2\x8C\x89",
        ],
        '&RightDoubleBracket;' => [
            'codepoints' => [10215],
            'characters' => "\xE2\x9F\xA7",
        ],
        '&RightDownTeeVector;' => [
            'codepoints' => [10589],
            'characters' => "\xE2\xA5\x9D",
        ],
        '&RightDownVector;' => [
            'codepoints' => [8642],
            'characters' => "\xE2\x87\x82",
        ],
        '&RightDownVectorBar;' => [
            'codepoints' => [10581],
            'characters' => "\xE2\xA5\x95",
        ],
        '&RightFloor;' => [
            'codepoints' => [8971],
            'characters' => "\xE2\x8C\x8B",
        ],
        '&RightTee;' => [
            'codepoints' => [8866],
            'characters' => "\xE2\x8A\xA2",
        ],
        '&RightTeeArrow;' => [
            'codepoints' => [8614],
            'characters' => "\xE2\x86\xA6",
        ],
        '&RightTeeVector;' => [
            'codepoints' => [10587],
            'characters' => "\xE2\xA5\x9B",
        ],
        '&RightTriangle;' => [
            'codepoints' => [8883],
            'characters' => "\xE2\x8A\xB3",
        ],
        '&RightTriangleBar;' => [
            'codepoints' => [10704],
            'characters' => "\xE2\xA7\x90",
        ],
        '&RightTriangleEqual;' => [
            'codepoints' => [8885],
            'characters' => "\xE2\x8A\xB5",
        ],
        '&RightUpDownVector;' => [
            'codepoints' => [10575],
            'characters' => "\xE2\xA5\x8F",
        ],
        '&RightUpTeeVector;' => [
            'codepoints' => [10588],
            'characters' => "\xE2\xA5\x9C",
        ],
        '&RightUpVector;' => [
            'codepoints' => [8638],
            'characters' => "\xE2\x86\xBE",
        ],
        '&RightUpVectorBar;' => [
            'codepoints' => [10580],
            'characters' => "\xE2\xA5\x94",
        ],
        '&RightVector;' => [
            'codepoints' => [8640],
            'characters' => "\xE2\x87\x80",
        ],
        '&RightVectorBar;' => [
            'codepoints' => [10579],
            'characters' => "\xE2\xA5\x93",
        ],
        '&Rightarrow;' => [
            'codepoints' => [8658],
            'characters' => "\xE2\x87\x92",
        ],
        '&Ropf;' => [
            'codepoints' => [8477],
            'characters' => "\xE2\x84\x9D",
        ],
        '&RoundImplies;' => [
            'codepoints' => [10608],
            'characters' => "\xE2\xA5\xB0",
        ],
        '&Rrightarrow;' => [
            'codepoints' => [8667],
            'characters' => "\xE2\x87\x9B",
        ],
        '&Rscr;' => [
            'codepoints' => [8475],
            'characters' => "\xE2\x84\x9B",
        ],
        '&Rsh;' => [
            'codepoints' => [8625],
            'characters' => "\xE2\x86\xB1",
        ],
        '&RuleDelayed;' => [
            'codepoints' => [10740],
            'characters' => "\xE2\xA7\xB4",
        ],
        '&SHCHcy;' => [
            'codepoints' => [1065],
            'characters' => "\xD0\xA9",
        ],
        '&SHcy;' => [
            'codepoints' => [1064],
            'characters' => "\xD0\xA8",
        ],
        '&SOFTcy;' => [
            'codepoints' => [1068],
            'characters' => "\xD0\xAC",
        ],
        '&Sacute;' => [
            'codepoints' => [346],
            'characters' => "\xC5\x9A",
        ],
        '&Sc;' => [
            'codepoints' => [10940],
            'characters' => "\xE2\xAA\xBC",
        ],
        '&Scaron;' => [
            'codepoints' => [352],
            'characters' => "\xC5\xA0",
        ],
        '&Scedil;' => [
            'codepoints' => [350],
            'characters' => "\xC5\x9E",
        ],
        '&Scirc;' => [
            'codepoints' => [348],
            'characters' => "\xC5\x9C",
        ],
        '&Scy;' => [
            'codepoints' => [1057],
            'characters' => "\xD0\xA1",
        ],
        '&Sfr;' => [
            'codepoints' => [120086],
            'characters' => "\xF0\x9D\x94\x96",
        ],
        '&ShortDownArrow;' => [
            'codepoints' => [8595],
            'characters' => "\xE2\x86\x93",
        ],
        '&ShortLeftArrow;' => [
            'codepoints' => [8592],
            'characters' => "\xE2\x86\x90",
        ],
        '&ShortRightArrow;' => [
            'codepoints' => [8594],
            'characters' => "\xE2\x86\x92",
        ],
        '&ShortUpArrow;' => [
            'codepoints' => [8593],
            'characters' => "\xE2\x86\x91",
        ],
        '&Sigma;' => [
            'codepoints' => [931],
            'characters' => "\xCE\xA3",
        ],
        '&SmallCircle;' => [
            'codepoints' => [8728],
            'characters' => "\xE2\x88\x98",
        ],
        '&Sopf;' => [
            'codepoints' => [120138],
            'characters' => "\xF0\x9D\x95\x8A",
        ],
        '&Sqrt;' => [
            'codepoints' => [8730],
            'characters' => "\xE2\x88\x9A",
        ],
        '&Square;' => [
            'codepoints' => [9633],
            'characters' => "\xE2\x96\xA1",
        ],
        '&SquareIntersection;' => [
            'codepoints' => [8851],
            'characters' => "\xE2\x8A\x93",
        ],
        '&SquareSubset;' => [
            'codepoints' => [8847],
            'characters' => "\xE2\x8A\x8F",
        ],
        '&SquareSubsetEqual;' => [
            'codepoints' => [8849],
            'characters' => "\xE2\x8A\x91",
        ],
        '&SquareSuperset;' => [
            'codepoints' => [8848],
            'characters' => "\xE2\x8A\x90",
        ],
        '&SquareSupersetEqual;' => [
            'codepoints' => [8850],
            'characters' => "\xE2\x8A\x92",
        ],
        '&SquareUnion;' => [
            'codepoints' => [8852],
            'characters' => "\xE2\x8A\x94",
        ],
        '&Sscr;' => [
            'codepoints' => [119982],
            'characters' => "\xF0\x9D\x92\xAE",
        ],
        '&Star;' => [
            'codepoints' => [8902],
            'characters' => "\xE2\x8B\x86",
        ],
        '&Sub;' => [
            'codepoints' => [8912],
            'characters' => "\xE2\x8B\x90",
        ],
        '&Subset;' => [
            'codepoints' => [8912],
            'characters' => "\xE2\x8B\x90",
        ],
        '&SubsetEqual;' => [
            'codepoints' => [8838],
            'characters' => "\xE2\x8A\x86",
        ],
        '&Succeeds;' => [
            'codepoints' => [8827],
            'characters' => "\xE2\x89\xBB",
        ],
        '&SucceedsEqual;' => [
            'codepoints' => [10928],
            'characters' => "\xE2\xAA\xB0",
        ],
        '&SucceedsSlantEqual;' => [
            'codepoints' => [8829],
            'characters' => "\xE2\x89\xBD",
        ],
        '&SucceedsTilde;' => [
            'codepoints' => [8831],
            'characters' => "\xE2\x89\xBF",
        ],
        '&SuchThat;' => [
            'codepoints' => [8715],
            'characters' => "\xE2\x88\x8B",
        ],
        '&Sum;' => [
            'codepoints' => [8721],
            'characters' => "\xE2\x88\x91",
        ],
        '&Sup;' => [
            'codepoints' => [8913],
            'characters' => "\xE2\x8B\x91",
        ],
        '&Superset;' => [
            'codepoints' => [8835],
            'characters' => "\xE2\x8A\x83",
        ],
        '&SupersetEqual;' => [
            'codepoints' => [8839],
            'characters' => "\xE2\x8A\x87",
        ],
        '&Supset;' => [
            'codepoints' => [8913],
            'characters' => "\xE2\x8B\x91",
        ],
        '&THORN' => [
            'codepoints' => [222],
            'characters' => "\xC3\x9E",
        ],
        '&THORN;' => [
            'codepoints' => [222],
            'characters' => "\xC3\x9E",
        ],
        '&TRADE;' => [
            'codepoints' => [8482],
            'characters' => "\xE2\x84\xA2",
        ],
        '&TSHcy;' => [
            'codepoints' => [1035],
            'characters' => "\xD0\x8B",
        ],
        '&TScy;' => [
            'codepoints' => [1062],
            'characters' => "\xD0\xA6",
        ],
        '&Tab;' => [
            'codepoints' => [9],
            'characters' => "\x09",
        ],
        '&Tau;' => [
            'codepoints' => [932],
            'characters' => "\xCE\xA4",
        ],
        '&Tcaron;' => [
            'codepoints' => [356],
            'characters' => "\xC5\xA4",
        ],
        '&Tcedil;' => [
            'codepoints' => [354],
            'characters' => "\xC5\xA2",
        ],
        '&Tcy;' => [
            'codepoints' => [1058],
            'characters' => "\xD0\xA2",
        ],
        '&Tfr;' => [
            'codepoints' => [120087],
            'characters' => "\xF0\x9D\x94\x97",
        ],
        '&Therefore;' => [
            'codepoints' => [8756],
            'characters' => "\xE2\x88\xB4",
        ],
        '&Theta;' => [
            'codepoints' => [920],
            'characters' => "\xCE\x98",
        ],
        '&ThickSpace;' => [
            'codepoints' => [8287, 8202],
            'characters' => "\xE2\x81\x9F\xE2\x80\x8A",
        ],
        '&ThinSpace;' => [
            'codepoints' => [8201],
            'characters' => "\xE2\x80\x89",
        ],
        '&Tilde;' => [
            'codepoints' => [8764],
            'characters' => "\xE2\x88\xBC",
        ],
        '&TildeEqual;' => [
            'codepoints' => [8771],
            'characters' => "\xE2\x89\x83",
        ],
        '&TildeFullEqual;' => [
            'codepoints' => [8773],
            'characters' => "\xE2\x89\x85",
        ],
        '&TildeTilde;' => [
            'codepoints' => [8776],
            'characters' => "\xE2\x89\x88",
        ],
        '&Topf;' => [
            'codepoints' => [120139],
            'characters' => "\xF0\x9D\x95\x8B",
        ],
        '&TripleDot;' => [
            'codepoints' => [8411],
            'characters' => "\xE2\x83\x9B",
        ],
        '&Tscr;' => [
            'codepoints' => [119983],
            'characters' => "\xF0\x9D\x92\xAF",
        ],
        '&Tstrok;' => [
            'codepoints' => [358],
            'characters' => "\xC5\xA6",
        ],
        '&Uacute' => [
            'codepoints' => [218],
            'characters' => "\xC3\x9A",
        ],
        '&Uacute;' => [
            'codepoints' => [218],
            'characters' => "\xC3\x9A",
        ],
        '&Uarr;' => [
            'codepoints' => [8607],
            'characters' => "\xE2\x86\x9F",
        ],
        '&Uarrocir;' => [
            'codepoints' => [10569],
            'characters' => "\xE2\xA5\x89",
        ],
        '&Ubrcy;' => [
            'codepoints' => [1038],
            'characters' => "\xD0\x8E",
        ],
        '&Ubreve;' => [
            'codepoints' => [364],
            'characters' => "\xC5\xAC",
        ],
        '&Ucirc' => [
            'codepoints' => [219],
            'characters' => "\xC3\x9B",
        ],
        '&Ucirc;' => [
            'codepoints' => [219],
            'characters' => "\xC3\x9B",
        ],
        '&Ucy;' => [
            'codepoints' => [1059],
            'characters' => "\xD0\xA3",
        ],
        '&Udblac;' => [
            'codepoints' => [368],
            'characters' => "\xC5\xB0",
        ],
        '&Ufr;' => [
            'codepoints' => [120088],
            'characters' => "\xF0\x9D\x94\x98",
        ],
        '&Ugrave' => [
            'codepoints' => [217],
            'characters' => "\xC3\x99",
        ],
        '&Ugrave;' => [
            'codepoints' => [217],
            'characters' => "\xC3\x99",
        ],
        '&Umacr;' => [
            'codepoints' => [362],
            'characters' => "\xC5\xAA",
        ],
        '&UnderBar;' => [
            'codepoints' => [95],
            'characters' => "\x5F",
        ],
        '&UnderBrace;' => [
            'codepoints' => [9183],
            'characters' => "\xE2\x8F\x9F",
        ],
        '&UnderBracket;' => [
            'codepoints' => [9141],
            'characters' => "\xE2\x8E\xB5",
        ],
        '&UnderParenthesis;' => [
            'codepoints' => [9181],
            'characters' => "\xE2\x8F\x9D",
        ],
        '&Union;' => [
            'codepoints' => [8899],
            'characters' => "\xE2\x8B\x83",
        ],
        '&UnionPlus;' => [
            'codepoints' => [8846],
            'characters' => "\xE2\x8A\x8E",
        ],
        '&Uogon;' => [
            'codepoints' => [370],
            'characters' => "\xC5\xB2",
        ],
        '&Uopf;' => [
            'codepoints' => [120140],
            'characters' => "\xF0\x9D\x95\x8C",
        ],
        '&UpArrow;' => [
            'codepoints' => [8593],
            'characters' => "\xE2\x86\x91",
        ],
        '&UpArrowBar;' => [
            'codepoints' => [10514],
            'characters' => "\xE2\xA4\x92",
        ],
        '&UpArrowDownArrow;' => [
            'codepoints' => [8645],
            'characters' => "\xE2\x87\x85",
        ],
        '&UpDownArrow;' => [
            'codepoints' => [8597],
            'characters' => "\xE2\x86\x95",
        ],
        '&UpEquilibrium;' => [
            'codepoints' => [10606],
            'characters' => "\xE2\xA5\xAE",
        ],
        '&UpTee;' => [
            'codepoints' => [8869],
            'characters' => "\xE2\x8A\xA5",
        ],
        '&UpTeeArrow;' => [
            'codepoints' => [8613],
            'characters' => "\xE2\x86\xA5",
        ],
        '&Uparrow;' => [
            'codepoints' => [8657],
            'characters' => "\xE2\x87\x91",
        ],
        '&Updownarrow;' => [
            'codepoints' => [8661],
            'characters' => "\xE2\x87\x95",
        ],
        '&UpperLeftArrow;' => [
            'codepoints' => [8598],
            'characters' => "\xE2\x86\x96",
        ],
        '&UpperRightArrow;' => [
            'codepoints' => [8599],
            'characters' => "\xE2\x86\x97",
        ],
        '&Upsi;' => [
            'codepoints' => [978],
            'characters' => "\xCF\x92",
        ],
        '&Upsilon;' => [
            'codepoints' => [933],
            'characters' => "\xCE\xA5",
        ],
        '&Uring;' => [
            'codepoints' => [366],
            'characters' => "\xC5\xAE",
        ],
        '&Uscr;' => [
            'codepoints' => [119984],
            'characters' => "\xF0\x9D\x92\xB0",
        ],
        '&Utilde;' => [
            'codepoints' => [360],
            'characters' => "\xC5\xA8",
        ],
        '&Uuml' => [
            'codepoints' => [220],
            'characters' => "\xC3\x9C",
        ],
        '&Uuml;' => [
            'codepoints' => [220],
            'characters' => "\xC3\x9C",
        ],
        '&VDash;' => [
            'codepoints' => [8875],
            'characters' => "\xE2\x8A\xAB",
        ],
        '&Vbar;' => [
            'codepoints' => [10987],
            'characters' => "\xE2\xAB\xAB",
        ],
        '&Vcy;' => [
            'codepoints' => [1042],
            'characters' => "\xD0\x92",
        ],
        '&Vdash;' => [
            'codepoints' => [8873],
            'characters' => "\xE2\x8A\xA9",
        ],
        '&Vdashl;' => [
            'codepoints' => [10982],
            'characters' => "\xE2\xAB\xA6",
        ],
        '&Vee;' => [
            'codepoints' => [8897],
            'characters' => "\xE2\x8B\x81",
        ],
        '&Verbar;' => [
            'codepoints' => [8214],
            'characters' => "\xE2\x80\x96",
        ],
        '&Vert;' => [
            'codepoints' => [8214],
            'characters' => "\xE2\x80\x96",
        ],
        '&VerticalBar;' => [
            'codepoints' => [8739],
            'characters' => "\xE2\x88\xA3",
        ],
        '&VerticalLine;' => [
            'codepoints' => [124],
            'characters' => "\x7C",
        ],
        '&VerticalSeparator;' => [
            'codepoints' => [10072],
            'characters' => "\xE2\x9D\x98",
        ],
        '&VerticalTilde;' => [
            'codepoints' => [8768],
            'characters' => "\xE2\x89\x80",
        ],
        '&VeryThinSpace;' => [
            'codepoints' => [8202],
            'characters' => "\xE2\x80\x8A",
        ],
        '&Vfr;' => [
            'codepoints' => [120089],
            'characters' => "\xF0\x9D\x94\x99",
        ],
        '&Vopf;' => [
            'codepoints' => [120141],
            'characters' => "\xF0\x9D\x95\x8D",
        ],
        '&Vscr;' => [
            'codepoints' => [119985],
            'characters' => "\xF0\x9D\x92\xB1",
        ],
        '&Vvdash;' => [
            'codepoints' => [8874],
            'characters' => "\xE2\x8A\xAA",
        ],
        '&Wcirc;' => [
            'codepoints' => [372],
            'characters' => "\xC5\xB4",
        ],
        '&Wedge;' => [
            'codepoints' => [8896],
            'characters' => "\xE2\x8B\x80",
        ],
        '&Wfr;' => [
            'codepoints' => [120090],
            'characters' => "\xF0\x9D\x94\x9A",
        ],
        '&Wopf;' => [
            'codepoints' => [120142],
            'characters' => "\xF0\x9D\x95\x8E",
        ],
        '&Wscr;' => [
            'codepoints' => [119986],
            'characters' => "\xF0\x9D\x92\xB2",
        ],
        '&Xfr;' => [
            'codepoints' => [120091],
            'characters' => "\xF0\x9D\x94\x9B",
        ],
        '&Xi;' => [
            'codepoints' => [926],
            'characters' => "\xCE\x9E",
        ],
        '&Xopf;' => [
            'codepoints' => [120143],
            'characters' => "\xF0\x9D\x95\x8F",
        ],
        '&Xscr;' => [
            'codepoints' => [119987],
            'characters' => "\xF0\x9D\x92\xB3",
        ],
        '&YAcy;' => [
            'codepoints' => [1071],
            'characters' => "\xD0\xAF",
        ],
        '&YIcy;' => [
            'codepoints' => [1031],
            'characters' => "\xD0\x87",
        ],
        '&YUcy;' => [
            'codepoints' => [1070],
            'characters' => "\xD0\xAE",
        ],
        '&Yacute' => [
            'codepoints' => [221],
            'characters' => "\xC3\x9D",
        ],
        '&Yacute;' => [
            'codepoints' => [221],
            'characters' => "\xC3\x9D",
        ],
        '&Ycirc;' => [
            'codepoints' => [374],
            'characters' => "\xC5\xB6",
        ],
        '&Ycy;' => [
            'codepoints' => [1067],
            'characters' => "\xD0\xAB",
        ],
        '&Yfr;' => [
            'codepoints' => [120092],
            'characters' => "\xF0\x9D\x94\x9C",
        ],
        '&Yopf;' => [
            'codepoints' => [120144],
            'characters' => "\xF0\x9D\x95\x90",
        ],
        '&Yscr;' => [
            'codepoints' => [119988],
            'characters' => "\xF0\x9D\x92\xB4",
        ],
        '&Yuml;' => [
            'codepoints' => [376],
            'characters' => "\xC5\xB8",
        ],
        '&ZHcy;' => [
            'codepoints' => [1046],
            'characters' => "\xD0\x96",
        ],
        '&Zacute;' => [
            'codepoints' => [377],
            'characters' => "\xC5\xB9",
        ],
        '&Zcaron;' => [
            'codepoints' => [381],
            'characters' => "\xC5\xBD",
        ],
        '&Zcy;' => [
            'codepoints' => [1047],
            'characters' => "\xD0\x97",
        ],
        '&Zdot;' => [
            'codepoints' => [379],
            'characters' => "\xC5\xBB",
        ],
        '&ZeroWidthSpace;' => [
            'codepoints' => [8203],
            'characters' => "\xE2\x80\x8B",
        ],
        '&Zeta;' => [
            'codepoints' => [918],
            'characters' => "\xCE\x96",
        ],
        '&Zfr;' => [
            'codepoints' => [8488],
            'characters' => "\xE2\x84\xA8",
        ],
        '&Zopf;' => [
            'codepoints' => [8484],
            'characters' => "\xE2\x84\xA4",
        ],
        '&Zscr;' => [
            'codepoints' => [119989],
            'characters' => "\xF0\x9D\x92\xB5",
        ],
        '&aacute' => [
            'codepoints' => [225],
            'characters' => "\xC3\xA1",
        ],
        '&aacute;' => [
            'codepoints' => [225],
            'characters' => "\xC3\xA1",
        ],
        '&abreve;' => [
            'codepoints' => [259],
            'characters' => "\xC4\x83",
        ],
        '&ac;' => [
            'codepoints' => [8766],
            'characters' => "\xE2\x88\xBE",
        ],
        '&acE;' => [
            'codepoints' => [8766, 819],
            'characters' => "\xE2\x88\xBE\xCC\xB3",
        ],
        '&acd;' => [
            'codepoints' => [8767],
            'characters' => "\xE2\x88\xBF",
        ],
        '&acirc' => [
            'codepoints' => [226],
            'characters' => "\xC3\xA2",
        ],
        '&acirc;' => [
            'codepoints' => [226],
            'characters' => "\xC3\xA2",
        ],
        '&acute' => [
            'codepoints' => [180],
            'characters' => "\xC2\xB4",
        ],
        '&acute;' => [
            'codepoints' => [180],
            'characters' => "\xC2\xB4",
        ],
        '&acy;' => [
            'codepoints' => [1072],
            'characters' => "\xD0\xB0",
        ],
        '&aelig' => [
            'codepoints' => [230],
            'characters' => "\xC3\xA6",
        ],
        '&aelig;' => [
            'codepoints' => [230],
            'characters' => "\xC3\xA6",
        ],
        '&af;' => [
            'codepoints' => [8289],
            'characters' => "\xE2\x81\xA1",
        ],
        '&afr;' => [
            'codepoints' => [120094],
            'characters' => "\xF0\x9D\x94\x9E",
        ],
        '&agrave' => [
            'codepoints' => [224],
            'characters' => "\xC3\xA0",
        ],
        '&agrave;' => [
            'codepoints' => [224],
            'characters' => "\xC3\xA0",
        ],
        '&alefsym;' => [
            'codepoints' => [8501],
            'characters' => "\xE2\x84\xB5",
        ],
        '&aleph;' => [
            'codepoints' => [8501],
            'characters' => "\xE2\x84\xB5",
        ],
        '&alpha;' => [
            'codepoints' => [945],
            'characters' => "\xCE\xB1",
        ],
        '&amacr;' => [
            'codepoints' => [257],
            'characters' => "\xC4\x81",
        ],
        '&amalg;' => [
            'codepoints' => [10815],
            'characters' => "\xE2\xA8\xBF",
        ],
        '&amp' => [
            'codepoints' => [38],
            'characters' => "\x26",
        ],
        '&amp;' => [
            'codepoints' => [38],
            'characters' => "\x26",
        ],
        '&and;' => [
            'codepoints' => [8743],
            'characters' => "\xE2\x88\xA7",
        ],
        '&andand;' => [
            'codepoints' => [10837],
            'characters' => "\xE2\xA9\x95",
        ],
        '&andd;' => [
            'codepoints' => [10844],
            'characters' => "\xE2\xA9\x9C",
        ],
        '&andslope;' => [
            'codepoints' => [10840],
            'characters' => "\xE2\xA9\x98",
        ],
        '&andv;' => [
            'codepoints' => [10842],
            'characters' => "\xE2\xA9\x9A",
        ],
        '&ang;' => [
            'codepoints' => [8736],
            'characters' => "\xE2\x88\xA0",
        ],
        '&ange;' => [
            'codepoints' => [10660],
            'characters' => "\xE2\xA6\xA4",
        ],
        '&angle;' => [
            'codepoints' => [8736],
            'characters' => "\xE2\x88\xA0",
        ],
        '&angmsd;' => [
            'codepoints' => [8737],
            'characters' => "\xE2\x88\xA1",
        ],
        '&angmsdaa;' => [
            'codepoints' => [10664],
            'characters' => "\xE2\xA6\xA8",
        ],
        '&angmsdab;' => [
            'codepoints' => [10665],
            'characters' => "\xE2\xA6\xA9",
        ],
        '&angmsdac;' => [
            'codepoints' => [10666],
            'characters' => "\xE2\xA6\xAA",
        ],
        '&angmsdad;' => [
            'codepoints' => [10667],
            'characters' => "\xE2\xA6\xAB",
        ],
        '&angmsdae;' => [
            'codepoints' => [10668],
            'characters' => "\xE2\xA6\xAC",
        ],
        '&angmsdaf;' => [
            'codepoints' => [10669],
            'characters' => "\xE2\xA6\xAD",
        ],
        '&angmsdag;' => [
            'codepoints' => [10670],
            'characters' => "\xE2\xA6\xAE",
        ],
        '&angmsdah;' => [
            'codepoints' => [10671],
            'characters' => "\xE2\xA6\xAF",
        ],
        '&angrt;' => [
            'codepoints' => [8735],
            'characters' => "\xE2\x88\x9F",
        ],
        '&angrtvb;' => [
            'codepoints' => [8894],
            'characters' => "\xE2\x8A\xBE",
        ],
        '&angrtvbd;' => [
            'codepoints' => [10653],
            'characters' => "\xE2\xA6\x9D",
        ],
        '&angsph;' => [
            'codepoints' => [8738],
            'characters' => "\xE2\x88\xA2",
        ],
        '&angst;' => [
            'codepoints' => [197],
            'characters' => "\xC3\x85",
        ],
        '&angzarr;' => [
            'codepoints' => [9084],
            'characters' => "\xE2\x8D\xBC",
        ],
        '&aogon;' => [
            'codepoints' => [261],
            'characters' => "\xC4\x85",
        ],
        '&aopf;' => [
            'codepoints' => [120146],
            'characters' => "\xF0\x9D\x95\x92",
        ],
        '&ap;' => [
            'codepoints' => [8776],
            'characters' => "\xE2\x89\x88",
        ],
        '&apE;' => [
            'codepoints' => [10864],
            'characters' => "\xE2\xA9\xB0",
        ],
        '&apacir;' => [
            'codepoints' => [10863],
            'characters' => "\xE2\xA9\xAF",
        ],
        '&ape;' => [
            'codepoints' => [8778],
            'characters' => "\xE2\x89\x8A",
        ],
        '&apid;' => [
            'codepoints' => [8779],
            'characters' => "\xE2\x89\x8B",
        ],
        '&apos;' => [
            'codepoints' => [39],
            'characters' => "\x27",
        ],
        '&approx;' => [
            'codepoints' => [8776],
            'characters' => "\xE2\x89\x88",
        ],
        '&approxeq;' => [
            'codepoints' => [8778],
            'characters' => "\xE2\x89\x8A",
        ],
        '&aring' => [
            'codepoints' => [229],
            'characters' => "\xC3\xA5",
        ],
        '&aring;' => [
            'codepoints' => [229],
            'characters' => "\xC3\xA5",
        ],
        '&ascr;' => [
            'codepoints' => [119990],
            'characters' => "\xF0\x9D\x92\xB6",
        ],
        '&ast;' => [
            'codepoints' => [42],
            'characters' => "\x2A",
        ],
        '&asymp;' => [
            'codepoints' => [8776],
            'characters' => "\xE2\x89\x88",
        ],
        '&asympeq;' => [
            'codepoints' => [8781],
            'characters' => "\xE2\x89\x8D",
        ],
        '&atilde' => [
            'codepoints' => [227],
            'characters' => "\xC3\xA3",
        ],
        '&atilde;' => [
            'codepoints' => [227],
            'characters' => "\xC3\xA3",
        ],
        '&auml' => [
            'codepoints' => [228],
            'characters' => "\xC3\xA4",
        ],
        '&auml;' => [
            'codepoints' => [228],
            'characters' => "\xC3\xA4",
        ],
        '&awconint;' => [
            'codepoints' => [8755],
            'characters' => "\xE2\x88\xB3",
        ],
        '&awint;' => [
            'codepoints' => [10769],
            'characters' => "\xE2\xA8\x91",
        ],
        '&bNot;' => [
            'codepoints' => [10989],
            'characters' => "\xE2\xAB\xAD",
        ],
        '&backcong;' => [
            'codepoints' => [8780],
            'characters' => "\xE2\x89\x8C",
        ],
        '&backepsilon;' => [
            'codepoints' => [1014],
            'characters' => "\xCF\xB6",
        ],
        '&backprime;' => [
            'codepoints' => [8245],
            'characters' => "\xE2\x80\xB5",
        ],
        '&backsim;' => [
            'codepoints' => [8765],
            'characters' => "\xE2\x88\xBD",
        ],
        '&backsimeq;' => [
            'codepoints' => [8909],
            'characters' => "\xE2\x8B\x8D",
        ],
        '&barvee;' => [
            'codepoints' => [8893],
            'characters' => "\xE2\x8A\xBD",
        ],
        '&barwed;' => [
            'codepoints' => [8965],
            'characters' => "\xE2\x8C\x85",
        ],
        '&barwedge;' => [
            'codepoints' => [8965],
            'characters' => "\xE2\x8C\x85",
        ],
        '&bbrk;' => [
            'codepoints' => [9141],
            'characters' => "\xE2\x8E\xB5",
        ],
        '&bbrktbrk;' => [
            'codepoints' => [9142],
            'characters' => "\xE2\x8E\xB6",
        ],
        '&bcong;' => [
            'codepoints' => [8780],
            'characters' => "\xE2\x89\x8C",
        ],
        '&bcy;' => [
            'codepoints' => [1073],
            'characters' => "\xD0\xB1",
        ],
        '&bdquo;' => [
            'codepoints' => [8222],
            'characters' => "\xE2\x80\x9E",
        ],
        '&becaus;' => [
            'codepoints' => [8757],
            'characters' => "\xE2\x88\xB5",
        ],
        '&because;' => [
            'codepoints' => [8757],
            'characters' => "\xE2\x88\xB5",
        ],
        '&bemptyv;' => [
            'codepoints' => [10672],
            'characters' => "\xE2\xA6\xB0",
        ],
        '&bepsi;' => [
            'codepoints' => [1014],
            'characters' => "\xCF\xB6",
        ],
        '&bernou;' => [
            'codepoints' => [8492],
            'characters' => "\xE2\x84\xAC",
        ],
        '&beta;' => [
            'codepoints' => [946],
            'characters' => "\xCE\xB2",
        ],
        '&beth;' => [
            'codepoints' => [8502],
            'characters' => "\xE2\x84\xB6",
        ],
        '&between;' => [
            'codepoints' => [8812],
            'characters' => "\xE2\x89\xAC",
        ],
        '&bfr;' => [
            'codepoints' => [120095],
            'characters' => "\xF0\x9D\x94\x9F",
        ],
        '&bigcap;' => [
            'codepoints' => [8898],
            'characters' => "\xE2\x8B\x82",
        ],
        '&bigcirc;' => [
            'codepoints' => [9711],
            'characters' => "\xE2\x97\xAF",
        ],
        '&bigcup;' => [
            'codepoints' => [8899],
            'characters' => "\xE2\x8B\x83",
        ],
        '&bigodot;' => [
            'codepoints' => [10752],
            'characters' => "\xE2\xA8\x80",
        ],
        '&bigoplus;' => [
            'codepoints' => [10753],
            'characters' => "\xE2\xA8\x81",
        ],
        '&bigotimes;' => [
            'codepoints' => [10754],
            'characters' => "\xE2\xA8\x82",
        ],
        '&bigsqcup;' => [
            'codepoints' => [10758],
            'characters' => "\xE2\xA8\x86",
        ],
        '&bigstar;' => [
            'codepoints' => [9733],
            'characters' => "\xE2\x98\x85",
        ],
        '&bigtriangledown;' => [
            'codepoints' => [9661],
            'characters' => "\xE2\x96\xBD",
        ],
        '&bigtriangleup;' => [
            'codepoints' => [9651],
            'characters' => "\xE2\x96\xB3",
        ],
        '&biguplus;' => [
            'codepoints' => [10756],
            'characters' => "\xE2\xA8\x84",
        ],
        '&bigvee;' => [
            'codepoints' => [8897],
            'characters' => "\xE2\x8B\x81",
        ],
        '&bigwedge;' => [
            'codepoints' => [8896],
            'characters' => "\xE2\x8B\x80",
        ],
        '&bkarow;' => [
            'codepoints' => [10509],
            'characters' => "\xE2\xA4\x8D",
        ],
        '&blacklozenge;' => [
            'codepoints' => [10731],
            'characters' => "\xE2\xA7\xAB",
        ],
        '&blacksquare;' => [
            'codepoints' => [9642],
            'characters' => "\xE2\x96\xAA",
        ],
        '&blacktriangle;' => [
            'codepoints' => [9652],
            'characters' => "\xE2\x96\xB4",
        ],
        '&blacktriangledown;' => [
            'codepoints' => [9662],
            'characters' => "\xE2\x96\xBE",
        ],
        '&blacktriangleleft;' => [
            'codepoints' => [9666],
            'characters' => "\xE2\x97\x82",
        ],
        '&blacktriangleright;' => [
            'codepoints' => [9656],
            'characters' => "\xE2\x96\xB8",
        ],
        '&blank;' => [
            'codepoints' => [9251],
            'characters' => "\xE2\x90\xA3",
        ],
        '&blk12;' => [
            'codepoints' => [9618],
            'characters' => "\xE2\x96\x92",
        ],
        '&blk14;' => [
            'codepoints' => [9617],
            'characters' => "\xE2\x96\x91",
        ],
        '&blk34;' => [
            'codepoints' => [9619],
            'characters' => "\xE2\x96\x93",
        ],
        '&block;' => [
            'codepoints' => [9608],
            'characters' => "\xE2\x96\x88",
        ],
        '&bne;' => [
            'codepoints' => [61, 8421],
            'characters' => "\x3D\xE2\x83\xA5",
        ],
        '&bnequiv;' => [
            'codepoints' => [8801, 8421],
            'characters' => "\xE2\x89\xA1\xE2\x83\xA5",
        ],
        '&bnot;' => [
            'codepoints' => [8976],
            'characters' => "\xE2\x8C\x90",
        ],
        '&bopf;' => [
            'codepoints' => [120147],
            'characters' => "\xF0\x9D\x95\x93",
        ],
        '&bot;' => [
            'codepoints' => [8869],
            'characters' => "\xE2\x8A\xA5",
        ],
        '&bottom;' => [
            'codepoints' => [8869],
            'characters' => "\xE2\x8A\xA5",
        ],
        '&bowtie;' => [
            'codepoints' => [8904],
            'characters' => "\xE2\x8B\x88",
        ],
        '&boxDL;' => [
            'codepoints' => [9559],
            'characters' => "\xE2\x95\x97",
        ],
        '&boxDR;' => [
            'codepoints' => [9556],
            'characters' => "\xE2\x95\x94",
        ],
        '&boxDl;' => [
            'codepoints' => [9558],
            'characters' => "\xE2\x95\x96",
        ],
        '&boxDr;' => [
            'codepoints' => [9555],
            'characters' => "\xE2\x95\x93",
        ],
        '&boxH;' => [
            'codepoints' => [9552],
            'characters' => "\xE2\x95\x90",
        ],
        '&boxHD;' => [
            'codepoints' => [9574],
            'characters' => "\xE2\x95\xA6",
        ],
        '&boxHU;' => [
            'codepoints' => [9577],
            'characters' => "\xE2\x95\xA9",
        ],
        '&boxHd;' => [
            'codepoints' => [9572],
            'characters' => "\xE2\x95\xA4",
        ],
        '&boxHu;' => [
            'codepoints' => [9575],
            'characters' => "\xE2\x95\xA7",
        ],
        '&boxUL;' => [
            'codepoints' => [9565],
            'characters' => "\xE2\x95\x9D",
        ],
        '&boxUR;' => [
            'codepoints' => [9562],
            'characters' => "\xE2\x95\x9A",
        ],
        '&boxUl;' => [
            'codepoints' => [9564],
            'characters' => "\xE2\x95\x9C",
        ],
        '&boxUr;' => [
            'codepoints' => [9561],
            'characters' => "\xE2\x95\x99",
        ],
        '&boxV;' => [
            'codepoints' => [9553],
            'characters' => "\xE2\x95\x91",
        ],
        '&boxVH;' => [
            'codepoints' => [9580],
            'characters' => "\xE2\x95\xAC",
        ],
        '&boxVL;' => [
            'codepoints' => [9571],
            'characters' => "\xE2\x95\xA3",
        ],
        '&boxVR;' => [
            'codepoints' => [9568],
            'characters' => "\xE2\x95\xA0",
        ],
        '&boxVh;' => [
            'codepoints' => [9579],
            'characters' => "\xE2\x95\xAB",
        ],
        '&boxVl;' => [
            'codepoints' => [9570],
            'characters' => "\xE2\x95\xA2",
        ],
        '&boxVr;' => [
            'codepoints' => [9567],
            'characters' => "\xE2\x95\x9F",
        ],
        '&boxbox;' => [
            'codepoints' => [10697],
            'characters' => "\xE2\xA7\x89",
        ],
        '&boxdL;' => [
            'codepoints' => [9557],
            'characters' => "\xE2\x95\x95",
        ],
        '&boxdR;' => [
            'codepoints' => [9554],
            'characters' => "\xE2\x95\x92",
        ],
        '&boxdl;' => [
            'codepoints' => [9488],
            'characters' => "\xE2\x94\x90",
        ],
        '&boxdr;' => [
            'codepoints' => [9484],
            'characters' => "\xE2\x94\x8C",
        ],
        '&boxh;' => [
            'codepoints' => [9472],
            'characters' => "\xE2\x94\x80",
        ],
        '&boxhD;' => [
            'codepoints' => [9573],
            'characters' => "\xE2\x95\xA5",
        ],
        '&boxhU;' => [
            'codepoints' => [9576],
            'characters' => "\xE2\x95\xA8",
        ],
        '&boxhd;' => [
            'codepoints' => [9516],
            'characters' => "\xE2\x94\xAC",
        ],
        '&boxhu;' => [
            'codepoints' => [9524],
            'characters' => "\xE2\x94\xB4",
        ],
        '&boxminus;' => [
            'codepoints' => [8863],
            'characters' => "\xE2\x8A\x9F",
        ],
        '&boxplus;' => [
            'codepoints' => [8862],
            'characters' => "\xE2\x8A\x9E",
        ],
        '&boxtimes;' => [
            'codepoints' => [8864],
            'characters' => "\xE2\x8A\xA0",
        ],
        '&boxuL;' => [
            'codepoints' => [9563],
            'characters' => "\xE2\x95\x9B",
        ],
        '&boxuR;' => [
            'codepoints' => [9560],
            'characters' => "\xE2\x95\x98",
        ],
        '&boxul;' => [
            'codepoints' => [9496],
            'characters' => "\xE2\x94\x98",
        ],
        '&boxur;' => [
            'codepoints' => [9492],
            'characters' => "\xE2\x94\x94",
        ],
        '&boxv;' => [
            'codepoints' => [9474],
            'characters' => "\xE2\x94\x82",
        ],
        '&boxvH;' => [
            'codepoints' => [9578],
            'characters' => "\xE2\x95\xAA",
        ],
        '&boxvL;' => [
            'codepoints' => [9569],
            'characters' => "\xE2\x95\xA1",
        ],
        '&boxvR;' => [
            'codepoints' => [9566],
            'characters' => "\xE2\x95\x9E",
        ],
        '&boxvh;' => [
            'codepoints' => [9532],
            'characters' => "\xE2\x94\xBC",
        ],
        '&boxvl;' => [
            'codepoints' => [9508],
            'characters' => "\xE2\x94\xA4",
        ],
        '&boxvr;' => [
            'codepoints' => [9500],
            'characters' => "\xE2\x94\x9C",
        ],
        '&bprime;' => [
            'codepoints' => [8245],
            'characters' => "\xE2\x80\xB5",
        ],
        '&breve;' => [
            'codepoints' => [728],
            'characters' => "\xCB\x98",
        ],
        '&brvbar' => [
            'codepoints' => [166],
            'characters' => "\xC2\xA6",
        ],
        '&brvbar;' => [
            'codepoints' => [166],
            'characters' => "\xC2\xA6",
        ],
        '&bscr;' => [
            'codepoints' => [119991],
            'characters' => "\xF0\x9D\x92\xB7",
        ],
        '&bsemi;' => [
            'codepoints' => [8271],
            'characters' => "\xE2\x81\x8F",
        ],
        '&bsim;' => [
            'codepoints' => [8765],
            'characters' => "\xE2\x88\xBD",
        ],
        '&bsime;' => [
            'codepoints' => [8909],
            'characters' => "\xE2\x8B\x8D",
        ],
        '&bsol;' => [
            'codepoints' => [92],
            'characters' => "\x5C",
        ],
        '&bsolb;' => [
            'codepoints' => [10693],
            'characters' => "\xE2\xA7\x85",
        ],
        '&bsolhsub;' => [
            'codepoints' => [10184],
            'characters' => "\xE2\x9F\x88",
        ],
        '&bull;' => [
            'codepoints' => [8226],
            'characters' => "\xE2\x80\xA2",
        ],
        '&bullet;' => [
            'codepoints' => [8226],
            'characters' => "\xE2\x80\xA2",
        ],
        '&bump;' => [
            'codepoints' => [8782],
            'characters' => "\xE2\x89\x8E",
        ],
        '&bumpE;' => [
            'codepoints' => [10926],
            'characters' => "\xE2\xAA\xAE",
        ],
        '&bumpe;' => [
            'codepoints' => [8783],
            'characters' => "\xE2\x89\x8F",
        ],
        '&bumpeq;' => [
            'codepoints' => [8783],
            'characters' => "\xE2\x89\x8F",
        ],
        '&cacute;' => [
            'codepoints' => [263],
            'characters' => "\xC4\x87",
        ],
        '&cap;' => [
            'codepoints' => [8745],
            'characters' => "\xE2\x88\xA9",
        ],
        '&capand;' => [
            'codepoints' => [10820],
            'characters' => "\xE2\xA9\x84",
        ],
        '&capbrcup;' => [
            'codepoints' => [10825],
            'characters' => "\xE2\xA9\x89",
        ],
        '&capcap;' => [
            'codepoints' => [10827],
            'characters' => "\xE2\xA9\x8B",
        ],
        '&capcup;' => [
            'codepoints' => [10823],
            'characters' => "\xE2\xA9\x87",
        ],
        '&capdot;' => [
            'codepoints' => [10816],
            'characters' => "\xE2\xA9\x80",
        ],
        '&caps;' => [
            'codepoints' => [8745, 65024],
            'characters' => "\xE2\x88\xA9\xEF\xB8\x80",
        ],
        '&caret;' => [
            'codepoints' => [8257],
            'characters' => "\xE2\x81\x81",
        ],
        '&caron;' => [
            'codepoints' => [711],
            'characters' => "\xCB\x87",
        ],
        '&ccaps;' => [
            'codepoints' => [10829],
            'characters' => "\xE2\xA9\x8D",
        ],
        '&ccaron;' => [
            'codepoints' => [269],
            'characters' => "\xC4\x8D",
        ],
        '&ccedil' => [
            'codepoints' => [231],
            'characters' => "\xC3\xA7",
        ],
        '&ccedil;' => [
            'codepoints' => [231],
            'characters' => "\xC3\xA7",
        ],
        '&ccirc;' => [
            'codepoints' => [265],
            'characters' => "\xC4\x89",
        ],
        '&ccups;' => [
            'codepoints' => [10828],
            'characters' => "\xE2\xA9\x8C",
        ],
        '&ccupssm;' => [
            'codepoints' => [10832],
            'characters' => "\xE2\xA9\x90",
        ],
        '&cdot;' => [
            'codepoints' => [267],
            'characters' => "\xC4\x8B",
        ],
        '&cedil' => [
            'codepoints' => [184],
            'characters' => "\xC2\xB8",
        ],
        '&cedil;' => [
            'codepoints' => [184],
            'characters' => "\xC2\xB8",
        ],
        '&cemptyv;' => [
            'codepoints' => [10674],
            'characters' => "\xE2\xA6\xB2",
        ],
        '&cent' => [
            'codepoints' => [162],
            'characters' => "\xC2\xA2",
        ],
        '&cent;' => [
            'codepoints' => [162],
            'characters' => "\xC2\xA2",
        ],
        '&centerdot;' => [
            'codepoints' => [183],
            'characters' => "\xC2\xB7",
        ],
        '&cfr;' => [
            'codepoints' => [120096],
            'characters' => "\xF0\x9D\x94\xA0",
        ],
        '&chcy;' => [
            'codepoints' => [1095],
            'characters' => "\xD1\x87",
        ],
        '&check;' => [
            'codepoints' => [10003],
            'characters' => "\xE2\x9C\x93",
        ],
        '&checkmark;' => [
            'codepoints' => [10003],
            'characters' => "\xE2\x9C\x93",
        ],
        '&chi;' => [
            'codepoints' => [967],
            'characters' => "\xCF\x87",
        ],
        '&cir;' => [
            'codepoints' => [9675],
            'characters' => "\xE2\x97\x8B",
        ],
        '&cirE;' => [
            'codepoints' => [10691],
            'characters' => "\xE2\xA7\x83",
        ],
        '&circ;' => [
            'codepoints' => [710],
            'characters' => "\xCB\x86",
        ],
        '&circeq;' => [
            'codepoints' => [8791],
            'characters' => "\xE2\x89\x97",
        ],
        '&circlearrowleft;' => [
            'codepoints' => [8634],
            'characters' => "\xE2\x86\xBA",
        ],
        '&circlearrowright;' => [
            'codepoints' => [8635],
            'characters' => "\xE2\x86\xBB",
        ],
        '&circledR;' => [
            'codepoints' => [174],
            'characters' => "\xC2\xAE",
        ],
        '&circledS;' => [
            'codepoints' => [9416],
            'characters' => "\xE2\x93\x88",
        ],
        '&circledast;' => [
            'codepoints' => [8859],
            'characters' => "\xE2\x8A\x9B",
        ],
        '&circledcirc;' => [
            'codepoints' => [8858],
            'characters' => "\xE2\x8A\x9A",
        ],
        '&circleddash;' => [
            'codepoints' => [8861],
            'characters' => "\xE2\x8A\x9D",
        ],
        '&cire;' => [
            'codepoints' => [8791],
            'characters' => "\xE2\x89\x97",
        ],
        '&cirfnint;' => [
            'codepoints' => [10768],
            'characters' => "\xE2\xA8\x90",
        ],
        '&cirmid;' => [
            'codepoints' => [10991],
            'characters' => "\xE2\xAB\xAF",
        ],
        '&cirscir;' => [
            'codepoints' => [10690],
            'characters' => "\xE2\xA7\x82",
        ],
        '&clubs;' => [
            'codepoints' => [9827],
            'characters' => "\xE2\x99\xA3",
        ],
        '&clubsuit;' => [
            'codepoints' => [9827],
            'characters' => "\xE2\x99\xA3",
        ],
        '&colon;' => [
            'codepoints' => [58],
            'characters' => "\x3A",
        ],
        '&colone;' => [
            'codepoints' => [8788],
            'characters' => "\xE2\x89\x94",
        ],
        '&coloneq;' => [
            'codepoints' => [8788],
            'characters' => "\xE2\x89\x94",
        ],
        '&comma;' => [
            'codepoints' => [44],
            'characters' => "\x2C",
        ],
        '&commat;' => [
            'codepoints' => [64],
            'characters' => "\x40",
        ],
        '&comp;' => [
            'codepoints' => [8705],
            'characters' => "\xE2\x88\x81",
        ],
        '&compfn;' => [
            'codepoints' => [8728],
            'characters' => "\xE2\x88\x98",
        ],
        '&complement;' => [
            'codepoints' => [8705],
            'characters' => "\xE2\x88\x81",
        ],
        '&complexes;' => [
            'codepoints' => [8450],
            'characters' => "\xE2\x84\x82",
        ],
        '&cong;' => [
            'codepoints' => [8773],
            'characters' => "\xE2\x89\x85",
        ],
        '&congdot;' => [
            'codepoints' => [10861],
            'characters' => "\xE2\xA9\xAD",
        ],
        '&conint;' => [
            'codepoints' => [8750],
            'characters' => "\xE2\x88\xAE",
        ],
        '&copf;' => [
            'codepoints' => [120148],
            'characters' => "\xF0\x9D\x95\x94",
        ],
        '&coprod;' => [
            'codepoints' => [8720],
            'characters' => "\xE2\x88\x90",
        ],
        '&copy' => [
            'codepoints' => [169],
            'characters' => "\xC2\xA9",
        ],
        '&copy;' => [
            'codepoints' => [169],
            'characters' => "\xC2\xA9",
        ],
        '&copysr;' => [
            'codepoints' => [8471],
            'characters' => "\xE2\x84\x97",
        ],
        '&crarr;' => [
            'codepoints' => [8629],
            'characters' => "\xE2\x86\xB5",
        ],
        '&cross;' => [
            'codepoints' => [10007],
            'characters' => "\xE2\x9C\x97",
        ],
        '&cscr;' => [
            'codepoints' => [119992],
            'characters' => "\xF0\x9D\x92\xB8",
        ],
        '&csub;' => [
            'codepoints' => [10959],
            'characters' => "\xE2\xAB\x8F",
        ],
        '&csube;' => [
            'codepoints' => [10961],
            'characters' => "\xE2\xAB\x91",
        ],
        '&csup;' => [
            'codepoints' => [10960],
            'characters' => "\xE2\xAB\x90",
        ],
        '&csupe;' => [
            'codepoints' => [10962],
            'characters' => "\xE2\xAB\x92",
        ],
        '&ctdot;' => [
            'codepoints' => [8943],
            'characters' => "\xE2\x8B\xAF",
        ],
        '&cudarrl;' => [
            'codepoints' => [10552],
            'characters' => "\xE2\xA4\xB8",
        ],
        '&cudarrr;' => [
            'codepoints' => [10549],
            'characters' => "\xE2\xA4\xB5",
        ],
        '&cuepr;' => [
            'codepoints' => [8926],
            'characters' => "\xE2\x8B\x9E",
        ],
        '&cuesc;' => [
            'codepoints' => [8927],
            'characters' => "\xE2\x8B\x9F",
        ],
        '&cularr;' => [
            'codepoints' => [8630],
            'characters' => "\xE2\x86\xB6",
        ],
        '&cularrp;' => [
            'codepoints' => [10557],
            'characters' => "\xE2\xA4\xBD",
        ],
        '&cup;' => [
            'codepoints' => [8746],
            'characters' => "\xE2\x88\xAA",
        ],
        '&cupbrcap;' => [
            'codepoints' => [10824],
            'characters' => "\xE2\xA9\x88",
        ],
        '&cupcap;' => [
            'codepoints' => [10822],
            'characters' => "\xE2\xA9\x86",
        ],
        '&cupcup;' => [
            'codepoints' => [10826],
            'characters' => "\xE2\xA9\x8A",
        ],
        '&cupdot;' => [
            'codepoints' => [8845],
            'characters' => "\xE2\x8A\x8D",
        ],
        '&cupor;' => [
            'codepoints' => [10821],
            'characters' => "\xE2\xA9\x85",
        ],
        '&cups;' => [
            'codepoints' => [8746, 65024],
            'characters' => "\xE2\x88\xAA\xEF\xB8\x80",
        ],
        '&curarr;' => [
            'codepoints' => [8631],
            'characters' => "\xE2\x86\xB7",
        ],
        '&curarrm;' => [
            'codepoints' => [10556],
            'characters' => "\xE2\xA4\xBC",
        ],
        '&curlyeqprec;' => [
            'codepoints' => [8926],
            'characters' => "\xE2\x8B\x9E",
        ],
        '&curlyeqsucc;' => [
            'codepoints' => [8927],
            'characters' => "\xE2\x8B\x9F",
        ],
        '&curlyvee;' => [
            'codepoints' => [8910],
            'characters' => "\xE2\x8B\x8E",
        ],
        '&curlywedge;' => [
            'codepoints' => [8911],
            'characters' => "\xE2\x8B\x8F",
        ],
        '&curren' => [
            'codepoints' => [164],
            'characters' => "\xC2\xA4",
        ],
        '&curren;' => [
            'codepoints' => [164],
            'characters' => "\xC2\xA4",
        ],
        '&curvearrowleft;' => [
            'codepoints' => [8630],
            'characters' => "\xE2\x86\xB6",
        ],
        '&curvearrowright;' => [
            'codepoints' => [8631],
            'characters' => "\xE2\x86\xB7",
        ],
        '&cuvee;' => [
            'codepoints' => [8910],
            'characters' => "\xE2\x8B\x8E",
        ],
        '&cuwed;' => [
            'codepoints' => [8911],
            'characters' => "\xE2\x8B\x8F",
        ],
        '&cwconint;' => [
            'codepoints' => [8754],
            'characters' => "\xE2\x88\xB2",
        ],
        '&cwint;' => [
            'codepoints' => [8753],
            'characters' => "\xE2\x88\xB1",
        ],
        '&cylcty;' => [
            'codepoints' => [9005],
            'characters' => "\xE2\x8C\xAD",
        ],
        '&dArr;' => [
            'codepoints' => [8659],
            'characters' => "\xE2\x87\x93",
        ],
        '&dHar;' => [
            'codepoints' => [10597],
            'characters' => "\xE2\xA5\xA5",
        ],
        '&dagger;' => [
            'codepoints' => [8224],
            'characters' => "\xE2\x80\xA0",
        ],
        '&daleth;' => [
            'codepoints' => [8504],
            'characters' => "\xE2\x84\xB8",
        ],
        '&darr;' => [
            'codepoints' => [8595],
            'characters' => "\xE2\x86\x93",
        ],
        '&dash;' => [
            'codepoints' => [8208],
            'characters' => "\xE2\x80\x90",
        ],
        '&dashv;' => [
            'codepoints' => [8867],
            'characters' => "\xE2\x8A\xA3",
        ],
        '&dbkarow;' => [
            'codepoints' => [10511],
            'characters' => "\xE2\xA4\x8F",
        ],
        '&dblac;' => [
            'codepoints' => [733],
            'characters' => "\xCB\x9D",
        ],
        '&dcaron;' => [
            'codepoints' => [271],
            'characters' => "\xC4\x8F",
        ],
        '&dcy;' => [
            'codepoints' => [1076],
            'characters' => "\xD0\xB4",
        ],
        '&dd;' => [
            'codepoints' => [8518],
            'characters' => "\xE2\x85\x86",
        ],
        '&ddagger;' => [
            'codepoints' => [8225],
            'characters' => "\xE2\x80\xA1",
        ],
        '&ddarr;' => [
            'codepoints' => [8650],
            'characters' => "\xE2\x87\x8A",
        ],
        '&ddotseq;' => [
            'codepoints' => [10871],
            'characters' => "\xE2\xA9\xB7",
        ],
        '&deg' => [
            'codepoints' => [176],
            'characters' => "\xC2\xB0",
        ],
        '&deg;' => [
            'codepoints' => [176],
            'characters' => "\xC2\xB0",
        ],
        '&delta;' => [
            'codepoints' => [948],
            'characters' => "\xCE\xB4",
        ],
        '&demptyv;' => [
            'codepoints' => [10673],
            'characters' => "\xE2\xA6\xB1",
        ],
        '&dfisht;' => [
            'codepoints' => [10623],
            'characters' => "\xE2\xA5\xBF",
        ],
        '&dfr;' => [
            'codepoints' => [120097],
            'characters' => "\xF0\x9D\x94\xA1",
        ],
        '&dharl;' => [
            'codepoints' => [8643],
            'characters' => "\xE2\x87\x83",
        ],
        '&dharr;' => [
            'codepoints' => [8642],
            'characters' => "\xE2\x87\x82",
        ],
        '&diam;' => [
            'codepoints' => [8900],
            'characters' => "\xE2\x8B\x84",
        ],
        '&diamond;' => [
            'codepoints' => [8900],
            'characters' => "\xE2\x8B\x84",
        ],
        '&diamondsuit;' => [
            'codepoints' => [9830],
            'characters' => "\xE2\x99\xA6",
        ],
        '&diams;' => [
            'codepoints' => [9830],
            'characters' => "\xE2\x99\xA6",
        ],
        '&die;' => [
            'codepoints' => [168],
            'characters' => "\xC2\xA8",
        ],
        '&digamma;' => [
            'codepoints' => [989],
            'characters' => "\xCF\x9D",
        ],
        '&disin;' => [
            'codepoints' => [8946],
            'characters' => "\xE2\x8B\xB2",
        ],
        '&div;' => [
            'codepoints' => [247],
            'characters' => "\xC3\xB7",
        ],
        '&divide' => [
            'codepoints' => [247],
            'characters' => "\xC3\xB7",
        ],
        '&divide;' => [
            'codepoints' => [247],
            'characters' => "\xC3\xB7",
        ],
        '&divideontimes;' => [
            'codepoints' => [8903],
            'characters' => "\xE2\x8B\x87",
        ],
        '&divonx;' => [
            'codepoints' => [8903],
            'characters' => "\xE2\x8B\x87",
        ],
        '&djcy;' => [
            'codepoints' => [1106],
            'characters' => "\xD1\x92",
        ],
        '&dlcorn;' => [
            'codepoints' => [8990],
            'characters' => "\xE2\x8C\x9E",
        ],
        '&dlcrop;' => [
            'codepoints' => [8973],
            'characters' => "\xE2\x8C\x8D",
        ],
        '&dollar;' => [
            'codepoints' => [36],
            'characters' => "\x24",
        ],
        '&dopf;' => [
            'codepoints' => [120149],
            'characters' => "\xF0\x9D\x95\x95",
        ],
        '&dot;' => [
            'codepoints' => [729],
            'characters' => "\xCB\x99",
        ],
        '&doteq;' => [
            'codepoints' => [8784],
            'characters' => "\xE2\x89\x90",
        ],
        '&doteqdot;' => [
            'codepoints' => [8785],
            'characters' => "\xE2\x89\x91",
        ],
        '&dotminus;' => [
            'codepoints' => [8760],
            'characters' => "\xE2\x88\xB8",
        ],
        '&dotplus;' => [
            'codepoints' => [8724],
            'characters' => "\xE2\x88\x94",
        ],
        '&dotsquare;' => [
            'codepoints' => [8865],
            'characters' => "\xE2\x8A\xA1",
        ],
        '&doublebarwedge;' => [
            'codepoints' => [8966],
            'characters' => "\xE2\x8C\x86",
        ],
        '&downarrow;' => [
            'codepoints' => [8595],
            'characters' => "\xE2\x86\x93",
        ],
        '&downdownarrows;' => [
            'codepoints' => [8650],
            'characters' => "\xE2\x87\x8A",
        ],
        '&downharpoonleft;' => [
            'codepoints' => [8643],
            'characters' => "\xE2\x87\x83",
        ],
        '&downharpoonright;' => [
            'codepoints' => [8642],
            'characters' => "\xE2\x87\x82",
        ],
        '&drbkarow;' => [
            'codepoints' => [10512],
            'characters' => "\xE2\xA4\x90",
        ],
        '&drcorn;' => [
            'codepoints' => [8991],
            'characters' => "\xE2\x8C\x9F",
        ],
        '&drcrop;' => [
            'codepoints' => [8972],
            'characters' => "\xE2\x8C\x8C",
        ],
        '&dscr;' => [
            'codepoints' => [119993],
            'characters' => "\xF0\x9D\x92\xB9",
        ],
        '&dscy;' => [
            'codepoints' => [1109],
            'characters' => "\xD1\x95",
        ],
        '&dsol;' => [
            'codepoints' => [10742],
            'characters' => "\xE2\xA7\xB6",
        ],
        '&dstrok;' => [
            'codepoints' => [273],
            'characters' => "\xC4\x91",
        ],
        '&dtdot;' => [
            'codepoints' => [8945],
            'characters' => "\xE2\x8B\xB1",
        ],
        '&dtri;' => [
            'codepoints' => [9663],
            'characters' => "\xE2\x96\xBF",
        ],
        '&dtrif;' => [
            'codepoints' => [9662],
            'characters' => "\xE2\x96\xBE",
        ],
        '&duarr;' => [
            'codepoints' => [8693],
            'characters' => "\xE2\x87\xB5",
        ],
        '&duhar;' => [
            'codepoints' => [10607],
            'characters' => "\xE2\xA5\xAF",
        ],
        '&dwangle;' => [
            'codepoints' => [10662],
            'characters' => "\xE2\xA6\xA6",
        ],
        '&dzcy;' => [
            'codepoints' => [1119],
            'characters' => "\xD1\x9F",
        ],
        '&dzigrarr;' => [
            'codepoints' => [10239],
            'characters' => "\xE2\x9F\xBF",
        ],
        '&eDDot;' => [
            'codepoints' => [10871],
            'characters' => "\xE2\xA9\xB7",
        ],
        '&eDot;' => [
            'codepoints' => [8785],
            'characters' => "\xE2\x89\x91",
        ],
        '&eacute' => [
            'codepoints' => [233],
            'characters' => "\xC3\xA9",
        ],
        '&eacute;' => [
            'codepoints' => [233],
            'characters' => "\xC3\xA9",
        ],
        '&easter;' => [
            'codepoints' => [10862],
            'characters' => "\xE2\xA9\xAE",
        ],
        '&ecaron;' => [
            'codepoints' => [283],
            'characters' => "\xC4\x9B",
        ],
        '&ecir;' => [
            'codepoints' => [8790],
            'characters' => "\xE2\x89\x96",
        ],
        '&ecirc' => [
            'codepoints' => [234],
            'characters' => "\xC3\xAA",
        ],
        '&ecirc;' => [
            'codepoints' => [234],
            'characters' => "\xC3\xAA",
        ],
        '&ecolon;' => [
            'codepoints' => [8789],
            'characters' => "\xE2\x89\x95",
        ],
        '&ecy;' => [
            'codepoints' => [1101],
            'characters' => "\xD1\x8D",
        ],
        '&edot;' => [
            'codepoints' => [279],
            'characters' => "\xC4\x97",
        ],
        '&ee;' => [
            'codepoints' => [8519],
            'characters' => "\xE2\x85\x87",
        ],
        '&efDot;' => [
            'codepoints' => [8786],
            'characters' => "\xE2\x89\x92",
        ],
        '&efr;' => [
            'codepoints' => [120098],
            'characters' => "\xF0\x9D\x94\xA2",
        ],
        '&eg;' => [
            'codepoints' => [10906],
            'characters' => "\xE2\xAA\x9A",
        ],
        '&egrave' => [
            'codepoints' => [232],
            'characters' => "\xC3\xA8",
        ],
        '&egrave;' => [
            'codepoints' => [232],
            'characters' => "\xC3\xA8",
        ],
        '&egs;' => [
            'codepoints' => [10902],
            'characters' => "\xE2\xAA\x96",
        ],
        '&egsdot;' => [
            'codepoints' => [10904],
            'characters' => "\xE2\xAA\x98",
        ],
        '&el;' => [
            'codepoints' => [10905],
            'characters' => "\xE2\xAA\x99",
        ],
        '&elinters;' => [
            'codepoints' => [9191],
            'characters' => "\xE2\x8F\xA7",
        ],
        '&ell;' => [
            'codepoints' => [8467],
            'characters' => "\xE2\x84\x93",
        ],
        '&els;' => [
            'codepoints' => [10901],
            'characters' => "\xE2\xAA\x95",
        ],
        '&elsdot;' => [
            'codepoints' => [10903],
            'characters' => "\xE2\xAA\x97",
        ],
        '&emacr;' => [
            'codepoints' => [275],
            'characters' => "\xC4\x93",
        ],
        '&empty;' => [
            'codepoints' => [8709],
            'characters' => "\xE2\x88\x85",
        ],
        '&emptyset;' => [
            'codepoints' => [8709],
            'characters' => "\xE2\x88\x85",
        ],
        '&emptyv;' => [
            'codepoints' => [8709],
            'characters' => "\xE2\x88\x85",
        ],
        '&emsp13;' => [
            'codepoints' => [8196],
            'characters' => "\xE2\x80\x84",
        ],
        '&emsp14;' => [
            'codepoints' => [8197],
            'characters' => "\xE2\x80\x85",
        ],
        '&emsp;' => [
            'codepoints' => [8195],
            'characters' => "\xE2\x80\x83",
        ],
        '&eng;' => [
            'codepoints' => [331],
            'characters' => "\xC5\x8B",
        ],
        '&ensp;' => [
            'codepoints' => [8194],
            'characters' => "\xE2\x80\x82",
        ],
        '&eogon;' => [
            'codepoints' => [281],
            'characters' => "\xC4\x99",
        ],
        '&eopf;' => [
            'codepoints' => [120150],
            'characters' => "\xF0\x9D\x95\x96",
        ],
        '&epar;' => [
            'codepoints' => [8917],
            'characters' => "\xE2\x8B\x95",
        ],
        '&eparsl;' => [
            'codepoints' => [10723],
            'characters' => "\xE2\xA7\xA3",
        ],
        '&eplus;' => [
            'codepoints' => [10865],
            'characters' => "\xE2\xA9\xB1",
        ],
        '&epsi;' => [
            'codepoints' => [949],
            'characters' => "\xCE\xB5",
        ],
        '&epsilon;' => [
            'codepoints' => [949],
            'characters' => "\xCE\xB5",
        ],
        '&epsiv;' => [
            'codepoints' => [1013],
            'characters' => "\xCF\xB5",
        ],
        '&eqcirc;' => [
            'codepoints' => [8790],
            'characters' => "\xE2\x89\x96",
        ],
        '&eqcolon;' => [
            'codepoints' => [8789],
            'characters' => "\xE2\x89\x95",
        ],
        '&eqsim;' => [
            'codepoints' => [8770],
            'characters' => "\xE2\x89\x82",
        ],
        '&eqslantgtr;' => [
            'codepoints' => [10902],
            'characters' => "\xE2\xAA\x96",
        ],
        '&eqslantless;' => [
            'codepoints' => [10901],
            'characters' => "\xE2\xAA\x95",
        ],
        '&equals;' => [
            'codepoints' => [61],
            'characters' => "\x3D",
        ],
        '&equest;' => [
            'codepoints' => [8799],
            'characters' => "\xE2\x89\x9F",
        ],
        '&equiv;' => [
            'codepoints' => [8801],
            'characters' => "\xE2\x89\xA1",
        ],
        '&equivDD;' => [
            'codepoints' => [10872],
            'characters' => "\xE2\xA9\xB8",
        ],
        '&eqvparsl;' => [
            'codepoints' => [10725],
            'characters' => "\xE2\xA7\xA5",
        ],
        '&erDot;' => [
            'codepoints' => [8787],
            'characters' => "\xE2\x89\x93",
        ],
        '&erarr;' => [
            'codepoints' => [10609],
            'characters' => "\xE2\xA5\xB1",
        ],
        '&escr;' => [
            'codepoints' => [8495],
            'characters' => "\xE2\x84\xAF",
        ],
        '&esdot;' => [
            'codepoints' => [8784],
            'characters' => "\xE2\x89\x90",
        ],
        '&esim;' => [
            'codepoints' => [8770],
            'characters' => "\xE2\x89\x82",
        ],
        '&eta;' => [
            'codepoints' => [951],
            'characters' => "\xCE\xB7",
        ],
        '&eth' => [
            'codepoints' => [240],
            'characters' => "\xC3\xB0",
        ],
        '&eth;' => [
            'codepoints' => [240],
            'characters' => "\xC3\xB0",
        ],
        '&euml' => [
            'codepoints' => [235],
            'characters' => "\xC3\xAB",
        ],
        '&euml;' => [
            'codepoints' => [235],
            'characters' => "\xC3\xAB",
        ],
        '&euro;' => [
            'codepoints' => [8364],
            'characters' => "\xE2\x82\xAC",
        ],
        '&excl;' => [
            'codepoints' => [33],
            'characters' => "\x21",
        ],
        '&exist;' => [
            'codepoints' => [8707],
            'characters' => "\xE2\x88\x83",
        ],
        '&expectation;' => [
            'codepoints' => [8496],
            'characters' => "\xE2\x84\xB0",
        ],
        '&exponentiale;' => [
            'codepoints' => [8519],
            'characters' => "\xE2\x85\x87",
        ],
        '&fallingdotseq;' => [
            'codepoints' => [8786],
            'characters' => "\xE2\x89\x92",
        ],
        '&fcy;' => [
            'codepoints' => [1092],
            'characters' => "\xD1\x84",
        ],
        '&female;' => [
            'codepoints' => [9792],
            'characters' => "\xE2\x99\x80",
        ],
        '&ffilig;' => [
            'codepoints' => [64259],
            'characters' => "\xEF\xAC\x83",
        ],
        '&fflig;' => [
            'codepoints' => [64256],
            'characters' => "\xEF\xAC\x80",
        ],
        '&ffllig;' => [
            'codepoints' => [64260],
            'characters' => "\xEF\xAC\x84",
        ],
        '&ffr;' => [
            'codepoints' => [120099],
            'characters' => "\xF0\x9D\x94\xA3",
        ],
        '&filig;' => [
            'codepoints' => [64257],
            'characters' => "\xEF\xAC\x81",
        ],
        '&fjlig;' => [
            'codepoints' => [102, 106],
            'characters' => "\x66\x6A",
        ],
        '&flat;' => [
            'codepoints' => [9837],
            'characters' => "\xE2\x99\xAD",
        ],
        '&fllig;' => [
            'codepoints' => [64258],
            'characters' => "\xEF\xAC\x82",
        ],
        '&fltns;' => [
            'codepoints' => [9649],
            'characters' => "\xE2\x96\xB1",
        ],
        '&fnof;' => [
            'codepoints' => [402],
            'characters' => "\xC6\x92",
        ],
        '&fopf;' => [
            'codepoints' => [120151],
            'characters' => "\xF0\x9D\x95\x97",
        ],
        '&forall;' => [
            'codepoints' => [8704],
            'characters' => "\xE2\x88\x80",
        ],
        '&fork;' => [
            'codepoints' => [8916],
            'characters' => "\xE2\x8B\x94",
        ],
        '&forkv;' => [
            'codepoints' => [10969],
            'characters' => "\xE2\xAB\x99",
        ],
        '&fpartint;' => [
            'codepoints' => [10765],
            'characters' => "\xE2\xA8\x8D",
        ],
        '&frac12' => [
            'codepoints' => [189],
            'characters' => "\xC2\xBD",
        ],
        '&frac12;' => [
            'codepoints' => [189],
            'characters' => "\xC2\xBD",
        ],
        '&frac13;' => [
            'codepoints' => [8531],
            'characters' => "\xE2\x85\x93",
        ],
        '&frac14' => [
            'codepoints' => [188],
            'characters' => "\xC2\xBC",
        ],
        '&frac14;' => [
            'codepoints' => [188],
            'characters' => "\xC2\xBC",
        ],
        '&frac15;' => [
            'codepoints' => [8533],
            'characters' => "\xE2\x85\x95",
        ],
        '&frac16;' => [
            'codepoints' => [8537],
            'characters' => "\xE2\x85\x99",
        ],
        '&frac18;' => [
            'codepoints' => [8539],
            'characters' => "\xE2\x85\x9B",
        ],
        '&frac23;' => [
            'codepoints' => [8532],
            'characters' => "\xE2\x85\x94",
        ],
        '&frac25;' => [
            'codepoints' => [8534],
            'characters' => "\xE2\x85\x96",
        ],
        '&frac34' => [
            'codepoints' => [190],
            'characters' => "\xC2\xBE",
        ],
        '&frac34;' => [
            'codepoints' => [190],
            'characters' => "\xC2\xBE",
        ],
        '&frac35;' => [
            'codepoints' => [8535],
            'characters' => "\xE2\x85\x97",
        ],
        '&frac38;' => [
            'codepoints' => [8540],
            'characters' => "\xE2\x85\x9C",
        ],
        '&frac45;' => [
            'codepoints' => [8536],
            'characters' => "\xE2\x85\x98",
        ],
        '&frac56;' => [
            'codepoints' => [8538],
            'characters' => "\xE2\x85\x9A",
        ],
        '&frac58;' => [
            'codepoints' => [8541],
            'characters' => "\xE2\x85\x9D",
        ],
        '&frac78;' => [
            'codepoints' => [8542],
            'characters' => "\xE2\x85\x9E",
        ],
        '&frasl;' => [
            'codepoints' => [8260],
            'characters' => "\xE2\x81\x84",
        ],
        '&frown;' => [
            'codepoints' => [8994],
            'characters' => "\xE2\x8C\xA2",
        ],
        '&fscr;' => [
            'codepoints' => [119995],
            'characters' => "\xF0\x9D\x92\xBB",
        ],
        '&gE;' => [
            'codepoints' => [8807],
            'characters' => "\xE2\x89\xA7",
        ],
        '&gEl;' => [
            'codepoints' => [10892],
            'characters' => "\xE2\xAA\x8C",
        ],
        '&gacute;' => [
            'codepoints' => [501],
            'characters' => "\xC7\xB5",
        ],
        '&gamma;' => [
            'codepoints' => [947],
            'characters' => "\xCE\xB3",
        ],
        '&gammad;' => [
            'codepoints' => [989],
            'characters' => "\xCF\x9D",
        ],
        '&gap;' => [
            'codepoints' => [10886],
            'characters' => "\xE2\xAA\x86",
        ],
        '&gbreve;' => [
            'codepoints' => [287],
            'characters' => "\xC4\x9F",
        ],
        '&gcirc;' => [
            'codepoints' => [285],
            'characters' => "\xC4\x9D",
        ],
        '&gcy;' => [
            'codepoints' => [1075],
            'characters' => "\xD0\xB3",
        ],
        '&gdot;' => [
            'codepoints' => [289],
            'characters' => "\xC4\xA1",
        ],
        '&ge;' => [
            'codepoints' => [8805],
            'characters' => "\xE2\x89\xA5",
        ],
        '&gel;' => [
            'codepoints' => [8923],
            'characters' => "\xE2\x8B\x9B",
        ],
        '&geq;' => [
            'codepoints' => [8805],
            'characters' => "\xE2\x89\xA5",
        ],
        '&geqq;' => [
            'codepoints' => [8807],
            'characters' => "\xE2\x89\xA7",
        ],
        '&geqslant;' => [
            'codepoints' => [10878],
            'characters' => "\xE2\xA9\xBE",
        ],
        '&ges;' => [
            'codepoints' => [10878],
            'characters' => "\xE2\xA9\xBE",
        ],
        '&gescc;' => [
            'codepoints' => [10921],
            'characters' => "\xE2\xAA\xA9",
        ],
        '&gesdot;' => [
            'codepoints' => [10880],
            'characters' => "\xE2\xAA\x80",
        ],
        '&gesdoto;' => [
            'codepoints' => [10882],
            'characters' => "\xE2\xAA\x82",
        ],
        '&gesdotol;' => [
            'codepoints' => [10884],
            'characters' => "\xE2\xAA\x84",
        ],
        '&gesl;' => [
            'codepoints' => [8923, 65024],
            'characters' => "\xE2\x8B\x9B\xEF\xB8\x80",
        ],
        '&gesles;' => [
            'codepoints' => [10900],
            'characters' => "\xE2\xAA\x94",
        ],
        '&gfr;' => [
            'codepoints' => [120100],
            'characters' => "\xF0\x9D\x94\xA4",
        ],
        '&gg;' => [
            'codepoints' => [8811],
            'characters' => "\xE2\x89\xAB",
        ],
        '&ggg;' => [
            'codepoints' => [8921],
            'characters' => "\xE2\x8B\x99",
        ],
        '&gimel;' => [
            'codepoints' => [8503],
            'characters' => "\xE2\x84\xB7",
        ],
        '&gjcy;' => [
            'codepoints' => [1107],
            'characters' => "\xD1\x93",
        ],
        '&gl;' => [
            'codepoints' => [8823],
            'characters' => "\xE2\x89\xB7",
        ],
        '&glE;' => [
            'codepoints' => [10898],
            'characters' => "\xE2\xAA\x92",
        ],
        '&gla;' => [
            'codepoints' => [10917],
            'characters' => "\xE2\xAA\xA5",
        ],
        '&glj;' => [
            'codepoints' => [10916],
            'characters' => "\xE2\xAA\xA4",
        ],
        '&gnE;' => [
            'codepoints' => [8809],
            'characters' => "\xE2\x89\xA9",
        ],
        '&gnap;' => [
            'codepoints' => [10890],
            'characters' => "\xE2\xAA\x8A",
        ],
        '&gnapprox;' => [
            'codepoints' => [10890],
            'characters' => "\xE2\xAA\x8A",
        ],
        '&gne;' => [
            'codepoints' => [10888],
            'characters' => "\xE2\xAA\x88",
        ],
        '&gneq;' => [
            'codepoints' => [10888],
            'characters' => "\xE2\xAA\x88",
        ],
        '&gneqq;' => [
            'codepoints' => [8809],
            'characters' => "\xE2\x89\xA9",
        ],
        '&gnsim;' => [
            'codepoints' => [8935],
            'characters' => "\xE2\x8B\xA7",
        ],
        '&gopf;' => [
            'codepoints' => [120152],
            'characters' => "\xF0\x9D\x95\x98",
        ],
        '&grave;' => [
            'codepoints' => [96],
            'characters' => "\x60",
        ],
        '&gscr;' => [
            'codepoints' => [8458],
            'characters' => "\xE2\x84\x8A",
        ],
        '&gsim;' => [
            'codepoints' => [8819],
            'characters' => "\xE2\x89\xB3",
        ],
        '&gsime;' => [
            'codepoints' => [10894],
            'characters' => "\xE2\xAA\x8E",
        ],
        '&gsiml;' => [
            'codepoints' => [10896],
            'characters' => "\xE2\xAA\x90",
        ],
        '&gt' => [
            'codepoints' => [62],
            'characters' => "\x3E",
        ],
        '&gt;' => [
            'codepoints' => [62],
            'characters' => "\x3E",
        ],
        '&gtcc;' => [
            'codepoints' => [10919],
            'characters' => "\xE2\xAA\xA7",
        ],
        '&gtcir;' => [
            'codepoints' => [10874],
            'characters' => "\xE2\xA9\xBA",
        ],
        '&gtdot;' => [
            'codepoints' => [8919],
            'characters' => "\xE2\x8B\x97",
        ],
        '&gtlPar;' => [
            'codepoints' => [10645],
            'characters' => "\xE2\xA6\x95",
        ],
        '&gtquest;' => [
            'codepoints' => [10876],
            'characters' => "\xE2\xA9\xBC",
        ],
        '&gtrapprox;' => [
            'codepoints' => [10886],
            'characters' => "\xE2\xAA\x86",
        ],
        '&gtrarr;' => [
            'codepoints' => [10616],
            'characters' => "\xE2\xA5\xB8",
        ],
        '&gtrdot;' => [
            'codepoints' => [8919],
            'characters' => "\xE2\x8B\x97",
        ],
        '&gtreqless;' => [
            'codepoints' => [8923],
            'characters' => "\xE2\x8B\x9B",
        ],
        '&gtreqqless;' => [
            'codepoints' => [10892],
            'characters' => "\xE2\xAA\x8C",
        ],
        '&gtrless;' => [
            'codepoints' => [8823],
            'characters' => "\xE2\x89\xB7",
        ],
        '&gtrsim;' => [
            'codepoints' => [8819],
            'characters' => "\xE2\x89\xB3",
        ],
        '&gvertneqq;' => [
            'codepoints' => [8809, 65024],
            'characters' => "\xE2\x89\xA9\xEF\xB8\x80",
        ],
        '&gvnE;' => [
            'codepoints' => [8809, 65024],
            'characters' => "\xE2\x89\xA9\xEF\xB8\x80",
        ],
        '&hArr;' => [
            'codepoints' => [8660],
            'characters' => "\xE2\x87\x94",
        ],
        '&hairsp;' => [
            'codepoints' => [8202],
            'characters' => "\xE2\x80\x8A",
        ],
        '&half;' => [
            'codepoints' => [189],
            'characters' => "\xC2\xBD",
        ],
        '&hamilt;' => [
            'codepoints' => [8459],
            'characters' => "\xE2\x84\x8B",
        ],
        '&hardcy;' => [
            'codepoints' => [1098],
            'characters' => "\xD1\x8A",
        ],
        '&harr;' => [
            'codepoints' => [8596],
            'characters' => "\xE2\x86\x94",
        ],
        '&harrcir;' => [
            'codepoints' => [10568],
            'characters' => "\xE2\xA5\x88",
        ],
        '&harrw;' => [
            'codepoints' => [8621],
            'characters' => "\xE2\x86\xAD",
        ],
        '&hbar;' => [
            'codepoints' => [8463],
            'characters' => "\xE2\x84\x8F",
        ],
        '&hcirc;' => [
            'codepoints' => [293],
            'characters' => "\xC4\xA5",
        ],
        '&hearts;' => [
            'codepoints' => [9829],
            'characters' => "\xE2\x99\xA5",
        ],
        '&heartsuit;' => [
            'codepoints' => [9829],
            'characters' => "\xE2\x99\xA5",
        ],
        '&hellip;' => [
            'codepoints' => [8230],
            'characters' => "\xE2\x80\xA6",
        ],
        '&hercon;' => [
            'codepoints' => [8889],
            'characters' => "\xE2\x8A\xB9",
        ],
        '&hfr;' => [
            'codepoints' => [120101],
            'characters' => "\xF0\x9D\x94\xA5",
        ],
        '&hksearow;' => [
            'codepoints' => [10533],
            'characters' => "\xE2\xA4\xA5",
        ],
        '&hkswarow;' => [
            'codepoints' => [10534],
            'characters' => "\xE2\xA4\xA6",
        ],
        '&hoarr;' => [
            'codepoints' => [8703],
            'characters' => "\xE2\x87\xBF",
        ],
        '&homtht;' => [
            'codepoints' => [8763],
            'characters' => "\xE2\x88\xBB",
        ],
        '&hookleftarrow;' => [
            'codepoints' => [8617],
            'characters' => "\xE2\x86\xA9",
        ],
        '&hookrightarrow;' => [
            'codepoints' => [8618],
            'characters' => "\xE2\x86\xAA",
        ],
        '&hopf;' => [
            'codepoints' => [120153],
            'characters' => "\xF0\x9D\x95\x99",
        ],
        '&horbar;' => [
            'codepoints' => [8213],
            'characters' => "\xE2\x80\x95",
        ],
        '&hscr;' => [
            'codepoints' => [119997],
            'characters' => "\xF0\x9D\x92\xBD",
        ],
        '&hslash;' => [
            'codepoints' => [8463],
            'characters' => "\xE2\x84\x8F",
        ],
        '&hstrok;' => [
            'codepoints' => [295],
            'characters' => "\xC4\xA7",
        ],
        '&hybull;' => [
            'codepoints' => [8259],
            'characters' => "\xE2\x81\x83",
        ],
        '&hyphen;' => [
            'codepoints' => [8208],
            'characters' => "\xE2\x80\x90",
        ],
        '&iacute' => [
            'codepoints' => [237],
            'characters' => "\xC3\xAD",
        ],
        '&iacute;' => [
            'codepoints' => [237],
            'characters' => "\xC3\xAD",
        ],
        '&ic;' => [
            'codepoints' => [8291],
            'characters' => "\xE2\x81\xA3",
        ],
        '&icirc' => [
            'codepoints' => [238],
            'characters' => "\xC3\xAE",
        ],
        '&icirc;' => [
            'codepoints' => [238],
            'characters' => "\xC3\xAE",
        ],
        '&icy;' => [
            'codepoints' => [1080],
            'characters' => "\xD0\xB8",
        ],
        '&iecy;' => [
            'codepoints' => [1077],
            'characters' => "\xD0\xB5",
        ],
        '&iexcl' => [
            'codepoints' => [161],
            'characters' => "\xC2\xA1",
        ],
        '&iexcl;' => [
            'codepoints' => [161],
            'characters' => "\xC2\xA1",
        ],
        '&iff;' => [
            'codepoints' => [8660],
            'characters' => "\xE2\x87\x94",
        ],
        '&ifr;' => [
            'codepoints' => [120102],
            'characters' => "\xF0\x9D\x94\xA6",
        ],
        '&igrave' => [
            'codepoints' => [236],
            'characters' => "\xC3\xAC",
        ],
        '&igrave;' => [
            'codepoints' => [236],
            'characters' => "\xC3\xAC",
        ],
        '&ii;' => [
            'codepoints' => [8520],
            'characters' => "\xE2\x85\x88",
        ],
        '&iiiint;' => [
            'codepoints' => [10764],
            'characters' => "\xE2\xA8\x8C",
        ],
        '&iiint;' => [
            'codepoints' => [8749],
            'characters' => "\xE2\x88\xAD",
        ],
        '&iinfin;' => [
            'codepoints' => [10716],
            'characters' => "\xE2\xA7\x9C",
        ],
        '&iiota;' => [
            'codepoints' => [8489],
            'characters' => "\xE2\x84\xA9",
        ],
        '&ijlig;' => [
            'codepoints' => [307],
            'characters' => "\xC4\xB3",
        ],
        '&imacr;' => [
            'codepoints' => [299],
            'characters' => "\xC4\xAB",
        ],
        '&image;' => [
            'codepoints' => [8465],
            'characters' => "\xE2\x84\x91",
        ],
        '&imagline;' => [
            'codepoints' => [8464],
            'characters' => "\xE2\x84\x90",
        ],
        '&imagpart;' => [
            'codepoints' => [8465],
            'characters' => "\xE2\x84\x91",
        ],
        '&imath;' => [
            'codepoints' => [305],
            'characters' => "\xC4\xB1",
        ],
        '&imof;' => [
            'codepoints' => [8887],
            'characters' => "\xE2\x8A\xB7",
        ],
        '&imped;' => [
            'codepoints' => [437],
            'characters' => "\xC6\xB5",
        ],
        '&in;' => [
            'codepoints' => [8712],
            'characters' => "\xE2\x88\x88",
        ],
        '&incare;' => [
            'codepoints' => [8453],
            'characters' => "\xE2\x84\x85",
        ],
        '&infin;' => [
            'codepoints' => [8734],
            'characters' => "\xE2\x88\x9E",
        ],
        '&infintie;' => [
            'codepoints' => [10717],
            'characters' => "\xE2\xA7\x9D",
        ],
        '&inodot;' => [
            'codepoints' => [305],
            'characters' => "\xC4\xB1",
        ],
        '&int;' => [
            'codepoints' => [8747],
            'characters' => "\xE2\x88\xAB",
        ],
        '&intcal;' => [
            'codepoints' => [8890],
            'characters' => "\xE2\x8A\xBA",
        ],
        '&integers;' => [
            'codepoints' => [8484],
            'characters' => "\xE2\x84\xA4",
        ],
        '&intercal;' => [
            'codepoints' => [8890],
            'characters' => "\xE2\x8A\xBA",
        ],
        '&intlarhk;' => [
            'codepoints' => [10775],
            'characters' => "\xE2\xA8\x97",
        ],
        '&intprod;' => [
            'codepoints' => [10812],
            'characters' => "\xE2\xA8\xBC",
        ],
        '&iocy;' => [
            'codepoints' => [1105],
            'characters' => "\xD1\x91",
        ],
        '&iogon;' => [
            'codepoints' => [303],
            'characters' => "\xC4\xAF",
        ],
        '&iopf;' => [
            'codepoints' => [120154],
            'characters' => "\xF0\x9D\x95\x9A",
        ],
        '&iota;' => [
            'codepoints' => [953],
            'characters' => "\xCE\xB9",
        ],
        '&iprod;' => [
            'codepoints' => [10812],
            'characters' => "\xE2\xA8\xBC",
        ],
        '&iquest' => [
            'codepoints' => [191],
            'characters' => "\xC2\xBF",
        ],
        '&iquest;' => [
            'codepoints' => [191],
            'characters' => "\xC2\xBF",
        ],
        '&iscr;' => [
            'codepoints' => [119998],
            'characters' => "\xF0\x9D\x92\xBE",
        ],
        '&isin;' => [
            'codepoints' => [8712],
            'characters' => "\xE2\x88\x88",
        ],
        '&isinE;' => [
            'codepoints' => [8953],
            'characters' => "\xE2\x8B\xB9",
        ],
        '&isindot;' => [
            'codepoints' => [8949],
            'characters' => "\xE2\x8B\xB5",
        ],
        '&isins;' => [
            'codepoints' => [8948],
            'characters' => "\xE2\x8B\xB4",
        ],
        '&isinsv;' => [
            'codepoints' => [8947],
            'characters' => "\xE2\x8B\xB3",
        ],
        '&isinv;' => [
            'codepoints' => [8712],
            'characters' => "\xE2\x88\x88",
        ],
        '&it;' => [
            'codepoints' => [8290],
            'characters' => "\xE2\x81\xA2",
        ],
        '&itilde;' => [
            'codepoints' => [297],
            'characters' => "\xC4\xA9",
        ],
        '&iukcy;' => [
            'codepoints' => [1110],
            'characters' => "\xD1\x96",
        ],
        '&iuml' => [
            'codepoints' => [239],
            'characters' => "\xC3\xAF",
        ],
        '&iuml;' => [
            'codepoints' => [239],
            'characters' => "\xC3\xAF",
        ],
        '&jcirc;' => [
            'codepoints' => [309],
            'characters' => "\xC4\xB5",
        ],
        '&jcy;' => [
            'codepoints' => [1081],
            'characters' => "\xD0\xB9",
        ],
        '&jfr;' => [
            'codepoints' => [120103],
            'characters' => "\xF0\x9D\x94\xA7",
        ],
        '&jmath;' => [
            'codepoints' => [567],
            'characters' => "\xC8\xB7",
        ],
        '&jopf;' => [
            'codepoints' => [120155],
            'characters' => "\xF0\x9D\x95\x9B",
        ],
        '&jscr;' => [
            'codepoints' => [119999],
            'characters' => "\xF0\x9D\x92\xBF",
        ],
        '&jsercy;' => [
            'codepoints' => [1112],
            'characters' => "\xD1\x98",
        ],
        '&jukcy;' => [
            'codepoints' => [1108],
            'characters' => "\xD1\x94",
        ],
        '&kappa;' => [
            'codepoints' => [954],
            'characters' => "\xCE\xBA",
        ],
        '&kappav;' => [
            'codepoints' => [1008],
            'characters' => "\xCF\xB0",
        ],
        '&kcedil;' => [
            'codepoints' => [311],
            'characters' => "\xC4\xB7",
        ],
        '&kcy;' => [
            'codepoints' => [1082],
            'characters' => "\xD0\xBA",
        ],
        '&kfr;' => [
            'codepoints' => [120104],
            'characters' => "\xF0\x9D\x94\xA8",
        ],
        '&kgreen;' => [
            'codepoints' => [312],
            'characters' => "\xC4\xB8",
        ],
        '&khcy;' => [
            'codepoints' => [1093],
            'characters' => "\xD1\x85",
        ],
        '&kjcy;' => [
            'codepoints' => [1116],
            'characters' => "\xD1\x9C",
        ],
        '&kopf;' => [
            'codepoints' => [120156],
            'characters' => "\xF0\x9D\x95\x9C",
        ],
        '&kscr;' => [
            'codepoints' => [120000],
            'characters' => "\xF0\x9D\x93\x80",
        ],
        '&lAarr;' => [
            'codepoints' => [8666],
            'characters' => "\xE2\x87\x9A",
        ],
        '&lArr;' => [
            'codepoints' => [8656],
            'characters' => "\xE2\x87\x90",
        ],
        '&lAtail;' => [
            'codepoints' => [10523],
            'characters' => "\xE2\xA4\x9B",
        ],
        '&lBarr;' => [
            'codepoints' => [10510],
            'characters' => "\xE2\xA4\x8E",
        ],
        '&lE;' => [
            'codepoints' => [8806],
            'characters' => "\xE2\x89\xA6",
        ],
        '&lEg;' => [
            'codepoints' => [10891],
            'characters' => "\xE2\xAA\x8B",
        ],
        '&lHar;' => [
            'codepoints' => [10594],
            'characters' => "\xE2\xA5\xA2",
        ],
        '&lacute;' => [
            'codepoints' => [314],
            'characters' => "\xC4\xBA",
        ],
        '&laemptyv;' => [
            'codepoints' => [10676],
            'characters' => "\xE2\xA6\xB4",
        ],
        '&lagran;' => [
            'codepoints' => [8466],
            'characters' => "\xE2\x84\x92",
        ],
        '&lambda;' => [
            'codepoints' => [955],
            'characters' => "\xCE\xBB",
        ],
        '&lang;' => [
            'codepoints' => [10216],
            'characters' => "\xE2\x9F\xA8",
        ],
        '&langd;' => [
            'codepoints' => [10641],
            'characters' => "\xE2\xA6\x91",
        ],
        '&langle;' => [
            'codepoints' => [10216],
            'characters' => "\xE2\x9F\xA8",
        ],
        '&lap;' => [
            'codepoints' => [10885],
            'characters' => "\xE2\xAA\x85",
        ],
        '&laquo' => [
            'codepoints' => [171],
            'characters' => "\xC2\xAB",
        ],
        '&laquo;' => [
            'codepoints' => [171],
            'characters' => "\xC2\xAB",
        ],
        '&larr;' => [
            'codepoints' => [8592],
            'characters' => "\xE2\x86\x90",
        ],
        '&larrb;' => [
            'codepoints' => [8676],
            'characters' => "\xE2\x87\xA4",
        ],
        '&larrbfs;' => [
            'codepoints' => [10527],
            'characters' => "\xE2\xA4\x9F",
        ],
        '&larrfs;' => [
            'codepoints' => [10525],
            'characters' => "\xE2\xA4\x9D",
        ],
        '&larrhk;' => [
            'codepoints' => [8617],
            'characters' => "\xE2\x86\xA9",
        ],
        '&larrlp;' => [
            'codepoints' => [8619],
            'characters' => "\xE2\x86\xAB",
        ],
        '&larrpl;' => [
            'codepoints' => [10553],
            'characters' => "\xE2\xA4\xB9",
        ],
        '&larrsim;' => [
            'codepoints' => [10611],
            'characters' => "\xE2\xA5\xB3",
        ],
        '&larrtl;' => [
            'codepoints' => [8610],
            'characters' => "\xE2\x86\xA2",
        ],
        '&lat;' => [
            'codepoints' => [10923],
            'characters' => "\xE2\xAA\xAB",
        ],
        '&latail;' => [
            'codepoints' => [10521],
            'characters' => "\xE2\xA4\x99",
        ],
        '&late;' => [
            'codepoints' => [10925],
            'characters' => "\xE2\xAA\xAD",
        ],
        '&lates;' => [
            'codepoints' => [10925, 65024],
            'characters' => "\xE2\xAA\xAD\xEF\xB8\x80",
        ],
        '&lbarr;' => [
            'codepoints' => [10508],
            'characters' => "\xE2\xA4\x8C",
        ],
        '&lbbrk;' => [
            'codepoints' => [10098],
            'characters' => "\xE2\x9D\xB2",
        ],
        '&lbrace;' => [
            'codepoints' => [123],
            'characters' => "\x7B",
        ],
        '&lbrack;' => [
            'codepoints' => [91],
            'characters' => "\x5B",
        ],
        '&lbrke;' => [
            'codepoints' => [10635],
            'characters' => "\xE2\xA6\x8B",
        ],
        '&lbrksld;' => [
            'codepoints' => [10639],
            'characters' => "\xE2\xA6\x8F",
        ],
        '&lbrkslu;' => [
            'codepoints' => [10637],
            'characters' => "\xE2\xA6\x8D",
        ],
        '&lcaron;' => [
            'codepoints' => [318],
            'characters' => "\xC4\xBE",
        ],
        '&lcedil;' => [
            'codepoints' => [316],
            'characters' => "\xC4\xBC",
        ],
        '&lceil;' => [
            'codepoints' => [8968],
            'characters' => "\xE2\x8C\x88",
        ],
        '&lcub;' => [
            'codepoints' => [123],
            'characters' => "\x7B",
        ],
        '&lcy;' => [
            'codepoints' => [1083],
            'characters' => "\xD0\xBB",
        ],
        '&ldca;' => [
            'codepoints' => [10550],
            'characters' => "\xE2\xA4\xB6",
        ],
        '&ldquo;' => [
            'codepoints' => [8220],
            'characters' => "\xE2\x80\x9C",
        ],
        '&ldquor;' => [
            'codepoints' => [8222],
            'characters' => "\xE2\x80\x9E",
        ],
        '&ldrdhar;' => [
            'codepoints' => [10599],
            'characters' => "\xE2\xA5\xA7",
        ],
        '&ldrushar;' => [
            'codepoints' => [10571],
            'characters' => "\xE2\xA5\x8B",
        ],
        '&ldsh;' => [
            'codepoints' => [8626],
            'characters' => "\xE2\x86\xB2",
        ],
        '&le;' => [
            'codepoints' => [8804],
            'characters' => "\xE2\x89\xA4",
        ],
        '&leftarrow;' => [
            'codepoints' => [8592],
            'characters' => "\xE2\x86\x90",
        ],
        '&leftarrowtail;' => [
            'codepoints' => [8610],
            'characters' => "\xE2\x86\xA2",
        ],
        '&leftharpoondown;' => [
            'codepoints' => [8637],
            'characters' => "\xE2\x86\xBD",
        ],
        '&leftharpoonup;' => [
            'codepoints' => [8636],
            'characters' => "\xE2\x86\xBC",
        ],
        '&leftleftarrows;' => [
            'codepoints' => [8647],
            'characters' => "\xE2\x87\x87",
        ],
        '&leftrightarrow;' => [
            'codepoints' => [8596],
            'characters' => "\xE2\x86\x94",
        ],
        '&leftrightarrows;' => [
            'codepoints' => [8646],
            'characters' => "\xE2\x87\x86",
        ],
        '&leftrightharpoons;' => [
            'codepoints' => [8651],
            'characters' => "\xE2\x87\x8B",
        ],
        '&leftrightsquigarrow;' => [
            'codepoints' => [8621],
            'characters' => "\xE2\x86\xAD",
        ],
        '&leftthreetimes;' => [
            'codepoints' => [8907],
            'characters' => "\xE2\x8B\x8B",
        ],
        '&leg;' => [
            'codepoints' => [8922],
            'characters' => "\xE2\x8B\x9A",
        ],
        '&leq;' => [
            'codepoints' => [8804],
            'characters' => "\xE2\x89\xA4",
        ],
        '&leqq;' => [
            'codepoints' => [8806],
            'characters' => "\xE2\x89\xA6",
        ],
        '&leqslant;' => [
            'codepoints' => [10877],
            'characters' => "\xE2\xA9\xBD",
        ],
        '&les;' => [
            'codepoints' => [10877],
            'characters' => "\xE2\xA9\xBD",
        ],
        '&lescc;' => [
            'codepoints' => [10920],
            'characters' => "\xE2\xAA\xA8",
        ],
        '&lesdot;' => [
            'codepoints' => [10879],
            'characters' => "\xE2\xA9\xBF",
        ],
        '&lesdoto;' => [
            'codepoints' => [10881],
            'characters' => "\xE2\xAA\x81",
        ],
        '&lesdotor;' => [
            'codepoints' => [10883],
            'characters' => "\xE2\xAA\x83",
        ],
        '&lesg;' => [
            'codepoints' => [8922, 65024],
            'characters' => "\xE2\x8B\x9A\xEF\xB8\x80",
        ],
        '&lesges;' => [
            'codepoints' => [10899],
            'characters' => "\xE2\xAA\x93",
        ],
        '&lessapprox;' => [
            'codepoints' => [10885],
            'characters' => "\xE2\xAA\x85",
        ],
        '&lessdot;' => [
            'codepoints' => [8918],
            'characters' => "\xE2\x8B\x96",
        ],
        '&lesseqgtr;' => [
            'codepoints' => [8922],
            'characters' => "\xE2\x8B\x9A",
        ],
        '&lesseqqgtr;' => [
            'codepoints' => [10891],
            'characters' => "\xE2\xAA\x8B",
        ],
        '&lessgtr;' => [
            'codepoints' => [8822],
            'characters' => "\xE2\x89\xB6",
        ],
        '&lesssim;' => [
            'codepoints' => [8818],
            'characters' => "\xE2\x89\xB2",
        ],
        '&lfisht;' => [
            'codepoints' => [10620],
            'characters' => "\xE2\xA5\xBC",
        ],
        '&lfloor;' => [
            'codepoints' => [8970],
            'characters' => "\xE2\x8C\x8A",
        ],
        '&lfr;' => [
            'codepoints' => [120105],
            'characters' => "\xF0\x9D\x94\xA9",
        ],
        '&lg;' => [
            'codepoints' => [8822],
            'characters' => "\xE2\x89\xB6",
        ],
        '&lgE;' => [
            'codepoints' => [10897],
            'characters' => "\xE2\xAA\x91",
        ],
        '&lhard;' => [
            'codepoints' => [8637],
            'characters' => "\xE2\x86\xBD",
        ],
        '&lharu;' => [
            'codepoints' => [8636],
            'characters' => "\xE2\x86\xBC",
        ],
        '&lharul;' => [
            'codepoints' => [10602],
            'characters' => "\xE2\xA5\xAA",
        ],
        '&lhblk;' => [
            'codepoints' => [9604],
            'characters' => "\xE2\x96\x84",
        ],
        '&ljcy;' => [
            'codepoints' => [1113],
            'characters' => "\xD1\x99",
        ],
        '&ll;' => [
            'codepoints' => [8810],
            'characters' => "\xE2\x89\xAA",
        ],
        '&llarr;' => [
            'codepoints' => [8647],
            'characters' => "\xE2\x87\x87",
        ],
        '&llcorner;' => [
            'codepoints' => [8990],
            'characters' => "\xE2\x8C\x9E",
        ],
        '&llhard;' => [
            'codepoints' => [10603],
            'characters' => "\xE2\xA5\xAB",
        ],
        '&lltri;' => [
            'codepoints' => [9722],
            'characters' => "\xE2\x97\xBA",
        ],
        '&lmidot;' => [
            'codepoints' => [320],
            'characters' => "\xC5\x80",
        ],
        '&lmoust;' => [
            'codepoints' => [9136],
            'characters' => "\xE2\x8E\xB0",
        ],
        '&lmoustache;' => [
            'codepoints' => [9136],
            'characters' => "\xE2\x8E\xB0",
        ],
        '&lnE;' => [
            'codepoints' => [8808],
            'characters' => "\xE2\x89\xA8",
        ],
        '&lnap;' => [
            'codepoints' => [10889],
            'characters' => "\xE2\xAA\x89",
        ],
        '&lnapprox;' => [
            'codepoints' => [10889],
            'characters' => "\xE2\xAA\x89",
        ],
        '&lne;' => [
            'codepoints' => [10887],
            'characters' => "\xE2\xAA\x87",
        ],
        '&lneq;' => [
            'codepoints' => [10887],
            'characters' => "\xE2\xAA\x87",
        ],
        '&lneqq;' => [
            'codepoints' => [8808],
            'characters' => "\xE2\x89\xA8",
        ],
        '&lnsim;' => [
            'codepoints' => [8934],
            'characters' => "\xE2\x8B\xA6",
        ],
        '&loang;' => [
            'codepoints' => [10220],
            'characters' => "\xE2\x9F\xAC",
        ],
        '&loarr;' => [
            'codepoints' => [8701],
            'characters' => "\xE2\x87\xBD",
        ],
        '&lobrk;' => [
            'codepoints' => [10214],
            'characters' => "\xE2\x9F\xA6",
        ],
        '&longleftarrow;' => [
            'codepoints' => [10229],
            'characters' => "\xE2\x9F\xB5",
        ],
        '&longleftrightarrow;' => [
            'codepoints' => [10231],
            'characters' => "\xE2\x9F\xB7",
        ],
        '&longmapsto;' => [
            'codepoints' => [10236],
            'characters' => "\xE2\x9F\xBC",
        ],
        '&longrightarrow;' => [
            'codepoints' => [10230],
            'characters' => "\xE2\x9F\xB6",
        ],
        '&looparrowleft;' => [
            'codepoints' => [8619],
            'characters' => "\xE2\x86\xAB",
        ],
        '&looparrowright;' => [
            'codepoints' => [8620],
            'characters' => "\xE2\x86\xAC",
        ],
        '&lopar;' => [
            'codepoints' => [10629],
            'characters' => "\xE2\xA6\x85",
        ],
        '&lopf;' => [
            'codepoints' => [120157],
            'characters' => "\xF0\x9D\x95\x9D",
        ],
        '&loplus;' => [
            'codepoints' => [10797],
            'characters' => "\xE2\xA8\xAD",
        ],
        '&lotimes;' => [
            'codepoints' => [10804],
            'characters' => "\xE2\xA8\xB4",
        ],
        '&lowast;' => [
            'codepoints' => [8727],
            'characters' => "\xE2\x88\x97",
        ],
        '&lowbar;' => [
            'codepoints' => [95],
            'characters' => "\x5F",
        ],
        '&loz;' => [
            'codepoints' => [9674],
            'characters' => "\xE2\x97\x8A",
        ],
        '&lozenge;' => [
            'codepoints' => [9674],
            'characters' => "\xE2\x97\x8A",
        ],
        '&lozf;' => [
            'codepoints' => [10731],
            'characters' => "\xE2\xA7\xAB",
        ],
        '&lpar;' => [
            'codepoints' => [40],
            'characters' => "\x28",
        ],
        '&lparlt;' => [
            'codepoints' => [10643],
            'characters' => "\xE2\xA6\x93",
        ],
        '&lrarr;' => [
            'codepoints' => [8646],
            'characters' => "\xE2\x87\x86",
        ],
        '&lrcorner;' => [
            'codepoints' => [8991],
            'characters' => "\xE2\x8C\x9F",
        ],
        '&lrhar;' => [
            'codepoints' => [8651],
            'characters' => "\xE2\x87\x8B",
        ],
        '&lrhard;' => [
            'codepoints' => [10605],
            'characters' => "\xE2\xA5\xAD",
        ],
        '&lrm;' => [
            'codepoints' => [8206],
            'characters' => "\xE2\x80\x8E",
        ],
        '&lrtri;' => [
            'codepoints' => [8895],
            'characters' => "\xE2\x8A\xBF",
        ],
        '&lsaquo;' => [
            'codepoints' => [8249],
            'characters' => "\xE2\x80\xB9",
        ],
        '&lscr;' => [
            'codepoints' => [120001],
            'characters' => "\xF0\x9D\x93\x81",
        ],
        '&lsh;' => [
            'codepoints' => [8624],
            'characters' => "\xE2\x86\xB0",
        ],
        '&lsim;' => [
            'codepoints' => [8818],
            'characters' => "\xE2\x89\xB2",
        ],
        '&lsime;' => [
            'codepoints' => [10893],
            'characters' => "\xE2\xAA\x8D",
        ],
        '&lsimg;' => [
            'codepoints' => [10895],
            'characters' => "\xE2\xAA\x8F",
        ],
        '&lsqb;' => [
            'codepoints' => [91],
            'characters' => "\x5B",
        ],
        '&lsquo;' => [
            'codepoints' => [8216],
            'characters' => "\xE2\x80\x98",
        ],
        '&lsquor;' => [
            'codepoints' => [8218],
            'characters' => "\xE2\x80\x9A",
        ],
        '&lstrok;' => [
            'codepoints' => [322],
            'characters' => "\xC5\x82",
        ],
        '&lt' => [
            'codepoints' => [60],
            'characters' => "\x3C",
        ],
        '&lt;' => [
            'codepoints' => [60],
            'characters' => "\x3C",
        ],
        '&ltcc;' => [
            'codepoints' => [10918],
            'characters' => "\xE2\xAA\xA6",
        ],
        '&ltcir;' => [
            'codepoints' => [10873],
            'characters' => "\xE2\xA9\xB9",
        ],
        '&ltdot;' => [
            'codepoints' => [8918],
            'characters' => "\xE2\x8B\x96",
        ],
        '&lthree;' => [
            'codepoints' => [8907],
            'characters' => "\xE2\x8B\x8B",
        ],
        '&ltimes;' => [
            'codepoints' => [8905],
            'characters' => "\xE2\x8B\x89",
        ],
        '&ltlarr;' => [
            'codepoints' => [10614],
            'characters' => "\xE2\xA5\xB6",
        ],
        '&ltquest;' => [
            'codepoints' => [10875],
            'characters' => "\xE2\xA9\xBB",
        ],
        '&ltrPar;' => [
            'codepoints' => [10646],
            'characters' => "\xE2\xA6\x96",
        ],
        '&ltri;' => [
            'codepoints' => [9667],
            'characters' => "\xE2\x97\x83",
        ],
        '&ltrie;' => [
            'codepoints' => [8884],
            'characters' => "\xE2\x8A\xB4",
        ],
        '&ltrif;' => [
            'codepoints' => [9666],
            'characters' => "\xE2\x97\x82",
        ],
        '&lurdshar;' => [
            'codepoints' => [10570],
            'characters' => "\xE2\xA5\x8A",
        ],
        '&luruhar;' => [
            'codepoints' => [10598],
            'characters' => "\xE2\xA5\xA6",
        ],
        '&lvertneqq;' => [
            'codepoints' => [8808, 65024],
            'characters' => "\xE2\x89\xA8\xEF\xB8\x80",
        ],
        '&lvnE;' => [
            'codepoints' => [8808, 65024],
            'characters' => "\xE2\x89\xA8\xEF\xB8\x80",
        ],
        '&mDDot;' => [
            'codepoints' => [8762],
            'characters' => "\xE2\x88\xBA",
        ],
        '&macr' => [
            'codepoints' => [175],
            'characters' => "\xC2\xAF",
        ],
        '&macr;' => [
            'codepoints' => [175],
            'characters' => "\xC2\xAF",
        ],
        '&male;' => [
            'codepoints' => [9794],
            'characters' => "\xE2\x99\x82",
        ],
        '&malt;' => [
            'codepoints' => [10016],
            'characters' => "\xE2\x9C\xA0",
        ],
        '&maltese;' => [
            'codepoints' => [10016],
            'characters' => "\xE2\x9C\xA0",
        ],
        '&map;' => [
            'codepoints' => [8614],
            'characters' => "\xE2\x86\xA6",
        ],
        '&mapsto;' => [
            'codepoints' => [8614],
            'characters' => "\xE2\x86\xA6",
        ],
        '&mapstodown;' => [
            'codepoints' => [8615],
            'characters' => "\xE2\x86\xA7",
        ],
        '&mapstoleft;' => [
            'codepoints' => [8612],
            'characters' => "\xE2\x86\xA4",
        ],
        '&mapstoup;' => [
            'codepoints' => [8613],
            'characters' => "\xE2\x86\xA5",
        ],
        '&marker;' => [
            'codepoints' => [9646],
            'characters' => "\xE2\x96\xAE",
        ],
        '&mcomma;' => [
            'codepoints' => [10793],
            'characters' => "\xE2\xA8\xA9",
        ],
        '&mcy;' => [
            'codepoints' => [1084],
            'characters' => "\xD0\xBC",
        ],
        '&mdash;' => [
            'codepoints' => [8212],
            'characters' => "\xE2\x80\x94",
        ],
        '&measuredangle;' => [
            'codepoints' => [8737],
            'characters' => "\xE2\x88\xA1",
        ],
        '&mfr;' => [
            'codepoints' => [120106],
            'characters' => "\xF0\x9D\x94\xAA",
        ],
        '&mho;' => [
            'codepoints' => [8487],
            'characters' => "\xE2\x84\xA7",
        ],
        '&micro' => [
            'codepoints' => [181],
            'characters' => "\xC2\xB5",
        ],
        '&micro;' => [
            'codepoints' => [181],
            'characters' => "\xC2\xB5",
        ],
        '&mid;' => [
            'codepoints' => [8739],
            'characters' => "\xE2\x88\xA3",
        ],
        '&midast;' => [
            'codepoints' => [42],
            'characters' => "\x2A",
        ],
        '&midcir;' => [
            'codepoints' => [10992],
            'characters' => "\xE2\xAB\xB0",
        ],
        '&middot' => [
            'codepoints' => [183],
            'characters' => "\xC2\xB7",
        ],
        '&middot;' => [
            'codepoints' => [183],
            'characters' => "\xC2\xB7",
        ],
        '&minus;' => [
            'codepoints' => [8722],
            'characters' => "\xE2\x88\x92",
        ],
        '&minusb;' => [
            'codepoints' => [8863],
            'characters' => "\xE2\x8A\x9F",
        ],
        '&minusd;' => [
            'codepoints' => [8760],
            'characters' => "\xE2\x88\xB8",
        ],
        '&minusdu;' => [
            'codepoints' => [10794],
            'characters' => "\xE2\xA8\xAA",
        ],
        '&mlcp;' => [
            'codepoints' => [10971],
            'characters' => "\xE2\xAB\x9B",
        ],
        '&mldr;' => [
            'codepoints' => [8230],
            'characters' => "\xE2\x80\xA6",
        ],
        '&mnplus;' => [
            'codepoints' => [8723],
            'characters' => "\xE2\x88\x93",
        ],
        '&models;' => [
            'codepoints' => [8871],
            'characters' => "\xE2\x8A\xA7",
        ],
        '&mopf;' => [
            'codepoints' => [120158],
            'characters' => "\xF0\x9D\x95\x9E",
        ],
        '&mp;' => [
            'codepoints' => [8723],
            'characters' => "\xE2\x88\x93",
        ],
        '&mscr;' => [
            'codepoints' => [120002],
            'characters' => "\xF0\x9D\x93\x82",
        ],
        '&mstpos;' => [
            'codepoints' => [8766],
            'characters' => "\xE2\x88\xBE",
        ],
        '&mu;' => [
            'codepoints' => [956],
            'characters' => "\xCE\xBC",
        ],
        '&multimap;' => [
            'codepoints' => [8888],
            'characters' => "\xE2\x8A\xB8",
        ],
        '&mumap;' => [
            'codepoints' => [8888],
            'characters' => "\xE2\x8A\xB8",
        ],
        '&nGg;' => [
            'codepoints' => [8921, 824],
            'characters' => "\xE2\x8B\x99\xCC\xB8",
        ],
        '&nGt;' => [
            'codepoints' => [8811, 8402],
            'characters' => "\xE2\x89\xAB\xE2\x83\x92",
        ],
        '&nGtv;' => [
            'codepoints' => [8811, 824],
            'characters' => "\xE2\x89\xAB\xCC\xB8",
        ],
        '&nLeftarrow;' => [
            'codepoints' => [8653],
            'characters' => "\xE2\x87\x8D",
        ],
        '&nLeftrightarrow;' => [
            'codepoints' => [8654],
            'characters' => "\xE2\x87\x8E",
        ],
        '&nLl;' => [
            'codepoints' => [8920, 824],
            'characters' => "\xE2\x8B\x98\xCC\xB8",
        ],
        '&nLt;' => [
            'codepoints' => [8810, 8402],
            'characters' => "\xE2\x89\xAA\xE2\x83\x92",
        ],
        '&nLtv;' => [
            'codepoints' => [8810, 824],
            'characters' => "\xE2\x89\xAA\xCC\xB8",
        ],
        '&nRightarrow;' => [
            'codepoints' => [8655],
            'characters' => "\xE2\x87\x8F",
        ],
        '&nVDash;' => [
            'codepoints' => [8879],
            'characters' => "\xE2\x8A\xAF",
        ],
        '&nVdash;' => [
            'codepoints' => [8878],
            'characters' => "\xE2\x8A\xAE",
        ],
        '&nabla;' => [
            'codepoints' => [8711],
            'characters' => "\xE2\x88\x87",
        ],
        '&nacute;' => [
            'codepoints' => [324],
            'characters' => "\xC5\x84",
        ],
        '&nang;' => [
            'codepoints' => [8736, 8402],
            'characters' => "\xE2\x88\xA0\xE2\x83\x92",
        ],
        '&nap;' => [
            'codepoints' => [8777],
            'characters' => "\xE2\x89\x89",
        ],
        '&napE;' => [
            'codepoints' => [10864, 824],
            'characters' => "\xE2\xA9\xB0\xCC\xB8",
        ],
        '&napid;' => [
            'codepoints' => [8779, 824],
            'characters' => "\xE2\x89\x8B\xCC\xB8",
        ],
        '&napos;' => [
            'codepoints' => [329],
            'characters' => "\xC5\x89",
        ],
        '&napprox;' => [
            'codepoints' => [8777],
            'characters' => "\xE2\x89\x89",
        ],
        '&natur;' => [
            'codepoints' => [9838],
            'characters' => "\xE2\x99\xAE",
        ],
        '&natural;' => [
            'codepoints' => [9838],
            'characters' => "\xE2\x99\xAE",
        ],
        '&naturals;' => [
            'codepoints' => [8469],
            'characters' => "\xE2\x84\x95",
        ],
        '&nbsp' => [
            'codepoints' => [160],
            'characters' => "\xC2\xA0",
        ],
        '&nbsp;' => [
            'codepoints' => [160],
            'characters' => "\xC2\xA0",
        ],
        '&nbump;' => [
            'codepoints' => [8782, 824],
            'characters' => "\xE2\x89\x8E\xCC\xB8",
        ],
        '&nbumpe;' => [
            'codepoints' => [8783, 824],
            'characters' => "\xE2\x89\x8F\xCC\xB8",
        ],
        '&ncap;' => [
            'codepoints' => [10819],
            'characters' => "\xE2\xA9\x83",
        ],
        '&ncaron;' => [
            'codepoints' => [328],
            'characters' => "\xC5\x88",
        ],
        '&ncedil;' => [
            'codepoints' => [326],
            'characters' => "\xC5\x86",
        ],
        '&ncong;' => [
            'codepoints' => [8775],
            'characters' => "\xE2\x89\x87",
        ],
        '&ncongdot;' => [
            'codepoints' => [10861, 824],
            'characters' => "\xE2\xA9\xAD\xCC\xB8",
        ],
        '&ncup;' => [
            'codepoints' => [10818],
            'characters' => "\xE2\xA9\x82",
        ],
        '&ncy;' => [
            'codepoints' => [1085],
            'characters' => "\xD0\xBD",
        ],
        '&ndash;' => [
            'codepoints' => [8211],
            'characters' => "\xE2\x80\x93",
        ],
        '&ne;' => [
            'codepoints' => [8800],
            'characters' => "\xE2\x89\xA0",
        ],
        '&neArr;' => [
            'codepoints' => [8663],
            'characters' => "\xE2\x87\x97",
        ],
        '&nearhk;' => [
            'codepoints' => [10532],
            'characters' => "\xE2\xA4\xA4",
        ],
        '&nearr;' => [
            'codepoints' => [8599],
            'characters' => "\xE2\x86\x97",
        ],
        '&nearrow;' => [
            'codepoints' => [8599],
            'characters' => "\xE2\x86\x97",
        ],
        '&nedot;' => [
            'codepoints' => [8784, 824],
            'characters' => "\xE2\x89\x90\xCC\xB8",
        ],
        '&nequiv;' => [
            'codepoints' => [8802],
            'characters' => "\xE2\x89\xA2",
        ],
        '&nesear;' => [
            'codepoints' => [10536],
            'characters' => "\xE2\xA4\xA8",
        ],
        '&nesim;' => [
            'codepoints' => [8770, 824],
            'characters' => "\xE2\x89\x82\xCC\xB8",
        ],
        '&nexist;' => [
            'codepoints' => [8708],
            'characters' => "\xE2\x88\x84",
        ],
        '&nexists;' => [
            'codepoints' => [8708],
            'characters' => "\xE2\x88\x84",
        ],
        '&nfr;' => [
            'codepoints' => [120107],
            'characters' => "\xF0\x9D\x94\xAB",
        ],
        '&ngE;' => [
            'codepoints' => [8807, 824],
            'characters' => "\xE2\x89\xA7\xCC\xB8",
        ],
        '&nge;' => [
            'codepoints' => [8817],
            'characters' => "\xE2\x89\xB1",
        ],
        '&ngeq;' => [
            'codepoints' => [8817],
            'characters' => "\xE2\x89\xB1",
        ],
        '&ngeqq;' => [
            'codepoints' => [8807, 824],
            'characters' => "\xE2\x89\xA7\xCC\xB8",
        ],
        '&ngeqslant;' => [
            'codepoints' => [10878, 824],
            'characters' => "\xE2\xA9\xBE\xCC\xB8",
        ],
        '&nges;' => [
            'codepoints' => [10878, 824],
            'characters' => "\xE2\xA9\xBE\xCC\xB8",
        ],
        '&ngsim;' => [
            'codepoints' => [8821],
            'characters' => "\xE2\x89\xB5",
        ],
        '&ngt;' => [
            'codepoints' => [8815],
            'characters' => "\xE2\x89\xAF",
        ],
        '&ngtr;' => [
            'codepoints' => [8815],
            'characters' => "\xE2\x89\xAF",
        ],
        '&nhArr;' => [
            'codepoints' => [8654],
            'characters' => "\xE2\x87\x8E",
        ],
        '&nharr;' => [
            'codepoints' => [8622],
            'characters' => "\xE2\x86\xAE",
        ],
        '&nhpar;' => [
            'codepoints' => [10994],
            'characters' => "\xE2\xAB\xB2",
        ],
        '&ni;' => [
            'codepoints' => [8715],
            'characters' => "\xE2\x88\x8B",
        ],
        '&nis;' => [
            'codepoints' => [8956],
            'characters' => "\xE2\x8B\xBC",
        ],
        '&nisd;' => [
            'codepoints' => [8954],
            'characters' => "\xE2\x8B\xBA",
        ],
        '&niv;' => [
            'codepoints' => [8715],
            'characters' => "\xE2\x88\x8B",
        ],
        '&njcy;' => [
            'codepoints' => [1114],
            'characters' => "\xD1\x9A",
        ],
        '&nlArr;' => [
            'codepoints' => [8653],
            'characters' => "\xE2\x87\x8D",
        ],
        '&nlE;' => [
            'codepoints' => [8806, 824],
            'characters' => "\xE2\x89\xA6\xCC\xB8",
        ],
        '&nlarr;' => [
            'codepoints' => [8602],
            'characters' => "\xE2\x86\x9A",
        ],
        '&nldr;' => [
            'codepoints' => [8229],
            'characters' => "\xE2\x80\xA5",
        ],
        '&nle;' => [
            'codepoints' => [8816],
            'characters' => "\xE2\x89\xB0",
        ],
        '&nleftarrow;' => [
            'codepoints' => [8602],
            'characters' => "\xE2\x86\x9A",
        ],
        '&nleftrightarrow;' => [
            'codepoints' => [8622],
            'characters' => "\xE2\x86\xAE",
        ],
        '&nleq;' => [
            'codepoints' => [8816],
            'characters' => "\xE2\x89\xB0",
        ],
        '&nleqq;' => [
            'codepoints' => [8806, 824],
            'characters' => "\xE2\x89\xA6\xCC\xB8",
        ],
        '&nleqslant;' => [
            'codepoints' => [10877, 824],
            'characters' => "\xE2\xA9\xBD\xCC\xB8",
        ],
        '&nles;' => [
            'codepoints' => [10877, 824],
            'characters' => "\xE2\xA9\xBD\xCC\xB8",
        ],
        '&nless;' => [
            'codepoints' => [8814],
            'characters' => "\xE2\x89\xAE",
        ],
        '&nlsim;' => [
            'codepoints' => [8820],
            'characters' => "\xE2\x89\xB4",
        ],
        '&nlt;' => [
            'codepoints' => [8814],
            'characters' => "\xE2\x89\xAE",
        ],
        '&nltri;' => [
            'codepoints' => [8938],
            'characters' => "\xE2\x8B\xAA",
        ],
        '&nltrie;' => [
            'codepoints' => [8940],
            'characters' => "\xE2\x8B\xAC",
        ],
        '&nmid;' => [
            'codepoints' => [8740],
            'characters' => "\xE2\x88\xA4",
        ],
        '&nopf;' => [
            'codepoints' => [120159],
            'characters' => "\xF0\x9D\x95\x9F",
        ],
        '&not' => [
            'codepoints' => [172],
            'characters' => "\xC2\xAC",
        ],
        '&not;' => [
            'codepoints' => [172],
            'characters' => "\xC2\xAC",
        ],
        '&notin;' => [
            'codepoints' => [8713],
            'characters' => "\xE2\x88\x89",
        ],
        '&notinE;' => [
            'codepoints' => [8953, 824],
            'characters' => "\xE2\x8B\xB9\xCC\xB8",
        ],
        '&notindot;' => [
            'codepoints' => [8949, 824],
            'characters' => "\xE2\x8B\xB5\xCC\xB8",
        ],
        '&notinva;' => [
            'codepoints' => [8713],
            'characters' => "\xE2\x88\x89",
        ],
        '&notinvb;' => [
            'codepoints' => [8951],
            'characters' => "\xE2\x8B\xB7",
        ],
        '&notinvc;' => [
            'codepoints' => [8950],
            'characters' => "\xE2\x8B\xB6",
        ],
        '&notni;' => [
            'codepoints' => [8716],
            'characters' => "\xE2\x88\x8C",
        ],
        '&notniva;' => [
            'codepoints' => [8716],
            'characters' => "\xE2\x88\x8C",
        ],
        '&notnivb;' => [
            'codepoints' => [8958],
            'characters' => "\xE2\x8B\xBE",
        ],
        '&notnivc;' => [
            'codepoints' => [8957],
            'characters' => "\xE2\x8B\xBD",
        ],
        '&npar;' => [
            'codepoints' => [8742],
            'characters' => "\xE2\x88\xA6",
        ],
        '&nparallel;' => [
            'codepoints' => [8742],
            'characters' => "\xE2\x88\xA6",
        ],
        '&nparsl;' => [
            'codepoints' => [11005, 8421],
            'characters' => "\xE2\xAB\xBD\xE2\x83\xA5",
        ],
        '&npart;' => [
            'codepoints' => [8706, 824],
            'characters' => "\xE2\x88\x82\xCC\xB8",
        ],
        '&npolint;' => [
            'codepoints' => [10772],
            'characters' => "\xE2\xA8\x94",
        ],
        '&npr;' => [
            'codepoints' => [8832],
            'characters' => "\xE2\x8A\x80",
        ],
        '&nprcue;' => [
            'codepoints' => [8928],
            'characters' => "\xE2\x8B\xA0",
        ],
        '&npre;' => [
            'codepoints' => [10927, 824],
            'characters' => "\xE2\xAA\xAF\xCC\xB8",
        ],
        '&nprec;' => [
            'codepoints' => [8832],
            'characters' => "\xE2\x8A\x80",
        ],
        '&npreceq;' => [
            'codepoints' => [10927, 824],
            'characters' => "\xE2\xAA\xAF\xCC\xB8",
        ],
        '&nrArr;' => [
            'codepoints' => [8655],
            'characters' => "\xE2\x87\x8F",
        ],
        '&nrarr;' => [
            'codepoints' => [8603],
            'characters' => "\xE2\x86\x9B",
        ],
        '&nrarrc;' => [
            'codepoints' => [10547, 824],
            'characters' => "\xE2\xA4\xB3\xCC\xB8",
        ],
        '&nrarrw;' => [
            'codepoints' => [8605, 824],
            'characters' => "\xE2\x86\x9D\xCC\xB8",
        ],
        '&nrightarrow;' => [
            'codepoints' => [8603],
            'characters' => "\xE2\x86\x9B",
        ],
        '&nrtri;' => [
            'codepoints' => [8939],
            'characters' => "\xE2\x8B\xAB",
        ],
        '&nrtrie;' => [
            'codepoints' => [8941],
            'characters' => "\xE2\x8B\xAD",
        ],
        '&nsc;' => [
            'codepoints' => [8833],
            'characters' => "\xE2\x8A\x81",
        ],
        '&nsccue;' => [
            'codepoints' => [8929],
            'characters' => "\xE2\x8B\xA1",
        ],
        '&nsce;' => [
            'codepoints' => [10928, 824],
            'characters' => "\xE2\xAA\xB0\xCC\xB8",
        ],
        '&nscr;' => [
            'codepoints' => [120003],
            'characters' => "\xF0\x9D\x93\x83",
        ],
        '&nshortmid;' => [
            'codepoints' => [8740],
            'characters' => "\xE2\x88\xA4",
        ],
        '&nshortparallel;' => [
            'codepoints' => [8742],
            'characters' => "\xE2\x88\xA6",
        ],
        '&nsim;' => [
            'codepoints' => [8769],
            'characters' => "\xE2\x89\x81",
        ],
        '&nsime;' => [
            'codepoints' => [8772],
            'characters' => "\xE2\x89\x84",
        ],
        '&nsimeq;' => [
            'codepoints' => [8772],
            'characters' => "\xE2\x89\x84",
        ],
        '&nsmid;' => [
            'codepoints' => [8740],
            'characters' => "\xE2\x88\xA4",
        ],
        '&nspar;' => [
            'codepoints' => [8742],
            'characters' => "\xE2\x88\xA6",
        ],
        '&nsqsube;' => [
            'codepoints' => [8930],
            'characters' => "\xE2\x8B\xA2",
        ],
        '&nsqsupe;' => [
            'codepoints' => [8931],
            'characters' => "\xE2\x8B\xA3",
        ],
        '&nsub;' => [
            'codepoints' => [8836],
            'characters' => "\xE2\x8A\x84",
        ],
        '&nsubE;' => [
            'codepoints' => [10949, 824],
            'characters' => "\xE2\xAB\x85\xCC\xB8",
        ],
        '&nsube;' => [
            'codepoints' => [8840],
            'characters' => "\xE2\x8A\x88",
        ],
        '&nsubset;' => [
            'codepoints' => [8834, 8402],
            'characters' => "\xE2\x8A\x82\xE2\x83\x92",
        ],
        '&nsubseteq;' => [
            'codepoints' => [8840],
            'characters' => "\xE2\x8A\x88",
        ],
        '&nsubseteqq;' => [
            'codepoints' => [10949, 824],
            'characters' => "\xE2\xAB\x85\xCC\xB8",
        ],
        '&nsucc;' => [
            'codepoints' => [8833],
            'characters' => "\xE2\x8A\x81",
        ],
        '&nsucceq;' => [
            'codepoints' => [10928, 824],
            'characters' => "\xE2\xAA\xB0\xCC\xB8",
        ],
        '&nsup;' => [
            'codepoints' => [8837],
            'characters' => "\xE2\x8A\x85",
        ],
        '&nsupE;' => [
            'codepoints' => [10950, 824],
            'characters' => "\xE2\xAB\x86\xCC\xB8",
        ],
        '&nsupe;' => [
            'codepoints' => [8841],
            'characters' => "\xE2\x8A\x89",
        ],
        '&nsupset;' => [
            'codepoints' => [8835, 8402],
            'characters' => "\xE2\x8A\x83\xE2\x83\x92",
        ],
        '&nsupseteq;' => [
            'codepoints' => [8841],
            'characters' => "\xE2\x8A\x89",
        ],
        '&nsupseteqq;' => [
            'codepoints' => [10950, 824],
            'characters' => "\xE2\xAB\x86\xCC\xB8",
        ],
        '&ntgl;' => [
            'codepoints' => [8825],
            'characters' => "\xE2\x89\xB9",
        ],
        '&ntilde' => [
            'codepoints' => [241],
            'characters' => "\xC3\xB1",
        ],
        '&ntilde;' => [
            'codepoints' => [241],
            'characters' => "\xC3\xB1",
        ],
        '&ntlg;' => [
            'codepoints' => [8824],
            'characters' => "\xE2\x89\xB8",
        ],
        '&ntriangleleft;' => [
            'codepoints' => [8938],
            'characters' => "\xE2\x8B\xAA",
        ],
        '&ntrianglelefteq;' => [
            'codepoints' => [8940],
            'characters' => "\xE2\x8B\xAC",
        ],
        '&ntriangleright;' => [
            'codepoints' => [8939],
            'characters' => "\xE2\x8B\xAB",
        ],
        '&ntrianglerighteq;' => [
            'codepoints' => [8941],
            'characters' => "\xE2\x8B\xAD",
        ],
        '&nu;' => [
            'codepoints' => [957],
            'characters' => "\xCE\xBD",
        ],
        '&num;' => [
            'codepoints' => [35],
            'characters' => "\x23",
        ],
        '&numero;' => [
            'codepoints' => [8470],
            'characters' => "\xE2\x84\x96",
        ],
        '&numsp;' => [
            'codepoints' => [8199],
            'characters' => "\xE2\x80\x87",
        ],
        '&nvDash;' => [
            'codepoints' => [8877],
            'characters' => "\xE2\x8A\xAD",
        ],
        '&nvHarr;' => [
            'codepoints' => [10500],
            'characters' => "\xE2\xA4\x84",
        ],
        '&nvap;' => [
            'codepoints' => [8781, 8402],
            'characters' => "\xE2\x89\x8D\xE2\x83\x92",
        ],
        '&nvdash;' => [
            'codepoints' => [8876],
            'characters' => "\xE2\x8A\xAC",
        ],
        '&nvge;' => [
            'codepoints' => [8805, 8402],
            'characters' => "\xE2\x89\xA5\xE2\x83\x92",
        ],
        '&nvgt;' => [
            'codepoints' => [62, 8402],
            'characters' => "\x3E\xE2\x83\x92",
        ],
        '&nvinfin;' => [
            'codepoints' => [10718],
            'characters' => "\xE2\xA7\x9E",
        ],
        '&nvlArr;' => [
            'codepoints' => [10498],
            'characters' => "\xE2\xA4\x82",
        ],
        '&nvle;' => [
            'codepoints' => [8804, 8402],
            'characters' => "\xE2\x89\xA4\xE2\x83\x92",
        ],
        '&nvlt;' => [
            'codepoints' => [60, 8402],
            'characters' => "\x3C\xE2\x83\x92",
        ],
        '&nvltrie;' => [
            'codepoints' => [8884, 8402],
            'characters' => "\xE2\x8A\xB4\xE2\x83\x92",
        ],
        '&nvrArr;' => [
            'codepoints' => [10499],
            'characters' => "\xE2\xA4\x83",
        ],
        '&nvrtrie;' => [
            'codepoints' => [8885, 8402],
            'characters' => "\xE2\x8A\xB5\xE2\x83\x92",
        ],
        '&nvsim;' => [
            'codepoints' => [8764, 8402],
            'characters' => "\xE2\x88\xBC\xE2\x83\x92",
        ],
        '&nwArr;' => [
            'codepoints' => [8662],
            'characters' => "\xE2\x87\x96",
        ],
        '&nwarhk;' => [
            'codepoints' => [10531],
            'characters' => "\xE2\xA4\xA3",
        ],
        '&nwarr;' => [
            'codepoints' => [8598],
            'characters' => "\xE2\x86\x96",
        ],
        '&nwarrow;' => [
            'codepoints' => [8598],
            'characters' => "\xE2\x86\x96",
        ],
        '&nwnear;' => [
            'codepoints' => [10535],
            'characters' => "\xE2\xA4\xA7",
        ],
        '&oS;' => [
            'codepoints' => [9416],
            'characters' => "\xE2\x93\x88",
        ],
        '&oacute' => [
            'codepoints' => [243],
            'characters' => "\xC3\xB3",
        ],
        '&oacute;' => [
            'codepoints' => [243],
            'characters' => "\xC3\xB3",
        ],
        '&oast;' => [
            'codepoints' => [8859],
            'characters' => "\xE2\x8A\x9B",
        ],
        '&ocir;' => [
            'codepoints' => [8858],
            'characters' => "\xE2\x8A\x9A",
        ],
        '&ocirc' => [
            'codepoints' => [244],
            'characters' => "\xC3\xB4",
        ],
        '&ocirc;' => [
            'codepoints' => [244],
            'characters' => "\xC3\xB4",
        ],
        '&ocy;' => [
            'codepoints' => [1086],
            'characters' => "\xD0\xBE",
        ],
        '&odash;' => [
            'codepoints' => [8861],
            'characters' => "\xE2\x8A\x9D",
        ],
        '&odblac;' => [
            'codepoints' => [337],
            'characters' => "\xC5\x91",
        ],
        '&odiv;' => [
            'codepoints' => [10808],
            'characters' => "\xE2\xA8\xB8",
        ],
        '&odot;' => [
            'codepoints' => [8857],
            'characters' => "\xE2\x8A\x99",
        ],
        '&odsold;' => [
            'codepoints' => [10684],
            'characters' => "\xE2\xA6\xBC",
        ],
        '&oelig;' => [
            'codepoints' => [339],
            'characters' => "\xC5\x93",
        ],
        '&ofcir;' => [
            'codepoints' => [10687],
            'characters' => "\xE2\xA6\xBF",
        ],
        '&ofr;' => [
            'codepoints' => [120108],
            'characters' => "\xF0\x9D\x94\xAC",
        ],
        '&ogon;' => [
            'codepoints' => [731],
            'characters' => "\xCB\x9B",
        ],
        '&ograve' => [
            'codepoints' => [242],
            'characters' => "\xC3\xB2",
        ],
        '&ograve;' => [
            'codepoints' => [242],
            'characters' => "\xC3\xB2",
        ],
        '&ogt;' => [
            'codepoints' => [10689],
            'characters' => "\xE2\xA7\x81",
        ],
        '&ohbar;' => [
            'codepoints' => [10677],
            'characters' => "\xE2\xA6\xB5",
        ],
        '&ohm;' => [
            'codepoints' => [937],
            'characters' => "\xCE\xA9",
        ],
        '&oint;' => [
            'codepoints' => [8750],
            'characters' => "\xE2\x88\xAE",
        ],
        '&olarr;' => [
            'codepoints' => [8634],
            'characters' => "\xE2\x86\xBA",
        ],
        '&olcir;' => [
            'codepoints' => [10686],
            'characters' => "\xE2\xA6\xBE",
        ],
        '&olcross;' => [
            'codepoints' => [10683],
            'characters' => "\xE2\xA6\xBB",
        ],
        '&oline;' => [
            'codepoints' => [8254],
            'characters' => "\xE2\x80\xBE",
        ],
        '&olt;' => [
            'codepoints' => [10688],
            'characters' => "\xE2\xA7\x80",
        ],
        '&omacr;' => [
            'codepoints' => [333],
            'characters' => "\xC5\x8D",
        ],
        '&omega;' => [
            'codepoints' => [969],
            'characters' => "\xCF\x89",
        ],
        '&omicron;' => [
            'codepoints' => [959],
            'characters' => "\xCE\xBF",
        ],
        '&omid;' => [
            'codepoints' => [10678],
            'characters' => "\xE2\xA6\xB6",
        ],
        '&ominus;' => [
            'codepoints' => [8854],
            'characters' => "\xE2\x8A\x96",
        ],
        '&oopf;' => [
            'codepoints' => [120160],
            'characters' => "\xF0\x9D\x95\xA0",
        ],
        '&opar;' => [
            'codepoints' => [10679],
            'characters' => "\xE2\xA6\xB7",
        ],
        '&operp;' => [
            'codepoints' => [10681],
            'characters' => "\xE2\xA6\xB9",
        ],
        '&oplus;' => [
            'codepoints' => [8853],
            'characters' => "\xE2\x8A\x95",
        ],
        '&or;' => [
            'codepoints' => [8744],
            'characters' => "\xE2\x88\xA8",
        ],
        '&orarr;' => [
            'codepoints' => [8635],
            'characters' => "\xE2\x86\xBB",
        ],
        '&ord;' => [
            'codepoints' => [10845],
            'characters' => "\xE2\xA9\x9D",
        ],
        '&order;' => [
            'codepoints' => [8500],
            'characters' => "\xE2\x84\xB4",
        ],
        '&orderof;' => [
            'codepoints' => [8500],
            'characters' => "\xE2\x84\xB4",
        ],
        '&ordf' => [
            'codepoints' => [170],
            'characters' => "\xC2\xAA",
        ],
        '&ordf;' => [
            'codepoints' => [170],
            'characters' => "\xC2\xAA",
        ],
        '&ordm' => [
            'codepoints' => [186],
            'characters' => "\xC2\xBA",
        ],
        '&ordm;' => [
            'codepoints' => [186],
            'characters' => "\xC2\xBA",
        ],
        '&origof;' => [
            'codepoints' => [8886],
            'characters' => "\xE2\x8A\xB6",
        ],
        '&oror;' => [
            'codepoints' => [10838],
            'characters' => "\xE2\xA9\x96",
        ],
        '&orslope;' => [
            'codepoints' => [10839],
            'characters' => "\xE2\xA9\x97",
        ],
        '&orv;' => [
            'codepoints' => [10843],
            'characters' => "\xE2\xA9\x9B",
        ],
        '&oscr;' => [
            'codepoints' => [8500],
            'characters' => "\xE2\x84\xB4",
        ],
        '&oslash' => [
            'codepoints' => [248],
            'characters' => "\xC3\xB8",
        ],
        '&oslash;' => [
            'codepoints' => [248],
            'characters' => "\xC3\xB8",
        ],
        '&osol;' => [
            'codepoints' => [8856],
            'characters' => "\xE2\x8A\x98",
        ],
        '&otilde' => [
            'codepoints' => [245],
            'characters' => "\xC3\xB5",
        ],
        '&otilde;' => [
            'codepoints' => [245],
            'characters' => "\xC3\xB5",
        ],
        '&otimes;' => [
            'codepoints' => [8855],
            'characters' => "\xE2\x8A\x97",
        ],
        '&otimesas;' => [
            'codepoints' => [10806],
            'characters' => "\xE2\xA8\xB6",
        ],
        '&ouml' => [
            'codepoints' => [246],
            'characters' => "\xC3\xB6",
        ],
        '&ouml;' => [
            'codepoints' => [246],
            'characters' => "\xC3\xB6",
        ],
        '&ovbar;' => [
            'codepoints' => [9021],
            'characters' => "\xE2\x8C\xBD",
        ],
        '&par;' => [
            'codepoints' => [8741],
            'characters' => "\xE2\x88\xA5",
        ],
        '&para' => [
            'codepoints' => [182],
            'characters' => "\xC2\xB6",
        ],
        '&para;' => [
            'codepoints' => [182],
            'characters' => "\xC2\xB6",
        ],
        '&parallel;' => [
            'codepoints' => [8741],
            'characters' => "\xE2\x88\xA5",
        ],
        '&parsim;' => [
            'codepoints' => [10995],
            'characters' => "\xE2\xAB\xB3",
        ],
        '&parsl;' => [
            'codepoints' => [11005],
            'characters' => "\xE2\xAB\xBD",
        ],
        '&part;' => [
            'codepoints' => [8706],
            'characters' => "\xE2\x88\x82",
        ],
        '&pcy;' => [
            'codepoints' => [1087],
            'characters' => "\xD0\xBF",
        ],
        '&percnt;' => [
            'codepoints' => [37],
            'characters' => "\x25",
        ],
        '&period;' => [
            'codepoints' => [46],
            'characters' => "\x2E",
        ],
        '&permil;' => [
            'codepoints' => [8240],
            'characters' => "\xE2\x80\xB0",
        ],
        '&perp;' => [
            'codepoints' => [8869],
            'characters' => "\xE2\x8A\xA5",
        ],
        '&pertenk;' => [
            'codepoints' => [8241],
            'characters' => "\xE2\x80\xB1",
        ],
        '&pfr;' => [
            'codepoints' => [120109],
            'characters' => "\xF0\x9D\x94\xAD",
        ],
        '&phi;' => [
            'codepoints' => [966],
            'characters' => "\xCF\x86",
        ],
        '&phiv;' => [
            'codepoints' => [981],
            'characters' => "\xCF\x95",
        ],
        '&phmmat;' => [
            'codepoints' => [8499],
            'characters' => "\xE2\x84\xB3",
        ],
        '&phone;' => [
            'codepoints' => [9742],
            'characters' => "\xE2\x98\x8E",
        ],
        '&pi;' => [
            'codepoints' => [960],
            'characters' => "\xCF\x80",
        ],
        '&pitchfork;' => [
            'codepoints' => [8916],
            'characters' => "\xE2\x8B\x94",
        ],
        '&piv;' => [
            'codepoints' => [982],
            'characters' => "\xCF\x96",
        ],
        '&planck;' => [
            'codepoints' => [8463],
            'characters' => "\xE2\x84\x8F",
        ],
        '&planckh;' => [
            'codepoints' => [8462],
            'characters' => "\xE2\x84\x8E",
        ],
        '&plankv;' => [
            'codepoints' => [8463],
            'characters' => "\xE2\x84\x8F",
        ],
        '&plus;' => [
            'codepoints' => [43],
            'characters' => "\x2B",
        ],
        '&plusacir;' => [
            'codepoints' => [10787],
            'characters' => "\xE2\xA8\xA3",
        ],
        '&plusb;' => [
            'codepoints' => [8862],
            'characters' => "\xE2\x8A\x9E",
        ],
        '&pluscir;' => [
            'codepoints' => [10786],
            'characters' => "\xE2\xA8\xA2",
        ],
        '&plusdo;' => [
            'codepoints' => [8724],
            'characters' => "\xE2\x88\x94",
        ],
        '&plusdu;' => [
            'codepoints' => [10789],
            'characters' => "\xE2\xA8\xA5",
        ],
        '&pluse;' => [
            'codepoints' => [10866],
            'characters' => "\xE2\xA9\xB2",
        ],
        '&plusmn' => [
            'codepoints' => [177],
            'characters' => "\xC2\xB1",
        ],
        '&plusmn;' => [
            'codepoints' => [177],
            'characters' => "\xC2\xB1",
        ],
        '&plussim;' => [
            'codepoints' => [10790],
            'characters' => "\xE2\xA8\xA6",
        ],
        '&plustwo;' => [
            'codepoints' => [10791],
            'characters' => "\xE2\xA8\xA7",
        ],
        '&pm;' => [
            'codepoints' => [177],
            'characters' => "\xC2\xB1",
        ],
        '&pointint;' => [
            'codepoints' => [10773],
            'characters' => "\xE2\xA8\x95",
        ],
        '&popf;' => [
            'codepoints' => [120161],
            'characters' => "\xF0\x9D\x95\xA1",
        ],
        '&pound' => [
            'codepoints' => [163],
            'characters' => "\xC2\xA3",
        ],
        '&pound;' => [
            'codepoints' => [163],
            'characters' => "\xC2\xA3",
        ],
        '&pr;' => [
            'codepoints' => [8826],
            'characters' => "\xE2\x89\xBA",
        ],
        '&prE;' => [
            'codepoints' => [10931],
            'characters' => "\xE2\xAA\xB3",
        ],
        '&prap;' => [
            'codepoints' => [10935],
            'characters' => "\xE2\xAA\xB7",
        ],
        '&prcue;' => [
            'codepoints' => [8828],
            'characters' => "\xE2\x89\xBC",
        ],
        '&pre;' => [
            'codepoints' => [10927],
            'characters' => "\xE2\xAA\xAF",
        ],
        '&prec;' => [
            'codepoints' => [8826],
            'characters' => "\xE2\x89\xBA",
        ],
        '&precapprox;' => [
            'codepoints' => [10935],
            'characters' => "\xE2\xAA\xB7",
        ],
        '&preccurlyeq;' => [
            'codepoints' => [8828],
            'characters' => "\xE2\x89\xBC",
        ],
        '&preceq;' => [
            'codepoints' => [10927],
            'characters' => "\xE2\xAA\xAF",
        ],
        '&precnapprox;' => [
            'codepoints' => [10937],
            'characters' => "\xE2\xAA\xB9",
        ],
        '&precneqq;' => [
            'codepoints' => [10933],
            'characters' => "\xE2\xAA\xB5",
        ],
        '&precnsim;' => [
            'codepoints' => [8936],
            'characters' => "\xE2\x8B\xA8",
        ],
        '&precsim;' => [
            'codepoints' => [8830],
            'characters' => "\xE2\x89\xBE",
        ],
        '&prime;' => [
            'codepoints' => [8242],
            'characters' => "\xE2\x80\xB2",
        ],
        '&primes;' => [
            'codepoints' => [8473],
            'characters' => "\xE2\x84\x99",
        ],
        '&prnE;' => [
            'codepoints' => [10933],
            'characters' => "\xE2\xAA\xB5",
        ],
        '&prnap;' => [
            'codepoints' => [10937],
            'characters' => "\xE2\xAA\xB9",
        ],
        '&prnsim;' => [
            'codepoints' => [8936],
            'characters' => "\xE2\x8B\xA8",
        ],
        '&prod;' => [
            'codepoints' => [8719],
            'characters' => "\xE2\x88\x8F",
        ],
        '&profalar;' => [
            'codepoints' => [9006],
            'characters' => "\xE2\x8C\xAE",
        ],
        '&profline;' => [
            'codepoints' => [8978],
            'characters' => "\xE2\x8C\x92",
        ],
        '&profsurf;' => [
            'codepoints' => [8979],
            'characters' => "\xE2\x8C\x93",
        ],
        '&prop;' => [
            'codepoints' => [8733],
            'characters' => "\xE2\x88\x9D",
        ],
        '&propto;' => [
            'codepoints' => [8733],
            'characters' => "\xE2\x88\x9D",
        ],
        '&prsim;' => [
            'codepoints' => [8830],
            'characters' => "\xE2\x89\xBE",
        ],
        '&prurel;' => [
            'codepoints' => [8880],
            'characters' => "\xE2\x8A\xB0",
        ],
        '&pscr;' => [
            'codepoints' => [120005],
            'characters' => "\xF0\x9D\x93\x85",
        ],
        '&psi;' => [
            'codepoints' => [968],
            'characters' => "\xCF\x88",
        ],
        '&puncsp;' => [
            'codepoints' => [8200],
            'characters' => "\xE2\x80\x88",
        ],
        '&qfr;' => [
            'codepoints' => [120110],
            'characters' => "\xF0\x9D\x94\xAE",
        ],
        '&qint;' => [
            'codepoints' => [10764],
            'characters' => "\xE2\xA8\x8C",
        ],
        '&qopf;' => [
            'codepoints' => [120162],
            'characters' => "\xF0\x9D\x95\xA2",
        ],
        '&qprime;' => [
            'codepoints' => [8279],
            'characters' => "\xE2\x81\x97",
        ],
        '&qscr;' => [
            'codepoints' => [120006],
            'characters' => "\xF0\x9D\x93\x86",
        ],
        '&quaternions;' => [
            'codepoints' => [8461],
            'characters' => "\xE2\x84\x8D",
        ],
        '&quatint;' => [
            'codepoints' => [10774],
            'characters' => "\xE2\xA8\x96",
        ],
        '&quest;' => [
            'codepoints' => [63],
            'characters' => "\x3F",
        ],
        '&questeq;' => [
            'codepoints' => [8799],
            'characters' => "\xE2\x89\x9F",
        ],
        '&quot' => [
            'codepoints' => [34],
            'characters' => "\x22",
        ],
        '&quot;' => [
            'codepoints' => [34],
            'characters' => "\x22",
        ],
        '&rAarr;' => [
            'codepoints' => [8667],
            'characters' => "\xE2\x87\x9B",
        ],
        '&rArr;' => [
            'codepoints' => [8658],
            'characters' => "\xE2\x87\x92",
        ],
        '&rAtail;' => [
            'codepoints' => [10524],
            'characters' => "\xE2\xA4\x9C",
        ],
        '&rBarr;' => [
            'codepoints' => [10511],
            'characters' => "\xE2\xA4\x8F",
        ],
        '&rHar;' => [
            'codepoints' => [10596],
            'characters' => "\xE2\xA5\xA4",
        ],
        '&race;' => [
            'codepoints' => [8765, 817],
            'characters' => "\xE2\x88\xBD\xCC\xB1",
        ],
        '&racute;' => [
            'codepoints' => [341],
            'characters' => "\xC5\x95",
        ],
        '&radic;' => [
            'codepoints' => [8730],
            'characters' => "\xE2\x88\x9A",
        ],
        '&raemptyv;' => [
            'codepoints' => [10675],
            'characters' => "\xE2\xA6\xB3",
        ],
        '&rang;' => [
            'codepoints' => [10217],
            'characters' => "\xE2\x9F\xA9",
        ],
        '&rangd;' => [
            'codepoints' => [10642],
            'characters' => "\xE2\xA6\x92",
        ],
        '&range;' => [
            'codepoints' => [10661],
            'characters' => "\xE2\xA6\xA5",
        ],
        '&rangle;' => [
            'codepoints' => [10217],
            'characters' => "\xE2\x9F\xA9",
        ],
        '&raquo' => [
            'codepoints' => [187],
            'characters' => "\xC2\xBB",
        ],
        '&raquo;' => [
            'codepoints' => [187],
            'characters' => "\xC2\xBB",
        ],
        '&rarr;' => [
            'codepoints' => [8594],
            'characters' => "\xE2\x86\x92",
        ],
        '&rarrap;' => [
            'codepoints' => [10613],
            'characters' => "\xE2\xA5\xB5",
        ],
        '&rarrb;' => [
            'codepoints' => [8677],
            'characters' => "\xE2\x87\xA5",
        ],
        '&rarrbfs;' => [
            'codepoints' => [10528],
            'characters' => "\xE2\xA4\xA0",
        ],
        '&rarrc;' => [
            'codepoints' => [10547],
            'characters' => "\xE2\xA4\xB3",
        ],
        '&rarrfs;' => [
            'codepoints' => [10526],
            'characters' => "\xE2\xA4\x9E",
        ],
        '&rarrhk;' => [
            'codepoints' => [8618],
            'characters' => "\xE2\x86\xAA",
        ],
        '&rarrlp;' => [
            'codepoints' => [8620],
            'characters' => "\xE2\x86\xAC",
        ],
        '&rarrpl;' => [
            'codepoints' => [10565],
            'characters' => "\xE2\xA5\x85",
        ],
        '&rarrsim;' => [
            'codepoints' => [10612],
            'characters' => "\xE2\xA5\xB4",
        ],
        '&rarrtl;' => [
            'codepoints' => [8611],
            'characters' => "\xE2\x86\xA3",
        ],
        '&rarrw;' => [
            'codepoints' => [8605],
            'characters' => "\xE2\x86\x9D",
        ],
        '&ratail;' => [
            'codepoints' => [10522],
            'characters' => "\xE2\xA4\x9A",
        ],
        '&ratio;' => [
            'codepoints' => [8758],
            'characters' => "\xE2\x88\xB6",
        ],
        '&rationals;' => [
            'codepoints' => [8474],
            'characters' => "\xE2\x84\x9A",
        ],
        '&rbarr;' => [
            'codepoints' => [10509],
            'characters' => "\xE2\xA4\x8D",
        ],
        '&rbbrk;' => [
            'codepoints' => [10099],
            'characters' => "\xE2\x9D\xB3",
        ],
        '&rbrace;' => [
            'codepoints' => [125],
            'characters' => "\x7D",
        ],
        '&rbrack;' => [
            'codepoints' => [93],
            'characters' => "\x5D",
        ],
        '&rbrke;' => [
            'codepoints' => [10636],
            'characters' => "\xE2\xA6\x8C",
        ],
        '&rbrksld;' => [
            'codepoints' => [10638],
            'characters' => "\xE2\xA6\x8E",
        ],
        '&rbrkslu;' => [
            'codepoints' => [10640],
            'characters' => "\xE2\xA6\x90",
        ],
        '&rcaron;' => [
            'codepoints' => [345],
            'characters' => "\xC5\x99",
        ],
        '&rcedil;' => [
            'codepoints' => [343],
            'characters' => "\xC5\x97",
        ],
        '&rceil;' => [
            'codepoints' => [8969],
            'characters' => "\xE2\x8C\x89",
        ],
        '&rcub;' => [
            'codepoints' => [125],
            'characters' => "\x7D",
        ],
        '&rcy;' => [
            'codepoints' => [1088],
            'characters' => "\xD1\x80",
        ],
        '&rdca;' => [
            'codepoints' => [10551],
            'characters' => "\xE2\xA4\xB7",
        ],
        '&rdldhar;' => [
            'codepoints' => [10601],
            'characters' => "\xE2\xA5\xA9",
        ],
        '&rdquo;' => [
            'codepoints' => [8221],
            'characters' => "\xE2\x80\x9D",
        ],
        '&rdquor;' => [
            'codepoints' => [8221],
            'characters' => "\xE2\x80\x9D",
        ],
        '&rdsh;' => [
            'codepoints' => [8627],
            'characters' => "\xE2\x86\xB3",
        ],
        '&real;' => [
            'codepoints' => [8476],
            'characters' => "\xE2\x84\x9C",
        ],
        '&realine;' => [
            'codepoints' => [8475],
            'characters' => "\xE2\x84\x9B",
        ],
        '&realpart;' => [
            'codepoints' => [8476],
            'characters' => "\xE2\x84\x9C",
        ],
        '&reals;' => [
            'codepoints' => [8477],
            'characters' => "\xE2\x84\x9D",
        ],
        '&rect;' => [
            'codepoints' => [9645],
            'characters' => "\xE2\x96\xAD",
        ],
        '&reg' => [
            'codepoints' => [174],
            'characters' => "\xC2\xAE",
        ],
        '&reg;' => [
            'codepoints' => [174],
            'characters' => "\xC2\xAE",
        ],
        '&rfisht;' => [
            'codepoints' => [10621],
            'characters' => "\xE2\xA5\xBD",
        ],
        '&rfloor;' => [
            'codepoints' => [8971],
            'characters' => "\xE2\x8C\x8B",
        ],
        '&rfr;' => [
            'codepoints' => [120111],
            'characters' => "\xF0\x9D\x94\xAF",
        ],
        '&rhard;' => [
            'codepoints' => [8641],
            'characters' => "\xE2\x87\x81",
        ],
        '&rharu;' => [
            'codepoints' => [8640],
            'characters' => "\xE2\x87\x80",
        ],
        '&rharul;' => [
            'codepoints' => [10604],
            'characters' => "\xE2\xA5\xAC",
        ],
        '&rho;' => [
            'codepoints' => [961],
            'characters' => "\xCF\x81",
        ],
        '&rhov;' => [
            'codepoints' => [1009],
            'characters' => "\xCF\xB1",
        ],
        '&rightarrow;' => [
            'codepoints' => [8594],
            'characters' => "\xE2\x86\x92",
        ],
        '&rightarrowtail;' => [
            'codepoints' => [8611],
            'characters' => "\xE2\x86\xA3",
        ],
        '&rightharpoondown;' => [
            'codepoints' => [8641],
            'characters' => "\xE2\x87\x81",
        ],
        '&rightharpoonup;' => [
            'codepoints' => [8640],
            'characters' => "\xE2\x87\x80",
        ],
        '&rightleftarrows;' => [
            'codepoints' => [8644],
            'characters' => "\xE2\x87\x84",
        ],
        '&rightleftharpoons;' => [
            'codepoints' => [8652],
            'characters' => "\xE2\x87\x8C",
        ],
        '&rightrightarrows;' => [
            'codepoints' => [8649],
            'characters' => "\xE2\x87\x89",
        ],
        '&rightsquigarrow;' => [
            'codepoints' => [8605],
            'characters' => "\xE2\x86\x9D",
        ],
        '&rightthreetimes;' => [
            'codepoints' => [8908],
            'characters' => "\xE2\x8B\x8C",
        ],
        '&ring;' => [
            'codepoints' => [730],
            'characters' => "\xCB\x9A",
        ],
        '&risingdotseq;' => [
            'codepoints' => [8787],
            'characters' => "\xE2\x89\x93",
        ],
        '&rlarr;' => [
            'codepoints' => [8644],
            'characters' => "\xE2\x87\x84",
        ],
        '&rlhar;' => [
            'codepoints' => [8652],
            'characters' => "\xE2\x87\x8C",
        ],
        '&rlm;' => [
            'codepoints' => [8207],
            'characters' => "\xE2\x80\x8F",
        ],
        '&rmoust;' => [
            'codepoints' => [9137],
            'characters' => "\xE2\x8E\xB1",
        ],
        '&rmoustache;' => [
            'codepoints' => [9137],
            'characters' => "\xE2\x8E\xB1",
        ],
        '&rnmid;' => [
            'codepoints' => [10990],
            'characters' => "\xE2\xAB\xAE",
        ],
        '&roang;' => [
            'codepoints' => [10221],
            'characters' => "\xE2\x9F\xAD",
        ],
        '&roarr;' => [
            'codepoints' => [8702],
            'characters' => "\xE2\x87\xBE",
        ],
        '&robrk;' => [
            'codepoints' => [10215],
            'characters' => "\xE2\x9F\xA7",
        ],
        '&ropar;' => [
            'codepoints' => [10630],
            'characters' => "\xE2\xA6\x86",
        ],
        '&ropf;' => [
            'codepoints' => [120163],
            'characters' => "\xF0\x9D\x95\xA3",
        ],
        '&roplus;' => [
            'codepoints' => [10798],
            'characters' => "\xE2\xA8\xAE",
        ],
        '&rotimes;' => [
            'codepoints' => [10805],
            'characters' => "\xE2\xA8\xB5",
        ],
        '&rpar;' => [
            'codepoints' => [41],
            'characters' => "\x29",
        ],
        '&rpargt;' => [
            'codepoints' => [10644],
            'characters' => "\xE2\xA6\x94",
        ],
        '&rppolint;' => [
            'codepoints' => [10770],
            'characters' => "\xE2\xA8\x92",
        ],
        '&rrarr;' => [
            'codepoints' => [8649],
            'characters' => "\xE2\x87\x89",
        ],
        '&rsaquo;' => [
            'codepoints' => [8250],
            'characters' => "\xE2\x80\xBA",
        ],
        '&rscr;' => [
            'codepoints' => [120007],
            'characters' => "\xF0\x9D\x93\x87",
        ],
        '&rsh;' => [
            'codepoints' => [8625],
            'characters' => "\xE2\x86\xB1",
        ],
        '&rsqb;' => [
            'codepoints' => [93],
            'characters' => "\x5D",
        ],
        '&rsquo;' => [
            'codepoints' => [8217],
            'characters' => "\xE2\x80\x99",
        ],
        '&rsquor;' => [
            'codepoints' => [8217],
            'characters' => "\xE2\x80\x99",
        ],
        '&rthree;' => [
            'codepoints' => [8908],
            'characters' => "\xE2\x8B\x8C",
        ],
        '&rtimes;' => [
            'codepoints' => [8906],
            'characters' => "\xE2\x8B\x8A",
        ],
        '&rtri;' => [
            'codepoints' => [9657],
            'characters' => "\xE2\x96\xB9",
        ],
        '&rtrie;' => [
            'codepoints' => [8885],
            'characters' => "\xE2\x8A\xB5",
        ],
        '&rtrif;' => [
            'codepoints' => [9656],
            'characters' => "\xE2\x96\xB8",
        ],
        '&rtriltri;' => [
            'codepoints' => [10702],
            'characters' => "\xE2\xA7\x8E",
        ],
        '&ruluhar;' => [
            'codepoints' => [10600],
            'characters' => "\xE2\xA5\xA8",
        ],
        '&rx;' => [
            'codepoints' => [8478],
            'characters' => "\xE2\x84\x9E",
        ],
        '&sacute;' => [
            'codepoints' => [347],
            'characters' => "\xC5\x9B",
        ],
        '&sbquo;' => [
            'codepoints' => [8218],
            'characters' => "\xE2\x80\x9A",
        ],
        '&sc;' => [
            'codepoints' => [8827],
            'characters' => "\xE2\x89\xBB",
        ],
        '&scE;' => [
            'codepoints' => [10932],
            'characters' => "\xE2\xAA\xB4",
        ],
        '&scap;' => [
            'codepoints' => [10936],
            'characters' => "\xE2\xAA\xB8",
        ],
        '&scaron;' => [
            'codepoints' => [353],
            'characters' => "\xC5\xA1",
        ],
        '&sccue;' => [
            'codepoints' => [8829],
            'characters' => "\xE2\x89\xBD",
        ],
        '&sce;' => [
            'codepoints' => [10928],
            'characters' => "\xE2\xAA\xB0",
        ],
        '&scedil;' => [
            'codepoints' => [351],
            'characters' => "\xC5\x9F",
        ],
        '&scirc;' => [
            'codepoints' => [349],
            'characters' => "\xC5\x9D",
        ],
        '&scnE;' => [
            'codepoints' => [10934],
            'characters' => "\xE2\xAA\xB6",
        ],
        '&scnap;' => [
            'codepoints' => [10938],
            'characters' => "\xE2\xAA\xBA",
        ],
        '&scnsim;' => [
            'codepoints' => [8937],
            'characters' => "\xE2\x8B\xA9",
        ],
        '&scpolint;' => [
            'codepoints' => [10771],
            'characters' => "\xE2\xA8\x93",
        ],
        '&scsim;' => [
            'codepoints' => [8831],
            'characters' => "\xE2\x89\xBF",
        ],
        '&scy;' => [
            'codepoints' => [1089],
            'characters' => "\xD1\x81",
        ],
        '&sdot;' => [
            'codepoints' => [8901],
            'characters' => "\xE2\x8B\x85",
        ],
        '&sdotb;' => [
            'codepoints' => [8865],
            'characters' => "\xE2\x8A\xA1",
        ],
        '&sdote;' => [
            'codepoints' => [10854],
            'characters' => "\xE2\xA9\xA6",
        ],
        '&seArr;' => [
            'codepoints' => [8664],
            'characters' => "\xE2\x87\x98",
        ],
        '&searhk;' => [
            'codepoints' => [10533],
            'characters' => "\xE2\xA4\xA5",
        ],
        '&searr;' => [
            'codepoints' => [8600],
            'characters' => "\xE2\x86\x98",
        ],
        '&searrow;' => [
            'codepoints' => [8600],
            'characters' => "\xE2\x86\x98",
        ],
        '&sect' => [
            'codepoints' => [167],
            'characters' => "\xC2\xA7",
        ],
        '&sect;' => [
            'codepoints' => [167],
            'characters' => "\xC2\xA7",
        ],
        '&semi;' => [
            'codepoints' => [59],
            'characters' => "\x3B",
        ],
        '&seswar;' => [
            'codepoints' => [10537],
            'characters' => "\xE2\xA4\xA9",
        ],
        '&setminus;' => [
            'codepoints' => [8726],
            'characters' => "\xE2\x88\x96",
        ],
        '&setmn;' => [
            'codepoints' => [8726],
            'characters' => "\xE2\x88\x96",
        ],
        '&sext;' => [
            'codepoints' => [10038],
            'characters' => "\xE2\x9C\xB6",
        ],
        '&sfr;' => [
            'codepoints' => [120112],
            'characters' => "\xF0\x9D\x94\xB0",
        ],
        '&sfrown;' => [
            'codepoints' => [8994],
            'characters' => "\xE2\x8C\xA2",
        ],
        '&sharp;' => [
            'codepoints' => [9839],
            'characters' => "\xE2\x99\xAF",
        ],
        '&shchcy;' => [
            'codepoints' => [1097],
            'characters' => "\xD1\x89",
        ],
        '&shcy;' => [
            'codepoints' => [1096],
            'characters' => "\xD1\x88",
        ],
        '&shortmid;' => [
            'codepoints' => [8739],
            'characters' => "\xE2\x88\xA3",
        ],
        '&shortparallel;' => [
            'codepoints' => [8741],
            'characters' => "\xE2\x88\xA5",
        ],
        '&shy' => [
            'codepoints' => [173],
            'characters' => "\xC2\xAD",
        ],
        '&shy;' => [
            'codepoints' => [173],
            'characters' => "\xC2\xAD",
        ],
        '&sigma;' => [
            'codepoints' => [963],
            'characters' => "\xCF\x83",
        ],
        '&sigmaf;' => [
            'codepoints' => [962],
            'characters' => "\xCF\x82",
        ],
        '&sigmav;' => [
            'codepoints' => [962],
            'characters' => "\xCF\x82",
        ],
        '&sim;' => [
            'codepoints' => [8764],
            'characters' => "\xE2\x88\xBC",
        ],
        '&simdot;' => [
            'codepoints' => [10858],
            'characters' => "\xE2\xA9\xAA",
        ],
        '&sime;' => [
            'codepoints' => [8771],
            'characters' => "\xE2\x89\x83",
        ],
        '&simeq;' => [
            'codepoints' => [8771],
            'characters' => "\xE2\x89\x83",
        ],
        '&simg;' => [
            'codepoints' => [10910],
            'characters' => "\xE2\xAA\x9E",
        ],
        '&simgE;' => [
            'codepoints' => [10912],
            'characters' => "\xE2\xAA\xA0",
        ],
        '&siml;' => [
            'codepoints' => [10909],
            'characters' => "\xE2\xAA\x9D",
        ],
        '&simlE;' => [
            'codepoints' => [10911],
            'characters' => "\xE2\xAA\x9F",
        ],
        '&simne;' => [
            'codepoints' => [8774],
            'characters' => "\xE2\x89\x86",
        ],
        '&simplus;' => [
            'codepoints' => [10788],
            'characters' => "\xE2\xA8\xA4",
        ],
        '&simrarr;' => [
            'codepoints' => [10610],
            'characters' => "\xE2\xA5\xB2",
        ],
        '&slarr;' => [
            'codepoints' => [8592],
            'characters' => "\xE2\x86\x90",
        ],
        '&smallsetminus;' => [
            'codepoints' => [8726],
            'characters' => "\xE2\x88\x96",
        ],
        '&smashp;' => [
            'codepoints' => [10803],
            'characters' => "\xE2\xA8\xB3",
        ],
        '&smeparsl;' => [
            'codepoints' => [10724],
            'characters' => "\xE2\xA7\xA4",
        ],
        '&smid;' => [
            'codepoints' => [8739],
            'characters' => "\xE2\x88\xA3",
        ],
        '&smile;' => [
            'codepoints' => [8995],
            'characters' => "\xE2\x8C\xA3",
        ],
        '&smt;' => [
            'codepoints' => [10922],
            'characters' => "\xE2\xAA\xAA",
        ],
        '&smte;' => [
            'codepoints' => [10924],
            'characters' => "\xE2\xAA\xAC",
        ],
        '&smtes;' => [
            'codepoints' => [10924, 65024],
            'characters' => "\xE2\xAA\xAC\xEF\xB8\x80",
        ],
        '&softcy;' => [
            'codepoints' => [1100],
            'characters' => "\xD1\x8C",
        ],
        '&sol;' => [
            'codepoints' => [47],
            'characters' => "\x2F",
        ],
        '&solb;' => [
            'codepoints' => [10692],
            'characters' => "\xE2\xA7\x84",
        ],
        '&solbar;' => [
            'codepoints' => [9023],
            'characters' => "\xE2\x8C\xBF",
        ],
        '&sopf;' => [
            'codepoints' => [120164],
            'characters' => "\xF0\x9D\x95\xA4",
        ],
        '&spades;' => [
            'codepoints' => [9824],
            'characters' => "\xE2\x99\xA0",
        ],
        '&spadesuit;' => [
            'codepoints' => [9824],
            'characters' => "\xE2\x99\xA0",
        ],
        '&spar;' => [
            'codepoints' => [8741],
            'characters' => "\xE2\x88\xA5",
        ],
        '&sqcap;' => [
            'codepoints' => [8851],
            'characters' => "\xE2\x8A\x93",
        ],
        '&sqcaps;' => [
            'codepoints' => [8851, 65024],
            'characters' => "\xE2\x8A\x93\xEF\xB8\x80",
        ],
        '&sqcup;' => [
            'codepoints' => [8852],
            'characters' => "\xE2\x8A\x94",
        ],
        '&sqcups;' => [
            'codepoints' => [8852, 65024],
            'characters' => "\xE2\x8A\x94\xEF\xB8\x80",
        ],
        '&sqsub;' => [
            'codepoints' => [8847],
            'characters' => "\xE2\x8A\x8F",
        ],
        '&sqsube;' => [
            'codepoints' => [8849],
            'characters' => "\xE2\x8A\x91",
        ],
        '&sqsubset;' => [
            'codepoints' => [8847],
            'characters' => "\xE2\x8A\x8F",
        ],
        '&sqsubseteq;' => [
            'codepoints' => [8849],
            'characters' => "\xE2\x8A\x91",
        ],
        '&sqsup;' => [
            'codepoints' => [8848],
            'characters' => "\xE2\x8A\x90",
        ],
        '&sqsupe;' => [
            'codepoints' => [8850],
            'characters' => "\xE2\x8A\x92",
        ],
        '&sqsupset;' => [
            'codepoints' => [8848],
            'characters' => "\xE2\x8A\x90",
        ],
        '&sqsupseteq;' => [
            'codepoints' => [8850],
            'characters' => "\xE2\x8A\x92",
        ],
        '&squ;' => [
            'codepoints' => [9633],
            'characters' => "\xE2\x96\xA1",
        ],
        '&square;' => [
            'codepoints' => [9633],
            'characters' => "\xE2\x96\xA1",
        ],
        '&squarf;' => [
            'codepoints' => [9642],
            'characters' => "\xE2\x96\xAA",
        ],
        '&squf;' => [
            'codepoints' => [9642],
            'characters' => "\xE2\x96\xAA",
        ],
        '&srarr;' => [
            'codepoints' => [8594],
            'characters' => "\xE2\x86\x92",
        ],
        '&sscr;' => [
            'codepoints' => [120008],
            'characters' => "\xF0\x9D\x93\x88",
        ],
        '&ssetmn;' => [
            'codepoints' => [8726],
            'characters' => "\xE2\x88\x96",
        ],
        '&ssmile;' => [
            'codepoints' => [8995],
            'characters' => "\xE2\x8C\xA3",
        ],
        '&sstarf;' => [
            'codepoints' => [8902],
            'characters' => "\xE2\x8B\x86",
        ],
        '&star;' => [
            'codepoints' => [9734],
            'characters' => "\xE2\x98\x86",
        ],
        '&starf;' => [
            'codepoints' => [9733],
            'characters' => "\xE2\x98\x85",
        ],
        '&straightepsilon;' => [
            'codepoints' => [1013],
            'characters' => "\xCF\xB5",
        ],
        '&straightphi;' => [
            'codepoints' => [981],
            'characters' => "\xCF\x95",
        ],
        '&strns;' => [
            'codepoints' => [175],
            'characters' => "\xC2\xAF",
        ],
        '&sub;' => [
            'codepoints' => [8834],
            'characters' => "\xE2\x8A\x82",
        ],
        '&subE;' => [
            'codepoints' => [10949],
            'characters' => "\xE2\xAB\x85",
        ],
        '&subdot;' => [
            'codepoints' => [10941],
            'characters' => "\xE2\xAA\xBD",
        ],
        '&sube;' => [
            'codepoints' => [8838],
            'characters' => "\xE2\x8A\x86",
        ],
        '&subedot;' => [
            'codepoints' => [10947],
            'characters' => "\xE2\xAB\x83",
        ],
        '&submult;' => [
            'codepoints' => [10945],
            'characters' => "\xE2\xAB\x81",
        ],
        '&subnE;' => [
            'codepoints' => [10955],
            'characters' => "\xE2\xAB\x8B",
        ],
        '&subne;' => [
            'codepoints' => [8842],
            'characters' => "\xE2\x8A\x8A",
        ],
        '&subplus;' => [
            'codepoints' => [10943],
            'characters' => "\xE2\xAA\xBF",
        ],
        '&subrarr;' => [
            'codepoints' => [10617],
            'characters' => "\xE2\xA5\xB9",
        ],
        '&subset;' => [
            'codepoints' => [8834],
            'characters' => "\xE2\x8A\x82",
        ],
        '&subseteq;' => [
            'codepoints' => [8838],
            'characters' => "\xE2\x8A\x86",
        ],
        '&subseteqq;' => [
            'codepoints' => [10949],
            'characters' => "\xE2\xAB\x85",
        ],
        '&subsetneq;' => [
            'codepoints' => [8842],
            'characters' => "\xE2\x8A\x8A",
        ],
        '&subsetneqq;' => [
            'codepoints' => [10955],
            'characters' => "\xE2\xAB\x8B",
        ],
        '&subsim;' => [
            'codepoints' => [10951],
            'characters' => "\xE2\xAB\x87",
        ],
        '&subsub;' => [
            'codepoints' => [10965],
            'characters' => "\xE2\xAB\x95",
        ],
        '&subsup;' => [
            'codepoints' => [10963],
            'characters' => "\xE2\xAB\x93",
        ],
        '&succ;' => [
            'codepoints' => [8827],
            'characters' => "\xE2\x89\xBB",
        ],
        '&succapprox;' => [
            'codepoints' => [10936],
            'characters' => "\xE2\xAA\xB8",
        ],
        '&succcurlyeq;' => [
            'codepoints' => [8829],
            'characters' => "\xE2\x89\xBD",
        ],
        '&succeq;' => [
            'codepoints' => [10928],
            'characters' => "\xE2\xAA\xB0",
        ],
        '&succnapprox;' => [
            'codepoints' => [10938],
            'characters' => "\xE2\xAA\xBA",
        ],
        '&succneqq;' => [
            'codepoints' => [10934],
            'characters' => "\xE2\xAA\xB6",
        ],
        '&succnsim;' => [
            'codepoints' => [8937],
            'characters' => "\xE2\x8B\xA9",
        ],
        '&succsim;' => [
            'codepoints' => [8831],
            'characters' => "\xE2\x89\xBF",
        ],
        '&sum;' => [
            'codepoints' => [8721],
            'characters' => "\xE2\x88\x91",
        ],
        '&sung;' => [
            'codepoints' => [9834],
            'characters' => "\xE2\x99\xAA",
        ],
        '&sup1' => [
            'codepoints' => [185],
            'characters' => "\xC2\xB9",
        ],
        '&sup1;' => [
            'codepoints' => [185],
            'characters' => "\xC2\xB9",
        ],
        '&sup2' => [
            'codepoints' => [178],
            'characters' => "\xC2\xB2",
        ],
        '&sup2;' => [
            'codepoints' => [178],
            'characters' => "\xC2\xB2",
        ],
        '&sup3' => [
            'codepoints' => [179],
            'characters' => "\xC2\xB3",
        ],
        '&sup3;' => [
            'codepoints' => [179],
            'characters' => "\xC2\xB3",
        ],
        '&sup;' => [
            'codepoints' => [8835],
            'characters' => "\xE2\x8A\x83",
        ],
        '&supE;' => [
            'codepoints' => [10950],
            'characters' => "\xE2\xAB\x86",
        ],
        '&supdot;' => [
            'codepoints' => [10942],
            'characters' => "\xE2\xAA\xBE",
        ],
        '&supdsub;' => [
            'codepoints' => [10968],
            'characters' => "\xE2\xAB\x98",
        ],
        '&supe;' => [
            'codepoints' => [8839],
            'characters' => "\xE2\x8A\x87",
        ],
        '&supedot;' => [
            'codepoints' => [10948],
            'characters' => "\xE2\xAB\x84",
        ],
        '&suphsol;' => [
            'codepoints' => [10185],
            'characters' => "\xE2\x9F\x89",
        ],
        '&suphsub;' => [
            'codepoints' => [10967],
            'characters' => "\xE2\xAB\x97",
        ],
        '&suplarr;' => [
            'codepoints' => [10619],
            'characters' => "\xE2\xA5\xBB",
        ],
        '&supmult;' => [
            'codepoints' => [10946],
            'characters' => "\xE2\xAB\x82",
        ],
        '&supnE;' => [
            'codepoints' => [10956],
            'characters' => "\xE2\xAB\x8C",
        ],
        '&supne;' => [
            'codepoints' => [8843],
            'characters' => "\xE2\x8A\x8B",
        ],
        '&supplus;' => [
            'codepoints' => [10944],
            'characters' => "\xE2\xAB\x80",
        ],
        '&supset;' => [
            'codepoints' => [8835],
            'characters' => "\xE2\x8A\x83",
        ],
        '&supseteq;' => [
            'codepoints' => [8839],
            'characters' => "\xE2\x8A\x87",
        ],
        '&supseteqq;' => [
            'codepoints' => [10950],
            'characters' => "\xE2\xAB\x86",
        ],
        '&supsetneq;' => [
            'codepoints' => [8843],
            'characters' => "\xE2\x8A\x8B",
        ],
        '&supsetneqq;' => [
            'codepoints' => [10956],
            'characters' => "\xE2\xAB\x8C",
        ],
        '&supsim;' => [
            'codepoints' => [10952],
            'characters' => "\xE2\xAB\x88",
        ],
        '&supsub;' => [
            'codepoints' => [10964],
            'characters' => "\xE2\xAB\x94",
        ],
        '&supsup;' => [
            'codepoints' => [10966],
            'characters' => "\xE2\xAB\x96",
        ],
        '&swArr;' => [
            'codepoints' => [8665],
            'characters' => "\xE2\x87\x99",
        ],
        '&swarhk;' => [
            'codepoints' => [10534],
            'characters' => "\xE2\xA4\xA6",
        ],
        '&swarr;' => [
            'codepoints' => [8601],
            'characters' => "\xE2\x86\x99",
        ],
        '&swarrow;' => [
            'codepoints' => [8601],
            'characters' => "\xE2\x86\x99",
        ],
        '&swnwar;' => [
            'codepoints' => [10538],
            'characters' => "\xE2\xA4\xAA",
        ],
        '&szlig' => [
            'codepoints' => [223],
            'characters' => "\xC3\x9F",
        ],
        '&szlig;' => [
            'codepoints' => [223],
            'characters' => "\xC3\x9F",
        ],
        '&target;' => [
            'codepoints' => [8982],
            'characters' => "\xE2\x8C\x96",
        ],
        '&tau;' => [
            'codepoints' => [964],
            'characters' => "\xCF\x84",
        ],
        '&tbrk;' => [
            'codepoints' => [9140],
            'characters' => "\xE2\x8E\xB4",
        ],
        '&tcaron;' => [
            'codepoints' => [357],
            'characters' => "\xC5\xA5",
        ],
        '&tcedil;' => [
            'codepoints' => [355],
            'characters' => "\xC5\xA3",
        ],
        '&tcy;' => [
            'codepoints' => [1090],
            'characters' => "\xD1\x82",
        ],
        '&tdot;' => [
            'codepoints' => [8411],
            'characters' => "\xE2\x83\x9B",
        ],
        '&telrec;' => [
            'codepoints' => [8981],
            'characters' => "\xE2\x8C\x95",
        ],
        '&tfr;' => [
            'codepoints' => [120113],
            'characters' => "\xF0\x9D\x94\xB1",
        ],
        '&there4;' => [
            'codepoints' => [8756],
            'characters' => "\xE2\x88\xB4",
        ],
        '&therefore;' => [
            'codepoints' => [8756],
            'characters' => "\xE2\x88\xB4",
        ],
        '&theta;' => [
            'codepoints' => [952],
            'characters' => "\xCE\xB8",
        ],
        '&thetasym;' => [
            'codepoints' => [977],
            'characters' => "\xCF\x91",
        ],
        '&thetav;' => [
            'codepoints' => [977],
            'characters' => "\xCF\x91",
        ],
        '&thickapprox;' => [
            'codepoints' => [8776],
            'characters' => "\xE2\x89\x88",
        ],
        '&thicksim;' => [
            'codepoints' => [8764],
            'characters' => "\xE2\x88\xBC",
        ],
        '&thinsp;' => [
            'codepoints' => [8201],
            'characters' => "\xE2\x80\x89",
        ],
        '&thkap;' => [
            'codepoints' => [8776],
            'characters' => "\xE2\x89\x88",
        ],
        '&thksim;' => [
            'codepoints' => [8764],
            'characters' => "\xE2\x88\xBC",
        ],
        '&thorn' => [
            'codepoints' => [254],
            'characters' => "\xC3\xBE",
        ],
        '&thorn;' => [
            'codepoints' => [254],
            'characters' => "\xC3\xBE",
        ],
        '&tilde;' => [
            'codepoints' => [732],
            'characters' => "\xCB\x9C",
        ],
        '&times' => [
            'codepoints' => [215],
            'characters' => "\xC3\x97",
        ],
        '&times;' => [
            'codepoints' => [215],
            'characters' => "\xC3\x97",
        ],
        '&timesb;' => [
            'codepoints' => [8864],
            'characters' => "\xE2\x8A\xA0",
        ],
        '&timesbar;' => [
            'codepoints' => [10801],
            'characters' => "\xE2\xA8\xB1",
        ],
        '&timesd;' => [
            'codepoints' => [10800],
            'characters' => "\xE2\xA8\xB0",
        ],
        '&tint;' => [
            'codepoints' => [8749],
            'characters' => "\xE2\x88\xAD",
        ],
        '&toea;' => [
            'codepoints' => [10536],
            'characters' => "\xE2\xA4\xA8",
        ],
        '&top;' => [
            'codepoints' => [8868],
            'characters' => "\xE2\x8A\xA4",
        ],
        '&topbot;' => [
            'codepoints' => [9014],
            'characters' => "\xE2\x8C\xB6",
        ],
        '&topcir;' => [
            'codepoints' => [10993],
            'characters' => "\xE2\xAB\xB1",
        ],
        '&topf;' => [
            'codepoints' => [120165],
            'characters' => "\xF0\x9D\x95\xA5",
        ],
        '&topfork;' => [
            'codepoints' => [10970],
            'characters' => "\xE2\xAB\x9A",
        ],
        '&tosa;' => [
            'codepoints' => [10537],
            'characters' => "\xE2\xA4\xA9",
        ],
        '&tprime;' => [
            'codepoints' => [8244],
            'characters' => "\xE2\x80\xB4",
        ],
        '&trade;' => [
            'codepoints' => [8482],
            'characters' => "\xE2\x84\xA2",
        ],
        '&triangle;' => [
            'codepoints' => [9653],
            'characters' => "\xE2\x96\xB5",
        ],
        '&triangledown;' => [
            'codepoints' => [9663],
            'characters' => "\xE2\x96\xBF",
        ],
        '&triangleleft;' => [
            'codepoints' => [9667],
            'characters' => "\xE2\x97\x83",
        ],
        '&trianglelefteq;' => [
            'codepoints' => [8884],
            'characters' => "\xE2\x8A\xB4",
        ],
        '&triangleq;' => [
            'codepoints' => [8796],
            'characters' => "\xE2\x89\x9C",
        ],
        '&triangleright;' => [
            'codepoints' => [9657],
            'characters' => "\xE2\x96\xB9",
        ],
        '&trianglerighteq;' => [
            'codepoints' => [8885],
            'characters' => "\xE2\x8A\xB5",
        ],
        '&tridot;' => [
            'codepoints' => [9708],
            'characters' => "\xE2\x97\xAC",
        ],
        '&trie;' => [
            'codepoints' => [8796],
            'characters' => "\xE2\x89\x9C",
        ],
        '&triminus;' => [
            'codepoints' => [10810],
            'characters' => "\xE2\xA8\xBA",
        ],
        '&triplus;' => [
            'codepoints' => [10809],
            'characters' => "\xE2\xA8\xB9",
        ],
        '&trisb;' => [
            'codepoints' => [10701],
            'characters' => "\xE2\xA7\x8D",
        ],
        '&tritime;' => [
            'codepoints' => [10811],
            'characters' => "\xE2\xA8\xBB",
        ],
        '&trpezium;' => [
            'codepoints' => [9186],
            'characters' => "\xE2\x8F\xA2",
        ],
        '&tscr;' => [
            'codepoints' => [120009],
            'characters' => "\xF0\x9D\x93\x89",
        ],
        '&tscy;' => [
            'codepoints' => [1094],
            'characters' => "\xD1\x86",
        ],
        '&tshcy;' => [
            'codepoints' => [1115],
            'characters' => "\xD1\x9B",
        ],
        '&tstrok;' => [
            'codepoints' => [359],
            'characters' => "\xC5\xA7",
        ],
        '&twixt;' => [
            'codepoints' => [8812],
            'characters' => "\xE2\x89\xAC",
        ],
        '&twoheadleftarrow;' => [
            'codepoints' => [8606],
            'characters' => "\xE2\x86\x9E",
        ],
        '&twoheadrightarrow;' => [
            'codepoints' => [8608],
            'characters' => "\xE2\x86\xA0",
        ],
        '&uArr;' => [
            'codepoints' => [8657],
            'characters' => "\xE2\x87\x91",
        ],
        '&uHar;' => [
            'codepoints' => [10595],
            'characters' => "\xE2\xA5\xA3",
        ],
        '&uacute' => [
            'codepoints' => [250],
            'characters' => "\xC3\xBA",
        ],
        '&uacute;' => [
            'codepoints' => [250],
            'characters' => "\xC3\xBA",
        ],
        '&uarr;' => [
            'codepoints' => [8593],
            'characters' => "\xE2\x86\x91",
        ],
        '&ubrcy;' => [
            'codepoints' => [1118],
            'characters' => "\xD1\x9E",
        ],
        '&ubreve;' => [
            'codepoints' => [365],
            'characters' => "\xC5\xAD",
        ],
        '&ucirc' => [
            'codepoints' => [251],
            'characters' => "\xC3\xBB",
        ],
        '&ucirc;' => [
            'codepoints' => [251],
            'characters' => "\xC3\xBB",
        ],
        '&ucy;' => [
            'codepoints' => [1091],
            'characters' => "\xD1\x83",
        ],
        '&udarr;' => [
            'codepoints' => [8645],
            'characters' => "\xE2\x87\x85",
        ],
        '&udblac;' => [
            'codepoints' => [369],
            'characters' => "\xC5\xB1",
        ],
        '&udhar;' => [
            'codepoints' => [10606],
            'characters' => "\xE2\xA5\xAE",
        ],
        '&ufisht;' => [
            'codepoints' => [10622],
            'characters' => "\xE2\xA5\xBE",
        ],
        '&ufr;' => [
            'codepoints' => [120114],
            'characters' => "\xF0\x9D\x94\xB2",
        ],
        '&ugrave' => [
            'codepoints' => [249],
            'characters' => "\xC3\xB9",
        ],
        '&ugrave;' => [
            'codepoints' => [249],
            'characters' => "\xC3\xB9",
        ],
        '&uharl;' => [
            'codepoints' => [8639],
            'characters' => "\xE2\x86\xBF",
        ],
        '&uharr;' => [
            'codepoints' => [8638],
            'characters' => "\xE2\x86\xBE",
        ],
        '&uhblk;' => [
            'codepoints' => [9600],
            'characters' => "\xE2\x96\x80",
        ],
        '&ulcorn;' => [
            'codepoints' => [8988],
            'characters' => "\xE2\x8C\x9C",
        ],
        '&ulcorner;' => [
            'codepoints' => [8988],
            'characters' => "\xE2\x8C\x9C",
        ],
        '&ulcrop;' => [
            'codepoints' => [8975],
            'characters' => "\xE2\x8C\x8F",
        ],
        '&ultri;' => [
            'codepoints' => [9720],
            'characters' => "\xE2\x97\xB8",
        ],
        '&umacr;' => [
            'codepoints' => [363],
            'characters' => "\xC5\xAB",
        ],
        '&uml' => [
            'codepoints' => [168],
            'characters' => "\xC2\xA8",
        ],
        '&uml;' => [
            'codepoints' => [168],
            'characters' => "\xC2\xA8",
        ],
        '&uogon;' => [
            'codepoints' => [371],
            'characters' => "\xC5\xB3",
        ],
        '&uopf;' => [
            'codepoints' => [120166],
            'characters' => "\xF0\x9D\x95\xA6",
        ],
        '&uparrow;' => [
            'codepoints' => [8593],
            'characters' => "\xE2\x86\x91",
        ],
        '&updownarrow;' => [
            'codepoints' => [8597],
            'characters' => "\xE2\x86\x95",
        ],
        '&upharpoonleft;' => [
            'codepoints' => [8639],
            'characters' => "\xE2\x86\xBF",
        ],
        '&upharpoonright;' => [
            'codepoints' => [8638],
            'characters' => "\xE2\x86\xBE",
        ],
        '&uplus;' => [
            'codepoints' => [8846],
            'characters' => "\xE2\x8A\x8E",
        ],
        '&upsi;' => [
            'codepoints' => [965],
            'characters' => "\xCF\x85",
        ],
        '&upsih;' => [
            'codepoints' => [978],
            'characters' => "\xCF\x92",
        ],
        '&upsilon;' => [
            'codepoints' => [965],
            'characters' => "\xCF\x85",
        ],
        '&upuparrows;' => [
            'codepoints' => [8648],
            'characters' => "\xE2\x87\x88",
        ],
        '&urcorn;' => [
            'codepoints' => [8989],
            'characters' => "\xE2\x8C\x9D",
        ],
        '&urcorner;' => [
            'codepoints' => [8989],
            'characters' => "\xE2\x8C\x9D",
        ],
        '&urcrop;' => [
            'codepoints' => [8974],
            'characters' => "\xE2\x8C\x8E",
        ],
        '&uring;' => [
            'codepoints' => [367],
            'characters' => "\xC5\xAF",
        ],
        '&urtri;' => [
            'codepoints' => [9721],
            'characters' => "\xE2\x97\xB9",
        ],
        '&uscr;' => [
            'codepoints' => [120010],
            'characters' => "\xF0\x9D\x93\x8A",
        ],
        '&utdot;' => [
            'codepoints' => [8944],
            'characters' => "\xE2\x8B\xB0",
        ],
        '&utilde;' => [
            'codepoints' => [361],
            'characters' => "\xC5\xA9",
        ],
        '&utri;' => [
            'codepoints' => [9653],
            'characters' => "\xE2\x96\xB5",
        ],
        '&utrif;' => [
            'codepoints' => [9652],
            'characters' => "\xE2\x96\xB4",
        ],
        '&uuarr;' => [
            'codepoints' => [8648],
            'characters' => "\xE2\x87\x88",
        ],
        '&uuml' => [
            'codepoints' => [252],
            'characters' => "\xC3\xBC",
        ],
        '&uuml;' => [
            'codepoints' => [252],
            'characters' => "\xC3\xBC",
        ],
        '&uwangle;' => [
            'codepoints' => [10663],
            'characters' => "\xE2\xA6\xA7",
        ],
        '&vArr;' => [
            'codepoints' => [8661],
            'characters' => "\xE2\x87\x95",
        ],
        '&vBar;' => [
            'codepoints' => [10984],
            'characters' => "\xE2\xAB\xA8",
        ],
        '&vBarv;' => [
            'codepoints' => [10985],
            'characters' => "\xE2\xAB\xA9",
        ],
        '&vDash;' => [
            'codepoints' => [8872],
            'characters' => "\xE2\x8A\xA8",
        ],
        '&vangrt;' => [
            'codepoints' => [10652],
            'characters' => "\xE2\xA6\x9C",
        ],
        '&varepsilon;' => [
            'codepoints' => [1013],
            'characters' => "\xCF\xB5",
        ],
        '&varkappa;' => [
            'codepoints' => [1008],
            'characters' => "\xCF\xB0",
        ],
        '&varnothing;' => [
            'codepoints' => [8709],
            'characters' => "\xE2\x88\x85",
        ],
        '&varphi;' => [
            'codepoints' => [981],
            'characters' => "\xCF\x95",
        ],
        '&varpi;' => [
            'codepoints' => [982],
            'characters' => "\xCF\x96",
        ],
        '&varpropto;' => [
            'codepoints' => [8733],
            'characters' => "\xE2\x88\x9D",
        ],
        '&varr;' => [
            'codepoints' => [8597],
            'characters' => "\xE2\x86\x95",
        ],
        '&varrho;' => [
            'codepoints' => [1009],
            'characters' => "\xCF\xB1",
        ],
        '&varsigma;' => [
            'codepoints' => [962],
            'characters' => "\xCF\x82",
        ],
        '&varsubsetneq;' => [
            'codepoints' => [8842, 65024],
            'characters' => "\xE2\x8A\x8A\xEF\xB8\x80",
        ],
        '&varsubsetneqq;' => [
            'codepoints' => [10955, 65024],
            'characters' => "\xE2\xAB\x8B\xEF\xB8\x80",
        ],
        '&varsupsetneq;' => [
            'codepoints' => [8843, 65024],
            'characters' => "\xE2\x8A\x8B\xEF\xB8\x80",
        ],
        '&varsupsetneqq;' => [
            'codepoints' => [10956, 65024],
            'characters' => "\xE2\xAB\x8C\xEF\xB8\x80",
        ],
        '&vartheta;' => [
            'codepoints' => [977],
            'characters' => "\xCF\x91",
        ],
        '&vartriangleleft;' => [
            'codepoints' => [8882],
            'characters' => "\xE2\x8A\xB2",
        ],
        '&vartriangleright;' => [
            'codepoints' => [8883],
            'characters' => "\xE2\x8A\xB3",
        ],
        '&vcy;' => [
            'codepoints' => [1074],
            'characters' => "\xD0\xB2",
        ],
        '&vdash;' => [
            'codepoints' => [8866],
            'characters' => "\xE2\x8A\xA2",
        ],
        '&vee;' => [
            'codepoints' => [8744],
            'characters' => "\xE2\x88\xA8",
        ],
        '&veebar;' => [
            'codepoints' => [8891],
            'characters' => "\xE2\x8A\xBB",
        ],
        '&veeeq;' => [
            'codepoints' => [8794],
            'characters' => "\xE2\x89\x9A",
        ],
        '&vellip;' => [
            'codepoints' => [8942],
            'characters' => "\xE2\x8B\xAE",
        ],
        '&verbar;' => [
            'codepoints' => [124],
            'characters' => "\x7C",
        ],
        '&vert;' => [
            'codepoints' => [124],
            'characters' => "\x7C",
        ],
        '&vfr;' => [
            'codepoints' => [120115],
            'characters' => "\xF0\x9D\x94\xB3",
        ],
        '&vltri;' => [
            'codepoints' => [8882],
            'characters' => "\xE2\x8A\xB2",
        ],
        '&vnsub;' => [
            'codepoints' => [8834, 8402],
            'characters' => "\xE2\x8A\x82\xE2\x83\x92",
        ],
        '&vnsup;' => [
            'codepoints' => [8835, 8402],
            'characters' => "\xE2\x8A\x83\xE2\x83\x92",
        ],
        '&vopf;' => [
            'codepoints' => [120167],
            'characters' => "\xF0\x9D\x95\xA7",
        ],
        '&vprop;' => [
            'codepoints' => [8733],
            'characters' => "\xE2\x88\x9D",
        ],
        '&vrtri;' => [
            'codepoints' => [8883],
            'characters' => "\xE2\x8A\xB3",
        ],
        '&vscr;' => [
            'codepoints' => [120011],
            'characters' => "\xF0\x9D\x93\x8B",
        ],
        '&vsubnE;' => [
            'codepoints' => [10955, 65024],
            'characters' => "\xE2\xAB\x8B\xEF\xB8\x80",
        ],
        '&vsubne;' => [
            'codepoints' => [8842, 65024],
            'characters' => "\xE2\x8A\x8A\xEF\xB8\x80",
        ],
        '&vsupnE;' => [
            'codepoints' => [10956, 65024],
            'characters' => "\xE2\xAB\x8C\xEF\xB8\x80",
        ],
        '&vsupne;' => [
            'codepoints' => [8843, 65024],
            'characters' => "\xE2\x8A\x8B\xEF\xB8\x80",
        ],
        '&vzigzag;' => [
            'codepoints' => [10650],
            'characters' => "\xE2\xA6\x9A",
        ],
        '&wcirc;' => [
            'codepoints' => [373],
            'characters' => "\xC5\xB5",
        ],
        '&wedbar;' => [
            'codepoints' => [10847],
            'characters' => "\xE2\xA9\x9F",
        ],
        '&wedge;' => [
            'codepoints' => [8743],
            'characters' => "\xE2\x88\xA7",
        ],
        '&wedgeq;' => [
            'codepoints' => [8793],
            'characters' => "\xE2\x89\x99",
        ],
        '&weierp;' => [
            'codepoints' => [8472],
            'characters' => "\xE2\x84\x98",
        ],
        '&wfr;' => [
            'codepoints' => [120116],
            'characters' => "\xF0\x9D\x94\xB4",
        ],
        '&wopf;' => [
            'codepoints' => [120168],
            'characters' => "\xF0\x9D\x95\xA8",
        ],
        '&wp;' => [
            'codepoints' => [8472],
            'characters' => "\xE2\x84\x98",
        ],
        '&wr;' => [
            'codepoints' => [8768],
            'characters' => "\xE2\x89\x80",
        ],
        '&wreath;' => [
            'codepoints' => [8768],
            'characters' => "\xE2\x89\x80",
        ],
        '&wscr;' => [
            'codepoints' => [120012],
            'characters' => "\xF0\x9D\x93\x8C",
        ],
        '&xcap;' => [
            'codepoints' => [8898],
            'characters' => "\xE2\x8B\x82",
        ],
        '&xcirc;' => [
            'codepoints' => [9711],
            'characters' => "\xE2\x97\xAF",
        ],
        '&xcup;' => [
            'codepoints' => [8899],
            'characters' => "\xE2\x8B\x83",
        ],
        '&xdtri;' => [
            'codepoints' => [9661],
            'characters' => "\xE2\x96\xBD",
        ],
        '&xfr;' => [
            'codepoints' => [120117],
            'characters' => "\xF0\x9D\x94\xB5",
        ],
        '&xhArr;' => [
            'codepoints' => [10234],
            'characters' => "\xE2\x9F\xBA",
        ],
        '&xharr;' => [
            'codepoints' => [10231],
            'characters' => "\xE2\x9F\xB7",
        ],
        '&xi;' => [
            'codepoints' => [958],
            'characters' => "\xCE\xBE",
        ],
        '&xlArr;' => [
            'codepoints' => [10232],
            'characters' => "\xE2\x9F\xB8",
        ],
        '&xlarr;' => [
            'codepoints' => [10229],
            'characters' => "\xE2\x9F\xB5",
        ],
        '&xmap;' => [
            'codepoints' => [10236],
            'characters' => "\xE2\x9F\xBC",
        ],
        '&xnis;' => [
            'codepoints' => [8955],
            'characters' => "\xE2\x8B\xBB",
        ],
        '&xodot;' => [
            'codepoints' => [10752],
            'characters' => "\xE2\xA8\x80",
        ],
        '&xopf;' => [
            'codepoints' => [120169],
            'characters' => "\xF0\x9D\x95\xA9",
        ],
        '&xoplus;' => [
            'codepoints' => [10753],
            'characters' => "\xE2\xA8\x81",
        ],
        '&xotime;' => [
            'codepoints' => [10754],
            'characters' => "\xE2\xA8\x82",
        ],
        '&xrArr;' => [
            'codepoints' => [10233],
            'characters' => "\xE2\x9F\xB9",
        ],
        '&xrarr;' => [
            'codepoints' => [10230],
            'characters' => "\xE2\x9F\xB6",
        ],
        '&xscr;' => [
            'codepoints' => [120013],
            'characters' => "\xF0\x9D\x93\x8D",
        ],
        '&xsqcup;' => [
            'codepoints' => [10758],
            'characters' => "\xE2\xA8\x86",
        ],
        '&xuplus;' => [
            'codepoints' => [10756],
            'characters' => "\xE2\xA8\x84",
        ],
        '&xutri;' => [
            'codepoints' => [9651],
            'characters' => "\xE2\x96\xB3",
        ],
        '&xvee;' => [
            'codepoints' => [8897],
            'characters' => "\xE2\x8B\x81",
        ],
        '&xwedge;' => [
            'codepoints' => [8896],
            'characters' => "\xE2\x8B\x80",
        ],
        '&yacute' => [
            'codepoints' => [253],
            'characters' => "\xC3\xBD",
        ],
        '&yacute;' => [
            'codepoints' => [253],
            'characters' => "\xC3\xBD",
        ],
        '&yacy;' => [
            'codepoints' => [1103],
            'characters' => "\xD1\x8F",
        ],
        '&ycirc;' => [
            'codepoints' => [375],
            'characters' => "\xC5\xB7",
        ],
        '&ycy;' => [
            'codepoints' => [1099],
            'characters' => "\xD1\x8B",
        ],
        '&yen' => [
            'codepoints' => [165],
            'characters' => "\xC2\xA5",
        ],
        '&yen;' => [
            'codepoints' => [165],
            'characters' => "\xC2\xA5",
        ],
        '&yfr;' => [
            'codepoints' => [120118],
            'characters' => "\xF0\x9D\x94\xB6",
        ],
        '&yicy;' => [
            'codepoints' => [1111],
            'characters' => "\xD1\x97",
        ],
        '&yopf;' => [
            'codepoints' => [120170],
            'characters' => "\xF0\x9D\x95\xAA",
        ],
        '&yscr;' => [
            'codepoints' => [120014],
            'characters' => "\xF0\x9D\x93\x8E",
        ],
        '&yucy;' => [
            'codepoints' => [1102],
            'characters' => "\xD1\x8E",
        ],
        '&yuml' => [
            'codepoints' => [255],
            'characters' => "\xC3\xBF",
        ],
        '&yuml;' => [
            'codepoints' => [255],
            'characters' => "\xC3\xBF",
        ],
        '&zacute;' => [
            'codepoints' => [378],
            'characters' => "\xC5\xBA",
        ],
        '&zcaron;' => [
            'codepoints' => [382],
            'characters' => "\xC5\xBE",
        ],
        '&zcy;' => [
            'codepoints' => [1079],
            'characters' => "\xD0\xB7",
        ],
        '&zdot;' => [
            'codepoints' => [380],
            'characters' => "\xC5\xBC",
        ],
        '&zeetrf;' => [
            'codepoints' => [8488],
            'characters' => "\xE2\x84\xA8",
        ],
        '&zeta;' => [
            'codepoints' => [950],
            'characters' => "\xCE\xB6",
        ],
        '&zfr;' => [
            'codepoints' => [120119],
            'characters' => "\xF0\x9D\x94\xB7",
        ],
        '&zhcy;' => [
            'codepoints' => [1078],
            'characters' => "\xD0\xB6",
        ],
        '&zigrarr;' => [
            'codepoints' => [8669],
            'characters' => "\xE2\x87\x9D",
        ],
        '&zopf;' => [
            'codepoints' => [120171],
            'characters' => "\xF0\x9D\x95\xAB",
        ],
        '&zscr;' => [
            'codepoints' => [120015],
            'characters' => "\xF0\x9D\x93\x8F",
        ],
        '&zwj;' => [
            'codepoints' => [8205],
            'characters' => "\xE2\x80\x8D",
        ],
        '&zwnj;' => [
            'codepoints' => [8204],
            'characters' => "\xE2\x80\x8C",
        ],
    ];

    /**
     * Get named characters max name length.
     * @return int
     */
    public static function getNamedCharacterMaxLength()
    {
        return  static::$namedCharacterMaxLength;
    }

    /**
     * Get named character references table.
     * @return array
     */
    public static function getNamedCharacterReferences()
    {
        return  static::$namedCharacterReferences;
    }
}
