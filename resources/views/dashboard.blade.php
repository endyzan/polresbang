@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-gray-800 text-center mb-6">Dashboard Admin</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Kartu Daftar Polsek -->
        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition">
            <div class="flex items-center space-x-4">
                <div class="bg-blue-500 p-3 rounded-full text-white">
                    <i class="fas fa-building text-2xl"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700">Daftar Polsek</h3>
                    <p class="text-gray-500">Kelola data polsek yang terdaftar</p>
                </div>
            </div>
            <a href="{{ route('admin.polsek.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">Lihat Data</a>
        </div>

        <!-- Kartu Pengguna -->
        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition">
            <div class="flex items-center space-x-4">
                <div class="bg-green-500 p-3 rounded-full text-white">
                    <i class="fas fa-users text-2xl"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700">Pengguna</h3>
                    <p class="text-gray-500">Kelola data pengguna sistem</p>
                </div>
            </div>
            <a href="#" class="mt-4 inline-block text-green-600 hover:underline">Kelola Pengguna</a>
        </div>

        <!-- Kartu Laporan -->
        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition">
            <div class="flex items-center space-x-4">
                <div class="bg-red-500 p-3 rounded-full text-white">
                    <i class="fas fa-chart-line text-2xl"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700">Laporan</h3>
                    <p class="text-gray-500">Pantau laporan dan statistik</p>
                </div>
            </div>
            <a href="#" class="mt-4 inline-block text-red-600 hover:underline">Lihat Laporan</a>
        </div>
    </div>
</div>
@endsection
