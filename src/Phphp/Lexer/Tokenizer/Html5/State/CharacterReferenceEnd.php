<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Html5 as Tokenizer;
use Phphp\Lexer\Tokenizer\Html5\Token;

/**
 * Class CharacterReferenceEnd
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class CharacterReferenceEnd extends AbstractState
{
    public function handle()
    {
        $tokenizer      = $this->getTokenizer();
        $returnState    = $tokenizer->getReturnState();
        $buffer         = $tokenizer->getTemporaryBuffer()->getBuffer();

        // Check the return state:
        if (
            $returnState instanceof AttributeValueAtDoubleQuoted ||
            $returnState instanceof AttributeValueAtSignleQuoted ||
            $returnState instanceof AttributeValueAtUnquoted
        ) {
            // Append each character in the temporary buffer (in the order they
            // were added to the buffer) to the current attribute's value.
            // TODO:
        } else {
            // For each of the characters in the temporary buffer (in the order
            // they were added to the buffer), emit the character as a character
            // token.
            /** @var Token\Character $token */
            $token = $tokenizer->createToken(Tokenizer::TOKEN_TYPE_CHARACTER);
            $token->appendCharacter($buffer);
            $tokenizer->emitToken($token);
        }
        $tokenizer->setState($returnState);
    }
}
