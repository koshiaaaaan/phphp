<?php
namespace Phphp\Parser;

use Phphp\Lexer\Scanner\Scanner;

interface Parser
{
    /**
     * @param \Phphp\Lexer\Scanner\Scanner $reader
     * @return mixed
     */
    public static function parse(Scanner $reader);
}
