<?php

namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model
{
    // Model untuk tabel 'user'
    protected $table = 'user';
    protected $allowedFields = ['name', 'no', 'keperluan'];
    protected $primaryKey = 'email';

}