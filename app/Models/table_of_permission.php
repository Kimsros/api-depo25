<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_of_permission extends Model
{
    use HasFactory;
    protected $fillable=['name','updated_by'];
}
