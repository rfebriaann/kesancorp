<?php

namespace App\Livewire\Admin\News;

use App\Models\News;
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
        return view('livewire.admin.news.index', [
            'news' => News::search($this->search)->paginate($this->perPage)
        ]);
    }

    public function destroy($id){
        News::destroy($id);
        session()->flash('message', 'Data berhasil dihapus!');
        return redirect()->route('admin.news.index');
    }
}
