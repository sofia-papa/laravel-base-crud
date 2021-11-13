<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fumetti extends Model
{
    protected $fillable = ['title', 'author', 'description', 'url'];
}
