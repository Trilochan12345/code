<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['username', 'email', 'password']; // Add other columns if needed
    protected $returnType = 'array';

    protected $useTimestamps = true;

    /**
     * Get user by username or email
     */
    public function getUserByEmailOrUsername(string $identity)
    {
        return $this->where('username', $identity)
                    ->orWhere('email', $identity)
                    ->first();
    }
}
