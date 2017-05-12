<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'super-admin', 'label' => 'Super Admin'],
            ['name' => 'admin', 'label' => 'Admin'],
            ['name' => 'marketing', 'label' => 'Marketing'],
            ['name' => 'designer', 'label' => 'Diseñador'],
            ['name' => 'content-manager', 'label' => 'Gestor de Contenidos'],
            ['name' => 'super-customer', 'label' => 'Super Customer'],
            ['name' => 'customer', 'label' => 'Cliente'],
            ['name' => 'provider', 'label' => 'Proveedor']
        ]);
    }
}
