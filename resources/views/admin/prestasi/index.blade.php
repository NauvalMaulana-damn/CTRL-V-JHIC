<x-admin-layout>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Prestasi</h1>
        <a href="{{ route('admin.prestasi.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah Prestasi</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full border-collapse">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="p-3 text-left">Nama</th>
                    <th class="p-3 text-left">Subjudul</th>
                    <th class="p-3 text-left">Gambar</th>
                    <th class="p-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($prestasis as $prestasi)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3 font-semibold">{{ $prestasi->nama }}</td>
                    <td class="p-3 text-gray-600">{{ $prestasi->subjudul }}</td>
                    <td class="p-3">
                        <img src="{{ $prestasi->gambar && $prestasi->gambar !== 'default.svg' ? asset('storage/' . $prestasi->gambar) : asset('images/default.svg') }}" class="h-12 rounded" alt="">
                    </td>
                    <td class="p-3 text-center">
                        <a href="{{ route('admin.prestasi.edit', $prestasi->id) }}" class="text-blue-600 hover:underline">Edit</a> |
                        <form action="{{ route('admin.prestasi.destroy', $prestasi->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus prestasi ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="p-4 text-center text-gray-500">Belum ada prestasi</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $prestasis->links() }}
    </div>
</x-admin-layout>
