<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleCategori;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleCategori::create(
            [
                'id' => 1,
                'name' => 'berita',
            ]
        );
        ArticleCategori::create(
            [
                'id' => 2,
                'name' => 'pengumuman',
            ]
        );


        Article::create(
            [
                'id_user' => 1,
                'id_kategori' => 1,
                'name' => slugify('Selamat Datang di Website Rekrutmen Universitas Andalas', '-'),
                'judul' => 'Selamat Datang di Website Rekrutmen Universitas Andalas',
                'isi' => '<p>Selamat datang di website penerimaan karyawan Universitas Andalas. Kami senang anda tertarik untuk bergabung dengan tim kami. Universitas Andalas adalah universitas terkemuka di Indonesia yang berkomitmen untuk memberikan pendidikan berkualitas tinggi kepada mahasiswa dan masyarakat. Sebagai karyawan Universitas Andalas, anda akan bergabung dengan komunitas yang dinamis dan berdedikasi, serta memiliki kesempatan untuk berkontribusi dalam meningkatkan mutu pendidikan dan penelitian di Indonesia. Kami mengundang anda untuk melihat lowongan pekerjaan yang tersedia dan mengirimkan aplikasi anda. Terima kasih telah mengunjungi website kami.</p>',
            ]
        );
        Article::create(
            [
                'id_user' => 1,
                'id_kategori' => 2,
                'name' => slugify('Rekrutmen Developer dan Programmer', '-'),
                'judul' => 'Rekrutmen Developer dan Programmer',
                'isi' => '<p>Kualifikasi :<br /> 1. Pendidikan D3/S1 dalam Bidang Teknologi Informasi<br /> 2. Usia Maksimal 35Th<br /> 3. Memahami Konsep MVC, Full Stack Developer dan Web Api pada Web Programming<br /> 4. Menguasai VueJS(diutamakan), CSS dan JQuery<br /> 5. Menguasai Framework PHP: Laravel(diutamakan), Yii2 dan CodeIgniter<br /> 6. Menguasai DBMS MySQL dan PostGreSQL Diutamakan<br /> 7. Familiar dengan version Control Tools : Git, Github<br /> 8. Familiar dengan Flutter dan Mobile Programming (Diutamakan)<br /> 9. Familiar dengan Technology Container Base (Docker, Kubernates,dll) (diutamakan).<br /> <br /> Persyaratan yang harus dilengkapi :<br /> <br /> 1. Surat Lamaran ditujukan kepada Rektor CQ Wakil Rektor SDM dan IT Universitas Andalas<br /> 2. KTP Scan Asli (File PDF Maksimal 500kb)<br /> 3. Pas Foto Formal (File JPG/PNG Maksimal 500kb)<br /> 4. Scan Asli Ijazah Terakhir (File PDF Maksimal 500kb)<br /> 5. Scan Asli Transkrip Nilai Terakhir (File PDF Maksimal 500kb)<br /> 6. Curiculum Vitae (CV) (File PDF Maksimal 500kb)<br /> 7. Sertifikat Keahlian Jika lebih dari 1 digabungkan dalam 1 file PDF Maksimal 500kb<br /> 8. Surat Pengalaman Kerja (File PDF Maksimal 500kb)<br /> 9. Scan Asli SKCK yang masih berlaku (File PDF Maksimal 500kb)<br /> <br /> Semua dokumen diinput di Sistem Rekrutmen Paling Lambat 17 Maret 2023</p>',
            ]
        );
    }
}
