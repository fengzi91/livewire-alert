<?php

namespace Zys\LivewireAlert;

use Livewire\Component;

class Alert extends Component
{
    public $title = null;
    public $message = null;
    public $timeout = 3000;
    public $isShow = false;
    public $type = 'primary';
    public $options = [];
    protected $listeners = ['livewireAlert'];

    public function mount()
    {
        $this->options = config('livewire-alert');
    }
    public function livewireAlert($message = [])
    {
        if (isset($message['options'])) {
            $this->options = array_merge($this->options, $message['options']);
        }
        $this->fill($message);
        $this->emitSelf('show');
    }

    public function show()
    {
        $this->isShow = true;
    }

    public function hide()
    {
        $this->isShow = false;
    }

    public function render()
    {
        return view('livewire-alert::alert');
    }
}