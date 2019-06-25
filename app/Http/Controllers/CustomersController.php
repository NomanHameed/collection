<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //
    public function list(){
        $activecustomer= Customer::where('active',1)->get();
        $inactivecustomer= Customer::where('active',0)->get();
        $companies=Company::all();
        return view('customers', compact('activecustomer','inactivecustomer','companies'));
    }
    public function store(){
//        dd(request());
            $data= request()->validate([
                'name'=> 'required|min:3',
                'email'=>'required|email',
                'active'=>'required',
                'company_id'=>'required'
            ]);
            Customer::create($data);
            return back();
    }
}
