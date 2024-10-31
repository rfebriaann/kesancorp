<?php

namespace App\Livewire\Admin\Business;

use App\Models\Busines;

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
        return view('livewire.admin.business.index', [
            'business' => Busines::search($this->search)->paginate($this->perPage)
        ]);
    }

    public function destroy($id){
        Busines::destroy($id);
        session()->flash('message', 'Data berhasil dihapus!');
        return redirect()->route('admin.business.index');
    }
}
