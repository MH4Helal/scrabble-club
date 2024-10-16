<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'joined_date'];

    public function games()
    {
        return $this->belongsToMany(Game::class)->withPivot('score')->withTimestamps();
    }

    public function getAverageScoreAttribute()
    {
        return $this->games()->avg('score');
    }

    public function getHighestScoreAttribute()
    {
        return $this->games()->orderBy('score', 'desc')->first();
    }
}
