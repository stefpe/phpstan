<?php

class Demo
{
    /**
     * @param string $title
     * @return string
     */
    public function getMessage($title)
    {
        $part = strstr($title, ":");
        return "This title " . $part . substr($part, 0, 2);
    }
}