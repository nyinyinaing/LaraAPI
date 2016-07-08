<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	$faker = Faker::create();
     	for($i=0;$i<3;$i++)
     	{
     		User::create([
     			'name'=>$faker->name,
     			'email'=>$faker->freeEmail,
     			'password'=>$faker->password,
     			'remember_token'=>$faker->password
     		]);
     	}
    }
}
