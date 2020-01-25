<?php

use App\Model\Expense;
use App\Model\Session;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()  
    {
        factory(User::class)->create(['email' => 'edgar@gmail.com', 'password' => 'junior']);
        factory(Session::class, 5)->create();
        factory(Expense::class, 20)->create();
    }
}
