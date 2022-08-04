@extends('layouts.dashboard')


@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Tambah Slider</div>
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
                        <form action="{{ route('dashboard.slider.store') }}" method="POST" enctype="multipart/form-data"
                            class="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Gambar <span class="text-danger">*</span></label>
                                            <input type="file" name="thumbnail" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label>Title <span class="text-danger">*</span></label>
                                            <input type="text" name="title" class="form-control"
                                                value="{{ old('title') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Urutan</label>
                                            <input type="text" name="urutan" class="form-control"
                                                value="{{ old('urutan') ?? 1 }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Subtitle <span class="text-danger">*</span></label>
                                            <textarea name="subtitle" id="subtitle" class="form-control" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Teks Tombol <span class="text-danger">*</span></label>
                                            <input type="text" name="btn_text" id="btn_text" class="form-control" value="Teks Tombol">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Link Tombol <span class="text-danger">*</span></label>
                                            <input type="text" name="btn_link" id="btn_link" class="form-control" required>
                                            <small>Beri isian # jika tidak ada link</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tombol <span class="text-danger">*</span></label> <br>
                                            <a class="btn btn-primary" href="javascript:void(0)" id="btn">Teks Tombol</a>
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
    <!-- Bootstrap Toggle -->
    <script src="{{ asset('') }}admin/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

    <script>

    </script>
@endpush
