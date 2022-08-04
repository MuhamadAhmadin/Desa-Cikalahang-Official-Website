@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">List Sub Menu</h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title"></h4>
                                <a href="{{ route('dashboard.sub_menu.create') }}"
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
                                            <th>Parent Menu</th>
                                            <th>Nama Menu</th>
                                            <th>Tipe Menu</th>
                                            <th>Urutan</th>
                                            <th>Visible</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($sub_menu as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->menu->nama }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->page_id != null ? 'Halaman' : 'Link' }}</td>
                                            <td>{{ $item->urutan }}</td>
                                            <td>{{ $item->visible == 1 ? 'Yes' : 'No' }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('dashboard.sub_menu.edit', $item->id) }}" class="btn btn-sm btn-warning mr-2">Edit</a>
                                                    <form action="{{ route('dashboard.sub_menu.destroy', $item->id) }}" method="POST">
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
