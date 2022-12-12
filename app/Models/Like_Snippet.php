<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like_Snippet extends Model
{
    use HasFactory;

    //Un like puede tener solo un snippet
    public function snippet()
    {
        return $this->belongsTo(Snippet::class);
    }

    //Un like puede tener solo un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
