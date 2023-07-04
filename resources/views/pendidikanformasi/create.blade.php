@extends('layouts.app')

@section('title', 'Manage')
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
                        <h3 class="card-title">{{ __('Tambah Jenis Formasi') }}</h3>

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
                            <form action="{{ route('formasipendidikan-store') }}" method="POST">
                       
                                @csrf

                            
                                <div class="mb-3">
                                  <label class="form-label">Formasi</label>
                                  <select class="form-control" name="id_formasi">
                                      <option value>- Pilih -</option>
                                      @foreach ($formasis as $key => $formasisJabatan)
                                          {{-- {{print_r($userRole)}} --}}
                                          <option value="{{ $key }}"
                                              {{ $key == old('id_formasi') ? 'selected' : '' }}>{{ $formasisJabatan }}
                                          </option>
                                      @endforeach
                                  </select>
                              </div>
                              
                              <div class="form-group mb-3">
                                <label for="select2Multiple">Multiple Tags</label>
                                <select class="select2-multiple form-control" name="tags[]" multiple="multiple"
                                  id="select2Multiple">
                                  @foreach ($pendidikan as $key => $pendidikanName)
                                          {{-- {{print_r($userRole)}} --}}
                                          <option value="{{ $key }}"
                                              {{ $key == old('id_pendidikan') ? 'selected' : '' }}>{{ $pendidikanName }}
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
       
      <script>
        $(document).ready(function() {
            // Select2 Multiple
            $('.select2-multiple').select2({
                placeholder: "Select",
                allowClear: true
            });

        });

    </script>
@endpush

