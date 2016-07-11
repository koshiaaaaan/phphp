<?php
namespace Phphp\Tests\Lexer\Tokenizer;

use Phphp\Lexer\Tokenizer\Html5;
use Phphp\Lexer\Reader\String;

class Html5Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Html5
     */
    private $tokenizer;

    public function setUp()
    {
        $this->tokenizer = new Html5(new String('abcde'));
    }

    public function testGetNextToken()
    {
        $token  = $this->tokenizer->getNextToken();
        $this->assertInstanceOf('Phphp\\Lexer\\Tokenizer\\Html5\\Token\\Character', $token);
    }
}