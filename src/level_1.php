<?php

class Demo
{
    public function getMessage(string $prefix)
    {
        if (strlen($prefix) > 0){
            $start = $prefix;
        }
        return $start . " demo";
    }
}