<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Categories;
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
        return view('livewire.admin.categories.index', [
            'categories' => Categories::search($this->search)->paginate($this->perPage)
        ]);
    }
    public function destroy($id){
        Categories::destroy($id);
        session()->flash('message', 'Data berhasil dihapus!');
        return redirect()->route('admin.categories.index');
    }
}
