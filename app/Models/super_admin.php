<?php

namespace App\Models;

use CodeIgniter\Model;

class super_adminModel extends Model
{
    // Model untuk tabel 'super_admin'
    protected $table = 'super_admin';
    protected $allowedFields = ['password'];
    protected $primaryKey = 'username';

}