<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\TokenizerInterface;

/**
 * @category StateHandler
 * @package Analyzer
 **/
interface StateInterface
{
    public function handle(TokenizerInterface $tokenizer);
}