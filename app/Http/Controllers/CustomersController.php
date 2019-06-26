<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{


    public function index(){
//        $activecustomer= Customer::where('active',1)->get();
//        $inactivecustomer= Customer::where('active',0)->get();
        $customers=Customer::all();
        return view('customers.index', compact('customers'));

    }
    public function create(){

        $companies=Company::all();
        return view('customers/create',compact('companies'));

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
            return redirect('customers');
    }

    public function show(Customer $customer){
//        $customer = Customer::find($customer);

        return view('customers.show',compact('customer'));
    }

    public function edit(Customer $customer){
        $companies= Company::all();
        return view('customers/edit',compact('customer','companies'));
    }

    public function update(Customer $customer){
            $data= request()->validate([
                'name' => 'required',
                'email'=> 'required|email'
            ]);

            $customer->update($data);
            redirect('customers/'.$customer->id);
    }
}
