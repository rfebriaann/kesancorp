<?php

namespace App\Livewire\Admin\Galleries;

use App\Models\Photo;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 10;

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.galleries.index', [
            'photos' => Photo::search($this->search)->paginate($this->perPage)
        ]);
    }
}
