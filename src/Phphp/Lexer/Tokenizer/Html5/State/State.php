<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;
use Phphp\Lexer\Tokenizer\Html5Tokenizer;

/**
 * Interface State
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
interface State
{
    public function handle();

    /**
     * @param Html5Tokenizer $tokenizer
     */
    public function setTokenizer(Html5Tokenizer $tokenizer);

    /**
     * @return Html5Tokenizer
     */
    public function getTokenizer();
}
