<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)
        ->has(UserInfo::factory()->count(1))
        ->create();
    }
}
