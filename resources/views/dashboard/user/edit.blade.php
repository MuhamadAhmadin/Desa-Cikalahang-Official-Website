@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <a href="{{ route('dashboard.user.index') }}">
                                Kembali
                            </a>
                            <div class="card-title">Edit Akun</div>
                        </div>
                        @if ($errors->any())
                            <div class="card-body">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li class="text-danger">
                                            {{ $item }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('dashboard.user.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nama Petugas <span class="text-danger text-bold">*</span></label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ old('name') ?? $user->name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email <span class="text-danger text-bold">*</span></label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ old('email') ?? $user->email }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <small class="text-muted">Kosongkan jika tidak ingin dirubah</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- Bootstrap Toggle -->
    <script src="{{ asset('') }}/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
@endpush
