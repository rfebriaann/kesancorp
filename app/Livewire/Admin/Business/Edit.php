<?php

namespace App\Livewire\Admin\Business;

use App\Models\Busines;
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
    public $business_name;
    public $image;

    public function mount($id){
        $business = Busines::find($id);
        $this->id = $business->id;
        $this->business_name = $business->business_name;
        $this->image = $business->image;
    }

    public function update(){
       $this->validate();

        //get post
        $business = Busines::find($this->id);
        if ($business->image != $this->image) {

            //store image in storage/app/public/posts
            $this->image->storeAs('public/assets/busines_images/', $this->image->getClientOriginalName());

            //update post
            $business->update([
                'business_name' => $this->business_name,
                'image' => $this->image->getClientOriginalName(),
            ]);
        } else {
            //update post
            $business->update([
                'business_name' => $this->business_name,
            ]);
        }

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('admin.business.index');
    }

    public function render()
    {
        return view('livewire.admin.business.edit');
    }
}
