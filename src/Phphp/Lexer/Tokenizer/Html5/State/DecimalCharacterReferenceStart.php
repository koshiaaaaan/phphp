<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Html5 as Tokenizer;

/**
 * Class DecimalCharacterReferenceStart
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class DecimalCharacterReferenceStart extends AbstractState
{
    public function handle()
    {
        $tokenizer = $this->getTokenizer();

        // Consume the next input character:
        $char = $tokenizer->consume();

        if ($this->isAsciiDigit($char)) {
            // Reconsume in the decimal character reference state.
            $tokenizer->unconsume();
            $tokenizer->setState(new DecimalCharacterReference());
        } else {
            // Parse error. Reconsume in the character reference end state.
            $tokenizer->error(Tokenizer::PARSE_ERROR);
            $tokenizer->unconsume();
            $tokenizer->setState(new CharacterReferenceEnd());
        }
    }
}
