<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Owner;
use App\Pet;
class PetController extends Controller
{
    public function index() {
    
    }

    public function create() {
        return view("create", [

        ]);
    }

    public function store(Request $request) {
        
        $new_owner = Owner::create(
            [
                "first_name" => $request->input('name'),
                "surname" => $request->input('surname'),
                "email" =>$request->input('email'),
                "phone" =>$request->input('phone'),
            ]
    
        );

        $new_pet = Pet::create(
            [
                "name" => $request->input('pet'),
                "breed" => $request->input('breed'),
                "photo" =>$request->input('photo'),
                "weight" =>$request->input('weight'),
                "age" =>$request->input('age'),
            ]
    
        );

        dd($new_owner);

        // $validatedData = $request->validate([
        //     'name' => 'required|unique:posts|max:255',
        //     'surname' => 'required|max:255',
        //     'email' => 'required|unique|max:255',
        //     'phone' => 'unique|max:255',
        //     'petName' => 'required|unique|max:255',
        //     'breed' => 'required|unique|max:255',
        // ]);
}

}