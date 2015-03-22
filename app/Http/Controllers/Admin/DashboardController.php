<?php namespace LaraTicket\Http\Controllers\Admin;

use LaraTicket\Contracts\Permissions\PermissionProvider;
use LaraTicket\Http\Requests;
use LaraTicket\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller {

    /**
     * @var PermissionProvider
     */
    private $permission;


    function __construct(PermissionProvider $permission)
    {
        $this->permission = $permission;
    }


    /**
     * Display the dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $this->permission->check('test');
        return view('admin.dashboard');
    }

}
