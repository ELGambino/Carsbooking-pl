<?php

namespace Database\Seeders;

use App\Enums\RoleName;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* $this->createClientUser(); */
    }

    /**
    * public function createClientUser()
    * {
    *    User::create([
    *        'name'     => 'Klient',
    *        'email'    => 'klient@carsbooking.pl',
    *        'password' => bcrypt('Influence123!'),
    *    ])->roles()->sync(Role::where('name', RoleName::CLIENT->value)->first());
    * }
    */
}