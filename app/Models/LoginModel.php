<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{

      protected $table            = 'login_admin';
      protected $primaryKey       = 'id';
      protected $allowedFields    = ['username','password'];
      
      }

