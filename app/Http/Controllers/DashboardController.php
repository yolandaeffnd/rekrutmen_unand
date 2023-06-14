<?php

namespace App\Http\Controllers;

use App\Models\{Pemakaian, Ruangan, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth'); //moved to route
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


     //menggunakan route resource maka nama function harus index , show dll
    public function index()
    {
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }
}
