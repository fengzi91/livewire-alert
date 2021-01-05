<?php

namespace Zys\LivewireAlert;

use Illuminate\Support\ServiceProvider as Service;
use Livewire\Livewire;

class ServiceProvider extends Service
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'livewire-alert');
        Livewire::component('livewire-alert', Alert::class);
    }

}
