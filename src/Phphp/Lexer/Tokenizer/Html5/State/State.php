<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use BadMethodCallException;
use Phphp\Lexer\Tokenizer\Html5 as Tokenizer;
use Phphp\Contracts\Lexer\Tokenizer\Html5\State as StateContracts;

/**
 * @mixin \Phphp\Lexer\Tokenizer\Html5
 */
abstract class State implements StateContracts
{
    /**
     * @var \Phphp\Lexer\Tokenizer\Html5
     */
    private $tokenizer;

    /**
     * State constructor.
     * @param \Phphp\Lexer\Tokenizer\Html5 $tokenizer
     */
    final public function __construct(Tokenizer $tokenizer)
    {
        $this->tokenizer = $tokenizer;
    }

    /**
     * @param $name
     * @param $args
     * @return mixed
     *
     * @throws \BadMethodCallException
     */
    public function __call($name, $args)
    {
        if (!method_exists($this->tokenizer, $name)) {
            throw new BadMethodCallException(sprintf('Undefined method [%s]', $name));
        }
        return call_user_func_array([$this->tokenizer, $name], $args);
    }
}