<?php

namespace Gkiokan\Profile\Helpers;

use Illuminate\Support\Facades\Facade;

class CallMe {

    public $nr = 'XXX';

    public static function nr($input=null){
        echo $input;
    }

    protected static function getFacadeAccessor()
    {
        return 'profile.callme';
    }

}
