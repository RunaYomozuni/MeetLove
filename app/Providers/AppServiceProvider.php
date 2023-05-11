<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('age', function ($attribute, $value, $parameters, $validator) {
            $minAge = $parameters[0] ?? 18;
            return \Carbon\Carbon::parse($value)->age >= $minAge;
        });
    }
}
