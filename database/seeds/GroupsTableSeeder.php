<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groupController')->insert([
            'group_name' => "Gryffindor"
        ]);
        
        DB::table('groupController')->insert([
            'group_name' => "Ravenclaw"
        ]);
        
        DB::table('groupController')->insert([
            'group_name' => "Hufflepuff"
        ]);
        
        DB::table('groupController')->insert([
            'group_name' => "Slytherin"
        ]);
    }
}
