<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsis extends Model
{
    use HasFactory;
    

    protected $table = 'provinsis';
    protected $fillable = ['nama','ibukota','latitude','longitude',];
    
}
