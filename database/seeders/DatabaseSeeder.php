<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'role' => 'member',
                'nama' => 'Berlian',
                'badge' => 'B123456R',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => now(),
                'jenis_kelamin' => 'laki-laki',
                'ktp' => '0987654321',
                'password'=> bcrypt('123456789'),
                'alamat' => 'Purwakarta',
                'email' => 'berlianrusmana23@gmail.com',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

        $employee = [
            [
                'user_id' => '1',
                'unit_kerja' => 'IT programmer',
                'telepon' => '082210521631',
            ],
        ];

        foreach ($employee as $key => $value) {
            Employee::create($value);
        }
    }
}
