<?php

namespace App\Livewire\Guest\News;

use App\Models\News;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.page')] 

    public $search = '';
    public $perPage = 20;
    public function render()
    {
        return view('livewire.guest.news.index', [
            'news' => News::search($this->search)->paginate($this->perPage)
        ]);
    }
}
