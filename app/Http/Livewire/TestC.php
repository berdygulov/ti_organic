<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestC extends Component
{
    public $count = 0;
    public $param = '';

    public function mount($param)

    {

        $this->param = $param;

    }

    public function increment()

    {

        $this->count++;

    }

    public function render()
    {
        return view('livewire.test-c');
    }
}
