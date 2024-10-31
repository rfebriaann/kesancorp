<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'date',
        'detail',
        'image'
    ];

    public function scopeSearch($query, $value){
        $query->where('title', 'like', "%{$value}%");
    }

}
