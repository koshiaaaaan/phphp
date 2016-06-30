<?php
namespace Phphp;

use Phphp\Reader\ReaderInterface;
use Phphp\Reader\StringReader;
use Phphp\Parser\HtmlParser;

class Phphp
{
    /**
     * document reader
     * @var Phphp\Parser\Reader\ReaderInterface
     */
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

        if (!$html instanceof ReaderInterface) {
            throw new \InvalidArgumentException('与えられたパラメータが正しくありません');
        }

        $result = HtmlParser::parse($html);

        return new self();
    }

    public function __construct()
    {
    }
}