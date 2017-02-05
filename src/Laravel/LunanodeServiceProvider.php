<?php

namespace sdavis1902\LunanodeApiPhp\Laravel;

use Illuminate\Support\ServiceProvider;

class LunanodeServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        \App::bind('lunanode', function(){
            return new \sdavis1902\LunanodeApiPhp\Lunanode;
        });
    }
}
