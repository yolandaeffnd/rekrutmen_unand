@extends('layouts.pelamar')

@section('title', 'Dashboard')
@section('content-title', 'Dashboard')

@push('custom-css')
@endpush

@section('content')
<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,800');

* {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

h2 {
  margin: 50px 0  30px 0;
}

body {
  font-family: Open Sans, sans-serif;
  font-style: normal !important;
  font-weight: normal !important;
  font-variant: normal !important;
  text-transform: none !important;
  speak: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.list-ic a {
  color: #788288;
  text-decoration: none;
}
.list-ic li {
  position: relative;
}
.list-ic li span {
  display: inline-block;
  font-weight: 800;
  width: 2em;
  height: 2em;
  text-align: center;
  line-height: 2em;
  border-radius: 1em;
  background: #18bc9c;
  color: white;
  position: relative;
}
.list-ic li::before {
  content: '';
  position: absolute;
  background: #18bc9c;
  z-index: -1;
}
.list-ic.horizontal li {
  display: inline-block;
}
.list-ic.horizontal li span {
  margin: 0 1em;
}
.list-ic.horizontal li::before {
  top: 0.9em;
  left: -25px;
  width: 4em;
  height: 0.2em;
}
.list-ic.vertical {
  padding: 0;
  margin: 0;
}
.list-ic.vertical li {
  list-style-type: none;
  text-align: left;
}
.list-ic.vertical li span {
  margin: 1.4em 0;
}
.list-ic.vertical li::before {
  top: -35px;
  left: 13px;
  width: 0.2em;
  height: 4em;
}
.list-ic li:first-child::before {
  display: none;
}
.list-ic .active {
  background: green;
}
.list-ic .active ~ li {
  background: green;
}
.list-ic .active ~ li::before {
  background: green;
}

"focus-ring": (
  css-var: true,
  css-variable-name: focus-ring-color,
  class: focus-ring,
  values: map-loop($theme-colors-rgb, rgba-css-var, "$key", "focus-ring")
),
</style>
<div class="card" style="width: 70rem;">
  <div class="card-body">
  <h5 class="text-bold jobpost_name" style="color:#28a745;">{{ $formasi }}</h5>
    
  <p class="company_name" style="margin:0px">{{ $lokasipenempatan }}</p>
  <p><medium>Tanggal Melamar : {{ $tgl_melamar }}</medium></p>

  @if($status_peserta==null)
    <ul class="list-ic vertical">
            <li><span>1</span>	<a href="#">Administrasi : </a><a href="#" style="color:red">Proses</a> </li>
            <li><span>2</span>	<a href="#">Tes Keterampilan : </a><a href="#" style="color:green">-</a></li>
            <li><span>3</span>	<a href="#">Wawancara : </a><a href="#" style="color:blue">-</a></li>
    </ul>
    @else
    <ul class="list-ic vertical">
            <li><span>1</span>	<a href="#">Administrasi : </a><a href="#" style="color:red">Proses</a> </li>
            
    </ul>
    @endif
  </div>
</div>


@endsection
@push('custom-js')
@endpush
