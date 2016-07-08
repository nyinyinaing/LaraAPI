<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Ticket;
class TicketSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0;$i<100;$i++)
        {
        	Ticket::create([
        		'title'=>$faker->catchPhrase,
        		'content'=>$faker->paragraph,
        		'priority'=>$faker->numberBetween(1, 3),
        		'status'=>$faker->boolean,
        		'user_id'=>$faker->numberBetween(1, 3),
        		'category_id'=>$faker->numberBetween(1, 5)
        	]);
        }
    }
}
