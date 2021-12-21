<?php

class Demo
{
    private function getDate(bool $create = false): ?DateTime
    {
        return ($create) ? new DateTime() : null;
    }

    public function getMessage(string $title): string
    {
        return $title . $this->getDate()->format('H:i:s');
    }
}