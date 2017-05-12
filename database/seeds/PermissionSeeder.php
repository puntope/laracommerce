<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            ['name' => 'backend_access', 'label' => 'Acceso al panel de control'],
            ['name' => 'backend_products_access','label' =>  'Acceso al área de Productos'],
            ['name' => 'backend_marketing_access', 'label' => 'Acceso al área de Marketing'],
            ['name' => 'backend_design_access','label' =>  'Acceso al área de Diseño'],
            ['name' => 'backend_sales_access','label' =>  'Acceso al área de Ventas'],
            ['name' => 'backend_orders_access','label' =>  'Acceso al área de Pedidos'],
            ['name' => 'backend_cms_access','label' =>  'Acceso al área de Gestión de contenidos'],
            ['name' => 'backend_options_access','label' =>  'Acceso al área de opciones'],
            ['name' => 'backend_users_access','label' =>  'Acceso a la gestión de usuarios'],
            ['name' => 'backend_customers_access','label' =>  'Acceso a la gestión de clientes'],
        ]);
    }
}
