<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'snippet_id',
        'response_of',
        'comment_text'
    ];

    //Un comentario solo puede tener un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Un comentario solo pertenece a un snippet
    public function snippet()
    {
        return $this->belongsTo(Snippet::class);
    }

    //Hacer la relacion recursiva con el comentario del que es respuesta, video en yt
    public function childComments()
    {
        return $this->hasMany(Comment::class);
    }

    public function parentComment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function like_comment()
    {
        return $this->hasMany(Like_Comment::class);
    }

}
