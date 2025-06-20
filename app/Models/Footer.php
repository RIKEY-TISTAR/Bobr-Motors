<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
    ];

    public function footers()
    {
        return $this->hasMany(Footer::class);
    }
}
