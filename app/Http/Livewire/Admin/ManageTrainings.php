<?php

namespace App\Http\Livewire\Admin;

use App\Http\Resources\trainingsCollection;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Training;

class ManageTrainings extends Component
{
    use WithFileUploads;

    public $title;
    public $photo;
    public $content;
    public $url;
    public $training;
    public $editMode = false;


    protected $rules = [
        'title' => 'required|min:10',
        'photo' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048',
        'content' => 'required|min:50',
    ];

    public function saveTraining()
    {
        if (!$this->editMode) {
            $this->validate();
            $this->url = $this->photo->store('trainings', 'public');

            Training::create([
                'title' => $this->title,
                'image' => $this->url,
                'content' => $this->content,
                'slug' => str_slug($this->title)
            ]);

            session()->flash('message', 'Trainings Created Successfuly');

            $this->resetInputs();
        }else{
            if($this->training)
            {
                $this->validate([
                    'title' => 'required|min:10',
                    'content' => 'required|min:50',
                ]);

                $this->training->update([
                    'title' => $this->title,
                    'content' => $this->content,
                ]);

                session()->flash('message','Training updated successfully');
                $this->resetInputs();
                $this->editMode = false;
            }
        }

    }

    public function loadTrainingInfoToForm($id)
    {
        $training = Training::find($id);
        $this->editMode = true;
        $this->training = $training;

        $this->title = $training->title;
        $this->content = $training->content;
        $this->photo = $training->image;
    }

    public function deleteTraining(Training $training)
    {
        dd($training);
        // $training = Training::find($id);
        $training->delete();
        session()->flash('deleted', 'Trainings deleted successfully');
    }


    public function resetInputs()
    {
        $this->title =  '';
        $this->content =  '';
        $this->photo =  '';
    }

    public function render()
    {
        return view('livewire.admin.manage-trainings', [
            'trainings' => new trainingsCollection(Training::all())
        ])->layout('layouts.admin');
    }
}
