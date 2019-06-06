<?php
namespace myapp;

class Hello
{
    public function __invoke(string $str)
    {
        return 'hello, ' . $str;
    }
}
