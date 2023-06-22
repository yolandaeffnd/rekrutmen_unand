@extends('layouts.pelamar')

@section('title', 'Dashboard')
@section('content-title', 'Dashboard')

@push('custom-css')
@endpush

@section('content')
<style>
/* Some basic defaults */
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


h1 { font-weight: 400; }

/* No normal bullets please */
ul {
  list-style-type: none;
}

li {
  /* You need to turn on relative positioning so the line is placed relative to the item rather than absolutely on the page */
  position: relative;
  
  /* Use padding to space things out rather than margins as the line would get broken up otherwise */
  margin-left: 0;
  padding-bottom: 1em;
  padding-left: 20px;
}

/* The actual line being placed before each list item, tweak width and color as appropriate */
li:before {
  background-color: #c00;
  width: 2px;
  content: '';
  position: absolute;
  top: 0px;
  bottom: 0px;
  left: 5px;
}

li::after {
  content: '';
  position: absolute;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' aria-hidden='true' viewBox='0 0 32 32' focusable='false'%3E%3Ccircle stroke='none' fill='%23c00' cx='16' cy='16' r='10'%3E%3C/circle%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-size: contain;
  left: 0;
  top: 2px;
  width: 12px;
  height: 12px;
}
    
/* Start the line further down on the first list item */
li:first-child:before { top: 15px;  }

/* Stop the line short on the final list item */
li:last-child:before { height: 6px; }
    
/* Styles for the SVG bullet points */
.bullet { margin-left: -20px; width: 12px; fill: #c00; float: left; padding-right: 10px }
.bullet.big { width: 16px; margin-left: -22px; padding-right: 8px }

a { color: #06e; }
</style>

<div class="card" style="width: 100%;">
  <div class="card-body">
  <h5 class="text-bold jobpost_name" style="color:#28a745;">{{ $formasi }}</h5>
    
  <p class="company_name" style="margin:0px">{{ $lokasipenempatan }}</p>
  <p><medium>Tanggal Melamar : {{ $tgl_melamar }}</medium></p>
  @php 
    $i = 1;
    $j = 0;

  
  @endphp
 
  <ul>
  @foreach($tahapan_peserta as $tp)
    <li>
      <div class="bullet big">
        <svg aria-hidden="true" viewBox="0 0 32 32" focusable="false"></svg>
      </div>
      <p class="font-weight-bold">{{$tp->subject}} :</p>
      <!-- <a href="#">{{$tp->subject}} : </a> -->
    
            @if($status_arr[$j]=="Lulus")
            <span class="badge badge-success"><i>{{$status_arr[$j]}}</i></span>
            <!-- <a href="#" style="color:green">{{$status_arr[$j]}}</a>  -->
            @else
            <!-- <a href="#" style="color:red">{{$status_arr[$j]}}</a>  -->
            <span class="badge badge-secondary"><i>{{$status_arr[$j]}}</i></span>
            @endif
     
            @php $j++; @endphp
    </li>
    @endforeach   
    
  
  </ul> 
   
  </div>
</div>


@endsection
@push('custom-js')
@endpush
