<?php
namespace Phphp\Lexer\Tokenizer_back\Html5\Token;

/**
 * Class Comment
 * @package Phphp\Lexer\Tokenizer\Html5\Token
 */
class Comment implements Token
{
    /**
     * @var string
     */
    private $data = '';

    public function appendData($data)
    {
        $this->data .= $data;
    }
}
