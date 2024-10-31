<?php

namespace App\Livewire\Guest;

use App\Models\Busines;
use App\Models\Categories;
use App\Models\Client;
use App\Models\News;
use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{   
    #[Layout('layouts.app')]

    public function render()
    {
        $categories = Categories::all();
        $projects = Project::all();



        return view('livewire.guest.home', [
            'business' => Busines::all(),
            'clients' => Client::all(),
            'news' => News::latest()->take(3)->get(),
            'categories' => Categories::with(['projects' => function ($query) {
                $query->limit(5);
            }])->get()
            // 'categories' => Categories::all(),
            // 'projects' => Project::all()
            // 'projects' => Project::select('*')->groupBy('category_id')->orderBy('category_id', 'DESC')->get()
        ]);
    }
}
