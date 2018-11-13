<?php
namespace Phphp\Lexer;

use Phphp\Contracts\Lexer;
use Phphp\Contracts\Lexer\Scanner;
use Phphp\Lexer\Tokenizer\Html5 as Html5Tokenizer;

class Html5 implements Lexer
{
    /**
     * @var \Phphp\Lexer\Tokenizer\Html5 $tokenizer
     */
    protected $tokenizer;

    /**
     * Html5 constructor.
     *
     * @param \Phphp\Contracts\Lexer\Scanner $scanner
     */
    public function __construct(Scanner $scanner)
    {
        $this->tokenizer = new Html5Tokenizer($scanner);
    }

    /**
     * Tokenize
     *
     * @return Lexer\Tokenizer\Html5\Token
     */
    public function analyze()
    {
        do {
            if (!$token = $this->tokenizer->getNextToken()) {
                $this->tokenizer->handle();
            }
        } while (is_null($token));
        return $token;
    }
}