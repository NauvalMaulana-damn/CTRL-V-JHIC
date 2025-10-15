<x-admin-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Welcome Message dengan Role -->
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-gray-900">
                    Selamat Datang, {{ auth()->user()->username }}!
                </h1>
                <p class="text-gray-600 mt-2">
                    Anda login sebagai <span class="font-semibold capitalize">{{ auth()->user()->role }}</span>
                </p>
                @if(auth()->user()->isSuperadmin())
                <p class="text-sm text-blue-600 mt-1">
                    💪 Anda memiliki akses penuh sebagai Super Administrator
                </p>
                @else
                <p class="text-sm text-green-600 mt-1">
                    ✏️ Anda memiliki akses sebagai Editor
                </p>
                @endif
            </div>

            <!-- Role-based Statistics -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Card untuk semua role -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                📰
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                        Total Berita
                                    </dt>
                                    <dd class="text-lg font-medium text-gray-900">
                                        {{ $totalBerita ?? 0 }}
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                👨‍🎓
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                        Total Alumni
                                    </dt>
                                    <dd class="text-lg font-medium text-gray-900">
                                        {{ $totalAlumni ?? 0 }}
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hanya SUPERADMIN yang melihat logs stats -->
                @if(auth()->user()->isSuperadmin())
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                📊
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                        Activity Logs
                                    </dt>
                                    <dd class="text-lg font-medium text-gray-900">
                                        {{ $totalLogs ?? 0 }}
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                👥
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                        Total Users
                                    </dt>
                                    <dd class="text-lg font-medium text-gray-900">
                                        {{ $totalUsers ?? 0 }}
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <!-- Quick Actions berdasarkan Role -->
            <div class="bg-white shadow rounded-lg p-6 mb-8">
                <h2 class="text-lg font-semibold mb-4">Quick Actions</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <a href="{{ route('admin.berita.create') }}"
                        class="bg-blue-50 border border-blue-200 rounded-lg p-4 hover:bg-blue-100 transition">
                        <div class="flex items-center">
                            <span class="text-blue-600 text-lg mr-3">➕</span>
                            <div>
                                <h3 class="font-medium text-blue-900">Tambah Berita</h3>
                                <p class="text-sm text-blue-600">Buat berita baru</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('admin.alumni.create') }}"
                        class="bg-green-50 border border-green-200 rounded-lg p-4 hover:bg-green-100 transition">
                        <div class="flex items-center">
                            <span class="text-green-600 text-lg mr-3">👨‍🎓</span>
                            <div>
                                <h3 class="font-medium text-green-900">Tambah Alumni</h3>
                                <p class="text-sm text-green-600">Tambah data alumni</p>
                            </div>
                        </div>
                    </a>

                    <!-- Hanya SUPERADMIN yang melihat Logs link -->
                    @if(auth()->user()->isSuperadmin())
                    <a href="{{ route('admin.logs.index') }}"
                        class="bg-purple-50 border border-purple-200 rounded-lg p-4 hover:bg-purple-100 transition">
                        <div class="flex items-center">
                            <span class="text-purple-600 text-lg mr-3">📊</span>
                            <div>
                                <h3 class="font-medium text-purple-900">View Logs</h3>
                                <p class="text-sm text-purple-600">Lihat activity logs</p>
                            </div>
                        </div>
                    </a>
                    @endif
                </div>
            </div>

            <!-- Recent Activity (Hanya SUPERADMIN) -->
            @if(auth()->user()->isSuperadmin())
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-lg font-semibold mb-4">Recent Activity</h2>
                <div class="space-y-3">
                    @forelse($recentLogs as $log)
                    <div class="flex items-center justify-between p-3 border rounded-lg">
                        <div class="flex items-center space-x-3">
                            <span class="text-sm text-gray-500">
                                {{ $log->created_at->diffForHumans() }}
                            </span>
                            <span class="text-sm">
                                <strong>{{ $log->user->username }}</strong>
                                {{ strtolower($log->action) }}
                                {{ $log->description }}
                            </span>
                        </div>
                        <span class="px-2 py-1 text-xs rounded-full
                            @if($log->action == 'CREATE') bg-green-100 text-green-800
                            @elseif($log->action == 'UPDATE') bg-blue-100 text-blue-800
                            @elseif($log->action == 'DELETE') bg-red-100 text-red-800
                            @elseif($log->action == 'LOGIN') bg-purple-100 text-purple-800
                            @elseif($log->action == 'LOGOUT') bg-gray-100 text-gray-800
                            @endif">
                            {{ $log->action }}
                        </span>
                    </div>
                    @empty
                    <p class="text-gray-500 text-center py-4">No recent activity</p>
                    @endforelse
                </div>
            </div>
            @endif
        </div>
    </div>
</x-admin-layout>
