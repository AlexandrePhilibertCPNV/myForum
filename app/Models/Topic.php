<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;


    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    public function opinions()
    {
        return $this->hasMany(Opinion::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
