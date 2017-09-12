<?php
namespace Phphp\Parser;

use Phphp\Lexer\Reader\Reader;

interface Parser
{
    /**
     * @param Reader $reader
     * @return mixed
     */
    public static function parse(Reader $reader);
}
