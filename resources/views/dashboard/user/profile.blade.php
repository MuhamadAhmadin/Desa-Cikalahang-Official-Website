@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <h4 class="page-title">User Profile</h4>
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-with-nav">
                        <div class="card-header">
                            <div class="row row-nav-line">
                                <ul class="nav nav-tabs nav-line nav-color-secondary w-100 pl-3" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home"
                                            role="tab" aria-selected="true">Profile</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
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
                            <form action="{{ route('dashboard.user.profile_update') }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="name" placeholder="Nama Lengkap"
                                                value="{{ $user->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="email" placeholder="Email"
                                                value="{{ $user->email }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Password baru" value="">
                                        </div>
                                        <small>Kosongkan jika tidak ingin dirubah</small>
                                    </div>
                                </div>

                                <div class="text-right mt-3 mb-3">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
