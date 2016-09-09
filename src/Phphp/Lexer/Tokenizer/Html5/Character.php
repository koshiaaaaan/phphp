<?php
namespace Phphp\Lexer\Tokenizer\Html5;

use Phphp\Lexer\Character as BasicCharacter;

class Character extends BasicCharacter
{
    const SEQUENCE_DASH_DASH    = "\x2D\x2D";                       // --
    const SEQUENCE_DOCTYPE      = "\x44\x4F\x43\x54\x59\x50\x45";   // DOCTYPE
    const SEQUENCE_CDATA_START  = "\x5B\x43\x44\x41\x54\x41\x5B";   // [CDATA[
    const SEQUENCE_CDATA_END    = "\x5D\x5D\x3E";                   // ]]>
    const SEQUENCE_SCRIPT       = "\x73\x63\x72\x69\x70\x74";       // script
    const SEQUENCE_PUBLIC       = "\x50\x55\x42\x4C\x49\x43";       // PUBLIC
    const SEQUENCE_SYSTEM       = "\x53\x59\x53\x54\x45\x4D";       // SYSTEM
}