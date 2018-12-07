<?php

namespace Redfard\EmailBlacklist;

use Illuminate\Support\Facades\Facade;

class EmailBlacklistFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'emailBlacklist';
    }
}
