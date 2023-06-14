@extends('layouts.app')

@section('title', 'Artikel')
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

                        <p><a href="{{ route('article.index') }}" class="btn btn-info btn-xs">Kembali</a></p>

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
                                    <label class="form-label">Kategori</label>
                                    <select class="form-control" name="id_cat">
                                        <option value>- Pilih -</option>
                                        @foreach ($categories as $categori)
                                            {{-- {{print_r($userRole)}} --}}
                                            <option value="{{ $categori->id }}"
                                                {{ $categori->id == old('id_cat') ? 'selected' : '' }}>{{ $categori->name }}
                                            </option>
                                        @endforeach
                                    </select>
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
@endpush
