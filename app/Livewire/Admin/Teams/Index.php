<?php

namespace App\Livewire\Admin\Teams;

use App\Models\Team;
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
        return view('livewire.admin.teams.index', [
            'teams' => Team::search($this->search)->paginate($this->perPage)
        ]);
    }

    public function destroy($id){
        Team::destroy($id);
        session()->flash('message', 'Data berhasil dihapus!');
        return redirect()->route('admin.teams.index');
    }
}
