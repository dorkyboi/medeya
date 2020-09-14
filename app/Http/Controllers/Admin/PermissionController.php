<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    const PERMISSIONS = [
        'access admin panel',

        'list users',
        'read users',
        'create users',
        'update users',
    ];

    public static function seed() {
        self::seedPermissions();
        self::adminRole();
    }

    private static function seedPermissions() {
        $permissions = [];
        foreach (self::PERMISSIONS as $permission)
            $permissions[] = [
                'name' => $permission,
                'guard_name' => 'web',
            ];

        Permission::insert($permissions);
    }

    private static function adminRole() {
        $role = Role::create(['name' => 'admin']);
        $role->syncPermissions(Permission::all());
        User::find(1)->assignRole($role);
    }
}
