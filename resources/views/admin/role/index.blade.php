@extends("layout.auth")

@section("content")
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold text-gray-700 mb-4">Roles</h2>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full border-collapse border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-200 px-4 py-2 text-left">ID</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Name</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($roles as $role)
                <tr>
                    <td class="border border-gray-200 px-4 py-2">{{ $role->id }}</td>
                    <td class="border border-gray-200 px-4 py-2">{{ $role->name }}</td>
                    <td class="border border-gray-200 px-4 py-2">
                        <button class="px-3 py-1 text-white bg-blue-500 rounded-md text-sm hover:bg-blue-600">Edit</button>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td class="border border-gray-200 px-4 py-2 text-center" colspan="3">No roles found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection