<?php

use Illuminate\Database\Seeder;
use App\Pet;
class PetSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode(file_get_contents(storage_path('clients.json')));
        DB::table('pets')->truncate();

        foreach ($data as $owner_key => $owner_value) {

            foreach ($owner_value->pets as $pet_key => $pet_value) {
               $pet = new Pet;
               $pet->name = $pet_value->name;
               $pet->breed = $pet_value->breed;
               $pet->weight = $pet_value->weight;
               $pet->age = $pet_value->age;
               $pet->photo = $pet_value->photo;
               $pet->owner_id = $owner_key + 1;
               $pet->save(); 

            }
            
           
            
        }

    }
}
