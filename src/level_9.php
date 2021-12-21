<?php

class Demo
{
    public function getMessage(mixed $title): string
    {
        return $title->lowerCase();
    }
}