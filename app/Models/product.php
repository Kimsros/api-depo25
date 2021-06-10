<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=['name','shop_id','product_brand_id','category_id','product_video_id','unit_id','low_stock_qty_warning','updated_by','refundable','publish'];
}
