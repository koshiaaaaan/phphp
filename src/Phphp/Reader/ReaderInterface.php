<?php
namespace Phphp\Reader;

interface ReaderInterface
{
    /**
     * カレントの文字を取得
     * @return string カレントの文字
     **/
    public function current();

    /**
     * カーソルをすすめる
     * @return void
     **/
    public function next();

    /**
     * カーソルを最初に戻す
     * @return void
     **/
    public function rewind();

    /**
     * カレントのカーソル位置が有効かどうか
     * @return boolean true:有効、false:無効
     */
    public function valid();
}