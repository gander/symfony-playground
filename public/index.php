<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

/**
 * @param array $context
 * @return Kernel
 */
return static fn(array $context) => new Kernel($context['APP_ENV'], (bool)$context['APP_DEBUG']);
