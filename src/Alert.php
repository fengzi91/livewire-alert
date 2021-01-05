<?php

namespace Zys\LivewireAlert;

use Livewire\Component;

class Alert extends Component
{
    public $title = null;
    public $content = null;
    public $timeout = 3000;
    public $isShow = false;
    public $type = 'primary';
    protected $listeners = ['livewireAlert'];

    public function livewireAlert($content = null, $title = null, $type = 'info', $timeout = 3000)
    {
        $this->fill(compact('timeout', 'content', 'title', 'type'));
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