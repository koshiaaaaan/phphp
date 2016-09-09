<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;
use Phphp\Lexer\Tokenizer\Html5\Token;

/**
 * Class CharacterReferenceInEndData
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class CharacterReferenceEnd extends AbstractState
{
    public function handle()
    {
        $tokenizer      = $this->getTokenizer();

        $returnState    = $tokenizer->getReturnState();

        $buffer         = $tokenizer->getTemporaryBuffer()->getBuffer();

        if (
            $returnState instanceof AttributeValueAtDoubleQuoted ||
            $returnState instanceof AttributeValueAtSignleQuoted ||
            $returnState instanceof AttributeValueAtUnquoted
        ) {

        } else {
            $tokenizer->emitToken(new Token\Character($buffer));
        }
    }
}