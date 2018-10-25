<?php
namespace Phphp\Lexer;

use Phphp\Scanner\Scanner;

class Html5 implements Lexer
{
    /**
     * @var \Phphp\Scanner\Scanner $reader
     */
    protected $reader;

    /**
     * Html5 constructor.
     *
     * @param \Phphp\Scanner\Scanner $reader
     */
    public function __construct(Scanner $reader)
    {
        $this->reader = $reader;
    }

    public function analyze()
    {

    }
}