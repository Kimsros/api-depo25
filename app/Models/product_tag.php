<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_tag extends Model
{
    use HasFactory;
    protected $fillable=['product_id','name','updated_by'];
}
