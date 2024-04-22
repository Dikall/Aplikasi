<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Mahasiswa',
            'email'=>'mahasiswa@email.com',
            'type'=>0,
            'password'=> bcrypt('12345'),
        ]);
        
        User::create([
            'name'=>'Dosen',
            'email'=>'dosen@email.com',
            'type'=>1,
            'password'=> bcrypt('12345'),
        ]);

        User::create([
            'name'=>'Super Admin',
            'email'=>'superadmin@email.com',
            'type'=>2,
            'password'=> bcrypt('12345'),
        ]);

        User::create([
            'name'=>'Admin',
            'email'=>'admin@email.com',
            'type'=>3,
            'password'=> bcrypt('12345'),
        ]);

        User::create([
            'name'=>'Tendik',
            'email'=>'tendik@email.com',
            'type'=>4,
            'password'=> bcrypt('12345'),
        ]);

        User::create([
            'name'=>'Akademik',
            'email'=>'akademi@email.com',
            'type'=>5,
            'password'=> bcrypt('12345'),
        ]);

        User::create([
            'name'=>'Keuangan',
            'email'=>'keuangan@emai.com',
            'type'=>6,
            'password'=> bcrypt('12345'),
        ]);

        User::create([
            'name'=>'Direktur',
            'email'=>'direktur@email.com',
            'type'=>7,
            'password'=> bcrypt('12345'),
        ]);

        User::create([
            'name'=>'Wakil Direktur 1',
            'email'=>'wd1@email.com',
            'type'=>8,
            'password'=> bcrypt('12345'),
        ]);

        User::create([
            'name'=>'Wakil Direktur 2',
            'email'=>'w2@email.com',
            'type'=>9,
            'password'=> bcrypt('12345'),
        ]);

        User::create([
            'name'=>'Wakil Direktur 3',
            'email'=>'wd3@email.com',
            'type'=>10,
            'password'=> bcrypt('12345'),
        ]);

        User::create([
            'name'=>'Admin LPPM',
            'email'=>'lppm@email.com',
            'type'=>11,
            'password'=> bcrypt('12345'),
        ]);

        User::create([
            'name'=>'Admin SDM',
            'email'=>'sdm@email.com',
            'type'=>12,
            'password'=> bcrypt('12345'),
        ]);
    }
}
