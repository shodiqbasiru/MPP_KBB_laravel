<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Features;
use App\Models\Layanan;
use App\Models\ProfilMpp;
use App\Models\Tenant;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Features::create([
        //     'name' => 'Profil MPP',
        //     'slug' => 'profil-mpp'
        // ]);
        // Features::create([
        //     'name' => 'Antrian',
        //     'slug' => 'antrian'
        // ]);
        // Features::create([
        //     'name' => 'Layanan',
        //     'slug' => 'layanan'
        // ]);
        // Features::create([
        //     'name' => 'Monitoring',
        //     'slug' => 'monitoring'
        // ]);
        // Features::create([
        //     'name' => 'Survey',
        //     'slug' => 'survey'
        // ]);
        // Features::create([
        //     'name' => 'Pengaduan',
        //     'slug' => 'pengaduan'
        // ]);

        Tenant::create([
            'instansi' => 'Disdukcapil',
            'slug' => 'disdukcapil',
            'jenis_layanan' => 'Pembuatan KTP',
            'persyaratan' => '<ol>
                <li>Minimal berusia 17 tahun</li>
                <li>Surat Pengantar dari pihak Rukun Tetangga (RT) dan Rukun Warga (RW)</li>
                <li>Surat keterangan pindah dari kota asal, jika bukan asli warga setempat</li>
                <li>Fotocopy Kartu Keluarga (KK)</li>
            </ol>',
            'kode_layanan' => 'A1'
        ]);

        Tenant::create([
            'instansi' => 'Samsat',
            'slug' => 'samsat',
            'jenis_layanan' => 'Pembuatan KTP',
            'persyaratan' => '<ol>
                <li>Minimal berusia 17 tahun</li>
                <li>Melampirkan KTP Asli dan fotocopy sebanyak 2 lembar</li>
                <li>Surat keterangan sehat dari dokter</li>
            </ol>',
            'kode_layanan' => 'B2'
        ]);

        Tenant::create([
            'instansi' => 'Kementerian Agama',
            'slug' => 'kementerian-agama',
            'jenis_layanan' => 'Pembuatan Akta Nikah',
            'persyaratan' => '<ol>
                <li>Map berwarna merah untuk menyimpan semua berkas persyaratan</li>
                <li>Surat keterangan dari masing-masing kelurahan berupa surat N1 sampai dengan N4, asli dan fotokopi (2 set)</li>
                <li>Fotokopi KTP kedua mempelai yang telah dilegalisasi lurah (2 lembar)</li>
                <li>Fotokopi KK kedua mempelai yang telah dilegalisasi lurah (2 lembar)</li>
                <li>Fotokopi akta kelahiran kedua mempelai, asli dan fotokopi (2 lembar)</li>
                <li>Pas foto suami dan istri berdampingan ukuran 4 x 6 berwarna (6 lembar)</li>
                <li>Fotokopi KTP dua orang saksi selain orangtua (2 lembar)</li>
                <li>Fotokopi KTP orangtua kedua mempelai (2 lembar)</li>
                <li>Surat pernyataan belum pernah menikah dengan materai Rp6000 dan diketahui oleh 2 orang saksi + stempel RT/RW setempat</li>
                <li>Akta kelahiran masing-masing, asli dan fotokopi (2 lembar)</li>
                <li>Surat nikah perkawinan agama, asli dan fotokopi (2 lembar)</li>
            </ol>',
            'kode_layanan' => 'C3'
        ]);

        Tenant::create([
            'instansi' => 'PDAM',
            'slug' => 'pdam',
            'jenis_layanan' => 'Pembayaran air',
            'persyaratan' => '<ol>
                <li>Minimal berusia 17 tahun</li>
                <li>Melampirkan KTP Asli dan fotocopy sebanyak 2 lembar</li>
                <li>Surat keterangan sehat dari dokter</li>
            </ol>',
            'kode_layanan' => 'D4'
        ]);
        
        

        
    }
}
