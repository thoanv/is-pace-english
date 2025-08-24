<?php

namespace Database\Seeders;

use App\Enums\CommonEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->updateOrInsert(
            ['email' => 'ispace@gmail.com'],
            [
                'name' => 'Is Space',
                'email' => 'ispace@gmail.com',
                'phone' => '0356240995',
                'email_verified_at' => now(),
                'is_login' => CommonEnum::ACTIVATED,
                'is_admin' => CommonEnum::ACTIVATED,
                'password' => Hash::make('123456'),
                'remember_token' => Str::random(10),
            ],
        );
    }
}
