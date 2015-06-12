<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    return view('dashboard-home');
  }
}
