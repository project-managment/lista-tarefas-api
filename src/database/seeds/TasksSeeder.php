<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Task;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
          'name' => 'Yves',
          'email' => 'yves@linux.com',
          'password' => Hash::make('123'),
          'api_token' => 'xxx'
        ]);
        Task::create([
          'title' => 'Terminar o sistema',
          'description' => 'Precisamos fazer isso',
          'user_id' => $user->id
        ]);
    }
}
