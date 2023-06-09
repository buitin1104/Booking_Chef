<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chef;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $chefs = Chef::all();
        // dd($chefs->toArray());

        $viewData = [
            'chefs' => $chefs,
        ];

        return view('home', $viewData);
    }
}
