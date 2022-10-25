<?php

class Logger
{
    //
}

class NullLogger
{
    //
}

class Service
{
    private Logger $logger;
   
    public function __construct(
        Logger $logger = new NullLogger(),
    ) {
        $this->logger = $logger;
    }
}