<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faskess extends Model
{
    use HasFactory;
    protected $table = 'faskess';
    protected $fillable = ['nama','nama_pengelola','alamat','website','email','kabkota_id','rating','latitude','longitude','jenis_faskes_id','kategori_id'];

    public function kabkotas(){
        return $this->belongsTo(kabkotas::class);
    }
    public function jenis_faskess(){
        return $this->belongsTo(jenis_faskess::class);
    }
    public function kategoris(){
        return $this->belongsTo(kategoris::class);
    }
}
