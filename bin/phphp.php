<?php
// TODO: Make cli tool.

$url        = 'https://html.spec.whatwg.org/entities.json';
$contents   = @file_get_contents($url);
if ($contents === false) {
    throw new \RuntimeException(sprintf(
        'Failed to open stream `%s`',
        $url
    ));
}

function quote($str, $q = "'") {
    return  $q.$str.$q;
}

$indent = '    ';
$member = '[' . PHP_EOL;

$refs   = json_decode($contents, true);
$maxlen = 0;
foreach ($refs as $key => $ref) {
    $len    = strlen($key);
    if ($maxlen < $len) $maxlen = $len;
    $refs[$key]['characters'] = '\x' . substr(chunk_split(strtoupper(bin2hex($ref['characters'])), 2, '\x'), 0, -2);

    $member .= str_repeat($indent, 2) . quote($key) . ' => [' . PHP_EOL;
    $member .= str_repeat($indent, 3) . "'codepoints' => [";
    if (isset($ref['codepoints']) && is_array($ref['codepoints'])) {
        $member .= join(', ', $ref['codepoints']);
    }
    $member .= '],' . PHP_EOL;
    $member .= str_repeat($indent, 3) . "'characters' => " . quote($refs[$key]['characters'], '"') . ',' . PHP_EOL;
    $member .= str_repeat($indent, 2) . '],' . PHP_EOL;
}
$member .= str_repeat($indent, 1) . ']';

$refs   = var_export($refs, true);
$refs   = preg_replace('/(\'characters\'\s=>\s)\'(.*?)\'/', '$1"$2"', $refs);
$refs   = preg_replace('/\\\\\\\\x(..)/', '\x$1', $refs);

$result = <<<_PHP_
<?php
namespace Phphp\Lexer\Tokenizer\Html5;

/**
 * Class NamedCharacterReferences
 * @package Phphp\Lexer\Tokenizer\Html5
 */
class NamedCharacterReferences
{
    /**
     * Named characters max name length.
     * @var int
     */
    protected static \$namedCharacterMaxLength = {$maxlen};

    /**
     * Named character references table.
     * @var array
     */
    protected static \$namedCharacterReferences = {$member};

    /**
     * Get named characters max name length.
     * @return int
     */
    public static function getNamedCharacterMaxLength()
    {
        return  static::\$namedCharacterMaxLength;
    }

    /**
     * Get named character references table.
     * @return array
     */
    public static function getNamedCharacterReferences()
    {
        return  static::\$namedCharacterReferences;
    }
}
_PHP_;

$file = __DIR__ . '/../src/Phphp/Lexer/Tokenizer/Html5/NamedCharacterReferences.php';
@file_put_contents($file, $result);
chmod($file, 0777);
