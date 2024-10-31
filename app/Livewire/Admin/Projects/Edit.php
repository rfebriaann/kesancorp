<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Busines;
use App\Models\Categories;
use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    #[Layout('layouts.admin')]

    public $id;
     #[Rule('required')]
    public $project_name = '';
    #[Rule('required')]
    public $project_detail = '';
    #[Rule('required')]
    public $project_vision = '';
    // #[Rule('file|mimes:jpg,jpeg,png|max:8048')]
    public $project_image;
    public $project_logo;
    #[Rule('required')]
    public $busines_id;
    #[Rule('required')]
    public $category_id;

    public function mount($id){
        $projects = Project::find($id);
        $this->id = $projects->id;
        $this->project_name = $projects->project_name;
        $this->project_detail = $projects->project_detail;
        $this->project_vision = $projects->project_vision;
        $this->project_image = $projects->project_image;
        $this->project_logo = $projects->project_logo;
        $this->busines_id = $projects->busines_id;
        $this->category_id = $projects->category_id;
    }

    public function update(){
       $this->validate();

        //get post
        $projects = Project::find($this->id);
        if ($projects->project_image != $this->project_image) {

            //store image in storage/app/public/posts
            $this->project_image->storeAs('public/assets/project_images/', $this->project_image->hashName());
            $this->project_logo->storeAs('public/assets/project_logo/', $this->project_logo->hashName());

            //update post
            $projects->update([
                'project_name' => $this->project_name,
                'project_detail' => $this->project_detail,
                'project_vision' => $this->project_vision,
                'project_image' => $this->project_image->hashName(),
                'logo_image' => $this->project_logo->hashName(),
                'busines_id' => $this->busines_id,
                'categories_id' => $this->category_id,
            ]);
        } else {
            //update post
            $projects->update([
                'project_name' => $this->project_name,
                'project_detail' => $this->project_detail,
                'project_vision' => $this->project_vision,
                'busines_id' => $this->busines_id,
                'categories_id' => $this->category_id,
            ]);
        }

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('admin.projects.index');
    }

    public function render()
    {
        return view('livewire.admin.projects.edit', [
            'business' => Busines::all(),
            'categories' => Categories::all(),
        ]);
    }
}
