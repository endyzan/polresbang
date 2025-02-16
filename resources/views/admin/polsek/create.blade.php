@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Tambah Polsek Baru</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.polsek.store') }}" method="POST" enctype="multipart/form-data" class="create-form">
                @csrf
                <div class="form-group">
                    <label for="nama_polsek" class="form-label">Nama Polsek</label>
                    <input type="text" name="nama_polsek" class="form-control @error('nama_polsek') is-invalid @enderror" value="{{ old('nama_polsek') }}" required>
                    @error('nama_polsek')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="foto_kapolsek" class="form-label">Foto Kapolsek</label>
                    <input type="file" name="foto_kapolsek" class="form-control @error('foto_kapolsek') is-invalid @enderror" required>
                    @error('foto_kapolsek')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi_kapolsek" class="form-label">Deskripsi Kapolsek</label>
                    <textarea name="deskripsi_kapolsek" id="deskripsi_kapolsek" class="form-control @error('deskripsi_kapolsek') is-invalid @enderror" required>{{ old('deskripsi_kapolsek') }}</textarea>
                    @error('deskripsi_kapolsek')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="foto_bangunan" class="form-label">Foto Bangunan</label>
                    <input type="file" name="foto_bangunan" class="form-control @error('foto_bangunan') is-invalid @enderror" required>
                    @error('foto_bangunan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-save">Simpan</button>
                    <a href="{{ route('admin.polsek.index') }}" class="btn btn-cancel">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- TinyMCE Script (Self-Hosted) -->
<script src="{{ asset('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>
  tinymce.init({
    selector: 'textarea#deskripsi_kapolsek',
    plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    menubar: false,
    height: 300,
    content_style: 'body { font-family: Arial, sans-serif; font-size: 14px; }',
  });
</script>
@endsection
