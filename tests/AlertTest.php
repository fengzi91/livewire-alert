<?php
namespace Zys\LivewireAlert\Test;

use Illuminate\Support\Str;
use Orchestra\Testbench\TestCase;
use Livewire\Livewire;
class AlertTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return ['Livewire\LivewireServiceProvider', 'Zys\LivewireAlert\ServiceProvider'];
    }

    public function testCanShowAMessage()
    {
        $message = Str::random();
        Livewire::test('livewire-alert')
            ->assertNotSet('message', $message)
            ->call('livewireAlert', ['type' => 'info', 'message' => $message])
            ->assertSet('message', $message);
    }
}