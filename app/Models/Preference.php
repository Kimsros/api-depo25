<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    use HasFactory;
    protected $fillable=['key','icon','value','preference_main_id','status','updated_by','created_at','updated_at'];
}
