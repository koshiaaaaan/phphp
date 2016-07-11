<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\TokenizerInterface;
use Phphp\Lexer\Tokenizer\Html5\Token;
use Phphp\Lexer\Character;

/**
 * Class Data
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class Data extends AbstractState
{
    public function handle()
    {
        $char = $this->getTokenizer()->consume();

        if ($char === Character::AMPERSAND) {
            $this->getTokenizer()->setState('CharacterReferenceInData');
        } elseif ($char === Character::LESS_THAN_SIGN) {
            $this->getTokenizer()->setState('TagOpen');
        } elseif ($char === Character::NULL) {
            $this->getTokenizer()->error(TokenizerInterface::PARSE_ERROR);
            $this->emitCharacterToken($char);
        } elseif ($char === Character::EOF) {
            $this->emitEofToken();
        } else {
            $this->emitCharacterToken($char);
        }
    }
}