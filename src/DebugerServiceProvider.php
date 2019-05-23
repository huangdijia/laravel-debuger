<?php

namespace Huangdijia\Debuger;

use Illuminate\Support\ServiceProvider;

class DebugerServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->singleton(Debuger::class, function ($app) {
            return new Debuger($app);
        });
        $this->app->alias(Debuger::class, 'debuger');
    }

    public function provides()
    {
        return [
            Debuger::class,
            'debuger',
        ];
    }
}
