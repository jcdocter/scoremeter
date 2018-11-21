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
            'firstname' => "Jim",
            'lastname' => "Jam",
            'group_id' => Groups::where('group_name', 'Gryffindor')->first()->id
        ]);

        DB::table('participants')->insert([
            'firstname' => "Bob",
            'lastname' => "Bib",
            'group_id' => Groups::where('group_name', 'Gryffindor')->first()->id
        ]);

        DB::table('participants')->insert([
            'firstname' => "Peet",
            'lastname' => "Pam",
            'group_id' => Groups::where('group_name', 'Ravenclaw')->first()->id
        ]);

        DB::table('participants')->insert([
            'firstname' => "Stefan",
            'lastname' => "Yeet",
            'group_id' => Groups::where('group_name', 'Ravenclaw')->first()->id
        ]);

        DB::table('participants')->insert([
            'firstname' => "Tim",
            'lastname' => "Tom",
            'group_id' => Groups::where('group_name', 'Hufflepuff')->first()->id
        ]);

        DB::table('participants')->insert([
            'firstname' => "Wil",
            'lastname' => "Wol",
            'group_id' => Groups::where('group_name', 'Hufflepuff')->first()->id
        ]);

        DB::table('participants')->insert([
            'firstname' => "Karel",
            'lastname' => "Anker",
            'group_id' => Groups::where('group_name', 'Slytherin')->first()->id
        ]);

        DB::table('participants')->insert([
            'firstname' => "Post",
            'lastname' => "Maloglu",
            'group_id' => Groups::where('group_name', 'Slytherin')->first()->id
        ]);
        
    }
}