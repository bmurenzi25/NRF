<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Articles;
use App\Http\Resources\articlesCollection;
use App\Http\Resources\membersCollection;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Article;

class ManageArticles extends Component
{
    use WithFileUploads;

    public $title;
    public $photo;
    public $content;
    public $url;
    public $article;
    public $editMode = false;


    protected $rules = [
        'title' => 'required|min:10',
        'photo' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048',
        'content' => 'required|min:50',
    ];

    public function saveArticle()
    {
        if (!$this->editMode) {
            $this->validate();
            $this->url = $this->photo->store('projects', 'public');

            Article::create([
                'title' => $this->title,
                'image' => $this->url,
                'content' => $this->content,
                'slug' => str_slug($this->title)

            ]);

            session()->flash('message', 'Article Created Successfuly');

            $this->resetInputs();
        } else {
            if ($this->article) {
                $this->validate([
                    'title' => 'required|min:10',
                    'content' => 'required|min:50',
                ]);

                $this->article->update([
                    'title' => $this->title,
                    'content' => $this->content,
                ]);

                session()->flash('message', 'Article updated successfully');
                $this->resetInputs();
                $this->editMode = false;
            }
        }
    }

    public function loadArticleInfoToForm($id)
    {
        $article = Article::find($id);
        $this->editMode = true;
        $this->article = $article;

        $this->title = $article->title;
        $this->content = $article->content;
        $this->photo = $article->image;
    }

    public function deleteArticle($id)
    {
        $article = Article::find($id);
        // delete($id);
        // dd($article);
        $article->delete();
        session()->flash('deleted', 'Article deleted successfully');
    }


    public function resetInputs()
    {
        $this->title =  '';
        $this->content =  '';
        $this->photo =  '';
    }

    public function render()
    {
        return view('livewire.admin.manage-articles', [
            'articles' => new membersCollection(Article::latest()->get())
        ])->layout('layouts.admin');
    }
}
