<?php

namespace App\Http\Livewire\Admin;

use App\Http\Resources\reportsCollection;
use App\Models\Report;
use Livewire\Component;
use Livewire\WithFileUploads;

class ManageReports extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $file;

    public $editMode = false;
    public $report;

    protected $rules = [ 
        'title' => 'required|min:5',
        'description' => 'required|min:30',
        'file' => 'required|file|mimes:pdf,xls,xlsx, doc, docx |max:2048',
    ];

    public function saveReport()
    {
        if(!$this->editMode)
        {
            $this->validate();
            $url = $this->file->store('reports','public');

            Report::create([
                'title' => $this->title,
                'description' => $this->description,
                'file' => $url
            ]);

            session()->flash('Report created Successfully');

            $this->resetInputs();
        }else{
            if($this->report)
            {
                $this->validate([
                    'title' => 'required|min:5',
                    'description' => 'required|min:30',
                    'file' => 'file|mimes:pdf,xls,xlsx, doc, docsx|max:2048'
                ]);

                $this->report->update([
                    'title' => $this->title,
                    'description' => $this->description,
                    'file' => $this->file,
                ]);

                session()->flash('message','Report updated successfully');

                $this->resetInputs();
                $this->editMode = false;
            }
        }
    }

    public function loadReportInfoToForm(Report $report)
    {
        $this->report = $report;
        $this->editMode = true;

        $this->title = $report->title;
        $this->description = $report->description;
        $this->file = $report->file;
    }

    public function deleteReport(Report $report)
    {
        $report->delete();
        session()->flash('deleted','Report deleted successfully');
    }

    public function resetInputs()
    {
        $this->title = '';
        $this->description = '';
        $this->file = '';

    }

    public function render()
    {
        return view('livewire.admin.manage-reports',[
            'reports' => new reportsCollection(Report::all())
        ])->layout('layouts.admin');
    }
}
