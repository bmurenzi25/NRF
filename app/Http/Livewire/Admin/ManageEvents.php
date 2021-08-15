<?php

namespace App\Http\Livewire\Admin;

use App\Http\Resources\eventsCollection;
use Livewire\Component;
use App\Models\Event;
use Livewire\WithFileUploads;

class ManageEvents extends Component
{
    use WithFileUploads;
    
    public $editMode = false;
    public $photo;
    public $description;
    public $status;
    public $title;
    public $event;


    protected $rules = [
        'title' => 'required|min:5',
        'photo' => 'required|image|mimes:jpeg, jpg, png, svg|max:2048',
        'description' => 'required|min:30',
        'status' => 'required',
    ];

    public function saveEvent()
    {

        if(!$this->editMode)
        {
            $this->validate();
            $url = $this->photo->store('events','public');

            Event::create([
                'title' => $this->title,
                'description' => $this->description,
                'status' => $this->status,
                'photo' => $url,
            ]);

            session()->flash('message','Event saved Successfully');

            $this->resetInputs();
        }else{
            if($this->event)
            {
                $this->validate([
                    'title' => 'required|min:5',
                    'description' => 'required|min:30',
                    'status' => 'required'
                ]);

                $this->event->update([
                    'title' => $this->title,
                    'description' => $this->description,
                    'status' => $this->status,
                ]);

                session()->flash('message','Event updated successfully');

                $this->resetInputs();

                $this->editMode = false;
            }
        }

    }

    public function loadEventInfoToForm(Event $event)
    {   
        $this->editMode = true;

        $this->event = $event;

        $this->status = $event->status;
        $this->description = $event->description;
        $this->title = $event->title;
    }

    public function deleteEvent(Event $event)
    {
        $event->delete();
        session()->flash('deleted','Event deleted successfully');
    }

    public function resetInputs()
    {
        $this->title = '';
        $this->photo = '';
        $this->status = '';
        $this->description = '';
    }

    public function render()
    {
        return view('livewire.admin.manage-events', [
            'events' => new eventsCollection(Event::all())
        ])->layout('layouts.admin');
    }
}
