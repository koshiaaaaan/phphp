<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Html5\Token\CharacterToken;

/**
 * Class CharacterReferenceEndState
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class CharacterReferenceEndState extends AbstractState
{
    public function handle()
    {
        $tokenizer      = $this->getTokenizer();
        $returnState    = $tokenizer->getReturnState();
        $buffer         = $tokenizer->getTemporaryBuffer()->getBuffer();

        // Check the return state:
        if (
            $returnState instanceof AttributeValueAtDoubleQuotedState ||
            $returnState instanceof AttributeValueAtSignleQuotedState ||
            $returnState instanceof AttributeValueAtUnquotedState
        ) {
            // Append each character in the temporary buffer (in the order they
            // were added to the buffer) to the current attribute's value.
            // TODO:
        } else {
            // For each of the characters in the temporary buffer (in the order
            // they were added to the buffer), emit the character as a character
            // token.
            $tokenizer->emitToken(new CharacterToken($buffer));
        }
        $this->setState($returnState);
    }
}
