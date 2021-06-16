<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permision extends Model
{
    use HasFactory;
    protected $fillable=['role_id','permission_type_id','updated_by','table_of_permission_id'];
}
