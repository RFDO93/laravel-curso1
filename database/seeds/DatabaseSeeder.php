<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tablas = array('professions','users');

        $this->TruncateTablas($tablas);
        // $this->call(UsersTableSeeder::class);
        $this->call(ProfessionSeeder::class);
        $this->call(UserSeeder::class);
    }

    protected function TruncateTablas(array $tablas){
      DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

      foreach ($tablas as $value) {
        DB::table($value)->truncate();
      }

      DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
