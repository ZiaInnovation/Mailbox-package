<?php
namespace Ziainnovation\Mailbox;


use Illuminate\Support\ServiceProvider;

class mailServiceProvider extends ServiceProvider{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/views','mailbox');
    }

    public function register()
    {

    }


}
