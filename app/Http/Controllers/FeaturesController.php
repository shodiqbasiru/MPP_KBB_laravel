<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function profilmpp()
    {
        // $fitur = [];
        return view('fitur.profilmpp', [
            'title' => 'Profil MPP',
            'slug' => 'profil-mpp',
            'fitur' => ['Peta MPP 3d','Struktur Organisasi','Dasar Hukum','Galery'],
            'body' => '<p>Rendahnya kualitas pelayanan publik merupakan salah  satu sor
            otan yang diarahkan kepada birokrasi pemerintah dalam memberikan pelayanan kepada masyarakat . Sistem prosedur pelayanan yang berbelit-belit, profesionalisme SDM yang masih rendah, ketidakpastian waktu dan biaya mengakibatkan pelayanan di Indonesia identic dengan high–cosy economy (ekonomi biaya tinggi). Begitu banyaknya permasalahan dalam pelayanan public yang diselenggarakan pemerintah, maka sangat perlu dilakukan suatu perubaahan atau reformasi melalui perbaikan pelayanan public. Inilah kerangka mendasar yang harus diramu dalam tata cara yang berorientasi pada hasil dan menjawab kebutuhan mendasar warga masyarakat sehingga lahir GENERASI PELAYANAN PUBLIK TERPADU, lalu generasi kedua bernama PELAYANAN TERPADU SATU PINTU (PTSP). MAL PELAYANAN PUBLIK (MPP) adalah generasi ketiga yang lebih progresif memadukan pelayanan dari Pemerintah pusat, daerah, BUMD maupun swasta.</p>
            <p>Kini, Kabupaten Bandung memiliki Mal Pelayanan Publik (MPP) yang terintegrasi. MPP tersebut menempati lantai 2 dan 3 Munara Sabilulungan 99 tak jauh dari Kompleks Perkantoran Pemerintah Kabupaten Bandung di Soreang, Kabupaten Bandung.</p>
            <p>Penyelenggaraan MPP di Kabupaten Bandung tertuang dalam Peraturan Bupati Bandung Nomor 45 Tahun 2020 tentang Penyelenggaraan Mal Pelayanan Publik.</p>
            <p>Beberapa instansi telah bergabung ke dalam MPP dan siap melayani publik, di antaranya DPMPTSP Kab Bandung, DPMPTSP Provinsi Jabar, Polresta Bandung, Kejaksaan Negeri, Pengadilan Agama, BJB, BPJS, KPP Pratama, PDAM Tirta Raharja, Disdukcapil, Bagian Hukum, Samsat, Ikatan Notaris Indonesia, BPOM, Kantor Imigrasi, Badan Perlindungan Pekerja Migran Indonesia, dan BNN.</p>'
        ]);
    }

    public function antrian()
    {
        return view('fitur.antrian', [
            'title' => 'Halaman Antrian',
            'slug' => 'antrian'   
        ]);
    }

    // public function layanan()
    // {
    //     return view('fitur.layanan', [
    //         'title' => 'Layanan',
    //         'slug' => 'layanan'
    //     ]);
    // }

    public function monitoring()
    {
        return view('fitur.monitoring', [
            'title' => 'Monitoring',
            'slug' => 'layanan'   
        ]);
    }

    public function survey()
    {
        return view('fitur.survey', [
            'title' => 'Survey Kepuasan Masyarakat',
            'slug' => 'layanan'   
        ]);
    }

    public function pengaduan()
    {
        return view('fitur.pengaduan', [
            'title' => 'Halaman Pengaduan',
            'slug' => 'pengaduan'   
        ]);
    }

}
