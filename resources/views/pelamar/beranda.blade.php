@extends('layouts.pelamar')

@section('title', 'Dashboard')
@section('content-title', 'Dashboard')

@push('custom-css')
@endpush


@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Selamat Datang di Universitas Andalas</h1>
            <p>
                @if ($registrasi)
                    <form action="{{ route('reg-cetak-kartu-peserta') }}" method="POST" id="form">
                        @csrf
                        <input type="submit" name="submit" class="btn btn-success my-2" value="Cetak Kartu Peserta">
                    </form>

                <h5 class="text-success"><b>Anda sudah terdaftar</b>, silahkan cetak kartu peserta dengan klik tombol "Cetak Kartu Peserta".</h5>
                <form action="{{ route('status-pelamar') }}" id="form">
                        @csrf
                        <input type="submit" name="submit" class="btn btn-primary my-2" value="Cek Lamaran Saya">
                    </form>
                @else
                    <!-- <form action="{{ route('reg-start') }}" method="POST" id="form">
                        @csrf
                        <input type="submit" name="submit" class="btn btn-primary my-2"
                            value="Lengkapi Pendaftaran">
                    </form>
                    <br>
                    <br>
                    <h5 class="text-danger"><b>Anda belum terdaftar</b>, silahkan isi lengkap formulir pendaftaran dengan klik tombol "Lengkapi Pendaftaran".</h5> -->
              <!-- <form action="#">
                        @csrf
                        <input type="submit" name="submit" class="btn btn-primary my-2"
                            value="Pendaftaran sudah ditutup">
                           
                    </form> -->
                    <h5 class="text-bold jobpost_name" style="color:#008000;">Pendaftaran sudah ditutup</h5>
                    <form action="{{ route('status-pelamar') }}" id="form">
                        @csrf
                        <input type="submit" name="submit" class="btn btn-primary my-2" value="Lamaran Saya">
                    </form>
                    @endif
            </p>
        </div>
    </section>
@endsection

@push('custom-js')
@endpush
