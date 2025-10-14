<x-admin-layout>
    <h1 class="text-2xl font-bold mb-4">Tambah Berita</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 bg-white p-6 rounded shadow">
        @csrf

        <div>
            <label class="block mb-1">Judul</label>
            <input type="text" name="title" value="{{ old('title') }}" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block mb-1">Deskripsi</label>
            <textarea name="deskripsi" class="w-full border rounded p-2" maxlength="175" required>{{ old('deskripsi') }}</textarea>
        </div>

        <div>
            <label class="block mb-1">Konten (Content)</label>
            <textarea name="content" rows="6" class="w-full border rounded p-2" required>{{ old('content') }}</textarea>
        </div>

        <div>
            <label class="block mb-1">Kategori</label>
            <select name="type" class="border rounded p-2 w-full" required>
                <option value="">Pilih Tipe</option>
                <option value="PRESTASI" @selected(old('type') == 'PRESTASI')>PRESTASI</option>
                <option value="KEGIATAN" @selected(old('type') == 'KEGIATAN')>KEGIATAN</option>
                <option value="PENGUMUMAN" @selected(old('type') == 'PENGUMUMAN')>PENGUMUMAN</option>
                <option value="ACARA" @selected(old('type') == 'ACARA')>ACARA</option>
            </select>
        </div>

        <div>
            <label class="block mb-1">Gambar (opsional)</label>
            <input type="file" name="gambar" class="border rounded p-2 w-full" accept="image/*">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
    </form>
</x-admin-layout>
