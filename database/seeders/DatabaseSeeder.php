<?php

namespace Database\Seeders;

use App\Enums\AccountType;
use App\Enums\ChargesType;
use App\Models\Charges;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // super admin account
        User::create([
            'name' => "Super admin",
            'email' => "superadmin@gmail.com",
            'phone' => "+91 9794445940",
            'password' => Hash::make("1234"),
            'accept_terms' => 1,
            'account_type' => AccountType::SUPER_ADMIN
        ]);

        // admin account
        User::create([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'phone' => "+91 9794445940",
            'password' => Hash::make("1234"),
            'accept_terms' => 1,
            'account_type' => AccountType::ADMIN
        ]);

        $charges = [
            [
                'type' => ChargesType::REGISTRATION_FEE,
                'amount' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Charges::insert($charges);

    }
}
