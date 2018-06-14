<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name'      => 'Admin',
        'username'  => 'admin',
        'email'     => 'admin@webmaster.com',
        'password'  => Hash::make('admin'),
      ]);

    }
}


/*
<?php

// app/database/seeds/UserTableSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder{

  public function run(){
    DB::table('users')->delete();

    User::create(array(
      'name'      => 'Admin',
      'username'  => 'admin',
      'email'     => 'admin@webmaster.com',
      'password'  => Hash::make('admin'),
    ));

  }

}

*/
