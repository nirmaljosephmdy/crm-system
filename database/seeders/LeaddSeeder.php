<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Leadd;

class LeaddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $total = 100000;
        $chunk = 10000;

        for ($i = 0; $i < ($total / $chunk); $i++) {

            Leadd::factory()
                ->count($chunk)
                ->create();

            $this->command->info('Inserted: ' . (($i + 1) * $chunk));
        }
    }
}
