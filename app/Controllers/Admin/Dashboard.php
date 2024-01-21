<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Interfaces\ICrud;

class Dashboard extends BaseController implements ICrud
{

    public function index()
    {
        // Only authenticated users can access this  
        echo 'Admin dashboard';
    }


    public function create()
    {
        // Implement the create logic
    }

    public function read($id)
    {
        // Implement the read logic
    }

    public function update($id)
    {
        // Implement the update logic
    }

    public function delete($id)
    {
        // Implement the delete logic
    }
}
