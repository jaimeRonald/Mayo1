<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\mundoTec\Btn;
class BtnServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->bind('btn',Btn::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
