<?php
namespace Phphp\Parser;

use Phphp\Lexer\Reader\Reader;

interface Parser
{
    public static function parse(Reader $reader);
}
