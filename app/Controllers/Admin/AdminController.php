<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;

class Admin_Controller extends Controller
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do your init stuff here
        parent::initController($request, $response, $logger);

        // Load helpers, libraries, models, etc
        helper('url');
        $this->session = \Config\Services::session();
    }
}
