<?php

namespace Inspheric\Notify\Providers;

use Inspheric\Support\Providers\PackageServiceProvider;

class NotifyServiceProvider extends PackageServiceProvider
{
    protected $name = 'notify';

    protected $namespace = 'Inspheric\Notify\Http\Controllers';

    protected $routes       = false;
    protected $config       = false;

}
