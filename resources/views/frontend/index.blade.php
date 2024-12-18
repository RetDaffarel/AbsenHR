@extends('layouts.master')
@section('title', 'Dashboard')
@section('body')
    <main class="container mx-auto p-4">
        <section id="dashboard" class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Selamat Datang {{auth()->user()->name}}</h2>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="bg-blue-100 p-4 rounded-lg">
                    <p class="text-gray-700">Pegawai Masuk: 232</p>
                </div>
                <div class="bg-red-100 p-4 rounded-lg">
                    <p class="text-gray-700">Pegawai Izin: {{ $data }}</p>

                </div>
            </div>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nama</label>
                <input type="text" id="name"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="keterangan" class="block text-gray-700 font-bold mb-2">Keterangan</label>
                <textarea id="keterangan"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
        </section>
    </main>
@endsection
