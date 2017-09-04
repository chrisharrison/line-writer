<?php

namespace ChrisHarrison\LineWriter;

class LineWriter
{
    private $lines;

    public function __construct()
    {
        $this->lines = [];
    }

    public function add(string $line)
    {
        $this->lines[] = $line;
    }

    public function __toString() : string
    {
        return implode(PHP_EOL, $this->lines);
    }
}