@extends('layouts.app')

@section('title', 'Manage')
@section('content-title', 'Edit')

@push('custom-css')
@endpush



@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Edit Jenis Formasi') }}</h3>

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
                        {{-- <form action="{{ route('jenisformasi-update', $jenis_formasi->id) }}" > --}}

                            {!! Form::model($jenis_formasi, ['method' => 'PUT', 'route' => ['jenisformasi-update', $jenis_formasi->id]]) !!}
                  
                                @csrf

                            
                                <div class="mb-3">
                                    
                                    <label class="form-label">Jenis Formasi</label>
                                    <input type="text" name="nama_jenis" value="{{ $jenis_formasi->nama_jenis }}"
                                        class="form-control form-control-sm">
                                </div>
                              
                                <table class="table table-bordered" id="dynamicAddRemove">
                                <tr>
                                    <th>Tahapan Penyelisihan</th>
                                    <th>Action</th>
                                </tr>
                                @php
                                 
                                    $tampung = json_decode($jenis_formasi->tahapan);
                                              $i=0;     
                                @endphp
                                @foreach($tampung as $tp)
                                @if($i==0)
                                <tr>
                                    <td><input type="text" name="tahapan[{{$i}}][subject]" value="{{$tp->subject}}" placeholder="Enter subject" class="form-control" />
                                    </td>
                                    <!-- <td><input type="text" name="tahapan[0][subject]" placeholder="Enter subject" class="form-control" /> -->
                                    <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Tambah</button></td>
                                </tr>
                                
                                @else
                                
                                <tr>
                                    <td><input type="text" name="tahapan[{{$i}}][subject]" value="{{$tp->subject}}" placeholder="Enter subject" class="form-control" />
                                    </td>
                                    <td><button type="button" class="btn btn-outline-danger remove-input-field">Hapus</button></td>
                                </tr>

                                @endif
                                @php 
                                    $i++;
                                @endphp

                                @endforeach
                                </table>


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
    
       <!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="tahapan[' + i +
            '][subject]" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Hapus</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
@endpush
