<?php

namespace App\Http\Livewire;

use App\Models\Report;
use Livewire\Component;
use Livewire\WithPagination;

class Reports extends Component
{

    use WithPagination;
    
    public function downloadFile($file)
    {
        dd($file);
        // return response()->download(storage_path($file));
    }

    public function render()
    {
        return view('livewire.reports',[
            'reports' => Report::latest()->paginate(9)
        ]);
    }
}
