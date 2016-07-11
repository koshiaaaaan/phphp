<?php
namespace Phphp\Lexer\Reader;

/**
 * 渡されたデータを読む
 *
 * @category Lexer
 * @package Analyzer
 **/
interface ReaderInterface
{
    /**
     * @return string
     */
    public function advance();

    /**
     * @return integer
     */
    public function retreat();
}