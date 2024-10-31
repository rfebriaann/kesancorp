<?php

namespace App\Livewire\Admin\Events;

use App\Models\Event;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 10;

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.events.index', [
            'events' => Event::search($this->search)->paginate($this->perPage)
        ]);
    }

    public function destroy($id){
        Event::destroy($id);
        session()->flash('message', 'Data berhasil dihapus!');
        return redirect()->route('admin.events.index');
    }
}
