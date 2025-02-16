@extends('layouts.app')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')
<div class="container position-relative">
    <div class="header-user">
        <h1>DAFTAR POLSEK</h1>
    </div>
    <div class="divider"></div>
    <a href="{{ route('admin.polsek.create') }}" class="btninti"><i class="bi bi-plus-lg"></i></a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Polsek</th>
                <th>Foto Kapolsek</th>
                <th>Deskripsi Kapolsek</th>
                <th>Foto Bangunan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($polseks as $polsek)
            <tr>
                <td>{{ $polsek->nama_polsek }}</td>
                <td><img src="{{ asset('storage/' . $polsek->foto_kapolsek) }}" width="100"></td>
                <td class="deskripsi-kapolsek">
                    {{ Str::limit($polsek->deskripsi_kapolsek, 50, '...') }}
                </td>
                <td><img src="{{ asset('storage/' . $polsek->foto_bangunan) }}" width="100"></td>
                <td>
                    <a href="{{ route('admin.polsek.show', $polsek->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                    <a href="{{ route('admin.polsek.edit', $polsek->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                    <form action="{{ route('admin.polsek.destroy', $polsek->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-icon"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach

            

        </tbody>
    </table>
</div>
@endsection
