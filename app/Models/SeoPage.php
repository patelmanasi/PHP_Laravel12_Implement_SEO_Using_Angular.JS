<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoPage extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'description',
        'keywords'
    ];
}
