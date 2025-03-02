@extends('layouts.app')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')
<div class="container position-relative">
    <div class="header-user">
        <h1>DAFTAR SATFUNG</h1>
    </div>
    <div class="divider"></div>
    <a href="{{ route('admin.satfung.create') }}" class="btninti"><i class="bi bi-plus-lg"></i></a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Satfung</th>
                <th>Logo Satfung</th>
                <th>Deskripsi Satfung</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($satfung as $satf)
            <tr>
                <td>{{ $satf->nama_satfung }}</td>
                <td><img src="{{ asset('storage/' . $satf->logo_satfung) }}" width="100"></td>
                <td class="deskripsi-satfung">
                    {{ Str::limit($satf->deskripsi_satfung, 50, '...') }}
                </td>
                <td><img src="{{ asset('storage/' . $satf->foto) }}" width="100"></td>
                <td>
                    <a href="{{ route('admin.satfung.show', $satf->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                    <a href="{{ route('admin.satfung.edit', $satf->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                    <form action="{{ route('admin.satfung.destroy', $satf->id) }}" method="POST" style="display:inline;">
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
