<?php
namespace Ziainnovation\Mailbox;


use Illuminate\Support\ServiceProvider;

class mailServiceProvider extends ServiceProvider{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/views','mailbox');

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');


        $this->publishes([
            __DIR__.'/views' => resource_path('views/Mailbox'),
            __DIR__.'/public' => public_path('mailbox'),
        ]);

    }

    public function register()
    {

    }


}
