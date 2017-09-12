<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Html5 as Tokenizer;
use Phphp\Lexer\Tokenizer\Html5\Reference\Character;
use Phphp\Lexer\Tokenizer\Html5\Token;

/**
 * Class Data
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class Data extends AbstractState
{
    /**
     * @see https://html.spec.whatwg.org/multipage/parsing.html#data-state
     */
    public function handle()
    {
        // Consume the next input character:
        $tokenizer = $this->getTokenizer();
        $char = $tokenizer->consume();

        if ($char === Character::AMPERSAND) {
            // Set the return state to the data state. Switch to the character reference state.
            $tokenizer->setReturnState($this);
            $tokenizer->setState(new CharacterReference());
        } elseif ($char === Character::LESS_THAN_SIGN) {
            // Switch to the tag open state.
            $tokenizer->setState(new TagOpen());
        } elseif ($char === Character::NULL) {
            // This is an unexpected-null-character parse error. Emit the current input character as a character token.
            $tokenizer->parseError(Tokenizer::UNEXPECTED_NULL_CHARACTER);
            /** @var Token\Character $token */
            $token = $tokenizer->createToken(Tokenizer::TOKEN_TYPE_CHARACTER);
            $token->appendCharacter($char);
            $tokenizer->emitToken($token);
        } elseif ($char === Character::EOF) {
            // Emit an end-of-file token.
            $tokenizer->emitToken($tokenizer->createToken(Tokenizer::TOKEN_TYPE_EOF));
        } else {
            // Emit the current input character as a character token.
            /** @var Token\Character $token */
            $token = $tokenizer->createToken(Tokenizer::TOKEN_TYPE_CHARACTER);
            $token->appendCharacter($char);
            $tokenizer->emitToken($token);
        }
    }
}
