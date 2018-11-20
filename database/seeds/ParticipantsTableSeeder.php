<?php

use Illuminate\Database\Seeder;
use App\Groups;
use Illuminate\Support\Facades\DB;

class ParticipantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('participants')->insert([
            'name' => "Jim",
            'lastname' => "Jam",
            'group_id' => Groups::where('group_name', 'Gryffindor')->first()->id
        ]);

        DB::table('participants')->insert([
            'name' => "Bob",
            'lastname' => "Bib",
            'group_id' => Groups::where('group_name', 'Gryffindor')->first()->id
        ]);

        DB::table('participants')->insert([
            'name' => "Peet",
            'lastname' => "Pam",
            'group_id' => Groups::where('group_name', 'Ravenclaw')->first()->id
        ]);

        DB::table('participants')->insert([
            'name' => "Stefan",
            'lastname' => "Yeet",
            'group_id' => Groups::where('group_name', 'Ravenclaw')->first()->id
        ]);

        DB::table('participants')->insert([
            'name' => "Tim",
            'lastname' => "Tom",
            'group_id' => Groups::where('group_name', 'Hufflepuff')->first()->id
        ]);

        DB::table('participants')->insert([
            'name' => "Wil",
            'lastname' => "Wol",
            'group_id' => Groups::where('group_name', 'Hufflepuff')->first()->id
        ]);

        DB::table('participants')->insert([
            'name' => "Karel",
            'lastname' => "Anker",
            'group_id' => Groups::where('group_name', 'Slytherin')->first()->id
        ]);

        DB::table('participants')->insert([
            'name' => "Post",
            'lastname' => "Maloglu",
            'group_id' => Groups::where('group_name', 'Slytherin')->first()->id
        ]);
        
    }
}