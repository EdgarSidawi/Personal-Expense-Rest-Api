<?php

use App\ExpenseModel;
use App\SessionModel;
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
        factory(SessionModel::class, 5)->create();
        factory(ExpenseModel::class, 20)->create();
    }
}
