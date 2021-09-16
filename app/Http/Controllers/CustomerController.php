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

    public function update(Request $request, $id)
    {
        $request->validate([
            "username" => "required"
        ]);

        $user = Customer::where("id", $id)->first();
        $user->username = $request->input("username");
        $user->update();

        return view("welcome");
    }
}
