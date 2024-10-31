<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'position_id'
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function scopeSearch($query, $value){
        $query->where('name', 'like', "%{$value}%");
    }
}
