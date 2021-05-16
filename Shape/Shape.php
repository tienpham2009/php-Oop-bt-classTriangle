<?php


class Shape
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show(): string{
        return "I am a shape . I am a $this->name";
    }
}