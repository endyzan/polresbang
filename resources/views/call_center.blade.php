@extends('layouts.apps')

@section('title', 'Visi Misi')
@section('meta_description', 'Visi Misi Polres Bangkalan')

@section('content')
<div class="container-sambutankap">
    <div class="header-user">
        <h1>Hubungi Kami</h1>
    </div>
    <div class="content-user-gabung callcenter">
        <div class="max-w-lg mx-auto bg-white p-8 rounded-2xl shadow-md">
            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-4">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ url('/send-message') }}" method="POST">
                @csrf
                <div class="callcenter mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Nama</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="callcenter mb-4">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email Anda" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="callcenter mb-4">
                    <label for="message" class="block text-gray-700 font-medium mb-2">Pesan</label>
                    <textarea id="message" name="message" rows="4" placeholder="Tulis pesan Anda di sini" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg font-semibold hover:bg-blue-600 transition">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>
@endsection
