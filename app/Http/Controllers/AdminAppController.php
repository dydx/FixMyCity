<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkOrder;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminAppController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  
  // need to do auth checking
  public function index()
  {
    return view('dashboard-home')
            ->with('work_orders', WorkOrder::all());
  }
}
