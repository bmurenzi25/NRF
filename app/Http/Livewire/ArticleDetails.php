<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use Jorenvh\Share\Share;

class ArticleDetails extends Component
{
    public $article;
    public $recents;
    public $fb_link;

    public function mount(Article $article)
    {
        $this->article = $article;
        $this->recents = Article::latest()->take(5)->get();
    }

    public function shareFacebook()
    {
       dd( (new Share)->currentPage()->facebook());
    }

    public function render()
    {
        return view('livewire.article-details');
    }
}
