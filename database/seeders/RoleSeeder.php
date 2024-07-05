<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'validate_article']);
        Permission::create(['name' => 'promote_moderator']);
        Permission::create(['name' => 'revoke_moderator']);
        Permission::create(['name' => 'delete_article']);
        Permission::create(['name' => 'delete_comment']);
        Permission::create(['name' => 'can_see_dashboard']);
        Permission::create(['name' => 'create_delete_category']);
        Permission::create(['name' => 'get_all_user']);
        Permission::create(['name' => 'get_user_without_superadmin']);
        Permission::create(['name' => 'get_user_without_admin']);

        Permission::create(['name' => 'revoke_admin']);

        $superadmin = Role::create(['name' => 'super-admin']);
        $superadmin->givePermissionTo('validate_article');
        $superadmin->givePermissionTo('promote_moderator');
        $superadmin->givePermissionTo('revoke_moderator');
        $superadmin->givePermissionTo('revoke_admin');
        $superadmin->givePermissionTo('delete_comment');
        $superadmin->givePermissionTo('delete_article');
        $superadmin->givePermissionTo('create_delete_category');
        $superadmin->givePermissionTo('can_see_dashboard');
        $superadmin->givePermissionTo('can_see_dashboard');
        $superadmin->givePermissionTo('get_all_user');

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo('validate_article');
        $admin->givePermissionTo('promote_moderator');
        $admin->givePermissionTo('revoke_moderator');
        $admin->givePermissionTo('delete_comment');
        $admin->givePermissionTo('create_delete_category');
        $admin->givePermissionTo('get_user_without_superadmin');

        $moderator = Role::create(['name' => 'moderator']);
        $moderator->givePermissionTo('validate_article');
        $moderator->givePermissionTo('delete_comment');
        $moderator->givePermissionTo('can_see_dashboard');
        $admin->givePermissionTo('get_user_without_admin');



        Role::create(['name' => 'user']);
    }
}
