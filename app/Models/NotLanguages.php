<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotLanguages extends Model
{
    use HasFactory;

    protected $fillable = [
       'technologies_id',
    ];

    public function technologies()
    {
        return $this->belongsTo(Technologies::class);
    }
}
