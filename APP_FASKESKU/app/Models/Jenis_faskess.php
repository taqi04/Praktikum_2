<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_faskess extends Model
{
    use HasFactory;

    protected $table = 'jenis_faskess';
    protected $fillable = ['nama'];
}
