<?php
namespace Phphp\Lexer\Tokenizer\Html5\Reference;

use LogicException;

class NamedCharacterReference
{
    private $src = 'https://html.spec.whatwg.org/entities.json';

    /**
     * @var array
     */
    private $namedCharacterReference;

    /**
     * @var int
     */
    private $maxLength;

    /**
     * @var int
     */
    private $minLength;

    public function __construct($src = null)
    {
        $src = $src ?: $this->src;
        $contents = file_get_contents($src);

        $namedCharacterReference = null;
        if ($contents) $namedCharacterReference = json_decode($contents, true);
        if (!is_array($namedCharacterReference)) throw new LogicException('名前文字参照ファイルが参照できませんでした。');

        $this->namedCharacterReference = $namedCharacterReference;
    }

    public function getNamedCharacterReference($ref)
    {
        return isset($this->namedCharacterReference[$ref]) ? $this->namedCharacterReference[$ref] : null;
    }

    /**
     * @return int
     */
    public function getMaxLength()
    {
        if (is_null($this->maxLength)) {
            $this->maxLength = array_reduce(array_keys($this->namedCharacterReference), function ($carry, $item) {
                $len = strlen($item);
                return (is_null($carry) || $carry < $len) ? $len : $carry;
            });
        }
        return $this->maxLength;
    }

    /**
     * @return int
     */
    public function getMinLength()
    {
        if (is_null($this->minLength)) {
            $this->minLength = array_reduce(array_keys($this->namedCharacterReference), function ($carry, $item) {
                $len = strlen($item);
                return (is_null($carry) || $carry > $len) ? $len : $carry;
            });
        }
        return $this->minLength;
    }
}
