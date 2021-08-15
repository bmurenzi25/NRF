<?php

namespace App\Http\Livewire;

use App\Models\Training;
use Livewire\Component;
use Livewire\WithPagination;

class Trainings extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.trainings',[
            'trainings' => Training::latest()->paginate(9)
        ]);
    }
}
