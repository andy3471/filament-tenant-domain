<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Tenant::factory()->create([
            'name' => 'Site 1',
            'domain' => 'site-1.inform-ehr.local'
        ]);

        Tenant::factory()->create([
            'name' => 'Site 2',
            'domain' => 'site-3.inform-ehr.local'
        ]);

        Tenant::factory()->create([
            'name' => 'Site 3',
            'domain' => 'site-3.inform-ehr.local'
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'tenant_id' => null
        ]);
    }
}
