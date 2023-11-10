<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Barang::create([
            'namabarang' => 'Motor Kawasaki',
            'jenisbarang' => 'Motorcycle',
            'jumlahbarang' => '1000',
        ]);
    }
}
