<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientAppController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest');
  }

  // need to make user login thingy
  public function index()
  {
    return view('client-home');
  }
}
