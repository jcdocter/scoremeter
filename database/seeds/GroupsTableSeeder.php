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
            'group_name' => "Gryffindor",
            'score' => 15
        ]);
        
        DB::table('groupController')->insert([
            'group_name' => "Ravenclaw",
            'score' => 12
        ]);
        
        DB::table('groupController')->insert([
            'group_name' => "Hufflepuff",
            'score' => 10
        ]);
        
        DB::table('groupController')->insert([
            'group_name' => "Slytherin",
            'score' => 17
        ]);
    }
}
