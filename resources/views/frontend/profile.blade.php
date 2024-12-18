@extends('layouts.master')
@section('title', 'Profile')
@section('body')
    <main class="container mx-auto p-4">
        <section id="profile" class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Profile</h2>
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                    <input type="text" id="name" name="name" value="{{ auth()->user()->name }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="nrk" class="block text-gray-700 font-bold mb-2">NRK</label>
                    <input type="text" id="nrk" name="nrk" value="{{ auth()->user()->nrk }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="jabatan" class="block text-gray-700 font-bold mb-2">Jabatan</label>
                    <input type="text" id="jabatan" name="jabatan" value="{{ auth()->user()->jabatan }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="flex items-center gap-4">
                    <form action="{{ route('update') }}" method="POST">
                    <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update
                        </button>
                    </form>
                        <form action="{{ route('logout') }}" method="GET">
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Log
                                out
                            </button>
                        </form>
                </div>
            </form>
        </section>
    </main>
@endsection
