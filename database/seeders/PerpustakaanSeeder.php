<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerpustakaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [[
            'kode_buku' => 01,
            'judul' => 'Belajar Database',
            'pengarang' => 'Sofia Mulia',
            'jenis_buku' => 'Buku Umum',
            'harga' => '102.000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 02,
            'judul' => 'Belajar Membaca',
            'pengarang' => 'Yunus Abadi',
            'jenis_buku' => 'Buku Umum',
            'harga' => '110.000',
            'qty' => '60',
        ],
        [
            'kode_buku' => 03,
            'judul' => 'Belajar Database',
            'pengarang' => 'Sofia Mulia',
            'jenis_buku' => 'Buku Umum',
            'harga' => '130.000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 04,
            'judul' => 'Belajar Membaca',
            'pengarang' => 'Yunus Abadi',
            'jenis_buku' => 'Buku Umum',
            'harga' => '110.000',
            'qty' => '10',
        ],
        [
            'kode_buku' => 05,
            'judul' => 'Belajar Database',
            'pengarang' => 'Sofia Mulia',
            'jenis_buku' => 'Buku Umum',
            'harga' => '150.000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 06,
            'judul' => 'Belajar Membaca',
            'pengarang' => 'Yunus Abadi',
            'jenis_buku' => 'Buku Umum',
            'harga' => '110.000',
            'qty' => '60',
        ],
        [
            'kode_buku' => 7,
            'judul' => 'Belajar Database',
            'pengarang' => 'Sofia Mulia',
            'jenis_buku' => 'Buku Umum',
            'harga' => '50.000',
            'qty' => '21',
        ],
        [
            'kode_buku' => 8,
            'judul' => 'Belajar Membaca',
            'pengarang' => 'Yunus Abadi',
            'jenis_buku' => 'Buku Umum',
            'harga' => '110.000',
            'qty' => '81',
        ],
        [
            'kode_buku' => 9,
            'judul' => 'Belajar Database',
            'pengarang' => 'Sofia Mulia',
            'jenis_buku' => 'Buku Umum',
            'harga' => '150.000',
            'qty' => '33',
        ],
        [
            'kode_buku' => 10,
            'judul' => 'Belajar Membaca',
            'pengarang' => 'Yunus Abadi',
            'jenis_buku' => 'Buku Umum',
            'harga' => '110.000',
            'qty' => '21',
        ],
        [
            'kode_buku' => 11,
            'judul' => 'Belajar Database',
            'pengarang' => 'Sofia Mulia',
            'jenis_buku' => 'Buku Umum',
            'harga' => '69.000',
            'qty' => '45',
        ],
        [
            'kode_buku' => 12,
            'judul' => 'Belajar Membaca',
            'pengarang' => 'Yunus Abadi',
            'jenis_buku' => 'Buku Umum',
            'harga' => '78.000',
            'qty' => '60',
        ],
        [
            'kode_buku' => 13,
            'judul' => 'Belajar Database',
            'pengarang' => 'Sofia Mulia',
            'jenis_buku' => 'Buku Umum',
            'harga' => '130.000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 14,
            'judul' => 'Belajar Membaca',
            'pengarang' => 'Yunus Abadi',
            'jenis_buku' => 'Buku Umum',
            'harga' => '110.000',
            'qty' => '14',
        ],
        [
            'kode_buku' => 15,
            'judul' => 'Belajar Database',
            'pengarang' => 'Sofia Mulia',
            'jenis_buku' => 'Buku Umum',
            'harga' => '150.000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 16,
            'judul' => 'Belajar Membaca',
            'pengarang' => 'Yunus Abadi',
            'jenis_buku' => 'Buku Umum',
            'harga' => '110.000',
            'qty' => '60',
        ],
        [
            'kode_buku' => 17,
            'judul' => 'Belajar Database',
            'pengarang' => 'Sofia Mulia',
            'jenis_buku' => 'Buku Umum',
            'harga' => '150.000',
            'qty' => '25',
        ],
        [
            'kode_buku' => 18,
            'judul' => 'Belajar Membaca',
            'pengarang' => 'Yunus Abadi',
            'jenis_buku' => 'Buku Umum',
            'harga' => '144.000',
            'qty' => '13',
        ],
        [
            'kode_buku' => 19,
            'judul' => 'Belajar Database',
            'pengarang' => 'Sofia Mulia',
            'jenis_buku' => 'Buku Umum',
            'harga' => '150.000',
            'qty' => '54',
        ],
        [
            'kode_buku' => 20,
            'judul' => 'Belajar Membaca',
            'pengarang' => 'Yunus Abadi',
            'jenis_buku' => 'Buku Umum',
            'harga' => '110.000',
            'qty' => '12',
        ],
    ];
        DB::table('perpustakaan')->insert($data);
    }
}
