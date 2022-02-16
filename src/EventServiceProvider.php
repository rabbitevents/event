<?php

declare(strict_types=1);

namespace RabbitEvents\Event;

use Illuminate\Support\ServiceProvider;
use RabbitEvents\Event\Commands\ObserverMakeCommand;
use RabbitEvents\Foundation\Context;

class EventServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->singleton(
            Publisher::class,
            static fn($app) => new Publisher(new MessageFactory($app[Context::class]->getTransport()))
        );
    }

    public function register(): void
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->commands([ObserverMakeCommand::class]);
    }
}
