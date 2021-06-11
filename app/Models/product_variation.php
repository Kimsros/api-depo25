<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_variation extends Model
{
    use HasFactory;
    protected $fillable=['product_id','color_id','size','qty','updated_by'];
}
