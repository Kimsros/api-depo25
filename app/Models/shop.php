<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    use HasFactory;
    protected $fillable=['user_id','logo_company','description','home_no','street_no','village','district','commune','province','phone_one','phone_two','email','facebook','website','updated_by'];
}
