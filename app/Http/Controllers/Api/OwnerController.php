<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Owner;
class OwnerController extends Controller
{

    public function index() {
        return view("index", [

            ]);
    }

    public function create() {
        $owners = Owner::all();
        return view("owner_form",compact('owners'));
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone' => 'unique|max:255',
           'email' => 'required|unique:owners|max:255',
         ]);

        $new_owner = Owner::create(
           [
              "first_name" => $request->input('name'),
                "surname" => $request->input('surname'),
               "email" =>$request->input('email'),
              "phone" =>$request->input('phone'),
         ]
        );
        }
}
