<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

/**
 * Class CharacterReferenceInEndData
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class CharacterReferenceEnd extends AbstractState
{
    /**
     * @var StateInterface
     */
    private $returnState;

    public function handle()
    {
    }

    /**
     * @param StateInterface $state
     * @return $this
     */
    public function setReturnState(StateInterface $state)
    {
        $this->returnState  = $state;
        return  $this;
    }

    /**
     * @return StateInterface
     */
    public function getReturnState()
    {
        return  $this->returnState;
    }
}