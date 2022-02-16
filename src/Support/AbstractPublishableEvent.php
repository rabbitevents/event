<?php
declare(strict_types=1);

namespace RabbitEvents\Event\Support;

use RabbitEvents\Event\ShouldPublish;

abstract class AbstractPublishableEvent implements ShouldPublish
{
    use Publishable;
}
