<?php
namespace Phphp\Lexer\Tokenizer\Html5\State;

use RuntimeException;

class NamedCharacterReference extends State
{
    /**
     * @var array
     */
    public static $entities = [];

    /**
     * @var int
     */
    public static $maxLength = 0;

    /**
     * @return array
     */
    public static function getNamedCharacterReferenceMap()
    {
        if (empty($entities)) {
            $file = realpath(__DIR__ . '/../../../../resources/entities.json');
            if (
                $file === false ||
                ($entities = @file_get_contents($file)) === false
            ) {
                throw new RuntimeException(sprintf('Does not read file \'%s\'', $file));
            }
            if (($entities = json_decode($entities, true)) === null) {
                throw new RuntimeException('Does not decode json');
            }
            static::$entities = $entities;
        }
        return $entities;
    }

    /**
     * @return int
     */
    public static function getNamedCharacterMaxLength()
    {
        if (static::$maxLength > 0) {
            return static::$maxLength;
        }
        $entities = static::getNamedCharacterReferenceMap();
        $namedCharacters = array_keys($entities);
        $namedCharacterLengths = array_map(function($namedCharacter) {
            if (isset($namedCharacter[0]) && $namedCharacter[0] === '&') {
                $namedCharacter = substr($namedCharacter, 1);
            }
            return strlen($namedCharacter);
        }, $namedCharacters);

        return static::$maxLength = max($namedCharacterLengths);
    }

    public function handle()
    {
    }
}