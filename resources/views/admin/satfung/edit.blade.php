@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Edit Satfung</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.satfung.update', $satfung->id) }}" method="POST" enctype="multipart/form-data" class="edit-form">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_satfung" class="form-label">Nama Satfung</label>
                    <input type="text" name="nama_satfung" class="form-control" value="{{ $satfung->nama_satfung }}" required>
                </div>
                <div class="form-group">
                    <label for="logo_satfung" class="form-label">Logo Satfung</label>
                    <input type="file" name="logo_satfung" class="form-control">
                    @if($satfung->logo_satfung)
                        <img src="{{ asset('storage/' . $satfung->logo_satfung) }}" width="100" class="mt-2 img-preview">
                    @endif
                </div>

                
                <div class="form-group">
                    <label for="deskripsi_satfung" class="form-label">Deskripsi Satfung</label>
                    <textarea name="deskripsi_satfung" id="deskripsi_satfung" class="form-control" required>{{ $satfung->deskripsi_satfung }}</textarea>
                </div>




                <div class="form-group">
                    <label for="foto" class="form-label">Foto Bangunan</label>
                    <input type="file" name="foto" class="form-control">
                    @if($satfung->foto)
                        <img src="{{ asset('storage/' . $satfung->foto) }}" width="100" class="mt-2 img-preview">
                    @endif
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-save">Simpan Perubahan</button>
                    <a href="{{ route('admin.satfung.index') }}" class="btn btn-cancel">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- TinyMCE Script (Self-Hosted) -->
<script src="{{ asset('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>
  tinymce.init({
    selector: 'textarea#deskripsi_satfung',
    plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    menubar: false,
    height: 300,
    content_style: 'body { font-family: Arial, sans-serif; font-size: 14px; }',
  });
</script>
@endsection