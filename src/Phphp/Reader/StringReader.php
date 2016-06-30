<?php
namespace Phphp\Reader;

class StringReader implements ReaderInterface
{
    /**
     * Raw data
     * @var string
     **/
    private $data   = '';

    /**
     * Current cursor
     * @var integer
     **/
    private $cursor = 0;

    /**
     * Length of data
     * @var integer
     **/
    private $eof    = 0;

    public function __construct($data)
    {
        if (!is_string($data)) {
            throw new InvalidArgumentException(sprintf(
                '与えられたパラメータの型が `string` ではありません。: `%s`',
                gettype($data)
            ));
        }
        $this->data = $data;
        $this->eof  = strlen($data);
    }

    public function current()
    {
        return  ($this->valid())
                ? $this->data[$this->cursor]
                : $this->data[$this->eof - 1];
    }

    public function next()
    {
        $this->cursor++;
    }

    public function rewind()
    {
        $this->cursor = 0;
    }

    public function valid()
    {
        return ($this->cursor < $this->eof);
    }
}