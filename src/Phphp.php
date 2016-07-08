<?php
namespace Phphp;

use Phphp\Lexer\Reader\ReaderInterface;
use Phphp\Lexer\Reader\String;
use Phphp\Parser\Html5;

class Phphp
{
    /**
     * document reader
     * @var Phphp\Lexer\Reader\ReaderInterface
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
            $html   = new String($html);
        }

        if (!$html instanceof ReaderInterface) {
            throw new \InvalidArgumentException('与えられたパラメータが正しくありません');
        }

        $result = Html5::parse($html);

        return new self();
    }

    public function __construct()
    {
    }
}