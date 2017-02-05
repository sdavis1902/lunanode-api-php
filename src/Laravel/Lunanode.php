<?php
namespace sdavis1902\LunanodeApiPhp\Laravel;

use Illuminate\Support\Facades\Facade;

class Lunanode extends Facade{
    protected static function getFacadeAccessor() { return 'lunanode'; }
}
