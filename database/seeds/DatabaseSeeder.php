<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        $types = 
        [
            ["id"=>1, "en_name"=>"Normal", "po_name"=>"NORMAL"],
            ["id"=>2, "en_name"=>"Rural", "po_name"=>"RURAL"],
            ["id"=>3, "en_name"=>"Especial 15", "po_name"=>"SpecialFifteen"],
            ["id"=>4, "en_name"=>"Especial 20", "po_name"=>"SpecialTwenty"],
            ["id"=>5, "en_name"=>"Especial 25", "po_name"=>"SpecialTwentyFive"],
            ["id"=>6, "en_name"=>"Professor", "po_name"=>"Professor"],
        ];

        DB::table('types')->insert($types);
    }
}
