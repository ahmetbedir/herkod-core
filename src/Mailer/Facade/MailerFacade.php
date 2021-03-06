<?php

namespace Herkod\Core\Mailer\Facade;

use Illuminate\Support\Facades\Facade;

class MailerFacade extends Facade
{
    use \Herkod\Core\Utils\Traits\FacadeAccessorClass;

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Mailer\Mailer';
    }
}
