<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Busines;
use App\Models\Categories;
use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    #[Layout('layouts.admin')]

    #[Rule('required')]
    public $project_name = '';
    #[Rule('required')]
    public $project_detail = '';
    #[Rule('required')]
    public $project_vision = '';
    #[Rule('required|image|max:8024')]
    public $project_image;
    #[Rule('required|image|max:8024')]
    public $project_logo;
    #[Rule('required')]
    public $busines_id;
    #[Rule('required')]
    public $category_id;

    public function store(){
        $this->validate();
        $this->project_image->storeAs('public/assets/project_images/', $this->project_image->hashName());
        $this->project_logo->storeAs('public/assets/project_logo/', $this->project_logo->hashName());
        Project::create([
            'project_name' => $this->project_name,
            'project_detail' => $this->project_detail,
            'project_vision' => $this->project_vision,
            'project_image' => $this->project_image->hashName(),
            'logo_image' => $this->project_logo->hashName(),
            'busines_id' => $this->busines_id,
            'categories_id' => $this->category_id,
        ]);
        session()->flash('message', 'Data Berhasil Disimpan.');
        return redirect()->route('admin.projects.index');
    }

    public function render()
    {
        return view('livewire.admin.projects.create', [
             'business' => Busines::all(),
             'categories' => Categories::all()
        ]);
    }
}
