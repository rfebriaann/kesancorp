<?php

namespace App\Livewire\Admin\Galleries;

use App\Models\Event;
use App\Models\Photo;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    #[Layout('layouts.admin')]

    #[Rule('required')]
    public $image = [];
    #[Rule('required')]
    public $event_id;

    public function store(){
        $this->validate();
        // $this->image->storeAs('public/assets/gallery_images/', $this->project_image->hashName());
        // Photo::create([
        //     'image' => $this->image->hashName(),
        //     'event_id' => $this->event_id,
        // ]);
        foreach ($this->image as $image) {
            $image->store('public/assets/gallery_images/'); // Simpan gambar ke direktori 'images'
            Photo::create([
                'image' => $image->hashName(),
                'event_id' => $this->event_id
            ]);
        }
        session()->flash('message', 'Data Berhasil Disimpan.');
        return redirect()->route('admin.gallery.index');
    }

    public function render()
    {
        return view('livewire.admin.galleries.create', [
            'events' => Event::all(),
        ]);
    }
}
