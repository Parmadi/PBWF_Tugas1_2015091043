<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
  use HasFactory;
  protected $guarded = ['id'];

  public function barang()
  {
    return $this->belongsTo(Barang::class, 'id_barang');
  }

  public function karyawan()
  {
    return $this->belongsTo(Karyawan::class, 'id_karyawan');
  }
}
