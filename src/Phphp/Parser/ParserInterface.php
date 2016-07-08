<?php
namespace Phphp\Parser;

use Phphp\Lexer\Reader\ReaderInterface;

interface ParserInterface
{
    public static function parse(ReaderInterface $reader);
}
