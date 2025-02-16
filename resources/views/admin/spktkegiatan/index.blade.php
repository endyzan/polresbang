@extends('layouts.app')

@section('content')
<div class="container">


    <div class="header-user">
        <h1>DAFTAR FOTO KEGIATAN SPKT</h1>
    </div>
    <div class="divider"></div>
    <a href="{{ route('admin.spktkegiatan.create') }}" class="btninti"><i class="bi bi-plus-lg"></i></a>


    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Foto Kegiatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($spktkegiatan as $spkt)
                <tr>
                    <td><img src="{{ asset('storage/' . $spkt->foto_spktkegiatan) }}" width="100"></td>
                    <td>
                        <form action="{{ route('admin.spktkegiatan.destroy', $spkt->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
