<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Backend\User;
use App\Models\Backend\Kategori;
use App\Models\Backend\Subkategori;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat pengguna
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'is_admin' => 1,
            'hp' => '081234567891',
            'password' => bcrypt('P@55word'),
        ]);
        User::create([
            'nama' => 'Rama Sahid',
            'email' => 'ramasahid@gmail.com',
            'is_admin' => 1,
            'password' => bcrypt('P@55word'),
        ]);
        User::create([
            'nama' => 'Team Miemie Brownie',
            'email' => 'teammiemie-brownie@gmail.com',
            'is_admin' => 0,
            'password' => bcrypt('P@55word'),
        ]);

        // Buat kategori
        $kategoriMakanan = Kategori::create([
            'nama_kategori' => 'Makanan',
        ]);

        $kategoriMinuman = Kategori::create([
            'nama_kategori' => 'Minuman',
        ]);

        // Buat subkategori untuk kategori Makanan
        Subkategori::create([
            'nama_subkategori' => 'Bolen Pisang',
            'kategori_id' => $kategoriMakanan->id,
        ]);
        Subkategori::create([
            'nama_subkategori' => 'Brownies',
            'kategori_id' => $kategoriMakanan->id,
        ]);
        Subkategori::create([
            'nama_subkategori' => 'Cookies',
            'kategori_id' => $kategoriMakanan->id,
        ]);
        Subkategori::create([
            'nama_subkategori' => 'Desert',
            'kategori_id' => $kategoriMakanan->id,
        ]);
        Subkategori::create([
            'nama_subkategori' => 'Birthday Cake',
            'kategori_id' => $kategoriMakanan->id,
        ]);

        // Buat subkategori untuk kategori Minuman
        Subkategori::create([
            'nama_subkategori' => 'Cofee',
            'kategori_id' => $kategoriMinuman->id,
        ]);
        Subkategori::create([
            'nama_subkategori' => 'Fresh Drink',
            'kategori_id' => $kategoriMinuman->id,
        ]);
        Subkategori::create([
            'nama_subkategori' => 'Meals',
            'kategori_id' => $kategoriMinuman->id,
        ]);
        Subkategori::create([
            'nama_subkategori' => 'Souvenir',
            'kategori_id' => $kategoriMinuman->id,
        ]);
    }
}

