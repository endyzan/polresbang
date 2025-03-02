@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Tambah Satfung Baru</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.satfung.store') }}" method="POST" enctype="multipart/form-data" class="create-form">
                @csrf
                <div class="form-group">
                    <label for="nama_satfung" class="form-label">Nama Satfung</label>
                    <input type="text" name="nama_satfung" class="form-control @error('nama_satfung') is-invalid @enderror" value="{{ old('nama_satfung') }}" required>
                    @error('nama_satfung')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="logo_satfung" class="form-label">Logo Satfung</label>
                    <input type="file" name="logo_satfung" class="form-control @error('logo_satfung') is-invalid @enderror" required>
                    @error('logo_satfung')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi_satfung" class="form-label">Deskripsi Satfung</label>
                    <textarea name="deskripsi_satfung" id="deskripsi_satfung" class="form-control @error('deskripsi_satfung') is-invalid @enderror" required>{{ old('deskripsi_satfung') }}</textarea>
                    @error('deskripsi_satfung')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="foto" class="form-label">Foto Bangunan</label>
                    <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" required>
                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-save">Simpan</button>
                    <a href="{{ route('admin.satfung.index') }}" class="btn btn-cancel">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- TinyMCE Script (Self-Hosted) -->
@push('scripts')
<script src="{{ asset('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>
  tinymce.init({
    selector: 'textarea#deskripsi_satfung',
    plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    menubar: false,
    height: 300,
    content_style: 'body { font-family: Arial, sans-serif; font-size: 14px; }',
    setup: function (editor) {
      editor.on('change', function () {
        tinymce.triggerSave();
      });
    }
  });
</script>
@endpush
@endsection
