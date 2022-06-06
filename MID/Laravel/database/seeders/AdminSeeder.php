<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\admin::factory()->create([
            'name' => 'Admin',
            'password' => 'Admin@1234',
        ]);
    }
}
