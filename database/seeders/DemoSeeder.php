<?php

namespace Bithoven\Dummy\Database\Seeders;

use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            DummyDemoSeeder::class,
        ]);
    }
}
