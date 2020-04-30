<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        //aqui estou adaptando meu componente para conseguir abrir ele em qualquer lugar 
        //utilizando só as tags @alerta e @endalerta, como mostro em resources/views/outras/departamentos.blade.php
        Blade::component('components.alerta', 'alerta');
    }
}
