<?php

namespace App\Models;
use CodeIgniter\Model;

class CodesModel extends Model
{
   protected $table = 'codes';
    protected $primaryKey = 'id';
   protected $allowedFields = [
    'series', 'code', 'description', 'material',
    'quantity', 'item_id', 'category', 'remarks'
];
    protected $useTimestamps = true;

public function getJoinedData()
{
    return $this->findAll(); // no join needed
}

}
