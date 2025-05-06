<?php

namespace Database\Seeders;

use App\Models\mahasiswa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Hash;
use Illuminate\Database\Seeder;
use Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([
        //   'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);

        DB::table("users")->insert([
            'nama' => Str::random(10),
            'email' => Str::random(10). "@example.com",
            'password' => Hash::make('password'),
        ]);

        //insert data mahasiswa menggunakan query builder
        //DB::table('mahasiswa')->insert([
        //   'npm' => "2428250032",
        //    'nama_mahasiswa' => "Variel Axcelino White Jemus",
        //    'born_date' => "Korea",
        //    'tanggal_lahir' => "2006-01-01",
        //    'alamat' => "Palembang",
        //    'created_at' => date("y-m-d H:i:s")
        //]);

        //DB::table('mahasiswa')
        //->where("npm", "2428250032")
        //->update(["npm" => "2428250032"]);

        mahasiswa::insert([
             'npm' => "2428250032",
            'nama_mahasiswa' => "Variel Axcelino White Jemus",
            'born_date' => "Korea",
            'tanggal_lahir' => "2006-01-01",
            'alamat' => "Palembang",
            'created_at' => date("y-m-d H:i:s")
        ]);

        //retrive all data
        mahasiswa::all();
        mahasiswa::where('id', '<', 3)->get(); //select * from mahasiswa where id < 3

        mahasiswa::select(['npm', 'nama'])->get(); //select npm,nama for mahasiswa
    }
}
