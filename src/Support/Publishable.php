<?php

declare(strict_types=1);

namespace RabbitEvents\Event\Support;

use function publish;

trait Publishable
{
    /**
     * @return void
     * @throws \Throwable
     */
    public static function publish(): void
    {
        publish(new static(...func_get_args()));
    }
}
