<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleAndUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definisikan peran sistem:
        // - admin: mengelola seluruh sistem
        // - organisasi: menambahkan/kelola data kegiatan organisasi
        // - user: hanya sebagai viewer
        $roles = [
            'admin' => 'Admin mengelola seluruh sistem',
            'organisasi' => 'Organisasi menambah data kegiatan',
            'user' => 'Anggota (hanya melihat)'
        ];

        // Buat role jika belum ada
        foreach (array_keys($roles) as $roleName) {
            Role::firstOrCreate(['name' => $roleName]);
        }

        // Buat user contoh dan berikan role yang sesuai
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
            ]
        );
        $admin->assignRole('admin');

        $organisasi = User::firstOrCreate(
            ['email' => 'organisasi@gmail.com'],
            [
                'name' => 'Organisasi',
                'password' => Hash::make('password'),
            ]
        );
        $organisasi->assignRole('organisasi');

        $anggota = User::firstOrCreate(
            ['email' => 'user@gmail.com'],
            [
                'name' => 'User Viewer',
                'password' => Hash::make('password'),
            ]
        );
        $anggota->assignRole('user');

        // Tambahan: contoh beberapa user viewer
        for ($i = 1; $i <= 2; $i++) {
            $u = User::firstOrCreate(
                ['email' => "user{$i}@simako.test"],
                [
                    'name' => "User {$i}",
                    'password' => Hash::make('password'),
                ]
            );
            $u->assignRole('user');
        }
    }

}
