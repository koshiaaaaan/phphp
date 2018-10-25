<?php
namespace Phphp\Lexer\Scanner;

/**
 * 渡されたデータを読む
 **/
interface Scanner
{
    /**
     * カーソルはそのままで、先の文字（列）を取得する
     *
     * @param  integer $length = 1
     * @return string
     */
    public function peek($length = 1);

    /**
     * 次の１文字を取得し、カーソルを進める
     *
     * @return string
     */
    public function advance();

    /**
     * 前の１文字を取得し、カーソルを戻す
     *
     * @return string
     */
    public function retreat();
}
