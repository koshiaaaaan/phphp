<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\TokenizerInterface;
use Phphp\Lexer\Tokenizer\Html5\Token;
use Phphp\Lexer\Tokenizer\Html5\Character;

/**
 * Class Data
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class Data extends AbstractState
{
    public function handle()
    {
        $tokenizer  = $this->getTokenizer();
        $char = $tokenizer->consume();

        if ($char === Character::AMPERSAND) {
            $tokenizer->setReturnState($this);
            $tokenizer->setState(new CharacterReference());
        } elseif ($char === Character::LESS_THAN_SIGN) {
            $tokenizer->setState(new TagOpen());
        } elseif ($char === Character::NULL) {
            $tokenizer->error(TokenizerInterface::PARSE_ERROR);
            $tokenizer->emitToken(new Token\Character($char));
        } elseif ($char === Character::EOF) {
            $tokenizer->emitToken(new Token\Eof());
        } else {
            $tokenizer->emitToken(new Token\Character($char));
        }
    }
}