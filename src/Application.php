<?php

namespace Sparkle;

class Application
{
    private array $middlewares = [];
    private Context $context;

    public function __construct()
    {
        $this->context = new Context(
            response: new Response()
        );
    }

    public function use(callable $callback): void
    {
        $this->middlewares[] = $callback;
    }

    public function run(): void
    {
        foreach ($this->middlewares as $index => $middleware) {
            $nextFn = $this->middlewares[$index + 1] ?? null;
            $middleware($this->context, $nextFn);
        }
    }
}