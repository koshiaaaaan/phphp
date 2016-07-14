<?php

function maintenance()
{
    $url        = 'https://html.spec.whatwg.org/entities.json';
    $contents   = @file_get_contents($url);
    if ($contents === false) {
        throw new \RuntimeException(sprintf(
            'Failed to open stream `%s`',
            $url
        ));
    }
    $refs   = json_decode($contents, true);
    $maxlen = 0;
    foreach ($refs as $key => $ref) {
        $len    = strlen($key);
        if ($maxlen < $len) $maxlen = $len;
        $refs[$key]['characters'] = '\x' . substr(chunk_split(strtoupper(bin2hex($ref['characters'])), 2, '\x'), 0, -2);
    }
/*
    $result = new stdClass();
    $result->maxlength  = $maxlen;
    $result->characters = $refs;
    $result = var_export($result, true);
    echo    $result;
*/
    $result = [
        'maxlength'     => $maxlen,
        'characters'    => $refs,
    ];
    $result = var_export($result, true);
    $result = preg_replace('/(\'characters\'\s=>\s)\'(.*?)\'/', '$1"$2"', $result);
    $result = preg_replace('/\\\\\\\\x(..)/', '\x$1', $result);
    $result = <<<_PHP_
<?php
return  {$result};
_PHP_;
    $dir    = __DIR__ . '/../resource';
    $file   = $dir . '/named-character-references.php';
    if (!file_exists($dir)) {
        mkdir($dir);
        chmod($dir, 0777);
    }
    file_put_contents($file, $result);
    chmod($file, 0777);
}

maintenance();

