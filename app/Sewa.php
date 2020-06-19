<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
  protected $table = 'sewa';

  protected $fillable = ['id_user', 'nama_penyewa', 'tgl_awal', 'tgl_akhir', 'id_mobil', 'nama_mobil', 'total_biaya'];
}
