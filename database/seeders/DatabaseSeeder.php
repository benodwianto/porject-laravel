<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Barang::create([
            'namabarang' => 'Baju Olahraga',
            'deskripsi_singkat' => 'Barang murah dikit',
            'deskripsi' => 'Barang murah banged hiyayaya',
            'harga' => '500000',
            'kategori_id' => '1',
            'stok' => '1000',
        ]);
        Barang::create([
            'namabarang' => 'Jam Tangan',
            'deskripsi_singkat' => 'Barang murah aja',
            'deskripsi' => 'Barang murah banged ejejejejejejejj',
            'harga' => '500000',
            'kategori_id' => '2',
            'stok' => '1000',
        ]);
        Barang::create([
            'namabarang' => 'Celana Olahraga',
            'deskripsi_singkat' => 'Barang cukup murah',
            'deskripsi' => 'Barang murah banged owyeahch',
            'harga' => '500000',
            'kategori_id' => '3',
            'stok' => '1000',
        ]);
        Barang::create([
            'namabarang' => 'Hoodie',
            'deskripsi_singkat' => 'Barang cukup murah',
            'deskripsi' => 'Barang murah banged owyeahch',
            'harga' => '40000',
            'kategori_id' => '1',
            'stok' => '100',
        ]);
        Barang::create([
            'namabarang' => 'Jaket Pria',
            'deskripsi_singkat' => 'Barang cukup murah',
            'deskripsi' => 'Barang murah banged owyeahch',
            'harga' => '5000000',
            'kategori_id' => '1',
            'stok' => '10090',
        ]);
        Barang::create([
            'namabarang' => 'Jaket',
            'deskripsi_singkat' => 'Barang cukup murah',
            'deskripsi' => 'Barang murah banged owyeahch',
            'harga' => '5000000',
            'kategori_id' => '2',
            'stok' => '10090',
        ]);
        Barang::create([
            'namabarang' => 'Singlet',
            'deskripsi_singkat' => 'Barang cukup murah',
            'deskripsi' => 'Barang murah banged owyeahch',
            'harga' => '5000000',
            'kategori_id' => '3',
            'stok' => '10090',
        ]);
        Barang::create([
            'namabarang' => 'Baju Tidur',
            'deskripsi_singkat' => 'Barang cukup murah',
            'deskripsi' => 'Barang murah banged owyeahch',
            'harga' => '5000000',
            'kategori_id' => '3',
            'stok' => '10090',
        ]);
        Barang::create([
            'namabarang' => 'Kalung',
            'deskripsi_singkat' => 'Barang cukup murah',
            'deskripsi' => 'Barang murah banged owyeahch',
            'harga' => '5000000',
            'kategori_id' => '2',
            'stok' => '10090',
        ]);
        Barang::create([
            'namabarang' => 'Sepatu',
            'deskripsi_singkat' => 'Barang cukup murah',
            'deskripsi' => 'Barang murah banged owyeahch',
            'harga' => '5000000',
            'kategori_id' => '2',
            'stok' => '10090',
        ]);
        Barang::create([
            'namabarang' => 'Kaos Keren',
            'deskripsi_singkat' => 'Barang cukup murah',
            'deskripsi' => 'Barang murah banged owyeahch',
            'harga' => '5000000',
            'kategori_id' => '3',
            'stok' => '10090',
        ]);
        Barang::create([
            'namabarang' => 'Manset',
            'deskripsi_singkat' => 'Barang cukup murah',
            'deskripsi' => 'Barang murah banged owyeahch',
            'harga' => '5000000',
            'kategori_id' => '3',
            'stok' => '10090',
        ]);
        Barang::create([
            'namabarang' => 'Gelas',
            'deskripsi_singkat' => 'Barang cukup murah',
            'deskripsi' => 'Barang murah banged owyeahch',
            'harga' => '5000000',
            'kategori_id' => '2',
            'stok' => '10090',
        ]);
        Barang::create([
            'namabarang' => 'Gamis',
            'deskripsi_singkat' => 'Barang cukup murah',
            'deskripsi' => 'Barang murah banged owyeahch',
            'harga' => '5000000',
            'kategori_id' => '3',
            'stok' => '10090',
        ]);

        Kategori::create([
            'nama_kategori' => 'Celana',
        ]);
        Kategori::create([
            'nama_kategori' => 'Aksesoris',
        ]);
        Kategori::create([
            'nama_kategori' => 'Baju baju',
        ]);
    }
}
