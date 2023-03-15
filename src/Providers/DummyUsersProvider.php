<?php

namespace TopsSuraj\DummyUsers\Providers;
use Illuminate\Support\ServiceProvider;
class DummyUsersProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/../routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/../views", "dummy-users");
    }
}
