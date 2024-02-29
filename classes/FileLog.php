<?php

class FileLog implements ILog
{
    public string $mess;

    public function log(string $mess): void
    {
        $this->mess = "FileLog: $mess";
    }
}