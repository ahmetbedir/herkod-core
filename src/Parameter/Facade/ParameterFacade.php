<?php

namespace Herkod\Core\Parameter\Facade;

use Illuminate\Support\Facades\Facade;

class ParameterFacade extends Facade
{
    use \Herkod\Core\Utils\Traits\FacadeAccessorClass;

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Parameter\Parameter';
    }
}
