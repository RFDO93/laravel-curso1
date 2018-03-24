<?php
use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('professions')->insert([
          'title' => 'Desarrollador Back-end',
        ]);

        DB::table('professions')->insert([
          'title' => 'Desarrollador 2Back-end',
        ]);*/

        //DB::delete('delete from professions where id>1');

        //DB::table('professions')->where('id','>',1)->delete();

        Profession::create(['title' => 'Desarrollador Back-end']);

       Profession::create(['title' => 'Desarrollador Frock-end']);

       Profession::create(['title' => 'Desarrollador Diseños']);
    }
}
