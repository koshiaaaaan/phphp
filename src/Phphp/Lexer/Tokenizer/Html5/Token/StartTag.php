<?php
namespace Phphp\Lexer\Tokenizer\Html5\Token;

/**
 * Class StartTag
 * @package Phphp\Lexer\Tokenizer\Html5\Token
 */
class StartTag implements Token
{
    /**
     * @var string
     */
    private $tagName = '';

    /**
     * @param  string $tagName
     * @return $this
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;
        return $this;
    }
}
