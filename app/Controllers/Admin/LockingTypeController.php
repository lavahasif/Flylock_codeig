<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Entities\Header;
use App\Entities\Page;
use App\Entities\Response;
use App\Entities\Script;
use App\Entities\Sidebar;
use App\Entities\SkipCssJs;
use App\Models\LockingTypeModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;

//different locking selection prayer meeting 

//create document for this controller   
class LockingTypeController extends BaseController
{
    use ResponseTrait;

    private $lockModel;

    public function __construct()
    {
        $this->lockModel = new LockingTypeModel();
    }

    public function index()
    {


        $currentUser = auth()->user()->username;
        // var_dump($currentUser->username);
        $data = ["Page" => new Page(pageTitle: "Flying Colour Business setup", sidebar: new Sidebar(sidebarusername: $currentUser), isSkipCssJs: new SkipCssJs(script: new Script(jquery: false)), header: new Header("Locking Reason", "/admin"))];

        return view('admin/report/locking_reason_view.php', $data);
    }

    public function createUserType()
    {
        // Retrieve form data from POST
        $usertype = $this->request->getPost('usertype');
        $isactive = $this->request->getPost('isactive');
        $del = $this->request->getPost('del');

        // Validate and process the form data as needed

        // Example: Save the user type to the database
        $data = [
            'lock_reason' => $usertype,
            'is_active'   => $isactive,
            'delete'      => $del,
        ];

        // Call the createUserType method from the model
        $result = $this->lockModel->createUserType($data);

        // Log the result
        if ($result) {
            $this->logger->info('User Type created successfully.', $data);
        } else {
            $this->logger->error('Failed to create User Type.', $data);
        }

        // Create a response entity
        $responseEntity = $result
            ? new Response(true, 'User Type created successfully', $result)
            : new Response(false, 'Failed to create User Type');

        // Return the response as JSON
        return $this->respond($responseEntity->toArray());
    }

    public function list()
    {

        $draw = $this->request->getPost('draw');
        $start = $this->request->getPost('start');
        $length = $this->request->getPost('length');

        // Get the order details
        $order_column = $this->request->getPost('order')[0]['column'];
        $order_dir = $this->request->getPost('order')[0]['dir'];
        $order_name = $this->request->getPost('columns')[$order_column]['name'];

        // Get the search value
        $search_value = $this->request->getPost('search')['value'];
        // Get total records count (without pagination)
        try {
            die($this->lockModel->getTotalLockingTypesCount());
        } catch (Exception $e) {

            var_dump($e);
        }

        $total_records = $this->lockModel->getTotalLockingTypesCount();

        // Fetch records from the model based on the parameters
        $records = $this->lockModel->getLockingTypes($start, $length, $order_name, $order_dir, $search_value);

        die($records);

        // Prepare the response
        $response = array(
            'draw' => $draw,
            'recordsTotal' => $total_records,
            'recordsFiltered' => $total_records,
            'data' => $records,
        );



        // Send the JSON response
        $this->respond()->setJSON($response);
    }
    public function listUserTypes()
    {

        // dd("test");
        // Retrieve user types from the database
        $userTypes = $this->lockModel->listUserTypes();

        // Pagination settings
        $perPage = 10; // Adjust the number of items per page as needed
        $currentPage = $this->request->getGet('page') ?? 1;

        // Paginate the results
        $pager = \Config\Services::pager(null, null, false);
        $paginationData = [
            'page'         => $currentPage,
            'perPage'      => $perPage,
            'total'        => count($userTypes),
            'template'     => 'default_full',
            'segment'      => 3, // Set the segment index in the URL
            'group'        => 'default',
        ];
        $pager->setSegment(3); // Set the segment index in the URL

        $userTypes = array_slice($userTypes, ($currentPage - 1) * $perPage, $perPage);
        $paginationLinks = $pager->makeLinks(...array_values($paginationData));






        // Prepare the API response
        $responseEntity = new Response(true, 'User Types retrieved successfully', $userTypes);
        $responseEntity->paginationLinks = $paginationLinks;



        // Log the result
        $this->logger->info('Retrieved list of User Types.');

        // Create a response entity


        // Return the response as JSON
        return $this->respond($responseEntity->toArray());
    }

    public function searchUserTypes($keyword)
    {
        // Call the searchUserTypes method from the model
        $searchResults = $this->lockModel->searchUserTypes($keyword);

        // Log the result
        $this->logger->info('User Types search successful for keyword: ' . $keyword);

        // Create a response entity
        $responseEntity = new Response(true, 'User Types search successful', $searchResults);

        // Return the response as JSON
        return $this->respond($responseEntity->toArray());
    }
}
