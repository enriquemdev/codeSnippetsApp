<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technologies extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'is_language'
    ];

    public function not_language()
    {
        return $this->hasMany(NotLanguages::class);
    }

    public function snippet()
    {
        return $this->belongsToMany(Snippet::class);
    }

    


}
