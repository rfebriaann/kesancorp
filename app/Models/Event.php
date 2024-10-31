<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_name',
        'event_date',
        'event_detail',
        'image',
        'project_id'
    ];

    public function position()
    {
        return $this->belongsTo(Photo::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function scopeSearch($query, $value){
        $query->where('event_name', 'like', "%{$value}%")->orWhere('event_detail', 'like', "%{$value}%");
    }
}
