<?php

use Illuminate\Database\Seeder;
use App\Owner;
//use DB;
class OwnerSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode(file_get_contents(storage_path('/clients.json')));
        
        DB::table('owners')->truncate();
        foreach ($data as $key => $value) {
            
            $owner = new Owner;
            $owner->first_name = $value->first_name;
            $owner->surname = $value->surname;
            $owner->save();
            
        }
    }
}
