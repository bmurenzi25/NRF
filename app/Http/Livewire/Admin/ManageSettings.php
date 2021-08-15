<?php

namespace App\Http\Livewire\Admin;

use App\Http\Resources\siteSettingsCollection;
use App\Models\Setting;
use Livewire\Component;

class ManageSettings extends Component
{
    public $editMode = false;
    public $name;
    public $value;
    public $setting;

    public function editSetting()
    {
        if($this->editMode)
        {
            $this->validate([
                'value' => 'required'
            ]);

            $this->setting->update(['value' => $this->value]);
            session()->flash('message','Information updated successfully');
            $this->editMode = false;
        }
    }

    public function loadSettingInfoToForm(Setting $setting)
    {
        $this->editMode = true;
        $this->setting = $setting;

        $this->name = $setting->name;
        $this->value = $setting->value;
    }

    public function render()
    {
        return view('livewire.admin.manage-settings',[
            'settings' => new siteSettingsCollection(Setting::all())
        ])->layout('layouts.admin');
    }
}
