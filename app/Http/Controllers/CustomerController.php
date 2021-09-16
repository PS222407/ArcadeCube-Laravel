<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function editUsername($id)
    {
        $customer = Customer::where("id", $id)->first();
        return view("auth.username", ["idFromController" => $id, 'userFromController' => $customer]);
    }
    public function editEmail($id)
    {
        $customer = Customer::where("id", $id)->first();
        return view("auth.emailaddress", ["idFromController" => $id, 'userFromController' => $customer]);
    }

    public function updateUsername(Request $request, $id)
    {
        $request->validate([
            "username" => "required"
        ]);

        $user = Customer::where("id", $id)->first();
        $user->username = $request->input("username");
        $user->update();

        return view("welcome");
    }
    public function updateEmail(Request $request, $id)
    {
        $request->validate([
            "email" => "required"
        ]);

        $user = Customer::where("id", $id)->first();
        $user->email = $request->input("email");
        $user->email_verified_at = null;
        $user->update();

        return view("welcome");
    }
}
