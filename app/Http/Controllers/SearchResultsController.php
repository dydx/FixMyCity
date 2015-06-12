<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchResultsController extends Controller
{
  // need to connect the dots here and make this do something useful
  public function index(Request $request)
  {
    $search_results = $request->input('search');
    return view('search-results')->with('search_results', $search_results);
  }
}
