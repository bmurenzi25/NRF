<?php

namespace App\Http\Livewire;

use App\Http\Resources\membersCollection;
use App\Models\Member;
use Livewire\Component;

class AboutUs extends Component
{
    public function render()
    {
        return view('livewire.about-us',[
            'members' => new membersCollection(Member::all())
        ]);
    }
}
