<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeguridadSnippet extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
    ];

    public function snippet()
    {
        return $this->hasMany(Snippet::class);
    }
}
