<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.home',[
            'articles' => Article::latest()->paginate(6)
        ]);
    }
}
