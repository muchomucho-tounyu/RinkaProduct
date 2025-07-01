<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    use HasFactory;
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'desc')->paginate($limit_count);
    }

    protected $fillable = [
        'work_id',
        'work_name',
        'song_id',
        'song_name',
        'person_id',
        'location',
        'image',
        'body',
        'user_id',


    ];
    public function work()
    {
        return $this->belongsTo(Work::class);
    }

    public function song()
    {
        return $this->belongsTo(Song::class);
    }

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function favoritedByUsers()
    {
        return $this->belongsToMany(User::class, 'favorites')->withTimestamps();
    }
    public function visitedByUsers()
    {
        return $this->belongsToMany(User::class, 'visits')->withTimestamps();
    }
}
