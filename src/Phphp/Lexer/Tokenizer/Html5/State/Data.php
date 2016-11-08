<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Tokenizer;
use Phphp\Lexer\Tokenizer\Html5\Character;
use Phphp\Lexer\Tokenizer\Html5\Token\EofToken;
use Phphp\Lexer\Tokenizer\Html5\Token\CharacterToken;

/**
 * Class DataState
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class Data extends AbstractState
{
    public function handle()
    {
        $tokenizer = $this->getTokenizer();
        $char = $tokenizer->consume();

        if ($char === Character::AMPERSAND) {
            $tokenizer->setReturnState($this);
            $tokenizer->setState(new CharacterReference());
        } elseif ($char === Character::LESS_THAN_SIGN) {
            $tokenizer->setState(new TagOpen());
        } elseif ($char === Character::NULL) {
            $tokenizer->error(Tokenizer::PARSE_ERROR);
            $tokenizer->emitToken(new CharacterToken($char));
        } elseif ($char === Character::EOF) {
            $tokenizer->emitToken(new EofToken());
        } else {
            $tokenizer->emitToken(new CharacterToken($char));
        }
    }
}
