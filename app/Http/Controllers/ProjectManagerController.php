<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

         public function dashboard()
        {
            return view('project_manager.index');
        }

        public function index()
        {
            return view('project_manager.index');
        }
}
