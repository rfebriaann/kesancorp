<?php

namespace App\Livewire\Admin;

use App\Models\Busines;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;

class Dashboard extends Component
{
    use WithFileUploads;

    #[Rule('required', message: 'Masukkan Judul Post')]
    public $business_name;

    #[Rule('required', message: 'Masukkan Gambar Post')]
    #[Rule('image', message: 'File Harus Gambar')]
    #[Rule('max:1024', message: 'Ukuran File Maksimal 1MB')]
    public $image;

    #[Layout('layouts.admin')]

    public function store(){
        $this->validate();

        $this->image->storeAs('public/posts', $this->image->hashName());

        Busines::create([
            'business_name' => $this->business_name,
            'image' => $this->image
        ]);

        session()->flash('message', 'Data Berhasil Disimpan.');
        // $this->emitSelf('postAdded');
        $this->dispatchBrowserEvent('name-updated');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
