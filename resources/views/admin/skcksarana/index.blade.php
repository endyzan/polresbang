@extends('layouts.app')

@section('content')
<div class="container">


    <div class="header-user">
        <h1>DAFTAR FOTO SARANA SKCK</h1>
    </div>
    <div class="divider"></div>
    <a href="{{ route('admin.skcksarana.create') }}" class="btninti"><i class="bi bi-plus-lg"></i></a>


    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Foto Sarana</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($skcksarana as $skck)
                <tr>
                    <td><img src="{{ asset('storage/' . $skck->foto_skcksarana) }}" width="100"></td>
                    <td>
                        <form action="{{ route('admin.skcksarana.destroy', $skck->id) }}" method="POST">
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
