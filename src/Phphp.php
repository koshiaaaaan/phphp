<?php
namespace Phphp;

use Phphp\Lexer\Reader\Reader;
use Phphp\Lexer\Reader\StringReader;
use Phphp\Parser\Html5Parser;

class Phphp
{
    /**
     * document reader
     * @var Phphp\Lexer\Reader\Reader
     **/
    private $reader;

    /**
     * Create Phphp object
     * @param  mixed  $html  HTMLデータを与える
     * @return Phphp         Phphpオブジェクトを返す
     **/
    public static function factory($html)
    {
        if (is_string($html)) {
            $html   = new StringReader($html);
        }

        if (!$html instanceof Reader) {
            throw new \InvalidArgumentException('与えられたパラメータが正しくありません');
        }

        $result = Html5Parser::parse($html);

        return new self();
    }

    public function __construct()
    {
    }
}
