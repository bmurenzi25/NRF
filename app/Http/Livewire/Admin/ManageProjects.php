<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Article;

class ManageProjects extends Component
{
    use WithFileUploads; 

    public $title;
    public $photo;
    public $content;
    public $url;

    protected $rules = [
        'title' => 'required|min:5',
        'photo' => 'required|image|mimes:jpg,jpeg,png,svg|maz:2048',
        'content' => 'required|min:50',
    ];

    public function saveArticle()
    {
        $validated = $this->validate();
        $this->url = $this->photo->store('projects','public');

        Article::create(array_merge($validated,$this->url));

        session()->flash('message','Article Created Successfuly');

        $this->resetInputs();
    }


    public function resetInputs()
    {
        $this->title =  '';
        $this->content =  '';
        $this->photo =  '';
    }

    public function render()
    {
        return view('livewire.admin.manage-projects')->layout('layouts.admin');
    }
}
