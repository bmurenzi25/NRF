<?php

namespace App\Http\Livewire\Admin;

use App\Http\Resources\membersCollection;
use App\Models\Member;
use Livewire\Component;
use Livewire\WithFileUploads;

class ManageMembers extends Component
{
    use WithFileUploads;

    public $name;
    public $role;
    public $category;
    public $editMode = false;
    public $photo;
    public $member;

    protected $rules = [
        'name' => 'required|min:5',
        'category' => 'required',
        'role' => 'required|min:3',
        'photo' => 'required|max:2048|mimes:jpg,jpeg,png,svg'
    ];

    public function saveMember()
    {
        if (!$this->editMode) {
            $this->validate();
            $url = $this->photo->store('members', 'public');

            Member::create([
                'name' => $this->name,
                'category' => $this->category,
                'role' => $this->role,
                'photo' => $url
            ]);

            session()->flash('message', 'Member created Successfully');
            $this->resetInputs();
        } else {
            if ($this->member) {
                $this->validate([
                    'name' => 'required|min:5',
                    'role' => 'required|min:3',
                    'category' => 'required'
                ]);

                session()->flash('message', 'Member updated successfully');
                $this->editMode = false;
            }
        }
    }

    public function loadMemberInfoToForm(Member $member)
    {
        $this->member = $member;
        $this->editMode = true;

        $this->name = $member->name;
        $this->role = $member->role;
        $this->category = $member->category;
        $this->photo = $member->photo;
    }

    public function deleteMember(Member $member)
    {
        $member->delete();
        session()->flash('deleted', 'Member deleted successfully');
    }

    public function resetInputs()
    {
        $this->name = '';
        $this->role = '';
        $this->category = '';
        $this->photo = '';
    }

    public function render()
    {
        return view('livewire.admin.manage-members', [
            'members' => new membersCollection(Member::all())
        ])->layout('layouts.admin');
    }
}
