<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busines extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_name',
        'image',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }


    public function scopeSearch($query, $value){
        $query->where('business_name', 'like', "%{$value}%");
    }
}
