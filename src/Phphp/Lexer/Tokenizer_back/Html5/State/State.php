<?php
namespace Phphp\Lexer\Tokenizer_back\Html5\State;

/**
 * Interface State
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
interface State
{
    public function handle();

    /**
     * @param \Phphp\Lexer\Tokenizer_back\Html5 $tokenizer
     */
    public function setTokenizer(\Phphp\Lexer\Tokenizer_back\Html5 $tokenizer);

    /**
     * @return \Phphp\Lexer\Tokenizer_back\Html5
     */
    public function getTokenizer();
}
