<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Tokenizer;

/**
 * Class HexademicalCharacterReferenceStartState
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class HexademicalCharacterReferenceStart extends AbstractState
{
    public function handle()
    {
        $tokenizer = $this->getTokenizer();

        // Consume the next input character:
        $char = $tokenizer->consume();

        if ($this->isAsciiHexDigit($char)) {
            // Reconsume in the hexademical character reference state.
            $tokenizer->unconsume();
            $tokenizer->setState(new HexademicalCharacterReference());
        } else {
            // Parse error. Reconsume in the character reference end state.
            $tokenizer->error(Tokenizer::PARSE_ERROR);
            $tokenizer->unconsume();
            $tokenizer->setState(new CharacterReferenceEnd());
        }
    }
}
