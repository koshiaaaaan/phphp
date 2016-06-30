<?php
namespace Phphp\Parser;

use Phphp\Reader\ReaderInterface;
use Phphp\Parser\HtmlParser\Tokenizer;

class HtmlParser implements ParserInterface
{
    private $stopped = false;

    private $tokenizer;

    public static function parse(ReaderInterface $reader)
    {
        $parser = new self($reader);
    }

    protected function __construct(ReaderInterface $reader)
    {
        $this->reader       = $reader;
        $this->tokenizer    = new Tokenizer();
    }

    protected function parsingLoop()
    {
        while (!$this->stopped) {
        }
     }
}