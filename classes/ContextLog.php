<?php

class ContextLog
{
    private ILog $strategy;

    public function __construct(ILog $strategy)
    {
        $this->strategy = $strategy;
    }

    public function log(string $mess): void
    {
        $this->strategy->log($mess);
    }

    public function showLog(): void
    {
        echo $this->strategy->mess;
    }
}