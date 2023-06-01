<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $role = Role::find(1);
        $permission = Permission::create(['name' => 'ingresar datos']);
        $permission->assignRole($role);
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
    }
};
