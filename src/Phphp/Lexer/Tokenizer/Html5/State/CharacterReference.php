<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;
use Phphp\Lexer\Tokenizer\Html5\Character;

/**
 * Class CharacterReferenceInData
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class CharacterReference extends AbstractState
{
    /**
     * @var StateInterface
     */
    private $returnState;

    public function handle()
    {
        $tokenizer  = $this->getTokenizer();

        // Set the temporary buffer to the empty string.
        // Append a U+0026 AMPERSAND (&) character to the temporary buffer.
        $tmpBuff    = $tokenizer->getTemporaryBuffer();
        $tmpBuff->reset();
        $tmpBuff->append(Character::AMPERSAND);

        $char = $tokenizer->consume();

        if (
            $char === Character::TABULATION     ||
            $char === Character::LINE_FEED      ||
            $char === Character::FORM_FEED      ||
            $char === Character::SPACE          ||
            $char === Character::LESS_THAN_SIGN ||
            $char === Character::AMPERSAND      ||
            $char === Character::EOF
        ) {
            // Reconsume in the character reference end state.
            $tokenizer->unconsume();
            $state  = new CharacterReferenceEnd();
            $state->setReturnState($this->getReturnState());
            $tokenizer->setState($state);
        } elseif ($char === Character::NUMBER_SIGN) {
            // &#...
            $tmpBuff->append($char);
            $tokenizer->setState(new NumericCharacterReference());
        } else {
            Character::getNamedCharacterMaxLength();
        }
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