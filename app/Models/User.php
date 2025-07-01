<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class User extends Authenticatable
{
    use HasFactory;

    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'favorites')->withTimestamps();
    }
    public function visits(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'visits')->withTimestamps();
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
