<?php

namespace Zys\LivewireAlert;

use Illuminate\Support\ServiceProvider as Service;
use Livewire\Livewire;
use Livewire\Component;

class ServiceProvider extends Service
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'livewire-alert');
        $this->registerAlertMacro();
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
        $this->registerPublishables();
    }

    public function registerAlertMacro()
    {
        Component::macro('alert', function ($type = 'success', $message = '', $options = []) {
            $options = array_merge(config('livewire-alert'), $options);
            $this->emitTo('livewire-alert', 'livewireAlert', [
                'type' => $type,
                'message' => $message,
                'options' => $options
            ]);
        });
    }

    public function registerPublishables()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('livewire-alert.php'),
            ], 'config');
        }
    }

}
