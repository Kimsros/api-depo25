<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pricing extends Model
{
    use HasFactory;
    protected $fillable=['name','pay_status','price_in_month','price_in_year','boost_product','boost_duration','upload_product','upload_product_duration','updated_by'];
}
