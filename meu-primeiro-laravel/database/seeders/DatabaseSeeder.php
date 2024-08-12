<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the appl
     * ication's database.
     */
    public function run()
    {
        $this->call([
            ProdutoSeeder::class,
        ]);
    }

}
