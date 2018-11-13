<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use Phphp\Character;

class CharacterReference
{
    public function handle()
    {
        $this->setTemporaryBuffer(Character::AMPERSAND);
    }
}