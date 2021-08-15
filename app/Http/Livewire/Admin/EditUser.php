<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EditUser extends Component
{
    use WithFileUploads;

    public $editMode = true;
    public $name;
    public $password;
    public $password_confirmation;
    public $email;
    public $photo;
    public $current_password;
    public $user;

    public function mount()
    {
        $logged = auth()->user();
        $this->user = $logged;

        $this->name = $logged->name;
        $this->email = $logged->email;
    }
    public function editUser()
    {
        $validated = $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'password' => ['required', 'confirmed'],
            'photo' => 'image|mimes:jpeg,jpg,png,svg|max:2048'
        ]);
        // dd($url);
        if ($this->password == Hash::check($this->current_password, $this->user->password)) {
            $url = $this->photo->store('users', 'public');


            $this->user->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
                'profile_photo_path' => $url,
            ]);

            session()->flash('message', 'Profile information updated successfully');
        } else {
            session()->flash('failed', 'Incorrect Current Password');
        }
        // $this->user->update([
        //     'name' => $this->name,
        //     'email' => $this->email,
        //     'profile_photo_path' => $url,
        // ]);

        
    }

    public function render()
    {
        return view('livewire.admin.edit-user')->layout('layouts.admin');
    }
}
