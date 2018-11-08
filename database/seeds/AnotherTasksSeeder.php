<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Task;
use App\User;

class AnotherTasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'yves@linux.com')->first();
        if(!$user)
            $user = User::create([
              'name' => 'Yves',
              'email' => 'yves@linux.com',
              'password' => Hash::make('123'),
              'api_token' => 'xxx'
            ]);
        Task::insert([
          [
            'title' => 'Terminar o sistema',
            'description' => 'Precisamos fazer isso',
            'conclusion_date' => '2018-11-30 00:00:00',
            'user_id' => $user->id
          ],
        ]);
    }
}
