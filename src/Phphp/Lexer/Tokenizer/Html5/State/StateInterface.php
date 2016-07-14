<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;
use Phphp\Lexer\Tokenizer\Html5;

/**
 * Interface StateInterface
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
interface StateInterface
{
    public function handle();

    /**
     * @param Html5 $tokenizer
     */
    public function setTokenizer(Html5 $tokenizer);

    /**
     * @return Html5
     */
    public function getTokenizer();
}