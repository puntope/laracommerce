<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => env('ADMIN_EMAIL', 'admin@admin.com'),
                'password' => bcrypt('admin')
            ]
        ]);

        User::first()->setRole('super-admin');
    }
}
