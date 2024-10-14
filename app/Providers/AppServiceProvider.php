<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;
use Metroapps\Ldbsvws\Api\Class20220120Api;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            Class20220120Api::class,
            fn() => new Class20220120Api(
                new Client(
                    ['headers' => [
                        'x-apikey' => config('app.ldbsvws.key')
                    ]]
                )
            )
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
