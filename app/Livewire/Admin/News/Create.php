<?php

namespace App\Livewire\Admin\News;

use App\Models\News;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    #[Layout('layouts.admin')]

    #[Rule('required')]
    public $title = '';
    #[Rule('required')]
    public $date = '';
    #[Rule('required')]
    public $detail = '';
    #[Rule('required')]
    public $image;

    public function store(){
        // dd($this->detail);
        $this->validate();
        $this->image->storeAs('public/assets/new_images/', $this->image->hashName());
        News::create([
            'title' => $this->title,
            'date' => $this->date,
            'detail' => $this->detail,
            'image' => $this->image->hashName(),
        ]);
        session()->flash('message', 'Data Berhasil Disimpan.');
        return redirect()->route('admin.news.index');
    }
    public function render()
    {
        return view('livewire.admin.news.create');
    }
}
