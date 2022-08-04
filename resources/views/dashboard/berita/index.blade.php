@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">List Berita</h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title"></h4>
                                <a href="{{ route('dashboard.berita.create') }}"
                                    class="btn btn-sm btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Tambah
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover datatabled">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Thumbnail</th>
                                            <th>Judul</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($berita as $item)
                                        <tr>
                                            <td width="10">{{ $loop->iteration }}</td>
                                            <td width="50"><img src="{{ ($item->thumbnail == '') ? asset('img/default.png') : url(Storage::url($item->thumbnail)) }}" alt="" width="120" class="p-2"></td>
                                            <td>
                                                <h5>{{ $item->judul }}</h5>
                                                <small>{!! $item->visible == 1 ? '<span class="badge badge-success">Publish</span>' : '<span class="badge badge-warning">Draft</span>' !!}</small>
                                                <span class="badge badge-info"> {{ $item->kategori->nama }} </span>
                                            </td>
                                            <td width="50">
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('berita.show', $item->slug) }}" class="btn btn-sm btn-primary mr-2" target="_blank">Preview</a>
                                                    <a href="{{ route('dashboard.berita.edit', $item->id) }}" class="btn btn-sm btn-warning mr-2">Edit</a>
                                                    <form action="{{ route('dashboard.berita.destroy', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger buttonDeletion">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- Datatables -->
    <script src="{{ asset('') }}admin/js/plugin/datatables/datatables.min.js"></script>

    <script>
        $(document).ready(function() {

            $('.datatabled').dataTable();

            $(document).on('click', '.buttonDeletion', function(e) {
                e.preventDefault();
                let form = $(this).parents('form');

                swal({
                    title: 'Apakah Anda yakin ingin menghapus data ini?',
                    text: "Data yang dihapus tidak bisa dikembalikan",
                    type: 'warning',
                    buttons: {
                        confirm: {
                            text: 'Ya, Hapus!',
                            className: 'btn btn-success'
                        },
                        cancel: {
                            visible: true,
                            className: 'btn btn-danger'
                        }
                    }
                }).then((Delete) => {
                    if (Delete) {
                        form.submit()
                        swal({
                            title: 'Dikonfirmasi!',
                            text: 'Data akan dihapus.',
                            type: 'success',
                            buttons: {
                                confirm: {
                                    className: 'btn btn-success'
                                }
                            }
                        });
                    } else {
                        swal.close();
                    }
                });
            })
        })

    </script>
@endpush
