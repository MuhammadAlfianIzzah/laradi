<?php

namespace Alfianizzah\Laradi;

use Alfianizzah\Laradi\Console\Commands\GenerateUserCommand;
use Illuminate\Support\ServiceProvider;

class LaradiServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateUserCommand::class,
            ]);
        }
        //
    }
}
