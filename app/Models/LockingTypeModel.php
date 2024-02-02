<?php

namespace App\Models;

use CodeIgniter\Model;

class LockingTypeModel extends Model
{
    protected $table            = 'lockingtypes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['lock_reason', 'is_active', 'delete'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];




    public function createUserType($data)
    {
        return $this->insert($data);
    }

    public function deleteUserType($id)
    {
        return $this->delete($id);
    }

    public function updateUserType($id, $data)
    {
        return $this->update($id, $data);
    }

    public function listUserTypes()
    {
        return $this->findAll();
    }

    public function searchUserTypes($keyword)
    {
        return $this->like('user_type', $keyword)->findAll();
    }
}
