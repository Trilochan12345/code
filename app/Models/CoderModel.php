<?php

namespace App\Models;

use CodeIgniter\Model;

class CoderModel extends Model
{
    protected $table = 'coders'; // your table name
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email', 'phone', 'series', 'password'];
    protected $useTimestamps = true;
    protected $returnType = 'array';
}
