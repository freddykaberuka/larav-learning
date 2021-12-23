<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'category_id',
        'title',
        'contents',
        'image',
        'views',
        'description',


    ];
}
