<?php
namespace Phphp\Lexer\Tokenizer\Html5;

use Phphp\Character;
use Phphp\Contracts\Lexer\Scanner;
use Phphp\Lexer\Tokenizer\Html5\Error\ParseErrorException;

class StatusManager
{
    const STATE_DATA = 'data';
    const STATE_CHARACTER_REFERENCE = 'characterReference';
    const STATE_TAG_OPEN = 'tagOpen';

    /**
     * @var bool $abortParsingByError
     */
    protected $abortParsingByError = false;

    /**
     * @var \Exception[] $errors
     */
    protected $errors = [];

    /**
     * @var \Phphp\Contracts\Lexer\Scanner $scanner
     */
    protected $scanner;

    /**
     * @var string $state
     */
    protected $state;

    /**
     * @var string $returnState
     */
    protected $returnState;

    /**
     * @var \Phphp\Contracts\Lexer\Tokenizer\Html5\Token[] $tokenQueue
     */
    protected $tokenQueue = [];

    /**
     * State constructor.
     *
     * @param \Phphp\Contracts\Lexer\Scanner $scanner
     */
    public function __construct(Scanner $scanner)
    {
        $this->scanner = $scanner;
        $this->state = static::STATE_DATA;
    }

    /**
     * Execute current state
     *
     * @return $this
     */
    public function handle()
    {
        $this->state = $this->{$this->state}();
        return $this;
    }

    protected function consume()
    {
        return $this->scanner->advance();
    }

    protected function data()
    {
        $char = $this->consume();
        if ($char === Character::AMPERSAND) {
            $this->returnState = static::STATE_DATA;
            return static::STATE_CHARACTER_REFERENCE;
        } elseif ($char === Character::LESS_THAN_SIGN) {
            return static::STATE_TAG_OPEN;
        } elseif ($char === Character::NULL) {
            $this->error(new ParseErrorException('Unexpected null character'));
        }
    }

    /**
     * @param \Exception $exception
     *
     * @throws \Exception
     */
    protected function error(\Exception $exception)
    {
        if ($this->abortParsingByError) {
            throw $exception;
        } else {
            $this->errors[] = $exception;
        }
    }
}