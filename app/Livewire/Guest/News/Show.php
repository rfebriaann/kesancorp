<?php

namespace App\Livewire\Guest\News;

use App\Models\News;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('layouts.detail')]
    
    public $id;
    public $news;

    public function mount($id){
        $this->news = News::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.guest.news.show');
    }
}
