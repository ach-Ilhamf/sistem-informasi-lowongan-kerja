<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'level' => 'admin',
                'password' => bcrypt('admin123')
            ],
            [
                'username' => 'pelamar',
                'name' => 'Pelamar',
                'email' => 'pelamar@example.com',
                'level' => 'pelamar',
                'password' => bcrypt('pelamar123')
            ],
            [
                'username' => 'perusahaan',
                'name' => 'Perusahaan',
                'email' => 'perusahaan@example.com',
                'level' => 'perusahaan',
                'password' => bcrypt('perusahaan123')
            ]      
        ];
        foreach  ($user as $key => $value) {
            User::create($value);
        } 
    }
}
