<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
    ];

    public function heroes()
    {
        return $this->hasMany(Hero::class);
    }
}
