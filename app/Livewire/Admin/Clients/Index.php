<?php

namespace App\Livewire\Admin\Clients;

use App\Models\Client;
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
        return view('livewire.admin.clients.index', [
            'clients' => Client::search($this->search)->paginate($this->perPage)
        ]);
    }
    public function destroy($id){
        Client::destroy($id);
        session()->flash('message', 'Data berhasil dihapus!');
        return redirect()->route('admin.clients.index');
    }
}
