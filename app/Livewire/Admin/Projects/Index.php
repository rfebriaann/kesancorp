<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
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
        return view('livewire.admin.projects.index', [
            'projects' => Project::search($this->search)->paginate($this->perPage)
        ]);
    }

    public function destroy($id){
        Project::destroy($id);
        session()->flash('message', 'Data berhasil dihapus!');
        return redirect()->route('admin.projects.index');
    }
}
