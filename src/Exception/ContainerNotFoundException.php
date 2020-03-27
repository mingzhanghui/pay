<?php

namespace Yansongda\Pay\Exception;

use Psr\Container\NotFoundExceptionInterface;
use Throwable;

class ContainerNotFoundException extends ContainerException implements NotFoundExceptionInterface
{
    /**
     * Bootstrap.
     */
    public function __construct($message = 'Container Not Found', $extra = [], $code = self::NOT_FOUND_CONTAINER, Throwable $previous = null)
    {
        parent::__construct($message, $extra, $code, $previous);
    }
}
