<?php
namespace Phphp\Lexer\Tokenizer_back\Html5\State;

use Phphp\Lexer\Tokenizer_back\Html5 as Tokenizer;
use Phphp\Lexer\Tokenizer_back\Html5\Character;
use Phphp\Lexer\Tokenizer_back\Html5\Token;

/**
 * Class TagOpen
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
            // TODO: MarkupDeclarationOpenの実装
            $tokenizer->setState(new MarkupDeclarationOpen());
        } elseif ($char === Character::SOLIDUS) {
            // TODO: EndTagOpenの実装
            $tokenizer->setState(new EndTagOpen());
        } elseif ($this->isAsciiLetter($char)) {
            // Create a new start tag token, set its tag name to the empty string.
            // Reconsume in the tag name state.
            /** @var Token\StartTag $token */
            $token = $tokenizer->createToken(Tokenizer::TOKEN_TYPE_START_TAG);
            // TODO: setTagNameは必要か？
            $token->setTagName('');
            // TODO: $tokenをどうするか
            $tokenizer->unconsume();
            // TODO: TagNameの実装
            $tokenizer->setState(new TagName());
        } elseif ($char === Character::QUESTION_MARK) {
            // Parse error. Create a comment token whose data is the empty string.
            // Reconsume in the bogus comment state.
            $tokenizer->error(Tokenizer::PARSE_ERROR);
            /** @var Token\Comment $token */
            $token = $tokenizer->createToken(Tokenizer::TOKEN_TYPE_COMMENT);
            $tokenizer->unconsume();
            // TODO: BogusCommentの実装
            $tokenizer->setState(new BogusComment());
        } else {
            // Parse error. Emit a U+003C LESS-THAN SIGN character token.
            // Reconsume in the data state.
            $tokenizer->error(Tokenizer::PARSE_ERROR);
            /** @var Token\Character $token */
            $token = $tokenizer->createToken(Tokenizer::TOKEN_TYPE_CHARACTER);
            $token->appendCharacter(Character::LESS_THAN_SIGN);
            $tokenizer->emitToken($token);
        }
    }
}
