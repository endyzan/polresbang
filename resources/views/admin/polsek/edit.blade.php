@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Edit Polsek</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.polsek.update', $polsek->id) }}" method="POST" enctype="multipart/form-data" class="edit-form">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_polsek" class="form-label">Nama Polsek</label>
                    <input type="text" name="nama_polsek" class="form-control" value="{{ $polsek->nama_polsek }}" required>
                </div>
                <div class="form-group">
                    <label for="foto_kapolsek" class="form-label">Foto Kapolsek</label>
                    <input type="file" name="foto_kapolsek" class="form-control">
                    @if($polsek->foto_kapolsek)
                        <img src="{{ asset('storage/' . $polsek->foto_kapolsek) }}" width="100" class="mt-2 img-preview">
                    @endif
                </div>

                
                <div class="form-group">
                    <label for="deskripsi_kapolsek" class="form-label">Deskripsi Kapolsek</label>
                    <textarea name="deskripsi_kapolsek" id="deskripsi_kapolsek" class="form-control" required>{{ $polsek->deskripsi_kapolsek }}</textarea>
                </div>




                <div class="form-group">
                    <label for="foto_bangunan" class="form-label">Foto Bangunan</label>
                    <input type="file" name="foto_bangunan" class="form-control">
                    @if($polsek->foto_bangunan)
                        <img src="{{ asset('storage/' . $polsek->foto_bangunan) }}" width="100" class="mt-2 img-preview">
                    @endif
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-save">Simpan Perubahan</button>
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