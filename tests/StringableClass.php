<?php

namespace InfluxDB2Test;

class StringableClass implements \Stringable
{
    public function __toString()
    {
        return "stringable";
    }
}
