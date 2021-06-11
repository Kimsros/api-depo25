<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_variation_condition extends Model
{
    use HasFactory;
    protected $fillable=['product_variation_id','qty_from','qty_to','rice_in_unit','updated_by'];
}
