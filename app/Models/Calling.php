<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calling extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
    ];

    public function callings()
    {
        return $this->hasMany(Calling::class);
    }
}
