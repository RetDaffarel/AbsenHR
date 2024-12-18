@extends('layouts.master')
@section('title', 'Notification')


@section('body')

<main class="container mx-auto p-4">
    <section id="notification" class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Notifikasi </h2>
        <ul class="space-y-4">
            @foreach ($notification as $data)
            <li class="flex justify-between items-center">
                <div>
                    <p>Nama: <span class="font-bold">{{$data->nama}}</span></p>
                    <p>Alasan Cuti: <span class="font-bold">{{$data->keterangan}}</span></p>
                </div>
                <div class="flex space-x-2">
                    <form action="/form/accept/{{ $data->id }}" method="post">
                        @csrf
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Setuju</button>
                    </form>
                    <form action="/form/delete/{{ $data->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Tolak</button>
                    </form>
                </div>
            </li>
            @endforeach
            <!-- <li class="flex justify-between items-center">
                <div>
                    <p>Nama: <span class="font-bold">Nama</span></p>
                    <p>Alasan Cuti: <span class="font-bold">Alasan</span></p>
                </div>
                <div class="flex space-x-2">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Setuju</button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Tolak</button>
                </div>
            </li> -->
        </ul>
    </section>
</main>

@endsection
