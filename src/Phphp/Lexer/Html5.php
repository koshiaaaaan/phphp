<?php
namespace Phphp\Lexer;

use Phphp\Contracts\Lexer;
use Phphp\Contracts\Lexer\Scanner;
use Phphp\Lexer\Tokenizer\Html5 as Tokenizer;

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
        $this->tokenizer = new Tokenizer($scanner);
    }

    public function analyze()
    {
        return $this->tokenizer->tokenize();
    }
}