<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\workRequest;

use Illuminate\Http\Request;

class AdminDashboard extends Controller {

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    return view('dashboard-home')->with('work_requests', workRequest::all());
  }

  public function show($id)
  {
    return view('dashboard-single')->with('work_request', workRequest::find($id));
  }

}
