<?php 

namespace App\Models;
use CodeIgniter\Model;

class ApiModel extends Model
{
    protected $table = 'bpsi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
 
      'waktu',
      'ph',
      'tds',
      'suhu',
      'kualitas_limbah',
    ];
}