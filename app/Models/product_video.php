<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_video extends Model
{
    use HasFactory;
    protected $fillable=['product_video_type','url','updated_by'];
}
