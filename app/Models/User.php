<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // ← こっちを継承
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Post;

class User extends Authenticatable
{
    use HasFactory;
    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'favorites')->withTimestamps();
    }
}
