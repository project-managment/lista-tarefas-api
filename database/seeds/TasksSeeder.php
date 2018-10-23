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
        $user = User::firstOrCreate([
          'name' => 'Yves',
          'email' => 'yves@linux.com',
          'password' => Hash::make('123'),
          'api_token' => 'xxx'
        ]);
        Task::insert([
          [
            'title' => 'Terminar o sistema',
            'description' => 'Precisamos fazer isso',
            'user_id' => $user->id
          ],
          [
            'title' => 'Ler um livro',
            'description' => 'Terminar de ler o livro que comecei a ler',
            'user_id' => $user->id
          ],
          [
            'title' => 'Estudar',
            'description' => 'Preciso estudar aquela materia',
            'user_id' => $user->id
          ],
          [
            'title' => 'Astrogilda quer brownie ',
            'description' => 'Ela quer chocolate mesmo falando que não queria mais chocolate',
            'user_id' => $user->id
          ],
          [
            'title' => 'Terminar o sistema, enfim sistema pronto',
            'description' => 'Precisamos fazer isso, e vamos terminar',
            'user_id' => $user->id
          ],
          [
            'title' => 'Quando é a prox pizza?',
            'description' => 'Precisamos marca',
            'user_id' => $user->id
          ],
          [
            'title' => 'Terminar o sistema.2',
            'description' => 'Precisamos fazer isso.dois',
            'user_id' => $user->id
          ],
          [
            'title' => 'Concluir o sistema',
            'description' => 'Precisamos concluir o sistema',
            'user_id' => $user->id
          ],
          [
            'title' => 'Concluir o sistema.2',
            'description' => 'Precisamos Concluir o sistema.dois',
            'user_id' => $user->id
          ],
          [
            'title' => 'Terminar o sistema.3',
            'description' => 'Precisamos fazer isso.3',
            'user_id' => $user->id
          ]
        ]);

    }
}
