@extends('layouts.app')

@section('title', 'Artikel')
@section('content-title', 'Data')

@push('custom-css')
@endpush

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List</h3>

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
                        {{-- Get Data User --}}
                        <p><a href="{{ route('article.create')}}" class="btn btn-info btn-xs">Tambah</a></p>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Isi</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Penulis</th>
                                        <th scope="col">Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($articles->isNotEmpty())
                                        @foreach ($articles as $key => $article)
                                            <tr>
                                                <th scope="row">{{ $key + 1 }}</th>
                                                <td>{{ $article->id }}</td>
                                                <td>{{ $article->image }}</td>
                                                <td>{{ $article->name }}</td>
                                                <td><a
                                                        href="{{ route('article.show', $article->id) }}">{{ $article->judul }}</a>
                                                </td>
                                                <td>{{ $article->isi }}</td>
                                                <td>{{ $article->kategori->name }}</td>
                                                <td>{{ $article->user->name }}</td>

                                                <td>
                                                    <a href="{{ route('article.edit', $article['id'])}}"
                                                        class="btn btn-warning btn-xs"> <i
                                                            class="far fa-edit icon-size"></i></a>

                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['article.destroy', $article->id], 'style' => 'display:inline']) !!}
                                                    {{ Form::button('<i class="far fa-trash-alt icon-size"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs show_confirm']) }}
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5"
                                                style="text-align:center; background-color: rgb(223, 223, 223); ">Tidak ada
                                                data</td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                            {!! $articles->appends(Request::all())->links() !!}
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
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: 'Are you sure you want to delete this record?',
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endpush
