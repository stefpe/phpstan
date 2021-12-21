<?php

class Demo
{
    /**
     * @param string $prefix
     * @return string
     */
    public function getMessage(string $prefix)
    {
        $prefix = implode(",", $prefix);
        return $prefix . ' demo';
    }
}