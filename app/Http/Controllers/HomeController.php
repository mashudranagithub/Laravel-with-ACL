<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group_member;
use App\Region;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $group_members_quantity = DB::table('group_members')->count();
        $regions = DB::table('regions')->count();
        return view('admin.index', compact(
            'group_members_quantity',
            'regions',
        ));
    }
}
