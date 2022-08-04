@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">List Akun</h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title"></h4>
                                <a href="{{ route('dashboard.user.create') }}"
                                    class="btn btn-primary btn-round ml-auto">
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
                                            <th>Username</th>
                                            <th>Nama Petugas</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
    <script src="{{ asset('admin/js/plugin/datatables/datatables.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            var table = $('.datatabled').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('dashboard.user.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'username',
                        name: 'Username'
                    },
                    {
                        data: 'name',
                        name: 'Nama'
                    },
                    {
                        data: 'role',
                        name: 'Role'
                    },
                    {
                        data: 'aksi',
                        name: 'Aksi',
                        orderable: false,
                        searchable: false
                    }
                ],
                initComplete: function() {
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
                }
            });

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
