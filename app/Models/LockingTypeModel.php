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

    public function listUserTypes($limit = 10, $page = 1)
    {
        return $this->paginate($limit, $page);
    }

    public function listAllUserTypes()
    {
        return $this->findAll();
    }

    public function searchUserTypes($keyword)
    {
        return $this->like('user_type', $keyword)->findAll();
    }

    // Fetch records from the model based on the parameters
    public function getLockingTypes($start, $length, $order_name, $order_dir, $search_value)
    {
        $query = $this->builder();
        var_dump($query);
        if ($search_value) {
            $query->like('name', $search_value);
        }

        if ($order_name) {
            $query->orderBy($order_name, $order_dir);
        }

        // Use CodeIgniter's built-in paginate method
        return $query->get($length, $start)->getResult();
    }


    // Get total records count (without pagination)
    public function getTotalLockingTypesCount()
    {
        // var_dump($this->builder()->where('delete', 0)->countAllResults());
        $result  = (int)$this->builder()->where('delete', 0)->countAllResults();
        // var_dump($result);
        return $result;
    }
}
