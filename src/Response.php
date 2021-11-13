<?php

namespace Sparkle;

class Response
{
    private mixed $body;
    private int $statusCode = 200;

    public function __construct()
    {

    }

    public function body(mixed $value): void
    {
        $this->body = $value;
    }
}