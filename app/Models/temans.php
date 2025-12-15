<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\factories\HasFactory;

class temans extends Model
{
    use HasFactory;

    protected $table = "temans";
    protected $fillable=['nama','alamat','kota','noTelp'];
    //protected $guarded=['id','created_at','updated_at'];
    
}
