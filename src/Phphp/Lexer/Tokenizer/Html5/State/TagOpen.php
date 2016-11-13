<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Lexer\Tokenizer\Tokenizer;
use Phphp\Lexer\Tokenizer\Html5\Character;

/**
 * Class TagOpenState
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class TagOpen extends AbstractState
{
    public function handle()
    {
        $tokenizer = $this->getTokenizer();

        // Consume the next input character:
        $char = $tokenizer->consume();

        if ($char === Character::EXCLAMATION_MARK) {
            $tokenizer->setState(new MarkupDeclarationOpen());
        } elseif ($char === Character::SOLIDUS) {
            $tokenizer->setState(new EndTagOpen());
        } elseif ()
    }
}
