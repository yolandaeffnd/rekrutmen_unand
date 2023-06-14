<?php

namespace Database\Seeders;

use App\Models\GudangData;
use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Database\Seeder;

class DataWilayah extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinsi = [
            [
                "kode" => [
                    "id_provinsi" => 11
                ],
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12
                ],
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13
                ],
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 14
                ],
                "provinsi" => "RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 15
                ],
                "provinsi" => "JAMBI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16
                ],
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 17
                ],
                "provinsi" => "BENGKULU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 18
                ],
                "provinsi" => "LAMPUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 19
                ],
                "provinsi" => "KEPULAUAN BANGKA BELITUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 21
                ],
                "provinsi" => "KEPULAUAN RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 31
                ],
                "provinsi" => "DKI JAKARTA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32
                ],
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33
                ],
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 34
                ],
                "provinsi" => "DAERAH ISTIMEWA YOGYAKARTA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35
                ],
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 36
                ],
                "provinsi" => "BANTEN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 51
                ],
                "provinsi" => "BALI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 52
                ],
                "provinsi" => "NUSA TENGGARA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53
                ],
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 61
                ],
                "provinsi" => "KALIMANTAN BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 62
                ],
                "provinsi" => "KALIMANTAN TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 63
                ],
                "provinsi" => "KALIMANTAN SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 64
                ],
                "provinsi" => "KALIMANTAN TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 65
                ],
                "provinsi" => "KALIMANTAN UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 71
                ],
                "provinsi" => "SULAWESI UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 72
                ],
                "provinsi" => "SULAWESI TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73
                ],
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74
                ],
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 75
                ],
                "provinsi" => "GORONTALO"
            ],
            [
                "kode" => [
                    "id_provinsi" => 76
                ],
                "provinsi" => "SULAWESI BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 81
                ],
                "provinsi" => "MALUKU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 82
                ],
                "provinsi" => "MALUKU UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91
                ],
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 92
                ],
                "provinsi" => "PAPUA BARAT"
            ]
        ];


        $kota = [
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 1
                ],
                "kota" => "KAB. ACEH SELATAN",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 2
                ],
                "kota" => "KAB. ACEH TENGGARA",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 3
                ],
                "kota" => "KAB. ACEH TIMUR",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 4
                ],
                "kota" => "KAB. ACEH TENGAH",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 5
                ],
                "kota" => "KAB. ACEH BARAT",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 6
                ],
                "kota" => "KAB. ACEH BESAR",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 7
                ],
                "kota" => "KAB. PIDIE",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 8
                ],
                "kota" => "KAB. ACEH UTARA",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 9
                ],
                "kota" => "KAB. SIMEULUE",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 10
                ],
                "kota" => "KAB. ACEH SINGKIL",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 11
                ],
                "kota" => "KAB. BIREUEN",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 12
                ],
                "kota" => "KAB. ACEH BARAT DAYA",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 13
                ],
                "kota" => "KAB. GAYO LUES",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 14
                ],
                "kota" => "KAB. ACEH JAYA",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 15
                ],
                "kota" => "KAB. NAGAN RAYA",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 16
                ],
                "kota" => "KAB. ACEH TAMIANG",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 17
                ],
                "kota" => "KAB. BENER MERIAH",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 18
                ],
                "kota" => "KAB. PIDIE JAYA",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 71
                ],
                "kota" => "KOTA BANDA ACEH",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 72
                ],
                "kota" => "KOTA SABANG",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 73
                ],
                "kota" => "KOTA LHOKSEUMAWE",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 74
                ],
                "kota" => "KOTA LANGSA",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 11,
                    "id_kota" => 75
                ],
                "kota" => "KOTA SUBULUSSALAM",
                "provinsi" => "ACEH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 1
                ],
                "kota" => "KAB. TAPANULI TENGAH",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 2
                ],
                "kota" => "KAB. TAPANULI UTARA",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 3
                ],
                "kota" => "KAB. TAPANULI SELATAN",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 4
                ],
                "kota" => "KAB. NIAS",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 5
                ],
                "kota" => "KAB. LANGKAT",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 6
                ],
                "kota" => "KAB. KARO",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 7
                ],
                "kota" => "KAB. DELI SERDANG",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 8
                ],
                "kota" => "KAB. SIMALUNGUN",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 9
                ],
                "kota" => "KAB. ASAHAN",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 10
                ],
                "kota" => "KAB. LABUHANBATU",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 11
                ],
                "kota" => "KAB. DAIRI",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 12
                ],
                "kota" => "KAB. TOBA SAMOSIR",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 13
                ],
                "kota" => "KAB. MANDAILING NATAL",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 14
                ],
                "kota" => "KAB. NIAS SELATAN",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 15
                ],
                "kota" => "KAB. PAKPAK BHARAT",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 16
                ],
                "kota" => "KAB. HUMBANG HASUNDUTAN",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 17
                ],
                "kota" => "KAB. SAMOSIR",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 18
                ],
                "kota" => "KAB. SERDANG BEDAGAI",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 19
                ],
                "kota" => "KAB. BATU BARA",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 20
                ],
                "kota" => "KAB. PADANG LAWAS UTARA",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 21
                ],
                "kota" => "KAB. PADANG LAWAS",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 22
                ],
                "kota" => "KAB. LABUHANBATU SELATAN",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 23
                ],
                "kota" => "KAB. LABUHANBATU UTARA",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 24
                ],
                "kota" => "KAB. NIAS UTARA",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 25
                ],
                "kota" => "KAB. NIAS BARAT",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 71
                ],
                "kota" => "KOTA MEDAN",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 72
                ],
                "kota" => "KOTA PEMATANGSIANTAR",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 73
                ],
                "kota" => "KOTA SIBOLGA",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 74
                ],
                "kota" => "KOTA TANJUNG BALAI",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 75
                ],
                "kota" => "KOTA BINJAI",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 76
                ],
                "kota" => "KOTA TEBING TINGGI",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 77
                ],
                "kota" => "KOTA PADANGSIDIMPUAN",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 12,
                    "id_kota" => 78
                ],
                "kota" => "KOTA GUNUNGSITOLI",
                "provinsi" => "SUMATERA UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 1
                ],
                "kota" => "KAB. PESISIR SELATAN",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 2
                ],
                "kota" => "KAB. SOLOK",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 3
                ],
                "kota" => "KAB. SIJUNJUNG",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 4
                ],
                "kota" => "KAB. TANAH DATAR",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 5
                ],
                "kota" => "KAB. PADANG PARIAMAN",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 6
                ],
                "kota" => "KAB. AGAM",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 7
                ],
                "kota" => "KAB. LIMA PULUH KOTA",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 8
                ],
                "kota" => "KAB. PASAMAN",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 9
                ],
                "kota" => "KAB. KEPULAUAN MENTAWAI",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 10
                ],
                "kota" => "KAB. DHARMASRAYA",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 11
                ],
                "kota" => "KAB. SOLOK SELATAN",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 12
                ],
                "kota" => "KAB. PASAMAN BARAT",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 71
                ],
                "kota" => "KOTA PADANG",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 72
                ],
                "kota" => "KOTA SOLOK",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 73
                ],
                "kota" => "KOTA SAWAHLUNTO",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 74
                ],
                "kota" => "KOTA PADANG PANJANG",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 75
                ],
                "kota" => "KOTA BUKITTINGGI",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 76
                ],
                "kota" => "KOTA PAYAKUMBUH",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 13,
                    "id_kota" => 77
                ],
                "kota" => "KOTA PARIAMAN",
                "provinsi" => "SUMATERA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 14,
                    "id_kota" => 1
                ],
                "kota" => "KAB. KAMPAR",
                "provinsi" => "RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 14,
                    "id_kota" => 2
                ],
                "kota" => "KAB. INDRAGIRI HULU",
                "provinsi" => "RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 14,
                    "id_kota" => 3
                ],
                "kota" => "KAB. BENGKALIS",
                "provinsi" => "RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 14,
                    "id_kota" => 4
                ],
                "kota" => "KAB. INDRAGIRI HILIR",
                "provinsi" => "RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 14,
                    "id_kota" => 5
                ],
                "kota" => "KAB. PELALAWAN",
                "provinsi" => "RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 14,
                    "id_kota" => 6
                ],
                "kota" => "KAB. ROKAN HULU",
                "provinsi" => "RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 14,
                    "id_kota" => 7
                ],
                "kota" => "KAB. ROKAN HILIR",
                "provinsi" => "RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 14,
                    "id_kota" => 8
                ],
                "kota" => "KAB. SIAK",
                "provinsi" => "RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 14,
                    "id_kota" => 9
                ],
                "kota" => "KAB. KUANTAN SINGINGI",
                "provinsi" => "RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 14,
                    "id_kota" => 10
                ],
                "kota" => "KAB. KEPULAUAN MERANTI",
                "provinsi" => "RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 14,
                    "id_kota" => 71
                ],
                "kota" => "KOTA PEKANBARU",
                "provinsi" => "RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 14,
                    "id_kota" => 72
                ],
                "kota" => "KOTA DUMAI",
                "provinsi" => "RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 15,
                    "id_kota" => 1
                ],
                "kota" => "KAB. KERINCI",
                "provinsi" => "JAMBI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 15,
                    "id_kota" => 2
                ],
                "kota" => "KAB. MERANGIN",
                "provinsi" => "JAMBI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 15,
                    "id_kota" => 3
                ],
                "kota" => "KAB. SAROLANGUN",
                "provinsi" => "JAMBI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 15,
                    "id_kota" => 4
                ],
                "kota" => "KAB. BATANGHARI",
                "provinsi" => "JAMBI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 15,
                    "id_kota" => 5
                ],
                "kota" => "KAB. MUARO JAMBI",
                "provinsi" => "JAMBI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 15,
                    "id_kota" => 6
                ],
                "kota" => "KAB. TANJUNG JABUNG BARAT",
                "provinsi" => "JAMBI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 15,
                    "id_kota" => 7
                ],
                "kota" => "KAB. TANJUNG JABUNG TIMUR",
                "provinsi" => "JAMBI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 15,
                    "id_kota" => 8
                ],
                "kota" => "KAB. BUNGO",
                "provinsi" => "JAMBI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 15,
                    "id_kota" => 9
                ],
                "kota" => "KAB. TEBO",
                "provinsi" => "JAMBI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 15,
                    "id_kota" => 71
                ],
                "kota" => "KOTA JAMBI",
                "provinsi" => "JAMBI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 15,
                    "id_kota" => 72
                ],
                "kota" => "KOTA SUNGAI PENUH",
                "provinsi" => "JAMBI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16,
                    "id_kota" => 1
                ],
                "kota" => "KAB. OGAN KOMERING ULU",
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16,
                    "id_kota" => 2
                ],
                "kota" => "KAB. OGAN KOMERING ILIR",
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16,
                    "id_kota" => 3
                ],
                "kota" => "KAB. MUARA ENIM",
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16,
                    "id_kota" => 4
                ],
                "kota" => "KAB. LAHAT",
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16,
                    "id_kota" => 5
                ],
                "kota" => "KAB. MUSI RAWAS",
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16,
                    "id_kota" => 6
                ],
                "kota" => "KAB. MUSI BANYUASIN",
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16,
                    "id_kota" => 7
                ],
                "kota" => "KAB. BANYUASIN",
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16,
                    "id_kota" => 8
                ],
                "kota" => "KAB. OGAN KOMERING ULU TIMUR",
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16,
                    "id_kota" => 9
                ],
                "kota" => "KAB. OGAN KOMERING ULU SELATAN",
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16,
                    "id_kota" => 10
                ],
                "kota" => "KAB. OGAN ILIR",
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16,
                    "id_kota" => 11
                ],
                "kota" => "KAB. EMPAT LAWANG",
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16,
                    "id_kota" => 12
                ],
                "kota" => "KAB. PENUKAL ABAB LEMATANG ILIR",
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16,
                    "id_kota" => 13
                ],
                "kota" => "KAB. MUSI RAWAS UTARA",
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16,
                    "id_kota" => 71
                ],
                "kota" => "KOTA PALEMBANG",
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16,
                    "id_kota" => 72
                ],
                "kota" => "KOTA PAGAR ALAM",
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16,
                    "id_kota" => 73
                ],
                "kota" => "KOTA LUBUK LINGGAU",
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 16,
                    "id_kota" => 74
                ],
                "kota" => "KOTA PRABUMULIH",
                "provinsi" => "SUMATERA SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 17,
                    "id_kota" => 1
                ],
                "kota" => "KAB. BENGKULU SELATAN",
                "provinsi" => "BENGKULU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 17,
                    "id_kota" => 2
                ],
                "kota" => "KAB. REJANG LEBONG",
                "provinsi" => "BENGKULU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 17,
                    "id_kota" => 3
                ],
                "kota" => "KAB. BENGKULU UTARA",
                "provinsi" => "BENGKULU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 17,
                    "id_kota" => 4
                ],
                "kota" => "KAB. KAUR",
                "provinsi" => "BENGKULU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 17,
                    "id_kota" => 5
                ],
                "kota" => "KAB. SELUMA",
                "provinsi" => "BENGKULU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 17,
                    "id_kota" => 6
                ],
                "kota" => "KAB. MUKO MUKO",
                "provinsi" => "BENGKULU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 17,
                    "id_kota" => 7
                ],
                "kota" => "KAB. LEBONG",
                "provinsi" => "BENGKULU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 17,
                    "id_kota" => 8
                ],
                "kota" => "KAB. KEPAHIANG",
                "provinsi" => "BENGKULU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 17,
                    "id_kota" => 9
                ],
                "kota" => "KAB. BENGKULU TENGAH",
                "provinsi" => "BENGKULU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 17,
                    "id_kota" => 71
                ],
                "kota" => "KOTA BENGKULU",
                "provinsi" => "BENGKULU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 18,
                    "id_kota" => 1
                ],
                "kota" => "KAB. LAMPUNG SELATAN",
                "provinsi" => "LAMPUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 18,
                    "id_kota" => 2
                ],
                "kota" => "KAB. LAMPUNG TENGAH",
                "provinsi" => "LAMPUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 18,
                    "id_kota" => 3
                ],
                "kota" => "KAB. LAMPUNG UTARA",
                "provinsi" => "LAMPUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 18,
                    "id_kota" => 4
                ],
                "kota" => "KAB. LAMPUNG BARAT",
                "provinsi" => "LAMPUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 18,
                    "id_kota" => 5
                ],
                "kota" => "KAB. TULANG BAWANG",
                "provinsi" => "LAMPUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 18,
                    "id_kota" => 6
                ],
                "kota" => "KAB. TANGGAMUS",
                "provinsi" => "LAMPUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 18,
                    "id_kota" => 7
                ],
                "kota" => "KAB. LAMPUNG TIMUR",
                "provinsi" => "LAMPUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 18,
                    "id_kota" => 8
                ],
                "kota" => "KAB. WAY KANAN",
                "provinsi" => "LAMPUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 18,
                    "id_kota" => 9
                ],
                "kota" => "KAB. PESAWARAN",
                "provinsi" => "LAMPUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 18,
                    "id_kota" => 10
                ],
                "kota" => "KAB. PRINGSEWU",
                "provinsi" => "LAMPUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 18,
                    "id_kota" => 11
                ],
                "kota" => "KAB. MESUJI",
                "provinsi" => "LAMPUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 18,
                    "id_kota" => 12
                ],
                "kota" => "KAB. TULANG BAWANG BARAT",
                "provinsi" => "LAMPUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 18,
                    "id_kota" => 13
                ],
                "kota" => "KAB. PESISIR BARAT",
                "provinsi" => "LAMPUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 18,
                    "id_kota" => 71
                ],
                "kota" => "KOTA BANDAR LAMPUNG",
                "provinsi" => "LAMPUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 18,
                    "id_kota" => 72
                ],
                "kota" => "KOTA METRO",
                "provinsi" => "LAMPUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 19,
                    "id_kota" => 1
                ],
                "kota" => "KAB. BANGKA",
                "provinsi" => "KEPULAUAN BANGKA BELITUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 19,
                    "id_kota" => 2
                ],
                "kota" => "KAB. BELITUNG",
                "provinsi" => "KEPULAUAN BANGKA BELITUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 19,
                    "id_kota" => 3
                ],
                "kota" => "KAB. BANGKA SELATAN",
                "provinsi" => "KEPULAUAN BANGKA BELITUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 19,
                    "id_kota" => 4
                ],
                "kota" => "KAB. BANGKA TENGAH",
                "provinsi" => "KEPULAUAN BANGKA BELITUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 19,
                    "id_kota" => 5
                ],
                "kota" => "KAB. BANGKA BARAT",
                "provinsi" => "KEPULAUAN BANGKA BELITUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 19,
                    "id_kota" => 6
                ],
                "kota" => "KAB. BELITUNG TIMUR",
                "provinsi" => "KEPULAUAN BANGKA BELITUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 19,
                    "id_kota" => 71
                ],
                "kota" => "KOTA PANGKAL PINANG",
                "provinsi" => "KEPULAUAN BANGKA BELITUNG"
            ],
            [
                "kode" => [
                    "id_provinsi" => 21,
                    "id_kota" => 1
                ],
                "kota" => "KAB. BINTAN",
                "provinsi" => "KEPULAUAN RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 21,
                    "id_kota" => 2
                ],
                "kota" => "KAB. KARIMUN",
                "provinsi" => "KEPULAUAN RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 21,
                    "id_kota" => 3
                ],
                "kota" => "KAB. NATUNA",
                "provinsi" => "KEPULAUAN RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 21,
                    "id_kota" => 4
                ],
                "kota" => "KAB. LINGGA",
                "provinsi" => "KEPULAUAN RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 21,
                    "id_kota" => 5
                ],
                "kota" => "KAB. KEPULAUAN ANAMBAS",
                "provinsi" => "KEPULAUAN RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 21,
                    "id_kota" => 71
                ],
                "kota" => "KOTA BATAM",
                "provinsi" => "KEPULAUAN RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 21,
                    "id_kota" => 72
                ],
                "kota" => "KOTA TANJUNG PINANG",
                "provinsi" => "KEPULAUAN RIAU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 31,
                    "id_kota" => 1
                ],
                "kota" => "KAB. ADM. KEP. SERIBU",
                "provinsi" => "DKI JAKARTA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 31,
                    "id_kota" => 71
                ],
                "kota" => "KOTA ADM. JAKARTA PUSAT",
                "provinsi" => "DKI JAKARTA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 31,
                    "id_kota" => 72
                ],
                "kota" => "KOTA ADM. JAKARTA UTARA",
                "provinsi" => "DKI JAKARTA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 31,
                    "id_kota" => 73
                ],
                "kota" => "KOTA ADM. JAKARTA BARAT",
                "provinsi" => "DKI JAKARTA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 31,
                    "id_kota" => 74
                ],
                "kota" => "KOTA ADM. JAKARTA SELATAN",
                "provinsi" => "DKI JAKARTA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 31,
                    "id_kota" => 75
                ],
                "kota" => "KOTA ADM. JAKARTA TIMUR",
                "provinsi" => "DKI JAKARTA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 1
                ],
                "kota" => "KAB. BOGOR",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 2
                ],
                "kota" => "KAB. SUKABUMI",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 3
                ],
                "kota" => "KAB. CIANJUR",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 4
                ],
                "kota" => "KAB. BANDUNG",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 5
                ],
                "kota" => "KAB. GARUT",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 6
                ],
                "kota" => "KAB. TASIKMALAYA",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 7
                ],
                "kota" => "KAB. CIAMIS",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 8
                ],
                "kota" => "KAB. KUNINGAN",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 9
                ],
                "kota" => "KAB. CIREBON",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 10
                ],
                "kota" => "KAB. MAJALENGKA",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 11
                ],
                "kota" => "KAB. SUMEDANG",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 12
                ],
                "kota" => "KAB. INDRAMAYU",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 13
                ],
                "kota" => "KAB. SUBANG",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 14
                ],
                "kota" => "KAB. PURWAKARTA",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 15
                ],
                "kota" => "KAB. KARAWANG",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 16
                ],
                "kota" => "KAB. BEKASI",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 17
                ],
                "kota" => "KAB. BANDUNG BARAT",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 18
                ],
                "kota" => "KAB. PANGANDARAN",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 71
                ],
                "kota" => "KOTA BOGOR",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 72
                ],
                "kota" => "KOTA SUKABUMI",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 73
                ],
                "kota" => "KOTA BANDUNG",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 74
                ],
                "kota" => "KOTA CIREBON",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 75
                ],
                "kota" => "KOTA BEKASI",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 76
                ],
                "kota" => "KOTA DEPOK",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 77
                ],
                "kota" => "KOTA CIMAHI",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 78
                ],
                "kota" => "KOTA TASIKMALAYA",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 32,
                    "id_kota" => 79
                ],
                "kota" => "KOTA BANJAR",
                "provinsi" => "JAWA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 1
                ],
                "kota" => "KAB. CILACAP",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 2
                ],
                "kota" => "KAB. BANYUMAS",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 3
                ],
                "kota" => "KAB. PURBALINGGA",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 4
                ],
                "kota" => "KAB. BANJARNEGARA",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 5
                ],
                "kota" => "KAB. KEBUMEN",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 6
                ],
                "kota" => "KAB. PURWOREJO",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 7
                ],
                "kota" => "KAB. WONOSOBO",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 8
                ],
                "kota" => "KAB. MAGELANG",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 9
                ],
                "kota" => "KAB. BOYOLALI",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 10
                ],
                "kota" => "KAB. KLATEN",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 11
                ],
                "kota" => "KAB. SUKOHARJO",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 12
                ],
                "kota" => "KAB. WONOGIRI",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 13
                ],
                "kota" => "KAB. KARANGANYAR",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 14
                ],
                "kota" => "KAB. SRAGEN",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 15
                ],
                "kota" => "KAB. GROBOGAN",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 16
                ],
                "kota" => "KAB. BLORA",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 17
                ],
                "kota" => "KAB. REMBANG",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 18
                ],
                "kota" => "KAB. PATI",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 19
                ],
                "kota" => "KAB. KUDUS",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 20
                ],
                "kota" => "KAB. JEPARA",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 21
                ],
                "kota" => "KAB. DEMAK",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 22
                ],
                "kota" => "KAB. SEMARANG",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 23
                ],
                "kota" => "KAB. TEMANGGUNG",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 24
                ],
                "kota" => "KAB. KENDAL",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 25
                ],
                "kota" => "KAB. BATANG",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 26
                ],
                "kota" => "KAB. PEKALONGAN",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 27
                ],
                "kota" => "KAB. PEMALANG",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 28
                ],
                "kota" => "KAB. TEGAL",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 29
                ],
                "kota" => "KAB. BREBES",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 71
                ],
                "kota" => "KOTA MAGELANG",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 72
                ],
                "kota" => "KOTA SURAKARTA",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 73
                ],
                "kota" => "KOTA SALATIGA",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 74
                ],
                "kota" => "KOTA SEMARANG",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 75
                ],
                "kota" => "KOTA PEKALONGAN",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 33,
                    "id_kota" => 76
                ],
                "kota" => "KOTA TEGAL",
                "provinsi" => "JAWA TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 34,
                    "id_kota" => 1
                ],
                "kota" => "KAB. KULON PROGO",
                "provinsi" => "DAERAH ISTIMEWA YOGYAKARTA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 34,
                    "id_kota" => 2
                ],
                "kota" => "KAB. BANTUL",
                "provinsi" => "DAERAH ISTIMEWA YOGYAKARTA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 34,
                    "id_kota" => 3
                ],
                "kota" => "KAB. GUNUNGKIDUL",
                "provinsi" => "DAERAH ISTIMEWA YOGYAKARTA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 34,
                    "id_kota" => 4
                ],
                "kota" => "KAB. SLEMAN",
                "provinsi" => "DAERAH ISTIMEWA YOGYAKARTA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 34,
                    "id_kota" => 71
                ],
                "kota" => "KOTA YOGYAKARTA",
                "provinsi" => "DAERAH ISTIMEWA YOGYAKARTA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 1
                ],
                "kota" => "KAB. PACITAN",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 2
                ],
                "kota" => "KAB. PONOROGO",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 3
                ],
                "kota" => "KAB. TRENGGALEK",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 4
                ],
                "kota" => "KAB. TULUNGAGUNG",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 5
                ],
                "kota" => "KAB. BLITAR",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 6
                ],
                "kota" => "KAB. KEDIRI",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 7
                ],
                "kota" => "KAB. MALANG",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 8
                ],
                "kota" => "KAB. LUMAJANG",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 9
                ],
                "kota" => "KAB. JEMBER",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 10
                ],
                "kota" => "KAB. BANYUWANGI",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 11
                ],
                "kota" => "KAB. BONDOWOSO",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 12
                ],
                "kota" => "KAB. SITUBONDO",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 13
                ],
                "kota" => "KAB. PROBOLINGGO",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 14
                ],
                "kota" => "KAB. PASURUAN",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 15
                ],
                "kota" => "KAB. SIDOARJO",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 16
                ],
                "kota" => "KAB. MOJOKERTO",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 17
                ],
                "kota" => "KAB. JOMBANG",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 18
                ],
                "kota" => "KAB. NGANJUK",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 19
                ],
                "kota" => "KAB. MADIUN",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 20
                ],
                "kota" => "KAB. MAGETAN",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 21
                ],
                "kota" => "KAB. NGAWI",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 22
                ],
                "kota" => "KAB. BOJONEGORO",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 23
                ],
                "kota" => "KAB. TUBAN",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 24
                ],
                "kota" => "KAB. LAMONGAN",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 25
                ],
                "kota" => "KAB. GRESIK",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 26
                ],
                "kota" => "KAB. BANGKALAN",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 27
                ],
                "kota" => "KAB. SAMPANG",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 28
                ],
                "kota" => "KAB. PAMEKASAN",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 29
                ],
                "kota" => "KAB. SUMENEP",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 71
                ],
                "kota" => "KOTA KEDIRI",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 72
                ],
                "kota" => "KOTA BLITAR",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 73
                ],
                "kota" => "KOTA MALANG",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 74
                ],
                "kota" => "KOTA PROBOLINGGO",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 75
                ],
                "kota" => "KOTA PASURUAN",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 76
                ],
                "kota" => "KOTA MOJOKERTO",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 77
                ],
                "kota" => "KOTA MADIUN",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 78
                ],
                "kota" => "KOTA SURABAYA",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 35,
                    "id_kota" => 79
                ],
                "kota" => "KOTA BATU",
                "provinsi" => "JAWA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 36,
                    "id_kota" => 1
                ],
                "kota" => "KAB. PANDEGLANG",
                "provinsi" => "BANTEN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 36,
                    "id_kota" => 2
                ],
                "kota" => "KAB. LEBAK",
                "provinsi" => "BANTEN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 36,
                    "id_kota" => 3
                ],
                "kota" => "KAB. TANGERANG",
                "provinsi" => "BANTEN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 36,
                    "id_kota" => 4
                ],
                "kota" => "KAB. SERANG",
                "provinsi" => "BANTEN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 36,
                    "id_kota" => 71
                ],
                "kota" => "KOTA TANGERANG",
                "provinsi" => "BANTEN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 36,
                    "id_kota" => 72
                ],
                "kota" => "KOTA CILEGON",
                "provinsi" => "BANTEN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 36,
                    "id_kota" => 73
                ],
                "kota" => "KOTA SERANG",
                "provinsi" => "BANTEN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 36,
                    "id_kota" => 74
                ],
                "kota" => "KOTA TANGERANG SELATAN",
                "provinsi" => "BANTEN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 51,
                    "id_kota" => 1
                ],
                "kota" => "KAB. JEMBRANA",
                "provinsi" => "BALI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 51,
                    "id_kota" => 2
                ],
                "kota" => "KAB. TABANAN",
                "provinsi" => "BALI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 51,
                    "id_kota" => 3
                ],
                "kota" => "KAB. BADUNG",
                "provinsi" => "BALI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 51,
                    "id_kota" => 4
                ],
                "kota" => "KAB. GIANYAR",
                "provinsi" => "BALI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 51,
                    "id_kota" => 5
                ],
                "kota" => "KAB. KLUNGKUNG",
                "provinsi" => "BALI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 51,
                    "id_kota" => 6
                ],
                "kota" => "KAB. BANGLI",
                "provinsi" => "BALI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 51,
                    "id_kota" => 7
                ],
                "kota" => "KAB. KARANGASEM",
                "provinsi" => "BALI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 51,
                    "id_kota" => 8
                ],
                "kota" => "KAB. BULELENG",
                "provinsi" => "BALI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 51,
                    "id_kota" => 71
                ],
                "kota" => "KOTA DENPASAR",
                "provinsi" => "BALI"
            ],
            [
                "kode" => [
                    "id_provinsi" => 52,
                    "id_kota" => 1
                ],
                "kota" => "KAB. LOMBOK BARAT",
                "provinsi" => "NUSA TENGGARA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 52,
                    "id_kota" => 2
                ],
                "kota" => "KAB. LOMBOK TENGAH",
                "provinsi" => "NUSA TENGGARA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 52,
                    "id_kota" => 3
                ],
                "kota" => "KAB. LOMBOK TIMUR",
                "provinsi" => "NUSA TENGGARA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 52,
                    "id_kota" => 4
                ],
                "kota" => "KAB. SUMBAWA",
                "provinsi" => "NUSA TENGGARA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 52,
                    "id_kota" => 5
                ],
                "kota" => "KAB. DOMPU",
                "provinsi" => "NUSA TENGGARA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 52,
                    "id_kota" => 6
                ],
                "kota" => "KAB. BIMA",
                "provinsi" => "NUSA TENGGARA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 52,
                    "id_kota" => 7
                ],
                "kota" => "KAB. SUMBAWA BARAT",
                "provinsi" => "NUSA TENGGARA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 52,
                    "id_kota" => 8
                ],
                "kota" => "KAB. LOMBOK UTARA",
                "provinsi" => "NUSA TENGGARA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 52,
                    "id_kota" => 71
                ],
                "kota" => "KOTA MATARAM",
                "provinsi" => "NUSA TENGGARA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 52,
                    "id_kota" => 72
                ],
                "kota" => "KOTA BIMA",
                "provinsi" => "NUSA TENGGARA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 1
                ],
                "kota" => "KAB. KUPANG",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 2
                ],
                "kota" => "KAB TIMOR TENGAH SELATAN",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 3
                ],
                "kota" => "KAB. TIMOR TENGAH UTARA",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 4
                ],
                "kota" => "KAB. BELU",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 5
                ],
                "kota" => "KAB. ALOR",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 6
                ],
                "kota" => "KAB. FLORES TIMUR",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 7
                ],
                "kota" => "KAB. SIKKA",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 8
                ],
                "kota" => "KAB. ENDE",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 9
                ],
                "kota" => "KAB. NGADA",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 10
                ],
                "kota" => "KAB. MANGGARAI",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 11
                ],
                "kota" => "KAB. SUMBA TIMUR",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 12
                ],
                "kota" => "KAB. SUMBA BARAT",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 13
                ],
                "kota" => "KAB. LEMBATA",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 14
                ],
                "kota" => "KAB. ROTE NDAO",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 15
                ],
                "kota" => "KAB. MANGGARAI BARAT",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 16
                ],
                "kota" => "KAB. NAGEKEO",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 17
                ],
                "kota" => "KAB. SUMBA TENGAH",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 18
                ],
                "kota" => "KAB. SUMBA BARAT DAYA",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 19
                ],
                "kota" => "KAB. MANGGARAI TIMUR",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 20
                ],
                "kota" => "KAB. SABU RAIJUA",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 21
                ],
                "kota" => "KAB. MALAKA",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 53,
                    "id_kota" => 71
                ],
                "kota" => "KOTA KUPANG",
                "provinsi" => "NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 61,
                    "id_kota" => 1
                ],
                "kota" => "KAB. SAMBAS",
                "provinsi" => "KALIMANTAN BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 61,
                    "id_kota" => 2
                ],
                "kota" => "KAB. MEMPAWAH",
                "provinsi" => "KALIMANTAN BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 61,
                    "id_kota" => 3
                ],
                "kota" => "KAB. SANGGAU",
                "provinsi" => "KALIMANTAN BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 61,
                    "id_kota" => 4
                ],
                "kota" => "KAB. KETAPANG",
                "provinsi" => "KALIMANTAN BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 61,
                    "id_kota" => 5
                ],
                "kota" => "KAB. SINTANG",
                "provinsi" => "KALIMANTAN BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 61,
                    "id_kota" => 6
                ],
                "kota" => "KAB. KAPUAS HULU",
                "provinsi" => "KALIMANTAN BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 61,
                    "id_kota" => 7
                ],
                "kota" => "KAB. BENGKAYANG",
                "provinsi" => "KALIMANTAN BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 61,
                    "id_kota" => 8
                ],
                "kota" => "KAB. LANDAK",
                "provinsi" => "KALIMANTAN BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 61,
                    "id_kota" => 9
                ],
                "kota" => "KAB. SEKADAU",
                "provinsi" => "KALIMANTAN BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 61,
                    "id_kota" => 10
                ],
                "kota" => "KAB. MELAWI",
                "provinsi" => "KALIMANTAN BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 61,
                    "id_kota" => 11
                ],
                "kota" => "KAB. KAYONG UTARA",
                "provinsi" => "KALIMANTAN BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 61,
                    "id_kota" => 12
                ],
                "kota" => "KAB. KUBU RAYA",
                "provinsi" => "KALIMANTAN BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 61,
                    "id_kota" => 71
                ],
                "kota" => "KOTA PONTIANAK",
                "provinsi" => "KALIMANTAN BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 61,
                    "id_kota" => 72
                ],
                "kota" => "KOTA SINGKAWANG",
                "provinsi" => "KALIMANTAN BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 62,
                    "id_kota" => 1
                ],
                "kota" => "KAB. KOTAWARINGIN BARAT",
                "provinsi" => "KALIMANTAN TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 62,
                    "id_kota" => 2
                ],
                "kota" => "KAB. KOTAWARINGIN TIMUR",
                "provinsi" => "KALIMANTAN TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 62,
                    "id_kota" => 3
                ],
                "kota" => "KAB. KAPUAS",
                "provinsi" => "KALIMANTAN TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 62,
                    "id_kota" => 4
                ],
                "kota" => "KAB. BARITO SELATAN",
                "provinsi" => "KALIMANTAN TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 62,
                    "id_kota" => 5
                ],
                "kota" => "KAB. BARITO UTARA",
                "provinsi" => "KALIMANTAN TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 62,
                    "id_kota" => 6
                ],
                "kota" => "KAB. KATINGAN",
                "provinsi" => "KALIMANTAN TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 62,
                    "id_kota" => 7
                ],
                "kota" => "KAB. SERUYAN",
                "provinsi" => "KALIMANTAN TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 62,
                    "id_kota" => 8
                ],
                "kota" => "KAB. SUKAMARA",
                "provinsi" => "KALIMANTAN TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 62,
                    "id_kota" => 9
                ],
                "kota" => "KAB. LAMANDAU",
                "provinsi" => "KALIMANTAN TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 62,
                    "id_kota" => 10
                ],
                "kota" => "KAB. GUNUNG MAS",
                "provinsi" => "KALIMANTAN TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 62,
                    "id_kota" => 11
                ],
                "kota" => "KAB. PULANG PISAU",
                "provinsi" => "KALIMANTAN TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 62,
                    "id_kota" => 12
                ],
                "kota" => "KAB. MURUNG RAYA",
                "provinsi" => "KALIMANTAN TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 62,
                    "id_kota" => 13
                ],
                "kota" => "KAB. BARITO TIMUR",
                "provinsi" => "KALIMANTAN TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 62,
                    "id_kota" => 71
                ],
                "kota" => "KOTA PALANGKARAYA",
                "provinsi" => "KALIMANTAN TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 63,
                    "id_kota" => 1
                ],
                "kota" => "KAB. TANAH LAUT",
                "provinsi" => "KALIMANTAN SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 63,
                    "id_kota" => 2
                ],
                "kota" => "KAB. KOTABARU",
                "provinsi" => "KALIMANTAN SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 63,
                    "id_kota" => 3
                ],
                "kota" => "KAB. BANJAR",
                "provinsi" => "KALIMANTAN SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 63,
                    "id_kota" => 4
                ],
                "kota" => "KAB. BARITO KUALA",
                "provinsi" => "KALIMANTAN SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 63,
                    "id_kota" => 5
                ],
                "kota" => "KAB. TAPIN",
                "provinsi" => "KALIMANTAN SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 63,
                    "id_kota" => 6
                ],
                "kota" => "KAB. HULU SUNGAI SELATAN",
                "provinsi" => "KALIMANTAN SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 63,
                    "id_kota" => 7
                ],
                "kota" => "KAB. HULU SUNGAI TENGAH",
                "provinsi" => "KALIMANTAN SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 63,
                    "id_kota" => 8
                ],
                "kota" => "KAB. HULU SUNGAI UTARA",
                "provinsi" => "KALIMANTAN SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 63,
                    "id_kota" => 9
                ],
                "kota" => "KAB. TABALONG",
                "provinsi" => "KALIMANTAN SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 63,
                    "id_kota" => 10
                ],
                "kota" => "KAB. TANAH BUMBU",
                "provinsi" => "KALIMANTAN SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 63,
                    "id_kota" => 11
                ],
                "kota" => "KAB. BALANGAN",
                "provinsi" => "KALIMANTAN SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 63,
                    "id_kota" => 71
                ],
                "kota" => "KOTA BANJARMASIN",
                "provinsi" => "KALIMANTAN SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 63,
                    "id_kota" => 72
                ],
                "kota" => "KOTA BANJARBARU",
                "provinsi" => "KALIMANTAN SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 64,
                    "id_kota" => 1
                ],
                "kota" => "KAB. PASER",
                "provinsi" => "KALIMANTAN TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 64,
                    "id_kota" => 2
                ],
                "kota" => "KAB. KUTAI KARTANEGARA",
                "provinsi" => "KALIMANTAN TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 64,
                    "id_kota" => 3
                ],
                "kota" => "KAB. BERAU",
                "provinsi" => "KALIMANTAN TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 64,
                    "id_kota" => 7
                ],
                "kota" => "KAB. KUTAI BARAT",
                "provinsi" => "KALIMANTAN TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 64,
                    "id_kota" => 8
                ],
                "kota" => "KAB. KUTAI TIMUR",
                "provinsi" => "KALIMANTAN TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 64,
                    "id_kota" => 9
                ],
                "kota" => "KAB. PENAJAM PASER UTARA",
                "provinsi" => "KALIMANTAN TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 64,
                    "id_kota" => 11
                ],
                "kota" => "KAB. MAHAKAM ULU",
                "provinsi" => "KALIMANTAN TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 64,
                    "id_kota" => 71
                ],
                "kota" => "KOTA BALIKPAPAN",
                "provinsi" => "KALIMANTAN TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 64,
                    "id_kota" => 72
                ],
                "kota" => "KOTA SAMARINDA",
                "provinsi" => "KALIMANTAN TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 64,
                    "id_kota" => 74
                ],
                "kota" => "KOTA BONTANG",
                "provinsi" => "KALIMANTAN TIMUR"
            ],
            [
                "kode" => [
                    "id_provinsi" => 65,
                    "id_kota" => 1
                ],
                "kota" => "KAB. BULUNGAN",
                "provinsi" => "KALIMANTAN UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 65,
                    "id_kota" => 2
                ],
                "kota" => "KAB. MALINAU",
                "provinsi" => "KALIMANTAN UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 65,
                    "id_kota" => 3
                ],
                "kota" => "KAB. NUNUKAN",
                "provinsi" => "KALIMANTAN UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 65,
                    "id_kota" => 4
                ],
                "kota" => "KAB. TANA TIDUNG",
                "provinsi" => "KALIMANTAN UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 65,
                    "id_kota" => 71
                ],
                "kota" => "KOTA TARAKAN",
                "provinsi" => "KALIMANTAN UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 71,
                    "id_kota" => 1
                ],
                "kota" => "KAB. BOLAANG MONGONDOW",
                "provinsi" => "SULAWESI UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 71,
                    "id_kota" => 2
                ],
                "kota" => "KAB. MINAHASA",
                "provinsi" => "SULAWESI UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 71,
                    "id_kota" => 3
                ],
                "kota" => "KAB. KEPULAUAN SANGIHE",
                "provinsi" => "SULAWESI UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 71,
                    "id_kota" => 4
                ],
                "kota" => "KAB. KEPULAUAN TALAUD",
                "provinsi" => "SULAWESI UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 71,
                    "id_kota" => 5
                ],
                "kota" => "KAB. MINAHASA SELATAN",
                "provinsi" => "SULAWESI UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 71,
                    "id_kota" => 6
                ],
                "kota" => "KAB. MINAHASA UTARA",
                "provinsi" => "SULAWESI UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 71,
                    "id_kota" => 7
                ],
                "kota" => "KAB. MINAHASA TENGGARA",
                "provinsi" => "SULAWESI UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 71,
                    "id_kota" => 8
                ],
                "kota" => "KAB. BOLAANG MONGONDOW UTARA",
                "provinsi" => "SULAWESI UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 71,
                    "id_kota" => 9
                ],
                "kota" => "KAB. KEP. SIAU TAGULANDANG BIARO",
                "provinsi" => "SULAWESI UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 71,
                    "id_kota" => 10
                ],
                "kota" => "KAB. BOLAANG MONGONDOW TIMUR",
                "provinsi" => "SULAWESI UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 71,
                    "id_kota" => 11
                ],
                "kota" => "KAB. BOLAANG MONGONDOW SELATAN",
                "provinsi" => "SULAWESI UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 71,
                    "id_kota" => 71
                ],
                "kota" => "KOTA MANADO",
                "provinsi" => "SULAWESI UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 71,
                    "id_kota" => 72
                ],
                "kota" => "KOTA BITUNG",
                "provinsi" => "SULAWESI UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 71,
                    "id_kota" => 73
                ],
                "kota" => "KOTA TOMOHON",
                "provinsi" => "SULAWESI UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 71,
                    "id_kota" => 74
                ],
                "kota" => "KOTA KOTAMOBAGU",
                "provinsi" => "SULAWESI UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 72,
                    "id_kota" => 1
                ],
                "kota" => "KAB. BANGGAI",
                "provinsi" => "SULAWESI TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 72,
                    "id_kota" => 2
                ],
                "kota" => "KAB. POSO",
                "provinsi" => "SULAWESI TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 72,
                    "id_kota" => 3
                ],
                "kota" => "KAB. DONGGALA",
                "provinsi" => "SULAWESI TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 72,
                    "id_kota" => 4
                ],
                "kota" => "KAB. TOLI TOLI",
                "provinsi" => "SULAWESI TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 72,
                    "id_kota" => 5
                ],
                "kota" => "KAB. BUOL",
                "provinsi" => "SULAWESI TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 72,
                    "id_kota" => 6
                ],
                "kota" => "KAB. MOROWALI",
                "provinsi" => "SULAWESI TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 72,
                    "id_kota" => 7
                ],
                "kota" => "KAB. BANGGAI KEPULAUAN",
                "provinsi" => "SULAWESI TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 72,
                    "id_kota" => 8
                ],
                "kota" => "KAB. PARIGI MOUTONG",
                "provinsi" => "SULAWESI TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 72,
                    "id_kota" => 9
                ],
                "kota" => "KAB. TOJO UNA UNA",
                "provinsi" => "SULAWESI TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 72,
                    "id_kota" => 10
                ],
                "kota" => "KAB. SIGI",
                "provinsi" => "SULAWESI TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 72,
                    "id_kota" => 11
                ],
                "kota" => "KAB. BANGGAI LAUT",
                "provinsi" => "SULAWESI TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 72,
                    "id_kota" => 12
                ],
                "kota" => "KAB. MOROWALI UTARA",
                "provinsi" => "SULAWESI TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 72,
                    "id_kota" => 71
                ],
                "kota" => "KOTA PALU",
                "provinsi" => "SULAWESI TENGAH"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 1
                ],
                "kota" => "KAB. KEPULAUAN SELAYAR",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 2
                ],
                "kota" => "KAB. BULUKUMBA",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 3
                ],
                "kota" => "KAB. BANTAENG",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 4
                ],
                "kota" => "KAB. JENEPONTO",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 5
                ],
                "kota" => "KAB. TAKALAR",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 6
                ],
                "kota" => "KAB. GOWA",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 7
                ],
                "kota" => "KAB. SINJAI",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 8
                ],
                "kota" => "KAB. BONE",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 9
                ],
                "kota" => "KAB. MAROS",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 10
                ],
                "kota" => "KAB. PANGKAJENE KEPULAUAN",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 11
                ],
                "kota" => "KAB. BARRU",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 12
                ],
                "kota" => "KAB. SOPPENG",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 13
                ],
                "kota" => "KAB. WAJO",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 14
                ],
                "kota" => "KAB. SIDENRENG RAPPANG",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 15
                ],
                "kota" => "KAB. PINRANG",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 16
                ],
                "kota" => "KAB. ENREKANG",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 17
                ],
                "kota" => "KAB. LUWU",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 18
                ],
                "kota" => "KAB. TANA TORAJA",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 22
                ],
                "kota" => "KAB. LUWU UTARA",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 24
                ],
                "kota" => "KAB. LUWU TIMUR",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 26
                ],
                "kota" => "KAB. TORAJA UTARA",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 71
                ],
                "kota" => "KOTA MAKASSAR",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 72
                ],
                "kota" => "KOTA PARE PARE",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 73,
                    "id_kota" => 73
                ],
                "kota" => "KOTA PALOPO",
                "provinsi" => "SULAWESI SELATAN"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74,
                    "id_kota" => 1
                ],
                "kota" => "KAB. KOLAKA",
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74,
                    "id_kota" => 2
                ],
                "kota" => "KAB. KONAWE",
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74,
                    "id_kota" => 3
                ],
                "kota" => "KAB. MUNA",
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74,
                    "id_kota" => 4
                ],
                "kota" => "KAB. BUTON",
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74,
                    "id_kota" => 5
                ],
                "kota" => "KAB. KONAWE SELATAN",
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74,
                    "id_kota" => 6
                ],
                "kota" => "KAB. BOMBANA",
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74,
                    "id_kota" => 7
                ],
                "kota" => "KAB. WAKATOBI",
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74,
                    "id_kota" => 8
                ],
                "kota" => "KAB. KOLAKA UTARA",
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74,
                    "id_kota" => 9
                ],
                "kota" => "KAB. KONAWE UTARA",
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74,
                    "id_kota" => 10
                ],
                "kota" => "KAB. BUTON UTARA",
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74,
                    "id_kota" => 11
                ],
                "kota" => "KAB. KOLAKA TIMUR",
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74,
                    "id_kota" => 12
                ],
                "kota" => "KAB. KONAWE KEPULAUAN",
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74,
                    "id_kota" => 13
                ],
                "kota" => "KAB. MUNA BARAT",
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74,
                    "id_kota" => 14
                ],
                "kota" => "KAB. BUTON TENGAH",
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74,
                    "id_kota" => 15
                ],
                "kota" => "KAB. BUTON SELATAN",
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74,
                    "id_kota" => 71
                ],
                "kota" => "KOTA KENDARI",
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 74,
                    "id_kota" => 72
                ],
                "kota" => "KOTA BAU BAU",
                "provinsi" => "SULAWESI TENGGARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 75,
                    "id_kota" => 1
                ],
                "kota" => "KAB. GORONTALO",
                "provinsi" => "GORONTALO"
            ],
            [
                "kode" => [
                    "id_provinsi" => 75,
                    "id_kota" => 2
                ],
                "kota" => "KAB. BOALEMO",
                "provinsi" => "GORONTALO"
            ],
            [
                "kode" => [
                    "id_provinsi" => 75,
                    "id_kota" => 3
                ],
                "kota" => "KAB. BONE BOLANGO",
                "provinsi" => "GORONTALO"
            ],
            [
                "kode" => [
                    "id_provinsi" => 75,
                    "id_kota" => 4
                ],
                "kota" => "KAB. PAHUWATO",
                "provinsi" => "GORONTALO"
            ],
            [
                "kode" => [
                    "id_provinsi" => 75,
                    "id_kota" => 5
                ],
                "kota" => "KAB. GORONTALO UTARA",
                "provinsi" => "GORONTALO"
            ],
            [
                "kode" => [
                    "id_provinsi" => 75,
                    "id_kota" => 71
                ],
                "kota" => "KOTA GORONTALO",
                "provinsi" => "GORONTALO"
            ],
            [
                "kode" => [
                    "id_provinsi" => 76,
                    "id_kota" => 1
                ],
                "kota" => "KAB. MAMUJU UTARA",
                "provinsi" => "SULAWESI BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 76,
                    "id_kota" => 2
                ],
                "kota" => "KAB. MAMUJU",
                "provinsi" => "SULAWESI BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 76,
                    "id_kota" => 3
                ],
                "kota" => "KAB. MAMASA",
                "provinsi" => "SULAWESI BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 76,
                    "id_kota" => 4
                ],
                "kota" => "KAB. POLEWALI MANDAR",
                "provinsi" => "SULAWESI BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 76,
                    "id_kota" => 5
                ],
                "kota" => "KAB. MAJENE",
                "provinsi" => "SULAWESI BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 76,
                    "id_kota" => 6
                ],
                "kota" => "KAB. MAMUJU TENGAH",
                "provinsi" => "SULAWESI BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 81,
                    "id_kota" => 1
                ],
                "kota" => "KAB. MALUKU TENGAH",
                "provinsi" => "MALUKU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 81,
                    "id_kota" => 2
                ],
                "kota" => "KAB. MALUKU TENGGARA",
                "provinsi" => "MALUKU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 81,
                    "id_kota" => 3
                ],
                "kota" => "KAB. MALUKU TENGGARA BARAT",
                "provinsi" => "MALUKU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 81,
                    "id_kota" => 4
                ],
                "kota" => "KAB. BURU",
                "provinsi" => "MALUKU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 81,
                    "id_kota" => 5
                ],
                "kota" => "KAB. SERAM BAGIAN TIMUR",
                "provinsi" => "MALUKU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 81,
                    "id_kota" => 6
                ],
                "kota" => "KAB. SERAM BAGIAN BARAT",
                "provinsi" => "MALUKU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 81,
                    "id_kota" => 7
                ],
                "kota" => "KAB. KEPULAUAN ARU",
                "provinsi" => "MALUKU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 81,
                    "id_kota" => 8
                ],
                "kota" => "KAB. MALUKU BARAT DAYA",
                "provinsi" => "MALUKU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 81,
                    "id_kota" => 9
                ],
                "kota" => "KAB. BURU SELATAN",
                "provinsi" => "MALUKU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 81,
                    "id_kota" => 71
                ],
                "kota" => "KOTA AMBON",
                "provinsi" => "MALUKU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 81,
                    "id_kota" => 72
                ],
                "kota" => "KOTA TUAL",
                "provinsi" => "MALUKU"
            ],
            [
                "kode" => [
                    "id_provinsi" => 82,
                    "id_kota" => 1
                ],
                "kota" => "KAB. HALMAHERA BARAT",
                "provinsi" => "MALUKU UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 82,
                    "id_kota" => 2
                ],
                "kota" => "KAB. HALMAHERA TENGAH",
                "provinsi" => "MALUKU UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 82,
                    "id_kota" => 3
                ],
                "kota" => "KAB. HALMAHERA UTARA",
                "provinsi" => "MALUKU UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 82,
                    "id_kota" => 4
                ],
                "kota" => "KAB. HALMAHERA SELATAN",
                "provinsi" => "MALUKU UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 82,
                    "id_kota" => 5
                ],
                "kota" => "KAB. KEPULAUAN SULA",
                "provinsi" => "MALUKU UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 82,
                    "id_kota" => 6
                ],
                "kota" => "KAB. HALMAHERA TIMUR",
                "provinsi" => "MALUKU UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 82,
                    "id_kota" => 7
                ],
                "kota" => "KAB. PULAU MOROTAI",
                "provinsi" => "MALUKU UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 82,
                    "id_kota" => 8
                ],
                "kota" => "KAB. PULAU TALIABU",
                "provinsi" => "MALUKU UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 82,
                    "id_kota" => 71
                ],
                "kota" => "KOTA TERNATE",
                "provinsi" => "MALUKU UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 82,
                    "id_kota" => 72
                ],
                "kota" => "KOTA TIDORE KEPULAUAN",
                "provinsi" => "MALUKU UTARA"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 1
                ],
                "kota" => "KAB. MERAUKE",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 2
                ],
                "kota" => "KAB. JAYAWIJAYA",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 3
                ],
                "kota" => "KAB. JAYAPURA",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 4
                ],
                "kota" => "KAB. NABIRE",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 5
                ],
                "kota" => "KAB. KEPULAUAN YAPEN",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 6
                ],
                "kota" => "KAB. BIAK NUMFOR",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 7
                ],
                "kota" => "KAB. PUNCAK JAYA",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 8
                ],
                "kota" => "KAB. PANIAI",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 9
                ],
                "kota" => "KAB. MIMIKA",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 10
                ],
                "kota" => "KAB. SARMI",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 11
                ],
                "kota" => "KAB. KEEROM",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 12
                ],
                "kota" => "KAB. PEGUNUNGAN BINTANG",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 13
                ],
                "kota" => "KAB. YAHUKIMO",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 14
                ],
                "kota" => "KAB. TOLIKARA",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 15
                ],
                "kota" => "KAB. WAROPEN",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 16
                ],
                "kota" => "KAB. BOVEN DIGOEL",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 17
                ],
                "kota" => "KAB. MAPPI",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 18
                ],
                "kota" => "KAB. ASMAT",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 19
                ],
                "kota" => "KAB. SUPIORI",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 20
                ],
                "kota" => "KAB. MAMBERAMO RAYA",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 21
                ],
                "kota" => "KAB. MAMBERAMO TENGAH",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 22
                ],
                "kota" => "KAB. YALIMO",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 23
                ],
                "kota" => "KAB. LANNY JAYA",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 24
                ],
                "kota" => "KAB. NDUGA",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 25
                ],
                "kota" => "KAB. PUNCAK",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 26
                ],
                "kota" => "KAB. DOGIYAI",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 27
                ],
                "kota" => "KAB. INTAN JAYA",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 28
                ],
                "kota" => "KAB. DEIYAI",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 91,
                    "id_kota" => 71
                ],
                "kota" => "KOTA JAYAPURA",
                "provinsi" => "P A P U A"
            ],
            [
                "kode" => [
                    "id_provinsi" => 92,
                    "id_kota" => 1
                ],
                "kota" => "KAB. SORONG",
                "provinsi" => "PAPUA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 92,
                    "id_kota" => 2
                ],
                "kota" => "KAB. MANOKWARI",
                "provinsi" => "PAPUA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 92,
                    "id_kota" => 3
                ],
                "kota" => "KAB. FAK FAK",
                "provinsi" => "PAPUA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 92,
                    "id_kota" => 4
                ],
                "kota" => "KAB. SORONG SELATAN",
                "provinsi" => "PAPUA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 92,
                    "id_kota" => 5
                ],
                "kota" => "KAB. RAJA AMPAT",
                "provinsi" => "PAPUA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 92,
                    "id_kota" => 6
                ],
                "kota" => "KAB. TELUK BINTUNI",
                "provinsi" => "PAPUA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 92,
                    "id_kota" => 7
                ],
                "kota" => "KAB. TELUK WONDAMA",
                "provinsi" => "PAPUA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 92,
                    "id_kota" => 8
                ],
                "kota" => "KAB. KAIMANA",
                "provinsi" => "PAPUA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 92,
                    "id_kota" => 9
                ],
                "kota" => "KAB. TAMBRAUW",
                "provinsi" => "PAPUA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 92,
                    "id_kota" => 10
                ],
                "kota" => "KAB. MAYBRAT",
                "provinsi" => "PAPUA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 92,
                    "id_kota" => 11
                ],
                "kota" => "KAB. MANOKWARI SELATAN",
                "provinsi" => "PAPUA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 92,
                    "id_kota" => 12
                ],
                "kota" => "KAB. PEGUNUNGAN ARFAK",
                "provinsi" => "PAPUA BARAT"
            ],
            [
                "kode" => [
                    "id_provinsi" => 92,
                    "id_kota" => 71
                ],
                "kota" => "KOTA SORONG",
                "provinsi" => "PAPUA BARAT"
            ]
        ];





        GudangData::create(
            [
                'name' => 'data-wilayah-provinsi',
                'data' => json_encode($provinsi)
            ]
        );

        foreach ($provinsi as $val) {
            Provinsi::create(
                [
                    'id' => $val['kode']['id_provinsi'],
                    'nama' => $val['provinsi'],
                ]
            );
        }

        GudangData::create(
            [
                'name' => 'data-wilayah-kota',
                'data' => json_encode($kota)
            ]
        );

        foreach ($kota as $val) {
            Kota::create(
                [
                    'id' => $val['kode']['id_provinsi'].$val['kode']['id_kota'],
                    'id_provinsi' => $val['kode']['id_provinsi'],
                    'nama' => $val['kota'],
                ]
            );
        }

    }
}
