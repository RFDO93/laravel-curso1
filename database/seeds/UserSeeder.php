<?php

use App\User;
use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$professions = DB::select('SELECT id FROM professions WHERE title = :title LIMIT 0,1 ',['title'=>'Desarrollador Back-end']);

        //$professionID = DB::table('professions')->select('id')->first()->id;

        /*DB::table('users')->insert([
          'name' => 'Richard',
          'email' =>'draox17@gmail.com',
          'password' => bcrypt('dorta'),
          'profession_id' => $professionID,
        ]);*/

        $profesionID = Profession::where('title','Desarrollador Back-end')->value('id');

        User::create([
            'name' => 'Richard',
            'email' =>'draox17@gmail.com',
            'password' => bcrypt('dorta'),
            'profession_id' => $profesionID,
            'is_admin' => true,
          ]);

          $professions = Profession::all();

          factory(User::class, 49)->create([
            'profession_id' => $professions->random(),
            'is_admin' => false,
          ]);
    }
}
