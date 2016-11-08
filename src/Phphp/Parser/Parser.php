<?php
namespace Phphp\Parser;

interface Parser
{
    public static function parse(\Phphp\Lexer\Reader\Reader $reader);
}
