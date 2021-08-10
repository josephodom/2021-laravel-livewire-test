<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count;
    
    // Made the counter example persist across pages via session
    public function __construct()
    {
        $this->count = session()->get('counter_val', 0);
    }
    
    public function increment()
    {
        $this->count++;
        
        session([
            'counter_val' => $this->count,
        ]);
    }
    
    public function render()
    {
        return view('livewire.counter');
    }
}
