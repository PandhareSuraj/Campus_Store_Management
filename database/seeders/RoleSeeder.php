<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            'hod',
            'principal',
            'trust_head',
            'user',
            'provider'
        ];

        foreach ($roles as $role) {
            Role::create(['role_name' => $role]);
        }
    }
}