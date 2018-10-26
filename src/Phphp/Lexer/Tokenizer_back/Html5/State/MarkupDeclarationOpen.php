<?php
namespace Phphp\Lexer\Tokenizer_back\Html5\State;

use Phphp\Lexer\Tokenizer_back\Html5 as Tokenizer;
use Phphp\Lexer\Tokenizer_back\Html5\Character;
use Phphp\Lexer\Tokenizer_back\Html5\Token;

/**
 * Class MarkupDeclarationOpen
 * @package Phphp\Lexer\Tokenizer\Html5\State
 */
class MarkupDeclarationOpen extends AbstractState
{
    public function handle()
    {
        $tokenizer = $this->getTokenizer();

        // If the next two characters are both U+002D HYPHEN-MINUS characters (-), consume those two characters,
        // create a comment token whose data is the empty string, and switch to the comment start state.
        if ($tokenizer->peek(2) === Character::SEQUENCE_DASH_DASH) {
            $tokenizer->consume(2);
            /** @var Token\Comment $token */
            // TODO: トークンのバッファリングどうする？
            $token = $tokenizer->createToken(Tokenizer::TOKEN_TYPE_COMMENT);
            // TODO: CommentStartの実装
            $tokenizer->setState(new CommentStart());
        }

        // Otherwise, if the next seven characters are an ASCII case-insensitive match for the word "DOCTYPE",
        // then consume those characters and switch to the DOCTYPE state.
        elseif (strtoupper($tokenizer->peek(7)) === Character::SEQUENCE_DOCTYPE) {
            $tokenizer->consume(7);
            // TODO: Doctypeの実装
            $tokenizer->setState(new Doctype());
        }

        elseif (strtoupper($tokenizer->peek(7)) === Character::SEQUENCE_CDATA_START) {

        }

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
