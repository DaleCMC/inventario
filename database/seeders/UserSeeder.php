<?php


namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear roles si no existen
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'usuario']);
        Role::firstOrCreate(['name' => 'editor']);


        // Crear usuario admin
        $user = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Administrador',
                'password' => bcrypt('password123'),
            ]
        );


        // Asignar rol admin
        $user->assignRole('admin');
    }
}
