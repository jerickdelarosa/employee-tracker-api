<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\UserType;
use Illuminate\Database\Seeder;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::all();

        $admin = UserType::find(1);
        $user = UserType::find(2);

        $admin->permissions()->delete();
        $user->permissions()->delete();

        foreach ($roles as $role) {
            $admin->permissions()->create([
                'role_code' => $role->code,
                'view' => true,
                'create' => true,
                'edit' => true,
                'delete' => true
            ]);

            $user->permissions()->create([
                'role_code' => $role->code,
                'view' => false,
                'create' => false,
                'edit' => false,
                'delete' => false
            ]);
        }
    }
}
