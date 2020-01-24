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
        // $this->call(UsersTableSeeder::class);
        factory(User::class)->create(['email' => 'edgar@gmail.com', 'password' => 'junior']);
        factory(SessionModel::class, 10)->create();
        factory(ExpenseModel::class, 5)->create();
    }
}
