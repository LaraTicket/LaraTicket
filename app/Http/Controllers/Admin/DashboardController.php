<?php namespace LaraTicket\Http\Controllers\Admin;

use LaraTicket\Http\Requests;
use LaraTicket\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller {

	/**
	 * Display the dashboard.
	 *
	 * @return Response
	 */
	public function index()
	{
    return view('admin.dashboard');
	}

}
