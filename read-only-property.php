<?php

class Status
{
    // emptiness is golden
}

class ArticleData
{
    public readonly Status $status;
  
    public function __construct(Status $status)
    {
        $this->status = $status;
    }
}