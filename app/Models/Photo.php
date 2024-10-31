<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'event_id'
    ];

    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function scopeSearch($query, $value){
        $query->where('id', 'like', "%{$value}%");
    }
}
