<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $tabl = 'blogs';
    protected $fillable=['title','slug','content','updated_by'];
}
