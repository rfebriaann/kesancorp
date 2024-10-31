<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'project_name',
        'project_detail',
        'project_vision',
        'project_image',
        'logo_image',
        'busines_id',
        'categories_id'
    ];

    public function busines()
    {
        return $this->belongsTo(Busines::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function scopeSearch($query, $value){
        $query->where('project_name', 'like', "%{$value}%")->orWhere('project_detail', 'like', "%{$value}%");
    }
}
