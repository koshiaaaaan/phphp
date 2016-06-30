<?php
namespace Phphp\Parser;

use Phphp\Reader\ReaderInterface;

interface ParserInterface
{
    public static function parse(ReaderInterface $reader);
}
