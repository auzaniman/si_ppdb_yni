<?php

namespace App\Http\Controllers;
use App\Models\School;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      return view('admin_view.pages.dashboard');
    }
}
