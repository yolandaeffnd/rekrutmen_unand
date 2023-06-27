@extends('layouts.app')

@section('title', 'Notifikasi')
@section('content-title', 'Tambah')

@push('custom-css')
@endpush

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Tambah') }}</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (count($errors) > 0)
                            {{ z_alert('danger', false, $errors->all()) }}
                        @endif

                        <p><a href="{{ route('notifikasi.index') }}" class="btn btn-info btn-xs">Kembali</a></p>

                        <div class="col-md-6">
                            <form action="{{ route('article.store') }}" method="POST">

                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Judul</label>
                                    <input type="text" name="judul" value="{{ old('judul') }}"
                                        class="form-control form-control-sm">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Isi</label>
                                    {!! Form::textarea('isi', old('isi'), ['class' => 'form-control form-control-sm', 'id' => 'my-editor']) !!}
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="formasi">Formasi</label>
                                    <select class="form-control" name="id_formasi" id="formasi">
                                        <option value>- Pilih -</option>
                                        @foreach ($formasis as $formasi)
                                            {{-- {{print_r($userRole)}} --}}
                                            <option value="{{ $formasi->id }}"
                                                {{ $formasi->id == old('id_formasi') ? 'selected' : '' }}>{{ $formasi->jabatan }}
                                              
                                            </option>
                                           
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="tahapan" class="form-label" for="tahapan">Tahapan</label>
                                    <select class="form-control" name="tahapan" id="tahapan"></select>
                                </div>

                                <div class="mb-3">
                                    <input type="submit" name="submit" value="Save" class="btn btn-primary">
                                </div>
                            </form>
                        </div>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <small><i>{{ z_footer() }}</i></small>
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection

@push('custom-js')
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('my-editor');
    </script>

    <script>
        function edValueKeyPress() {
            // var edValue = document.getElementById("username");
            // var s = edValue.value;

            // var lblValue = document.getElementById("passwordGetFromUsername");
            // lblValue.innerText = s;
            const value = event.target.value;
            document.getElementById("passwordGetFromUsername").innerText = value;
        }

        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2({
                theme: 'bootstrap4'
            });

        });
    </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
            $('#formasi').on('change', function() {
               var tahapanID = $(this).val(); 
               console.log(tahapanID);
               if(tahapanID) {
                   $.ajax({
                       url: '/apps/getTahapan/'+tahapanID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#tahapan').empty();
                            $('#tahapan').append('<option hidden>Pilih tahapan</option>'); 
                            $.each(data, function(key, tahapan){
                                $('select[name="tahapan"]').append('<option value="'+ key +'">' + tahapan + '</option>');
                            });
                        }else{
                            $('#tahapan').empty();
                        }
                     }
                   });
               }else{
                 $('#tahapan').empty();
               }
            });
            });
        </script>


@endpush
