<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function edit($id)
    {
        $customer = Customer::where("id", $id)->first();
        return view("auth.username", ["idFromController" => $id, 'usernameFromController' => $customer]);
    }
}
