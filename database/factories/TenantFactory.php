<?php

namespace Database\Factories;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TenantFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'domain' => fake()->url(),
        ];
    }

}
