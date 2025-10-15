<x-admin-layout>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">User Management</h1>

        <a href="{{ route('admin.users.create') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 flex items-center">
            <i class="fas fa-user-plus mr-2"></i>Tambah User
        </a>
    </div>

    @if(session('success'))
    <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
        {{ session('error') }}
    </div>
    @endif

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full border-collapse">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="p-3 text-left">Username</th>
                    <th class="p-3 text-left">Role</th>
                    <th class="p-3 text-left">Status</th>
                    <th class="p-3 text-left">Role Key</th>
                    <th class="p-3 text-left">Terakhir Update</th>
                    <th class="p-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3 font-semibold">
                        <div class="flex items-center">
                            {{ $user->username }}
                            @if($user->id === auth()->id())
                            <span class="ml-2 bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">You</span>
                            @endif
                        </div>
                    </td>
                    <td class="p-3">
                        <span class="px-2 py-1 rounded-full text-xs font-semibold
                            @if($user->role == 'SUPERADMIN') bg-purple-100 text-purple-800
                            @elseif($user->role == 'EDITOR') bg-blue-100 text-blue-800
                            @else bg-gray-100 text-gray-800 @endif">
                            {{ $user->role }}
                        </span>
                    </td>
                    <td class="p-3">
                        <span class="px-2 py-1 rounded-full text-xs font-semibold
                            @if($user->is_active) bg-green-100 text-green-800
                            @else bg-red-100 text-red-800 @endif">
                            {{ $user->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td class="p-3">
                        <code class="text-xs bg-gray-100 px-2 py-1 rounded font-mono">
                            {{ Str::limit($user->role_key, 20) }}
                        </code>
                    </td>
                    <td class="p-3 text-sm text-gray-500">
                        {{ $user->updated_at->format('d M Y H:i') }}
                    </td>
                    <td class="p-3 text-center">
                        <div class="flex justify-center space-x-2">
                            <a href="{{ route('admin.users.edit', $user->id) }}"
                                class="text-blue-600 hover:underline text-sm">
                                <i class="fas fa-edit mr-1"></i>Edit
                            </a>

                            @if($user->id !== auth()->id())
                            <span class="text-gray-300">|</span>

                            <!-- Toggle Status -->
                            <form action="{{ route('admin.users.toggle-status', $user->id) }}" method="POST"
                                class="inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit"
                                    class="text-{{ $user->is_active ? 'orange' : 'green' }}-600 hover:underline text-sm">
                                    <i class="fas fa-{{ $user->is_active ? 'pause' : 'play' }} mr-1"></i>
                                    {{ $user->is_active ? 'Deactivate' : 'Activate' }}
                                </button>
                            </form>

                            <span class="text-gray-300">|</span>

                            <!-- Delete -->
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline"
                                onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline text-sm">
                                    <i class="fas fa-trash mr-1"></i>Hapus
                                </button>
                            </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="p-4 text-center text-gray-500">Belum ada user</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $users->links() }}
    </div>

    <!-- Statistics -->
    <div class="mt-6 grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="bg-white p-4 rounded shadow">
            <div class="flex items-center">
                <div class="p-2 bg-purple-100 rounded-lg">
                    <i class="fas fa-crown text-purple-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Superadmin</p>
                    <p class="text-xl font-bold">{{ $users->where('role', 'SUPERADMIN')->count() }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-4 rounded shadow">
            <div class="flex items-center">
                <div class="p-2 bg-blue-100 rounded-lg">
                    <i class="fas fa-edit text-blue-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Editor</p>
                    <p class="text-xl font-bold">{{ $users->where('role', 'EDITOR')->count() }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-4 rounded shadow">
            <div class="flex items-center">
                <div class="p-2 bg-gray-100 rounded-lg">
                    <i class="fas fa-eye text-gray-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Viewer</p>
                    <p class="text-xl font-bold">{{ $users->where('role', 'VIEWER')->count() }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-4 rounded shadow">
            <div class="flex items-center">
                <div class="p-2 bg-green-100 rounded-lg">
                    <i class="fas fa-users text-green-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Total Users</p>
                    <p class="text-xl font-bold">{{ $users->total() }}</p>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
