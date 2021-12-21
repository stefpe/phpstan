<?php

class Demo
{
    /**
     * @param string $prefix
     * @return string
     */
    public function getMessage(string $prefix)
    {
        if (!1){
            return '';
        }
        return $prefix . ' demo';
    }
}