<?php

namespace Database\Seeders;

use App\Models\Choice;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $choices = [
            ['id' => 1, 'user_id' => 12, 'companies_id' => 2],
            ['id' => 2, 'user_id' => 12, 'companies_id' => 3],
            ['id' => 3, 'user_id' => 3, 'companies_id' => 1],
            ['id' => 4, 'user_id' => 17, 'companies_id' => 1],
            ['id' => 5, 'user_id' => 17, 'companies_id' => 2],
            ['id' => 6, 'user_id' => 17, 'companies_id' => 5],
            ['id' => 7, 'user_id' => 13, 'companies_id' => 5],
            ['id' => 8, 'user_id' => 13, 'companies_id' => 7],
            ['id' => 9, 'user_id' => 13, 'companies_id' => 3],
        ];

        Choice::insert($choices);
    }
}
