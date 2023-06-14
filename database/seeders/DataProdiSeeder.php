<?php

namespace Database\Seeders;

use App\Models\{GudangData, Prodi};
use Illuminate\Database\Seeder;

class DataProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
             "id"=> 1,
             "fakultas"=> "Ekonomi",
             "kode_prodi"=> 62401,
             "jenjang"=> "D3",
             "nama_prodi"=> "Akuntansi"
            ],
            [
             "id"=> 2,
             "fakultas"=> "Ekonomi",
             "kode_prodi"=> 63412,
             "jenjang"=> "D3",
             "nama_prodi"=> "Kesekretariatan"
            ],
            [
             "id"=> 3,
             "fakultas"=> "Ekonomi",
             "kode_prodi"=> 61406,
             "jenjang"=> "D3",
             "nama_prodi"=> "Keuangan"
            ],
            [
             "id"=> 4,
             "fakultas"=> "Ekonomi",
             "kode_prodi"=> 61404,
             "jenjang"=> "D3",
             "nama_prodi"=> "Manajemen Pemasaran"
            ],
            [
             "id"=> 5,
             "fakultas"=> "Ekonomi",
             "kode_prodi"=> 62901,
             "jenjang"=> "Profesi",
             "nama_prodi"=> "Profesi Akuntan"
            ],
            [
             "id"=> 6,
             "fakultas"=> "Ekonomi",
             "kode_prodi"=> 62201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Akuntansi"
            ],
            [
             "id"=> 7,
             "fakultas"=> "Ekonomi",
             "kode_prodi"=> 60201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Ekonomi Pembangunan"
            ],
            [
             "id"=> 8,
             "fakultas"=> "Ekonomi",
             "kode_prodi"=> 60270,
             "jenjang"=> "S1",
             "nama_prodi"=> "Ekonomi Pembangunan (Kampus Payakumbuh)"
            ],
            [
             "id"=> 9,
             "fakultas"=> "Ekonomi",
             "kode_prodi"=> 61201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Manajemen"
            ],
            [
             "id"=> 10,
             "fakultas"=> "Ekonomi",
             "kode_prodi"=> 61271,
             "jenjang"=> "S1",
             "nama_prodi"=> "Manajemen (Kampus Payakumbuh)"
            ],
            [
             "id"=> 11,
             "fakultas"=> "Ekonomi",
             "kode_prodi"=> 62101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Akuntansi"
            ],
            [
             "id"=> 12,
             "fakultas"=> "Ekonomi",
             "kode_prodi"=> 61101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Manajemen"
            ],
            [
             "id"=> 13,
             "fakultas"=> "Ekonomi",
             "kode_prodi"=> 95105,
             "jenjang"=> "S2",
             "nama_prodi"=> "Perencanaan Pembangunan"
            ],
            [
             "id"=> 14,
             "fakultas"=> "Ekonomi",
             "kode_prodi"=> 60001,
             "jenjang"=> "S3",
             "nama_prodi"=> "Ilmu Ekonomi"
            ],
            [
             "id"=> 15,
             "fakultas"=> "Ekonomi",
             "kode_prodi"=> 61001,
             "jenjang"=> "S3",
             "nama_prodi"=> "Manajemen"
            ],
            [
             "id"=> 16,
             "fakultas"=> "Farmasi",
             "kode_prodi"=> 48901,
             "jenjang"=> "Profesi",
             "nama_prodi"=> "Profesi Apoteker"
            ],
            [
             "id"=> 17,
             "fakultas"=> "Farmasi",
             "kode_prodi"=> 48201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Farmasi"
            ],
            [
             "id"=> 18,
             "fakultas"=> "Farmasi",
             "kode_prodi"=> 48101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Farmasi"
            ],
            [
             "id"=> 19,
             "fakultas"=> "Farmasi",
             "kode_prodi"=> 48001,
             "jenjang"=> "S3",
             "nama_prodi"=> "Farmasi"
            ],
            [
             "id"=> 20,
             "fakultas"=> "Hukum",
             "kode_prodi"=> 74201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Ilmu Hukum"
            ],
            [
             "id"=> 21,
             "fakultas"=> "Hukum",
             "kode_prodi"=> 74101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Ilmu Hukum"
            ],
            [
             "id"=> 22,
             "fakultas"=> "Hukum",
             "kode_prodi"=> 74102,
             "jenjang"=> "S2",
             "nama_prodi"=> "Kenotariatan"
            ],
            [
             "id"=> 23,
             "fakultas"=> "Hukum",
             "kode_prodi"=> 74001,
             "jenjang"=> "S3",
             "nama_prodi"=> "Ilmu Hukum"
            ],
            [
             "id"=> 24,
             "fakultas"=> "Ilmu Budaya",
             "kode_prodi"=> 80201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Ilmu Sejarah"
            ],
            [
             "id"=> 25,
             "fakultas"=> "Ilmu Budaya",
             "kode_prodi"=> 79201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Sastra Indonesia"
            ],
            [
             "id"=> 26,
             "fakultas"=> "Ilmu Budaya",
             "kode_prodi"=> 79202,
             "jenjang"=> "S1",
             "nama_prodi"=> "Sastra Inggris"
            ],
            [
             "id"=> 27,
             "fakultas"=> "Ilmu Budaya",
             "kode_prodi"=> 79204,
             "jenjang"=> "S1",
             "nama_prodi"=> "Sastra Jepang"
            ],
            [
             "id"=> 28,
             "fakultas"=> "Ilmu Budaya",
             "kode_prodi"=> 79211,
             "jenjang"=> "S1",
             "nama_prodi"=> "Sastra Minangkabau"
            ],
            [
             "id"=> 29,
             "fakultas"=> "Ilmu Budaya",
             "kode_prodi"=> 79102,
             "jenjang"=> "S2",
             "nama_prodi"=> "Ilmu Linguistik"
            ],
            [
             "id"=> 30,
             "fakultas"=> "Ilmu Budaya",
             "kode_prodi"=> 80101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Ilmu Sejarah"
            ],
            [
             "id"=> 31,
             "fakultas"=> "Ilmu Budaya",
             "kode_prodi"=> 95127,
             "jenjang"=> "S2",
             "nama_prodi"=> "Kajian Budaya"
            ],
            [
             "id"=> 32,
             "fakultas"=> "Ilmu Budaya",
             "kode_prodi"=> 79101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Sastra"
            ],
            [
             "id"=> 33,
             "fakultas"=> "ISIP",
             "kode_prodi"=> 82201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Antropologi Sosial"
            ],
            [
             "id"=> 34,
             "fakultas"=> "ISIP",
             "kode_prodi"=> 63201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Ilmu Administrasi Negara"
            ],
            [
             "id"=> 35,
             "fakultas"=> "ISIP",
             "kode_prodi"=> 64201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Ilmu Hubungan Internasional"
            ],
            [
             "id"=> 36,
             "fakultas"=> "ISIP",
             "kode_prodi"=> 70201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Ilmu Komunikasi"
            ],
            [
             "id"=> 37,
             "fakultas"=> "ISIP",
             "kode_prodi"=> 67201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Ilmu Politik"
            ],
            [
             "id"=> 38,
             "fakultas"=> "ISIP",
             "kode_prodi"=> 69201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Sosiologi"
            ],
            [
             "id"=> 39,
             "fakultas"=> "ISIP",
             "kode_prodi"=> 63101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Administrasi Publik"
            ],
            [
             "id"=> 40,
             "fakultas"=> "ISIP",
             "kode_prodi"=> 82101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Antropologi"
            ],
            [
             "id"=> 41,
             "fakultas"=> "ISIP",
             "kode_prodi"=> 70101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Ilmu Komunikasi"
            ],
            [
             "id"=> 42,
             "fakultas"=> "ISIP",
             "kode_prodi"=> 67101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Ilmu Politik"
            ],
            [
             "id"=> 43,
             "fakultas"=> "ISIP",
             "kode_prodi"=> 69101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Sosiologi"
            ],
            [
             "id"=> 44,
             "fakultas"=> "ISIP",
             "kode_prodi"=> 95007,
             "jenjang"=> "S3",
             "nama_prodi"=> "Studi Kebijakan"
            ],
            [
             "id"=> 45,
             "fakultas"=> "ISIP",
             "kode_prodi"=> 69001,
             "jenjang"=> "S3",
             "nama_prodi"=> "Sosiologi"
            ],
            [
             "id"=> 46,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 15901,
             "jenjang"=> "Profesi",
             "nama_prodi"=> "Pendidikan Profesi Bidan"
            ],
            [
             "id"=> 47,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11901,
             "jenjang"=> "Profesi",
             "nama_prodi"=> "Profesi Dokter"
            ],
            [
             "id"=> 48,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 15201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Kebidanan"
            ],
            [
             "id"=> 49,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Kedokteran"
            ],
            [
             "id"=> 50,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 73201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Psikologi"
            ],
            [
             "id"=> 51,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11223,
             "jenjang"=> "S1",
             "nama_prodi"=> "Ilmu Biomedis"
            ],
            [
             "id"=> 52,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11106,
             "jenjang"=> "S2",
             "nama_prodi"=> "Ilmu Biomedik"
            ],
            [
             "id"=> 53,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 15101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Ilmu Kebidanan"
            ],
            [
             "id"=> 54,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 13101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Kesehatan Masyarakat"
            ],
            [
             "id"=> 55,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11006,
             "jenjang"=> "S3",
             "nama_prodi"=> "Biomedik"
            ],
            [
             "id"=> 56,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 13001,
             "jenjang"=> "S3",
             "nama_prodi"=> "Ilmu Kesehatan Masyarakat"
            ],
            [
             "id"=> 57,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11707,
             "jenjang"=> "Sp-1",
             "nama_prodi"=> "Ilmu Bedah"
            ],
            [
             "id"=> 58,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11708,
             "jenjang"=> "Sp-1",
             "nama_prodi"=> "Ilmu Kebidanan Dan Penyakit Kandungan"
            ],
            [
             "id"=> 59,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11711,
             "jenjang"=> "Sp-1",
             "nama_prodi"=> "Ilmu Kesehatan Anak"
            ],
            [
             "id"=> 60,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11701,
             "jenjang"=> "Sp-1",
             "nama_prodi"=> "Ilmu Kesehatan Mata"
            ],
            [
             "id"=> 61,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11718,
             "jenjang"=> "Sp-1",
             "nama_prodi"=> "Ilmu Patologi Anatomi"
            ],
            [
             "id"=> 62,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11719,
             "jenjang"=> "Sp-1",
             "nama_prodi"=> "Ilmu Patologi Klinik"
            ],
            [
             "id"=> 63,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11702,
             "jenjang"=> "Sp-1",
             "nama_prodi"=> "Ilmu Penyakit Dalam"
            ],
            [
             "id"=> 64,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11715,
             "jenjang"=> "Sp-1",
             "nama_prodi"=> "Ilmu Penyakit Jantung"
            ],
            [
             "id"=> 65,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11704,
             "jenjang"=> "Sp-1",
             "nama_prodi"=> "Ilmu Penyakit Kulit Dan Kelamin"
            ],
            [
             "id"=> 66,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11709,
             "jenjang"=> "Sp-1",
             "nama_prodi"=> "Ilmu Penyakit Paru"
            ],
            [
             "id"=> 67,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11705,
             "jenjang"=> "Sp-1",
             "nama_prodi"=> "Ilmu Penyakit THT"
            ],
            [
             "id"=> 68,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11703,
             "jenjang"=> "Sp-1",
             "nama_prodi"=> "Neurologi"
            ],
            [
             "id"=> 69,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11728,
             "jenjang"=> "Sp-1",
             "nama_prodi"=> "Orthopaedi dan Traumatologi"
            ],
            [
             "id"=> 70,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11816,
             "jenjang"=> "Sp-2",
             "nama_prodi"=> "Obstetri dan Ginekologi Peminatan Kedokteran Fetomaternal"
            ],
            [
             "id"=> 71,
             "fakultas"=> "Kedokteran",
             "kode_prodi"=> 11734,
             "jenjang"=> "Sp-2",
             "nama_prodi"=> "Ilmu Penyakit Dalam Peminatan Ginjal Hipertensi"
            ],
            [
             "id"=> 72,
             "fakultas"=> "Kedokteran Gigi",
             "kode_prodi"=> 12901,
             "jenjang"=> "Profesi",
             "nama_prodi"=> "Dokter Gigi"
            ],
            [
             "id"=> 73,
             "fakultas"=> "Kedokteran Gigi",
             "kode_prodi"=> 12201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Pendidikan Dokter Gigi"
            ],
            [
             "id"=> 74,
             "fakultas"=> "Keperawatan",
             "kode_prodi"=> 14901,
             "jenjang"=> "Profesi",
             "nama_prodi"=> "Profesi Ners"
            ],
            [
             "id"=> 75,
             "fakultas"=> "Keperawatan",
             "kode_prodi"=> 14201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Ilmu Keperawatan"
            ],
            [
             "id"=> 76,
             "fakultas"=> "Keperawatan",
             "kode_prodi"=> 14101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Ilmu Keperawatan"
            ],
            [
             "id"=> 77,
             "fakultas"=> "Kesmas",
             "kode_prodi"=> 13211,
             "jenjang"=> "S1",
             "nama_prodi"=> "Gizi"
            ],
            [
             "id"=> 78,
             "fakultas"=> "Kesmas",
             "kode_prodi"=> 13201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Kesehatan Masyarakat"
            ],
            [
             "id"=> 79,
             "fakultas"=> "Kesmas",
             "kode_prodi"=> 13121,
             "jenjang"=> "S2",
             "nama_prodi"=> "Epidemiologi"
            ],
            [
             "id"=> 80,
             "fakultas"=> "Kesmas",
             "kode_prodi"=> 13111,
             "jenjang"=> "S2",
             "nama_prodi"=> "Ilmu Gizi"
            ],
            [
             "id"=> 81,
             "fakultas"=> "MIPA",
             "kode_prodi"=> 46201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Biologi"
            ],
            [
             "id"=> 82,
             "fakultas"=> "MIPA",
             "kode_prodi"=> 45201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Fisika"
            ],
            [
             "id"=> 83,
             "fakultas"=> "MIPA",
             "kode_prodi"=> 47201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Kimia"
            ],
            [
             "id"=> 84,
             "fakultas"=> "MIPA",
             "kode_prodi"=> 44201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Matematika"
            ],
            [
             "id"=> 85,
             "fakultas"=> "MIPA",
             "kode_prodi"=> 46101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Biologi"
            ],
            [
             "id"=> 86,
             "fakultas"=> "MIPA",
             "kode_prodi"=> 45101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Fisika"
            ],
            [
             "id"=> 87,
             "fakultas"=> "MIPA",
             "kode_prodi"=> 47101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Kimia"
            ],
            [
             "id"=> 88,
             "fakultas"=> "MIPA",
             "kode_prodi"=> 44101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Matematika"
            ],
            [
             "id"=> 89,
             "fakultas"=> "MIPA",
             "kode_prodi"=> 46001,
             "jenjang"=> "S3",
             "nama_prodi"=> "Biologi"
            ],
            [
             "id"=> 90,
             "fakultas"=> "MIPA",
             "kode_prodi"=> 47001,
             "jenjang"=> "S3",
             "nama_prodi"=> "Ilmu Kimia"
            ],
            [
             "id"=> 91,
             "fakultas"=> "Pascasarjana",
             "kode_prodi"=> 23902,
             "jenjang"=> "Profesi",
             "nama_prodi"=> "Profesi Insinyur"
            ],
            [
             "id"=> 92,
             "fakultas"=> "Pascasarjana",
             "kode_prodi"=> 54107,
             "jenjang"=> "S2",
             "nama_prodi"=> "Bioteknologi"
            ],
            [
             "id"=> 93,
             "fakultas"=> "Pascasarjana",
             "kode_prodi"=> 95129,
             "jenjang"=> "S2",
             "nama_prodi"=> "Ilmu Lingkungan"
            ],
            [
             "id"=> 94,
             "fakultas"=> "Pascasarjana",
             "kode_prodi"=> 95106,
             "jenjang"=> "S2",
             "nama_prodi"=> "Ilmu Penyuluhan dan Komunikasi Pembangunan"
            ],
            [
             "id"=> 95,
             "fakultas"=> "Pascasarjana",
             "kode_prodi"=> 95130,
             "jenjang"=> "S2",
             "nama_prodi"=> "Pembangunan Perumahan dan Pemukiman"
            ],
            [
             "id"=> 96,
             "fakultas"=> "Pascasarjana",
             "kode_prodi"=> 95103,
             "jenjang"=> "S2",
             "nama_prodi"=> "Pembangunan Wilayah Dan Pedesaan"
            ],
            [
             "id"=> 97,
             "fakultas"=> "Pascasarjana",
             "kode_prodi"=> 95101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Pengelolaan Terpadu Sumber Daya Alam"
            ],
            [
             "id"=> 98,
             "fakultas"=> "Pascasarjana",
             "kode_prodi"=> 95006,
             "jenjang"=> "S3",
             "nama_prodi"=> "Studi Pembangunan"
            ],
            [
             "id"=> 99,
             "fakultas"=> "Pertanian",
             "kode_prodi"=> 54201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Agribisnis"
            ],
            [
             "id"=> 100,
             "fakultas"=> "Pertanian",
             "kode_prodi"=> 54281,
             "jenjang"=> "S1",
             "nama_prodi"=> "Agroekoteknologi, Kampus Dharmasraya"
            ],
            [
             "id"=> 101,
             "fakultas"=> "Pertanian",
             "kode_prodi"=> 54211,
             "jenjang"=> "S1",
             "nama_prodi"=> "Agroteknologi"
            ],
            [
             "id"=> 102,
             "fakultas"=> "Pertanian",
             "kode_prodi"=> 54294,
             "jenjang"=> "S1",
             "nama_prodi"=> "Ilmu Tanah"
            ],
            [
             "id"=> 103,
             "fakultas"=> "Pertanian",
             "kode_prodi"=> 54203,
             "jenjang"=> "S1",
             "nama_prodi"=> "Penyuluhan Pertanian"
            ],
            [
             "id"=> 104,
             "fakultas"=> "Pertanian",
             "kode_prodi"=> 54295,
             "jenjang"=> "S1",
             "nama_prodi"=> "Proteksi Tanaman"
            ],
            [
             "id"=> 105,
             "fakultas"=> "Pertanian",
             "kode_prodi"=> 54104,
             "jenjang"=> "S2",
             "nama_prodi"=> "Agronomi"
            ],
            [
             "id"=> 106,
             "fakultas"=> "Pertanian",
             "kode_prodi"=> 54101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Ilmu Ekonomi Pertanian"
            ],
            [
             "id"=> 107,
             "fakultas"=> "Pertanian",
             "kode_prodi"=> 54106,
             "jenjang"=> "S2",
             "nama_prodi"=> "Ilmu Hama Dan Penyakit Tumbuhan"
            ],
            [
             "id"=> 108,
             "fakultas"=> "Pertanian",
             "kode_prodi"=> 54105,
             "jenjang"=> "S2",
             "nama_prodi"=> "Ilmu Tanah"
            ],
            [
             "id"=> 109,
             "fakultas"=> "Pertanian",
             "kode_prodi"=> 54001,
             "jenjang"=> "S3",
             "nama_prodi"=> "Ilmu Pertanian"
            ],
            [
             "id"=> 110,
             "fakultas"=> "Peternakan",
             "kode_prodi"=> 54231,
             "jenjang"=> "S1",
             "nama_prodi"=> "Peternakan"
            ],
            [
             "id"=> 111,
             "fakultas"=> "Peternakan",
             "kode_prodi"=> 54271,
             "jenjang"=> "S1",
             "nama_prodi"=> "Peternakan, Kampus Payakumbuh"
            ],
            [
             "id"=> 112,
             "fakultas"=> "Peternakan",
             "kode_prodi"=> 54131,
             "jenjang"=> "S2",
             "nama_prodi"=> "Ilmu Peternakan"
            ],
            [
             "id"=> 113,
             "fakultas"=> "Peternakan",
             "kode_prodi"=> 54031,
             "jenjang"=> "S3",
             "nama_prodi"=> "Ilmu peternakan"
            ],
            [
             "id"=> 114,
             "fakultas"=> "Teknik",
             "kode_prodi"=> 20201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Teknik Elektro"
            ],
            [
             "id"=> 115,
             "fakultas"=> "Teknik",
             "kode_prodi"=> 26201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Teknik Industri"
            ],
            [
             "id"=> 116,
             "fakultas"=> "Teknik",
             "kode_prodi"=> 25201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Teknik Lingkungan"
            ],
            [
             "id"=> 117,
             "fakultas"=> "Teknik",
             "kode_prodi"=> 21201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Teknik Mesin"
            ],
            [
             "id"=> 118,
             "fakultas"=> "Teknik",
             "kode_prodi"=> 22201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Teknik Sipil"
            ],
            [
             "id"=> 119,
             "fakultas"=> "Teknik",
             "kode_prodi"=> 20101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Teknik Elektro"
            ],
            [
             "id"=> 120,
             "fakultas"=> "Teknik",
             "kode_prodi"=> 26101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Teknik Industri"
            ],
            [
             "id"=> 121,
             "fakultas"=> "Teknik",
             "kode_prodi"=> 25101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Teknik Lingkungan"
            ],
            [
             "id"=> 122,
             "fakultas"=> "Teknik",
             "kode_prodi"=> 21101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Teknik Mesin"
            ],
            [
             "id"=> 123,
             "fakultas"=> "Teknik",
             "kode_prodi"=> 22101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Teknik Sipil"
            ],
            [
             "id"=> 124,
             "fakultas"=> "Teknik",
             "kode_prodi"=> 21001,
             "jenjang"=> "S3",
             "nama_prodi"=> "Teknik Mesin"
            ],
            [
             "id"=> 125,
             "fakultas"=> "Teknik",
             "kode_prodi"=> 22001,
             "jenjang"=> "S3",
             "nama_prodi"=> "Teknik Sipil"
            ],
            [
             "id"=> 126,
             "fakultas"=> "Teknik",
             "kode_prodi"=> 20001,
             "jenjang"=> "S3",
             "nama_prodi"=> "Teknik Elektro"
            ],
            [
             "id"=> 127,
             "fakultas"=> "Teknik",
             "kode_prodi"=> 26002,
             "jenjang"=> "S3",
             "nama_prodi"=> "Teknik Industri"
            ],
            [
             "id"=> 128,
             "fakultas"=> "Teknologi Informasi",
             "kode_prodi"=> 57201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Sistem Informasi"
            ],
            [
             "id"=> 129,
             "fakultas"=> "Teknologi Informasi",
             "kode_prodi"=> 56201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Teknik Komputer"
            ],
            [
             "id"=> 130,
             "fakultas"=> "Teknologi Informasi",
             "kode_prodi"=> 55202,
             "jenjang"=> "S1",
             "nama_prodi"=> "Informatika"
            ],
            [
             "id"=> 131,
             "fakultas"=> "Teknologi Pertanian",
             "kode_prodi"=> 41201,
             "jenjang"=> "S1",
             "nama_prodi"=> "Teknik Pertanian"
            ],
            [
             "id"=> 132,
             "fakultas"=> "Teknologi Pertanian",
             "kode_prodi"=> 41231,
             "jenjang"=> "S1",
             "nama_prodi"=> "Teknologi Pangan dan Hasil Pertanian"
            ],
            [
             "id"=> 133,
             "fakultas"=> "Teknologi Pertanian",
             "kode_prodi"=> 41211,
             "jenjang"=> "S1",
             "nama_prodi"=> "Teknologi Industri Pertanian"
            ],
            [
             "id"=> 134,
             "fakultas"=> "Teknologi Pertanian",
             "kode_prodi"=> 41101,
             "jenjang"=> "S2",
             "nama_prodi"=> "Teknik Pertanian"
            ],
            [
             "id"=> 135,
             "fakultas"=> "Teknologi Pertanian",
             "kode_prodi"=> 41111,
             "jenjang"=> "S2",
             "nama_prodi"=> "Teknologi Industri Pertanian"
            ],
            [
             "id"=> 136,
             "fakultas"=> "Teknologi Pertanian",
             "kode_prodi"=> 41112,
             "jenjang"=> "S2",
             "nama_prodi"=> "Teknologi Pangan dan Hasil Pertanian"
            ],
             [
             "id"=> 137,
             "fakultas"=> "Universitas Andalas",
             "kode_prodi"=> 10006,
             "jenjang"=> "Tendik",
             "nama_prodi"=> "Universitas Andalas"
            ]
        ];

        GudangData::create(
            [
                'name' => 'data-prodi',
                'data' => json_encode($data)
            ]
        );

        foreach ($data as $val) {
            Prodi::create(
                [
                    'id' => $val['id'],
                    'kode_prodi' => $val['kode_prodi'],
                    'nama_prodi' => $val['nama_prodi'],
                    'jenjang' => $val['jenjang'],
                    'fakultas' => $val['fakultas']
                ]
            );
        }
    }
}
