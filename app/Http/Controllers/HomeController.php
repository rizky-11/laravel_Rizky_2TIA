<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'username' => 'Rizky Maulana',
            'last_login' => date('Y-m-d H:i:s'),

            'profesi' => 'Mahasiswa Teknik Informatika',

            'tentang' => 'Saya adalah mahasiswa yang tertarik pada pengembangan website, pemrograman, dan teknologi informasi. Saya senang mempelajari hal baru serta mengembangkan kemampuan melalui berbagai proyek.',

            'list_pendidikan' => [
                'Sekolah Dasar (SD)',
                'Sekolah Menengah Pertama (SMP)',
                'Sekolah Menengah Atas (SMA)',
                'Perguruan Tinggi (S1)',
            ],

            'keahlian' => [
                'HTML',
                'CSS',
                'PHP',
                'Laravel',
                'MySQL',
                'Bootstrap',
            ],
        ];

        return view('home', $data);
    }
}
