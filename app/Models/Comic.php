<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = [
        'src',
        'thumb',
        'title',
        'series',
        'price',
        'description',
        'sale_date',
        'type',
        'artists',
        'writers',
    ];
}
