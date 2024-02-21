<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Interfaces\ICrud;
use App\Controllers\Admin\Admin_Controller;

class Dashboard extends BaseController implements ICrud
{

    public function index()
    {


        $data = array(
            "pagetitle" => "Flying colour",
            "footer" => array("name" => "Flying", "Version" => 1),
            "sidebar" => array("menu" => [])
        );
        return view('admin/pages/lockingreason.php', $data);
    }

    public function create($data)
    {
        // TODO: Implement create() method.
    }

    public function read($id)
    {
        // TODO: Implement read() method.
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
