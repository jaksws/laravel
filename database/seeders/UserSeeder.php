<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Agency;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // إنشاء العملاء
        User::updateOrCreate(
            ['email' => 'salem@example.com'],
            [
                'name' => 'سالم علي',
                'password' => Hash::make('password123'),
                'phone' => '777301401',
                'user_type' => 'customer',
                'agency_id' => $yemenTravelId,

                'is_active' => true,
            ]
        );
    }
}
