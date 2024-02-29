<?php

class DbLog implements ILog
{
    public string $mess;

    public function log(string $mess): void
    {
        $this->mess = "DbLog: $mess";
    }
}