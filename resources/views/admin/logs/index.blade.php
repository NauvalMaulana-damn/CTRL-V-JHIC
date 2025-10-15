<x-admin-layout>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Activity Logs</h1>
        <div class="flex space-x-4">
            <div class="bg-blue-100 text-blue-800 px-4 py-2 rounded">
                <div class="text-sm">Total Logs</div>
                <div class="text-xl font-bold">{{ $stats['total'] }}</div>
            </div>
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded">
                <div class="text-sm">Today</div>
                <div class="text-xl font-bold">{{ $stats['today'] }}</div>
            </div>
        </div>
    </div>

    <!-- Filter Form -->
    <div class="bg-white p-4 rounded shadow mb-6">
        <form action="{{ route('admin.logs.filter') }}" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Action</label>
                <select name="action" class="w-full border rounded p-2">
                    <option value="all">All Actions</option>
                    <option value="LOGIN">Login</option>
                    <option value="LOGOUT">Logout</option>
                    <option value="CREATE">Create</option>
                    <option value="UPDATE">Update</option>
                    <option value="DELETE">Delete</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Date From</label>
                <input type="date" name="date_from" class="w-full border rounded p-2">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Date To</label>
                <input type="date" name="date_to" class="w-full border rounded p-2">
            </div>
            <div class="flex items-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 w-full">
                    Filter
                </button>
            </div>
        </form>
    </div>

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full border-collapse">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="p-3 text-left">User</th>
                    <th class="p-3 text-left">Action</th>
                    <th class="p-3 text-left">Description</th>
                    <th class="p-3 text-left">IP Address</th>
                    <th class="p-3 text-left">Date</th>
                    <th class="p-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($logs as $log)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">
                        <div class="font-semibold">{{ $log->user->username }}</div>
                        <div class="text-sm text-gray-500">{{ $log->user->role }}</div>
                    </td>
                    <td class="p-3">
                        <span class="px-2 py-1 rounded-full text-xs font-semibold
                            @if($log->action == 'CREATE') bg-green-100 text-green-800
                            @elseif($log->action == 'UPDATE') bg-blue-100 text-blue-800
                            @elseif($log->action == 'DELETE') bg-red-100 text-red-800
                            @elseif($log->action == 'LOGIN') bg-purple-100 text-purple-800
                            @elseif($log->action == 'LOGOUT') bg-gray-100 text-gray-800
                            @endif">
                            {{ $log->action }}
                        </span>
                    </td>
                    <td class="p-3 text-sm">{{ $log->description }}</td>
                    <td class="p-3 text-sm text-gray-500">{{ $log->ip_address }}</td>
                    <td class="p-3 text-sm text-gray-500">
                        {{ $log->created_at->format('M j, Y H:i') }}
                    </td>
                    <td class="p-3 text-center">
                        <a href="{{ route('admin.logs.show', $log->id) }}"
                            class="text-blue-600 hover:underline text-sm">
                            Details
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="p-4 text-center text-gray-500">No logs found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $logs->links() }}
    </div>
</x-admin-layout>
