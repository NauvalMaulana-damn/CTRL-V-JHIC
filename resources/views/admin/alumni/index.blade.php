<x-admin-layout>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Alumni</h1>

        <!-- Hanya SUPERADMIN dan EDITOR yang bisa tambah alumni -->
        @if(auth()->user()->canCreate())
        <a href="{{ route('admin.alumni.create') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 flex items-center">
            <i class="fas fa-user-plus mr-2"></i>Tambah Alumni
        </a>
        @endif
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
                    <th class="p-3 text-left">Kelulusan</th>
                    <th class="p-3 text-left">Posisi</th>
                    <th class="p-3 text-left">Perusahaan</th>
                    <th class="p-3 text-left">Foto</th>
                    <th class="p-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($alumnis as $alumni)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3 font-semibold">{{ $alumni->name }}</td>
                    <td class="p-3 text-gray-600">{{ $alumni->graduation }}</td>
                    <td class="p-3">{{ $alumni->position }}</td>
                    <td class="p-3">{{ $alumni->company }}</td>
                    <td class="p-3">
                        <img src="{{ $alumni->image && $alumni->image !== 'default.svg' ? asset('' . $alumni->image) : asset('images/default.svg') }}"
                            class="h-12 w-12 rounded-full object-cover" alt="">
                    </td>
                    <td class="p-3 text-center">
                        <!-- VIEWER hanya bisa lihat -->
                        @if(auth()->user()->isViewer())
                        <span class="text-gray-400 text-sm">View Only</span>
                        @else
                        <div class="flex justify-center space-x-2">
                            <!-- EDITOR dan SUPERADMIN bisa edit -->
                            @if(auth()->user()->canEdit())
                            <a href="{{ route('admin.alumni.edit', $alumni->id) }}"
                                class="text-blue-600 hover:underline text-sm">
                                <i class="fas fa-edit mr-1"></i>Edit
                            </a>
                            @endif

                            <!-- Hanya SUPERADMIN yang bisa hapus -->
                            @if(auth()->user()->canDelete())
                            <form action="{{ route('admin.alumni.destroy', $alumni->id) }}" method="POST" class="inline"
                                onsubmit="return confirm('Yakin ingin menghapus alumni ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline text-sm">
                                    <i class="fas fa-trash mr-1"></i>Hapus
                                </button>
                            </form>
                            @else
                            <span class="text-gray-400 text-sm">|</span>
                            <span class="text-gray-400 text-sm">No Delete</span>
                            @endif
                        </div>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="p-4 text-center text-gray-500">Belum ada alumni</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $alumnis->links() }}
    </div>

    <!-- Role Info -->
    <div class="mt-6 p-4 bg-gray-50 rounded-lg">
        <h3 class="font-semibold text-gray-700 mb-2">Permission Info:</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
            <div class="flex items-center">
                <div class="w-3 h-3 bg-purple-500 rounded-full mr-2"></div>
                <span class="text-gray-600"><strong>SUPERADMIN:</strong> Create, Edit, Delete</span>
            </div>
            <div class="flex items-center">
                <div class="w-3 h-3 bg-blue-500 rounded-full mr-2"></div>
                <span class="text-gray-600"><strong>EDITOR:</strong> Create, Edit (No Delete)</span>
            </div>
            <div class="flex items-center">
                <div class="w-3 h-3 bg-gray-500 rounded-full mr-2"></div>
                <span class="text-gray-600"><strong>VIEWER:</strong> View Only</span>
            </div>
        </div>
    </div>
</x-admin-layout>
