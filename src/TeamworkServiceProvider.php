<?php

namespace Biberltd\Teamwork;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class TeamworkServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('biberltd.teamwork', function($app)
        {
            $client = new \Biberltd\Teamwork\Client(new Client,
                $app['config']->get('services.teamwork.key'),
                $app['config']->get('services.teamwork.url')
            );
            return new \Biberltd\Teamwork\Factory($client);
        });
        $this->app->bind('Biberltd\Teamwork\Factory', 'biberltd.teamwork');
    }
}