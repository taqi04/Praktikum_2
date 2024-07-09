<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabkotas extends Model
{
    use HasFactory;
    protected $table = 'kabkotas';
    protected $fillable = ['nama','latitude','longitude','provinsi_id'];

    public function provinsis(){
        return $this->belongsTo(provinsis::class);
    }
}
