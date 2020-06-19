<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
  protected $fillable = ['nama', 'gambar', 'mesin', 'tempat_duduk', 'bagasi', 'bensin', 'harga', 'jml_mobil'];
}
