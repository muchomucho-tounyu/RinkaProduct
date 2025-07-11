<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;
    public function visits()
    {
        return $this->belongsToMany(Post::class, 'visits')->withTimestamps();
    }
}
