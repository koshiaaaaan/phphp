<?php
namespace Phphp\Lexer\Tokenizer\Html5\Support;

use Phphp\Lexer\Tokenizer\Html5\Error\ParseErrorException;

trait ErrorManager
{
    /**
     * @var \Phphp\Lexer\Tokenizer\Html5\Error\ParseErrorException[]
     */
    protected $errors = [];

    /**
     * @var bool
     */
    protected $abortParsingByError = false;

    /**
     * @param bool $flag
     * @return $this
     */
    public function abortParsingByError(bool $flag): self
    {
        $this->abortParsingByError = $flag;
        return $this;
    }

    /**
     * @param \Phphp\Lexer\Tokenizer\Html5\Error\ParseErrorException $error
     * @return $this
     *
     * @throws \Phphp\Lexer\Tokenizer\Html5\Error\ParseErrorException
     */
    public function error(ParseErrorException $error): self
    {
        if ($this->abortParsingByError) {
            throw $error;
        }
        return $this->stockError($error);
    }

    /**
     * @param \Phphp\Lexer\Tokenizer\Html5\Error\ParseErrorException $error
     * @return $this
     */
    public function stockError(ParseErrorException $error): self
    {
        $this->errors[] = $error;
        return $this;
    }
}