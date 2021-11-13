<?php

namespace Sparkle;

class Context
{
    public function __construct(
        private Response $response
    ) {
    }

    public function request()
    {
    }

    public function response(): Response
    {
        return $this->response;
    }
}