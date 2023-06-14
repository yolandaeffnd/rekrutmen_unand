<!DOCTYPE html>
<html>

<head>
    <title>Kartu Peserta - Universitas Andalas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style>
        /** Define the margins of your page **/
        @page {
            margin: 100px 25px;
        }

        header {
            position: fixed;
            top: -80px;
            left: -25px;
            right: -25px;
            height: 80px;

            /** Extra personal styles **/
            background-color: green;
            color: white;
            text-align: center;
            line-height: 15px;
        }

        footer {
            position: fixed;
            bottom: -80px;
            left: -25px;
            right: -25px;
            height: 50px;

            /** Extra personal styles **/
            background-color: gray;
            color: white;
            text-align: right;
            line-height: 25px;
        }

        #footer-1 {
            position: fixed;
            bottom: -25px;
            left: 0px;
            right: 0px;
            height: 50px;

            /** Extra personal styles **/
            text-align: right;
        }

        #footer-2 {
            position: fixed;
            bottom: 50px;
            left: 0px;
            right: 0px;
            height: 80px;

            /** Extra personal styles **/
            text-align: left;
            border-style: dotted;
        }

        #watermark {
            position: fixed;
            display: block;
            top: -10%;
            left: 0px;
            line-height: 70px;
            transform: rotate(-35deg);
            transform-origin: 50% 50%;
            opacity: .1;
            font-size: 40px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: green;
            width: 480px;
            text-align: center;
        }


        footer .pagenum:before {
            content: counter(page);
        }
    </style>
</head>

<body>

    <div id="watermark">
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
        UNIVERSITASANDALAS2023UNIVERSITASANDALAS2023UNIVERSITASANDALAS<br />
    </div>
    <!-- Define header and footer blocks before your content -->
    <header>
        <div style="margin: 5px;">
            <table style="width:100%;">
                <tr>
                    <td style="text-align:center; width:20%;"><img width='50px' src='{{ public_path('storage/dompdf_asset/img/unand.png') }}'>
                    </td>
                    <td style="width:80%; margin:10px; text-align: left;">
                        <span style="font-size:20px"><b>UNIVERSITAS ANDALAS</b></span><br>
                        <span style="font-size:16px">PANITIA PENGADAAN PEGAWAI TETAP TENAGA KEPENDIDIKAN <br>
                            TAHUN ANGGARAN 2023 </span><br>
                    </td>

            </table>
        </div>
    </header>

    <footer>
        <div style="margin: 7px 25px 7px 25px;">
            <span style="float:left">Universitas Andalas. <?php echo date('Y'); ?></span> Page <span class="pagenum"></span>
        </div>
    </footer>

    <!-- Wrap the content of your PDF inside a main tag -->
    <main>
        <div style="page-break-after: always; ">

            <p style="text-align: center; margin-top:30;"><b>
                    KARTU PESERTA PENDAFTARAN SELEKSI<br>
                    PEGAWAI UNIVERSITAS ANDALAS<br>
                    TAHUN {{ date('Y') }}</b>
            </p>

            <p style="font-size:20px;">
                <br><b>No. Registrasi : {{ $dataResume_generate['main']['nomor_reg'] }}</b>
            </p>

            <table style="width:100%;">
                <thead>
                    <tr>
                        <th style="color:white; background-color:gray; height:40px; vertical-align: middle;"
                            colspan="2">PERSONAL INFORMASI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td valign="top" style="width: 30%; padding:10px;">
                            <img style="width: 150px; height: 200px;" alt="" class="invoice-logo"
                                src="{{ public_path($dataResume_generate['file']['Pas Poto']) }}">
                        </td>
                        <td>
                            <table style="">
                                <tr>
                                    <td>NIK</td>
                                    <td>:</td>
                                    <td>{{ $dataResume_generate['biodata']['NIK'] }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ $dataResume_generate['biodata']['Nama'] }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>{{ $dataResume_generate['biodata']['Tanggal Lahir'] }}</td>
                                </tr>
                                <tr>
                                    <td>Pendidikan</td>
                                    <td>:</td>
                                    <td>{{ $dataResume_generate['biodata']['Program Studi'] }}</td>
                                </tr>
                                <tr>
                                    <td>Formasi yang dilamar</td>
                                    <td>:</td>
                                    <td>{{ $dataResume_generate['formasi']['Jenis Formasi'] }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal daftar online</td>
                                    <td>:</td>
                                    <td>{{ $dataResume_generate['main']['waktu_dikirim'] }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </tbody>
            </table>
            <br>
            <table style="width:100%; text-align:justify; text-justify:inter-word; ">
                <tbody>
                    <tr>
                        <td valign="top" style="padding:10px;">
                            Dengan ini saya menyatakan bahwa data yang diinput pada pendaftaran online adalah data yang
                            sebenarnya. Apabila
                            terbukti data tersebut bukan yang sebenarnya maka saya bersedia menerima sanksi hukum maupun
                            sanksi administratif
                            sesuai dengan ketentuan yang berlaku.
                        </td>
                    </tr>


                </tbody>
            </table>
            <br>
            <table border=0 style="width:100%; margin-top:30px;">
                <tbody>
                    <tr>
                        <td valign="top" style="width:60%;"></td>
                        <td valign="top" style="">
                            Pelamar,
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            ({{ $dataResume_generate['biodata']['Nama'] }})
                        </td>
                    </tr>

                </tbody>
            </table>
            <div id="footer-2">
                <p style="font-size:12px; text-align:justify; text-justify:inter-word; margin:10px">
                    Tanda bukti pendaftaran ini dicetak 2 (dua) rangkap: rangkap ke-1 untuk disertakan pada berkas
                    lamaran, dan rangkap ke-2 untuk disimpan pelamar
                    yang berfungsi sebagai tanda peserta ujian.<br>
                    Peserta akan dinyatakan tidak memenuhi syarat administrasi dan tidak diizinkan memasuki
                    ruang ujian apabila lembar ini tidak dibubuhi foto
                    berwana.
                </p>

            </div>
            <div id="footer-1">
                @php
                    $nomor_registrasi = $dataResume_generate['main']['nomor_reg'];
                @endphp
                <span style="float:left;">{!! DNS1D::getBarcodeHTML("$nomor_registrasi", 'C39') !!}</span>
                <span style="">Tanggal Cetak: {{ $dataResume_generate['main']['date_print'] }}</span>
            </div>

        </div>
        <p style="page-break-after: never;">

        </p>
    </main>

</body>

</html>
