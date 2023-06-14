 @php
     $headTitle = 'Akun';
     $subTitle = 'Ubah Password';
     $contenTitle = 'Ubah Password';
 @endphp

 @extends('layouts.app')

 @section('title', $headTitle . ' - ' . $contenTitle)
 @section('content-title', $subTitle)

 @push('custom-css')
 @endpush

 @section('breadcrumbs')

 @endsection

 @section('content')

     <div class="container-fluid">
         <div class="row">
             <div class="col-12">
                 <!-- Default box -->


                 <div class="card">
                     <div class="card-header">
                         <h3 class="card-title">{{ $subTitle }}</h3>

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
                        <div class="col-md-6">

                            {!! Form::model($user, ['method' => 'PUT', 'route' => ['edit-password-update']]) !!}

                            <div class="mb-3">
                                <label class="form-label">Password Lama</label>
                                <input type="text" name="password-lama" value="" class="form-control form-control-sm">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password Baru</label>
                                <input type="text" name="password-baru" value="" class="form-control form-control-sm">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password Baru Konfirmasi</label>
                                <input type="password" name="password-baru_confirmation" value="" class="form-control form-control-sm">
                            </div>


                            <div class="mb-3">
                                <input type="submit" name="submit" value="Update" class="btn btn-primary">
                            </div>
                            {{-- </form> --}}
                            {{ Form::close() }}
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

@endpush
