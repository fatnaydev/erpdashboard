<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class ErpdashboardPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');
        // Brand permissions
        $permissions[] = ['name' => 'browse-erpdashboard', 'guard_name' => 'web' ];
        $permissions[] = ['name' => 'add-erpdashboard', 'guard_name' => 'web' ];
        $permissions[] = ['name' => 'read-erpdashboard', 'guard_name' => 'web' ];
        $permissions[] = ['name' => 'edit-erpdashboard', 'guard_name' => 'web' ];
        $permissions[] = ['name' => 'delete-erpdashboard', 'guard_name' => 'web' ];
        $permissions[] = ['name' => 'force-delete-erpdashboard', 'guard_name' => 'web' ];
        $permissions[] = ['name' => 'restore-erpdashboard', 'guard_name' => 'web' ];
        $permissions[] = ['name' => 'import-erpdashboard', 'guard_name' => 'web' ];
        $permissions[] = ['name' => 'export-erpdashboard', 'guard_name' => 'web' ];
        
        foreach($permissions AS $permission){
            Permission::firstOrCreate($permission);
        }
    }
}
