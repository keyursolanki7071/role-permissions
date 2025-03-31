<nav class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-3 flex justify-center items-center">
        <ul class="flex space-x-6">
            @can("dashboard")
            <li><a href="{{ route('admin.dashboard') }}" class="text-gray-700 hover:text-blue-500">Dashboard</a></li>
            @endcan
            <li><a href="{{ route('admin.index') }}" class="text-gray-700 hover:text-blue-500">Admin</a></li>
            @can('manage_role')
            <li><a href="{{ route('admin.role.list') }}" class="text-gray-700 hover:text-blue-500">Role</a></li>
            @endcan
        </ul>
        <a href='{{ route("admin.logout") }}' class="px-3 py-1 text-white bg-red-500 rounded-md text-sm hover:bg-red-600 ml-4">Logout</a>
    </div>
</nav>