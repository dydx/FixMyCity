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

    // all work orders
    $work_orders = WorkOrder::all();

    // filtered list of all unfinished work orders
    $todo = $work_orders->filter(function($work_order) {
      if($work_order->completed == false) {
        return true;
      }
    });

    // filtered list of all finished work orders
    $completed = $work_orders->filter(function($work_order) {
      if($work_order->completed == true) {
        return true;
      }
    });

    return view('dashboard-home')
            ->with('work_orders', $work_orders)
            ->with('todo_work_orders', $todo)
            ->with('completed_work_orders', $completed);
  }
}
