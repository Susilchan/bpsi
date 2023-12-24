<?php

namespace App\Models;

use CodeIgniter\Model;

class Bpsi extends Model
{
  protected $table = 'bpsi';
  protected $primaryKey = 'id';
  protected $allowedFields = [

    'tanggal',
    'waktu',
    'ph',
    'tds',
    'suhu',
    'kualitas_limbah',
  ];
}
