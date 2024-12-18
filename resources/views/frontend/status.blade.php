@extends('layouts.master')
@section('title', 'Status')

@section('body')
    <main class="container mx-auto p-4">
        <section id="status" class="bg-white p-6 rounded-lg shadow-md">

            <h2 class="text-2xl font-bold mb-4">Status</h2>
            <table class="w-full border-collapse">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left">No</th>
                        <th class="px-4 py-2 text-left">Nama</th>
                        <th class="px-4 py-2 text-left">Jenis Cuti</th>
                        <th class="px-4 py-2 text-left">Tanggal</th>
                        <th class="px-4 py-2 text-left">Status</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($status as $data)
                        <tr class="border-b text-black">
                            <td class="px-4 py-2">{{ $data->id }}</td>
                            <td class="px-4 py-2">{{ $data->nama }}</td>
                            <td class="px-4 py-2">{{ $data->jeniscuti }}</td>
                            <td class="px-4 py-2">{{ $data->tanggal_izin }}</td>
                            <td class="px-4 py-2">
                                @if ($data->status == 'accepted')
                                    <span
                                        class="bg-green-200 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Accepted</span>
                                @elseif ($data->status == 'rejected')
                                    <span
                                        class="bg-red-200 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Rejected</span>
                                @else
                                    <span
                                        class="bg-yellow-200 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">Pending</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
@endsection
