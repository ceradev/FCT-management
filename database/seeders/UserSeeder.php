<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['id' => 1, 'name' => 'Andrés', 'password' => Hash::make('123'), 'role' => 1, 'email' => 'andres123@gmail.com'],
            ['id' => 2, 'name' => 'Markus', 'password' => Hash::make('123'), 'role' => 0, 'email' => 'markus123@gmail.com'],
            ['id' => 3, 'name' => 'David', 'password' => Hash::make('123'), 'role' => 0, 'email' => 'david123@gmail.com'],
            ['id' => 4, 'name' => 'Victor', 'password' => Hash::make('123'), 'role' => 0, 'email' => 'victor123@gmail.com'],
            ['id' => 5, 'name' => 'Marcos', 'password' => Hash::make('123'), 'role' => 0, 'email' => 'marcos123@gmail.com'],
            ['id' => 6, 'name' => 'Khalifa', 'password' => Hash::make('123'), 'role' => 0, 'email' => 'khalifa123@gmail.com'],
            ['id' => 7, 'name' => 'Minghai', 'password' => Hash::make('123'), 'role' => 0, 'email' => 'minghai123@gmail.com'],
            ['id' => 8, 'name' => 'José', 'password' => Hash::make('123'), 'role' => 0, 'email' => 'jose123@gmail.com'],
            ['id' => 9, 'name' => 'Atteneri', 'password' => Hash::make('123'), 'role' => 0, 'email' => 'atteneri123@gmail.com'],
            ['id' => 10, 'name' => 'Raúl', 'password' => Hash::make('123'), 'role' => 0, 'email' => 'raul123@gmail.com'],
            ['id' => 11, 'name' => 'Andrew', 'password' => Hash::make('123'), 'role' => 0, 'email' => 'andrew123@gmail.com'],
            ['id' => 12, 'name' => 'Tati', 'password' => Hash::make('123'), 'role' => 0, 'email' => 'tati123@gmail.com'],
            ['id' => 13, 'name' => 'Airam', 'password' => Hash::make('123'), 'role' => 0, 'email' => 'airam123@gmail.com'],
            ['id' => 14, 'name' => 'Jorge', 'password' => Hash::make('123'), 'role' => 0, 'email' => 'jorge123@gmail.com'],
            ['id' => 15, 'name' => 'Adexe', 'password' => Hash::make('123'), 'role' => 0, 'email' => 'adexe123@gmail.com'],
            ['id' => 16, 'name' => 'César', 'password' => Hash::make('123'), 'role' => 0, 'email' => 'cesar123@gmail.com'],
            ['id' => 17, 'name' => 'Cristo', 'password' => Hash::make('123'), 'role' => 0, 'email' => 'cristo123@gmail.com'],
            ['id' => 18, 'name' => 'Elena', 'password' => Hash::make('123'), 'role' => 1, 'email' => 'elena123@gmail.com'],
            ['id' => 19, 'name' => 'Eva', 'password' => Hash::make('123'), 'role' => 1, 'email' => 'eva123@gmail.com'],
            ['id' => 20, 'name' => 'Ángel', 'password' => Hash::make('123'), 'role' => 1, 'email' => 'angel123@gmail.com']
        ];

        User::insert($users);
    }
}
