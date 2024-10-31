<?php

namespace App\Livewire\Admin\Positions;

use App\Models\Position;
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
        return view('livewire.admin.positions.index', [
            'positions' => Position::search($this->search)->paginate($this->perPage)
        ]);
    }

    public function destroy($id){
        Position::destroy($id);
        session()->flash('message', 'Data berhasil dihapus!');
        return redirect()->route('admin.positions.index');
    }
}
