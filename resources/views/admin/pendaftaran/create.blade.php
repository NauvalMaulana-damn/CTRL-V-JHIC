@extends('layouts.admin')

@section('content')
<div class="container mx-auto py-8 max-w-lg">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Tambah Data Pendaftaran</h1>

    <form action="{{ route('admin.pendaftaran.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
        @csrf

        <div class="mb-4">
            <label for="tahun" class="block text-gray-700 font-medium mb-2">Tahun</label>
            <input type="number" name="tahun" id="tahun"
                   class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200"
                   required>
        </div>

        <div class="mb-4">
            <label for="jumlah_pendaftar" class="block text-gray-700 font-medium mb-2">Jumlah Pendaftar</label>
            <input type="number" name="jumlah_pendaftar" id="jumlah_pendaftar"
                   class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200"
                   required>
        </div>

        <div class="mb-6">
            <label for="jumlah_diterima" class="block text-gray-700 font-medium mb-2">Jumlah Diterima</label>
            <input type="number" name="jumlah_diterima" id="jumlah_diterima"
                   class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200"
                   required>
        </div>

        <div class="flex justify-between items-center">
            <a href="{{ route('admin.pendaftaran.index') }}" class="text-gray-600 hover:underline">← Kembali</a>
            <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
