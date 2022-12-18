<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'text',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(Technologies::class);
    }

    //Un snippet puede tener muchos likes
    public function likes_snippets()
    {
        return $this->hasMany(Like_Snippet::class);
    }

    //Un snippet puede tener muchos comentarios
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function seguridad()
    {
        return $this->belongsTo(SeguridadSnippet::class);
    }
}
