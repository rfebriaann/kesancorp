<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newsGallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'news_id'
    ];

    public function news()
    {
        return $this->hasMany(News::class);
    }

    // public function scopeSearch($query, $value){
    //     $query->where('id', 'like', "%{$value}%");
    // }
}
