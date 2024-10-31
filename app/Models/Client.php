<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_name',
        'image',
    ];

    public function scopeSearch($query, $value){
        $query->where('client_name', 'like', "%{$value}%");
    }
}
