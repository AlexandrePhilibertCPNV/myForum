<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function topic()
    {
        return $this->belongsTo(Opinion::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function references()
    {
        return $this->belongsToMany(Reference::class);   
    }

    public function comments()
    {
        return $this->belongsToMany(User::class, 'user_opinion')->withPivot('comment', 'points');
    }
}
