<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        DB::table('users')->insert([
            'name' => 'Alessandro',
            'email' => 'alex-so@abc.com',
            'password' => Hash::make('123456')
        ]);

/*         for ($i=0; $i < 10;$i++) { 
            $newUser = new User();
            $newUser->name = $faker->userName();
            $newUser->email = $faker->email();
            $newUser->password = Hash::make("password" . $i);
            $newUser->save();
        }  */
    }
}
