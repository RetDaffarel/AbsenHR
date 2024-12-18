@extends('layouts.master')
@section('title', 'Form')

@section('body')
    <main class="container mx-auto p-4">
        {{-- @if (Session::has('success'))
    <div class="flex justify-center items-center m-1 font-medium py-1 px-2 rounded-md text-green-700 bg-green-100 border border-green-300 ">
        <div slot="avatar">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
        </div>
        <div class="text-xl font-normal  max-w-full flex-initial">
            {{session::get('success')}}</div>
        <div class="flex flex-auto flex-row-reverse">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-green-400 rounded-full w-5 h-5 ml-2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </div>
        </div>
    </div>
    @endif --}}
        <section id="form" class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Formulir Cuti</h2>
            <form action="/form" method="POST">
                @csrf
                <div class="mb-4" @required(true)>
                    <label for="nama" class="block text-gray-700 font-bold mb-2">Nama</label>
                    <input type="text" id="nama" name="nama" value="{{ auth()->user()->name }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500"@readonly(true)>
                </div>
                <div class="mb-4"@required(true)>
                    <label for="nrk" class="block text-gray-700 font-bold mb-2">NRK</label>
                    <input type="text" id="nrk" name="nrk" value="{{ auth()->user()->nrk }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500"@readonly(true)>
                </div>
                <div class="mb-4"@required(true)>
                    <label for="jeniscuti" class="block text-gray-700 font-bold mb-2">Jenis Cuti</label>
                    <input type="text" id="jeniscuti" name="jeniscuti"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="mb-4"@required(true)>
                    <label for="keterangan" class="block text-gray-700 font-bold mb-2">Keterangan Cuti</label>
                    <textarea id="keterangan" name="keterangan"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>
                <div class="mb-4"@required(true)>
                    <label for="tanggal_izin" class="block text-gray-700 font-bold mb-2">Tanggal Izin</label>
                    <input type="date" id="tanggal_izin" name="tanggal_izin"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>
                <button type="submit" @required(true)
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
            </form>
        </section>
    </main>
@endsection
