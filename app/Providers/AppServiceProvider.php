<?php

namespace App\Providers;

use App\Faker\FakerImageProvider;
use Faker\Factory;
use Faker\Generator;
use Godruoyi\Snowflake\LaravelSequenceResolver;
use Godruoyi\Snowflake\Snowflake;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('snowflake', function ($app) {
            $snowflake = new Snowflake();
            return $snowflake
                ->setStartTimeStamp(
                    $snowflake->getStartTimeStamp()
                )
                ->setSequenceResolver(new LaravelSequenceResolver($app->get('cache.store')));
        });

        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new FakerImageProvider($faker));

            return $faker;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
