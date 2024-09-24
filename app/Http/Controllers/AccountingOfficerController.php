<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountingOfficerController extends Controller
{

   public function __construct()
   {
       $this->middleware('auth')->except(['register', 'login']);
   }



        public function  showAccountingOfficerDashboard()
       {
           return view('accounting_officer.index');
       }


        public function  showAddform()
       {
           return view('accounting_officer.addform');
       }

        public function  showDatatable()
       {
           return view('accounting_officer.datatable');
       }



       public function index()
       {
           return view('accounting_officer.index');
       }


}
