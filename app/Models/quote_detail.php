<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quote_detail extends Model
{
    use HasFactory;
    protected $fillable=['cart_id','quote_id','updated_by'];
}
