<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $tabl = 'blogs';
    protected $fillable=['title','slug','blog_categories','thumbnail','tag','content','updated_by'];
}
