<?php
namespace Phphp\Contracts;

interface Parser
{
    /**
     * @param string $html
     * @return mixed
     */
    public static function parse(string $html);

    /**
     * @param string $path
     * @return mixed
     */
    public static function parseFile(string $path);
}
