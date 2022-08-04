@extends('layouts.dashboard')


@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Tambah Page</div>
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
                        <form action="{{ route('dashboard.page.store') }}" method="POST" enctype="multipart/form-data" class="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Page <span class="text-danger">*</span></label>
                                            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12 check-mobile">
                                        <div class="form-group">
                                            <label class="check-mobile-label">Konten</label>
                                            <textarea name="konten" class="form-control check-mobile-form ckeditor"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button type="submit" class="btn btn-success formSubmitter">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- CKEditor -->
    <script src="{{ asset('') }}admin/js/plugin/ckeditor/ckeditor.js"></script>
@endpush
