@extends('layouts.pelamar')

@section('title', 'Dashboard')
@section('content-title', 'Dashboard')

@push('custom-css')
@endpush


@section('content')

    @php
        $no = 1;
        $data_form = json_decode($data_form->data, true);
    @endphp

    <div class="mb-5 p-4 bg-white shadow-sm">
        <h3>Registration</h3>
        <div id="stepper2" class="bs-stepper">
            <div class="bs-stepper-header">

                @include('pelamar/steper')

            </div>

            <div class="bs-stepper-content">
                <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane active dstepper-block"
                    aria-labelledby="stepper2trigger1">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-fixed">
                                <tr>
                                    <th class="col-1">No.</th>
                                    <th class="col-5">Nama Dokumen</th>
                                    <th class="col-4">Action</th>
                                    <th class="col-2">Uploaded</th>
                                </tr>
                                @foreach ($data_form as $key => $val)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $val['label'] }}</td>
                                        <td>
                                            <form action="" method="POST" id="form-{{ $key }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="col-auto d-flex align-items-center">

                                                    <input name="kode" id="{{ $key }}"
                                                        value="{{ $key }}" type="hidden">
                                                    <input name="file" id="{{ $key }}" type="file">
                                                    <div class="btn-group">
                                                        <button class="btn btn-primary start" name="{{ $key }}"
                                                            id="{{ $key }}" type="submit">
                                                            <i class="fas fa-upload"></i>
                                                            <span>Start</span>
                                                        </button>

                                                        <a href="" onclick="myDelete('{{ $key }}',event);"
                                                            class="btn btn-danger delete">
                                                            <i class="fas fa-trash"></i>
                                                            <span>Delete</span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </form>

                                            <div id="progres-{{ $key }}" class="progress-bar" role="progressbar"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                                <span class="sr-only">0% Complete</span>
                                            </div>
                                            <div id="message-{{ $key }}"></div>
                                        </td>
                                        <td>
                                            <div id="data-{{ $key }}">
                                                @if ($upload_dokumen->$key)
                                                    <span class='text-info'>
                                                        <a href="#" class='btn btn-info btn-md'
                                                            onclick="window.open('{{ url($upload_dokumen->$key) }}', 'parent', 'location=yes,height=570,width=520,scrollbars=yes,status=yes,menubar=no'); return false;">
                                                            Lihat
                                                        </a>
                                                    </span>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>

                    <form action="{{ route('reg-upload-berkas-next') }}" method="POST">
                        @csrf
                        <a href="{{ route('reg-formasi') }}" class="btn btn-primary">Previous</a>
                        <input type="submit" class="btn btn-primary" id="submit" value="Save & Next">
                    </form>





                </div>

            </div>
        </div>
    </div>
@endsection

@push('custom-js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        @foreach ($data_form as $key => $val)

            $(document).ready(function() {

                $('#form-{{ $key }}').on('submit', function(event) {
                    event.preventDefault();
                    var formData = new FormData($('#form-{{ $key }}')[0]);

                    //formData.append('file-append', $('#form-{{ $key }}')[0].files);

                    $.ajax({
                        xhr: function() {
                            var xhr = new window.XMLHttpRequest();
                            xhr.upload.addEventListener('progress', function(e) {
                                var percent = Math.round((e.loaded / e.total) * 100);
                                $('#progres-{{ $key }}').attr('aria-valuenow',
                                    percent).css(
                                    'width',
                                    percent + '%').text(percent + '%');
                            });
                            return xhr;
                        },

                        type: 'POST',
                        url: "{{ route('reg-upload-berkas-store') }}",
                        data: formData,
                        processData: false,
                        contentType: false,
                        dataType: 'json',
                        success: function(response) {
                            console.log("Hello world!");
                            $('#form-{{ $key }}')[0].reset();
                            if (response.success == 1)
                                $('#message-{{ $key }}').html(
                                    "<span class='text-success'><i>Success : " + response
                                    .message + "</i></span>"),
                                $('#data-{{ $key }}').html(
                                    "<span class='text-info'><a href='" + response.filepath +
                                    "' target='blank' class='btn btn-info btn-md'>Lihat</a></span>"
                                );
                            // setTimeout(function() {
                            //     $("#success-{{ $key }}").html(
                            //         "<span class='text-success'><i>Success : " + response.message + "</i></span>")
                            // }, 2000);
                            else if (response.success == 2)
                                $('#message-{{ $key }}').html(
                                    "<span class='text-danger'><i>Warning : " + response
                                    .message + "</i></span>");
                            else if (response.success == 0)
                                $('#message-{{ $key }}').html(
                                    "<span class='text-danger'><i>Warning : " + response.error +
                                    "</i></span>");


                            $('#progres-{{ $key }}').html("");
                        }
                    });
                });

            });
        @endforeach


        function myDelete(kode, e) {
            e.preventDefault();
            if (confirm("Are you sure you want to Delete the file?") == true) {
                if (kode != '') {
                    $.ajax({
                        type: 'delete',
                        url: '{{ route('reg-upload-berkas-delete') }}',
                        data: {
                            kode: kode,
                        },
                        success: function(response) {
                            $('#message-' + kode).html("<span class='text-warning'><i>Menghapus...</i></span>")
                            if (response.success == 1)
                                setTimeout(function() {
                                    $("#message-" + kode).html("<span class='text-success'><i>Success : " +
                                            response
                                            .message + "</i></span>"),
                                        $('#data-' + kode).html("")
                                }, 2000);

                        }
                    });
                }
            }
        }
    </script>
@endpush
