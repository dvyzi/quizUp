<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\QuizDivertissementEasySeeder;
use Database\Seeders\QuizDivertissementMediumSeeder;
use Database\Seeders\QuizDivertissementHardSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Exécute les seeders de la base de données.
     *
     * @return void
     */
    public function run()
    {
        $this->call(QuizDivertissementEasySeeder::class);
        $this->call(QuizDivertissementMediumSeeder::class);
        $this->call(QuizDivertissementHardSeeder::class);
    }
}
