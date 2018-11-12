<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use BadMethodCallException;
use Phphp\Lexer\Tokenizer\Html5\TokenizeManager;
use Phphp\Contracts\Lexer\Tokenizer\Html5\State as StateContracts;

/**
 * @mixin \Phphp\Lexer\Tokenizer\Html5\TokenizeManager
 */
abstract class State implements StateContracts
{
    /**
     * @var \Phphp\Lexer\Tokenizer\Html5\TokenizeManager
     */
    private $manager;

    /**
     * State constructor.
     * @param \Phphp\Lexer\Tokenizer\Html5\TokenizeManager $manager
     */
    final public function __construct(TokenizeManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @param $name
     * @param $args
     * @return mixed
     */
    public function __call($name, $args)
    {
        if (!method_exists($this->manager, $name)) {
            throw new BadMethodCallException(sprintf('Undefined method [%s]', $name));
        }
        return call_user_func_array([$this->manager, $name], $args);
    }
}