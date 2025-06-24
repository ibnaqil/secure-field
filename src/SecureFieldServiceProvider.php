<?php

namespace Ibnaqil\SecureField;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;

class SecureFieldServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // dd('Service provider loaded');
        // $this->loadViewsFrom(__DIR__ . '/../resources/views', 'secure-field');
        // Log::info('SecureFieldServiceProvider loaded!');
    }

    public function register()
    {
        //
    }
}
