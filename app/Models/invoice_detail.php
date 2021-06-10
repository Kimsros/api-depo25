<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice_detail extends Model
{
    use HasFactory;
    protected $fillable=['invoice_id','product_id','product_name','product_color_id','qty','price','updated_by'];
}
