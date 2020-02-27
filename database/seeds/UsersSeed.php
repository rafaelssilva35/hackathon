<?php

use Illuminate\Database\Seeder;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'usuário 1',
                'email' => 'usuario@usuario1'
            ],
            [
                'name' => 'usuário 2',
                'email' => 'usuario@usuario2'
            ]
        ];
    }
}
