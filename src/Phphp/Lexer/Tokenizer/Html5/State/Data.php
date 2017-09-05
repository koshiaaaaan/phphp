<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Html5 as Tokenizer;
use Phphp\Lexer\Tokenizer\Html5\Character;
use Phphp\Lexer\Tokenizer\Html5\Token;
use LogicException;

/**
 * Class Data
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class Data extends AbstractState
{
    /**
     * @throws LogicException
     */
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
            /** @var Token\Character $token */
            $token = $tokenizer->createToken(Tokenizer::TOKEN_TYPE_CHARACTER);
            $token->appendCharacter($char);
            $tokenizer->emitToken($token);
        } elseif ($char === Character::EOF) {
            $tokenizer->emitToken($tokenizer->createToken(Tokenizer::TOKEN_TYPE_EOF));
        } else {
            /** @var Token\Character $token */
            $token = $tokenizer->createToken(Tokenizer::TOKEN_TYPE_CHARACTER);
            $token->appendCharacter($char);
            $tokenizer->emitToken($token);
        }
    }
}
