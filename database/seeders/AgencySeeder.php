<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agency;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            ['email' => 'info@yemen-travel.com'],
            [
                'name' => 'وكالة اليمن للسفر والسياحة',
                'phone' => '777123456',
                'address' => 'صنعاء - شارع جمال عبد الناصر',

    }
}
