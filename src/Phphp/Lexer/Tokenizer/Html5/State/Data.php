<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Character;
use Phphp\Lexer\Tokenizer\Html5\Error\ParseErrorException;
use Phphp\Lexer\Tokenizer\Html5\Token;

class Data extends State
{
    /**
     * @return string | null
     */
    public function handle()
    {
        // Consume the next input character:
        $char = $this->consume();
        // U+0026 AMPERSAND (&)
        if (Character::isAmpersand($char)) {
            // Set the return state to the data state. Switch to the character reference state.
            $this->setReturnState(static::class);
            return CharacterReference::class;
        }
        // U+003C LESS-THAN SIGN (<)
        elseif (Character::isLessThanSign($char)) {
            // Switch to the tag open state.
            return TagOpen::class;
        }
        // U+0000 NULL
        elseif (Character::isNull($char)) {
            // This is an unexpected-null-character parse error. Emit the current input character as a character token.
            $this->error(new ParseErrorException('Unexpected null character'));
            $this->emitToken(new Token\Character(Character::REPLACEMENT_CHARACTER, $char));
        }
        // EOF
        elseif (Character::isEof($char)) {
            // Emit an end-of-file token.
            $this->emitToken(new Token\Eof($char));
        }
        // Anything else
        else {
            // Emit the current input character as a character token.
            $this->emitToken(new Token\Character($char));
        }

        return null;
    }
}