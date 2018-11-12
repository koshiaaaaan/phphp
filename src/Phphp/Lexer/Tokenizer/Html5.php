<?php
namespace Phphp\Lexer\Tokenizer;

use Phphp\Contracts\Lexer\Scanner;
use Phphp\Contracts\Lexer\Tokenizer;
use Phphp\Lexer\Tokenizer\Html5\TokenQueue;
use Phphp\Lexer\Tokenizer\Html5\TokenizeManager;
use Phphp\Lexer\Tokenizer\Html5\State\Data;

class Html5 implements Tokenizer
{
    /**
     * @var \Phphp\Lexer\Tokenizer\Html5\TokenizeManager
     */
    protected $manager;

    /**
     * @var string $returnState
     */
    protected $returnState;

    protected $temporaryBuffer;

    public function __construct(Scanner $scanner)
    {
        $this->manager = new TokenizeManager($scanner);
        $this->returnState = '';
    }

    public function tokenize()
    {
        $queue = $this->manager->getTokenQueue();
        do {
            $token = null;
            if ($queue->count() > 0) {
                $token = $queue->dequeue();
            } else {
                $this->manager->handle();
            }
        } while (is_null($token));
        return $token;
    }
}