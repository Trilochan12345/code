<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table      = 'item';
    protected $primaryKey = 'id';

    protected $allowedFields = ['item_name'];
    protected $returnType    = 'array';
}
