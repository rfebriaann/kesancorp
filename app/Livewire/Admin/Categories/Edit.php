<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Categories;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Edit extends Component
{
    #[Layout('layouts.admin')]

    public $id;
    #[Rule('required')]
    public $name;

    public function mount($id){
        $categories = Categories::find($id);
        $this->id = $categories->id;
        $this->name = $categories->name;
    }

    public function update(){
        $this->validate();
 
         //get post
         $teams = Categories::find($this->id);
         
         //update post
         $teams->update([
             'name' => $this->name,
         ]);
 
         //flash message
         session()->flash('message', 'Data Berhasil Diupdate.');
 
         //redirect
         return redirect()->route('admin.categories.index');
     }

    public function render()
    {
        return view('livewire.admin.categories.edit');
    }
}
