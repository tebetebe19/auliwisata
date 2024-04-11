<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class NotionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('notion', function ($app) {
            return new Client([
                'base_uri' => 'https://api.notion.com/v1/',
                'headers' => [
                    'Authorization' => 'Bearer secret_pPwz3rJty2L1I5vLtQPScZLqVP775IXs3cS8IgVy6uH',
                    'Notion-Version' => '2021-05-13', // API version
                ],
            ]);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
