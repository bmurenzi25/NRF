<?php

namespace App\Http\Livewire;

use App\Http\Resources\articlesCollection;
use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Articles extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.articles',[
            'articles' => new articlesCollection(Article::latest()->paginate(9))
        ]);
    }
}
