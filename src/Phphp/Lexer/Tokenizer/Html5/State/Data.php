<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\TokenizerInterface;

class Data implements StateInterface
{
    public function handle(TokenizerInterface $tokenizer)
    {
        $consume = $tokenizer->consume();

    }
}