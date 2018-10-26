<?php
namespace Phphp\Lexer\Tokenizer;

use Phphp\Lexer\Tokenizer\Html5\State\Data;
use Phphp\Contracts\Lexer\Scanner;
use Phphp\Contracts\Lexer\Tokenizer;

class Html5 implements Tokenizer
{
    /**
     * @var \Phphp\Contracts\Lexer\Scanner $scanner
     */
    protected $scanner;

    /**
     * @var string $state
     */
    protected $state;

    /**
     * @var \Phphp\Contracts\Lexer\Tokenizer\Html5\Token[] $tokenQueue
     */
    protected $tokenQueue = [];

    public function __construct(Scanner $scanner)
    {
        $this->scanner = $scanner;
        $this->state = Data::class;
    }

    public function tokenize()
    {
        do {
            $token = null;
            if (count($this->tokenQueue) > 0) {
                $token = array_shift($this->tokenQueue);
            } else {
                /** @var \Phphp\Contracts\Lexer\Tokenizer\Html5\State $state */
                $state = new $this->state();
                $this->state = $state->handle();
            }
        } while (is_null($token));
        return $token;
    }
}