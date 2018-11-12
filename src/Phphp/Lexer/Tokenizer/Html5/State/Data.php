<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Character;

class Data extends State
{
    public function handle()
    {
        $char = $this->consume();
        if (Character::isAmpersand($char)) {
            $this->setReturnState(static::class);
            return CharacterReference::class;
        } elseif (Character::isLessThanSign($char)) {
            return TagOpen::class;
        } elseif (Character::isNull($char)) {

        }
    }
}