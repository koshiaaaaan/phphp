<?php
namespace Phphp\Tests\Parser;

use Phphp\Parser\HtmlParser;
use Phphp\Reader\StringReader;

class HtmlParserTest extends \PHPUnit_Framework_TestCase
{
    public function testParse()
    {
        $reader = new StringReader('<html></html>');
        $this->assertInstanceOf('Phphp\Dom', HtmlParser::parse($reader));
    }
}