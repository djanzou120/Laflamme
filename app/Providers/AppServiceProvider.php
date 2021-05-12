<?php

namespace App\Providers;

use App\Http\Controllers\LoggingParser\LoggerBuilder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Add in boot function
        DB::listen(function($query) {
            LoggerBuilder::info('query', $query, "HTTP-REQUEST");
        });
    }
}
