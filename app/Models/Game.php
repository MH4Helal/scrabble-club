<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    
    protected $fillable = ['game_name', 'game_date'];

    public function members()
    {
        return $this->belongsToMany(Member::class)->withPivot('score')->withTimestamps();
    }

    public function getWinnerAttribute()
    {
        return $this->members()->orderBy('score', 'desc')->first();
    }
}
