<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function scopeSearch($query, $value){
        $query->where('name', 'like', "%{$value}%");
    }
}
