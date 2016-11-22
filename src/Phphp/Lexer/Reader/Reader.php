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
     * @param  integer $length
     * @return string
     */
    public function peek($length = 1);

    /**
     * @return string
     */
    public function advance();

    /**
     * @return string
     */
    public function retreat();
}
