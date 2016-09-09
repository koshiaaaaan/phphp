<?php
namespace Phphp\Lexer\Reader;

/**
 * 渡されたデータを読む
 *
 * @category Lexer
 * @package Analyzer
 **/
interface Reader
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