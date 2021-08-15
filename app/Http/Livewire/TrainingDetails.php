<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Training;

class TrainingDetails extends Component
{
    public $training;
    public $recents;

    public function mount(Training $training)
    {
        $this->training = $training;
        $this->recents = Training::latest()->take(5)->get();
    }

    public function render()
    {
        return view('livewire.training-details');
    }
}
