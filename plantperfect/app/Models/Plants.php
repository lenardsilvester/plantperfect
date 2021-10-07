<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plants extends Model
{
    use HasFactory;

    protected $table = 'plants';

    protected $fillable = [
        'id',
        'name',
        'price',
        'bio',
        'image',
    ];
}
