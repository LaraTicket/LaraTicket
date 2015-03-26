<?php namespace LaraTicket\Http\Controllers\Admin;

use Illuminate\Support\Facades\Hash;
use LaraTicket\Contracts\Permissions\PermissionProvider;
use LaraTicket\Http\Requests;
use LaraTicket\Http\Controllers\Controller;

use Illuminate\Http\Request;
use LaraTicket\User;

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
        $user = User::first();
        if ( ! $user )
        {
            $user = User::create([
                'email'    => 'test@local',
                'password' => bcrypt('test')
            ]);
        }
        \Auth::login($user);
        $this->permission->check('dashboard.access');

        return view('admin.dashboard');
    }

}
