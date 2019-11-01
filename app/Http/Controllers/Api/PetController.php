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
        return view("index", [

            ]);
    }

    public function create() {
        $owners = Owner::all();
        return view("create",compact('owners'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
             'pet' => 'required|max:255',
             'age' => 'required|max:255',
             'weight' => 'required|max:255',
            'breed' => 'max:255',
            'photo' => 'required|unique:pets|max:255',
          ]);
          

        $new_pet = Pet::create(
            [
                "name" => $request->input('pet'),
                "breed" => $request->input('breed'),
                "photo" =>$request->input('photo'),
                "weight" =>$request->input('weight'),
                "age" =>$request->input('age'),
                "owner_id" =>$request->input('owner_id'),
            ]
    
        );

        return "FINE and thanks";

}

}