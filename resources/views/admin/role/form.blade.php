@extends("layout.auth")

@section("content")
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-700 mb-6 text-center">Role Management</h1>
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <form method="POST" action="{{ route('admin.role.update', ['id' => $role->id]) }}" >
            @csrf
            <div class="mb-4">
                <label for="role-name" class="block text-sm font-medium text-gray-700">Role Name</label>
                <input type="text" id="role-name" class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring-blue-500 focus:border-blue-500" name="name" value="{{ $role->name }}" required>
            </div>
            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox text-blue-500" id="is-super-admin" name="is_super_admin" {{ $role->is_super_admin == \App\Models\Role::STATUS_YES ? 'checked' : '' }}>
                    <span class="ml-2 text-gray-700">Is Super Admin</span>
                </label>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Permissions</label>
                <div class="grid grid-cols-2 gap-2 mt-2">
                    @foreach ($permissions as $permission)
                    <label class="inline-flex items-center">
                        @php
                            $checked = in_array($permission->id, $rolePermissions) ? 'checked' : '';
                        @endphp
                        <input type="checkbox" class="form-checkbox text-blue-500" name="permissions[]" value="{{ $permission->id }}" {{ $checked }} >
                        <span class="ml-2 text-gray-700">{{ $permission->name }}</span>
                    </label>
                    @endforeach
                </div>
            </div>
            <button type="submit" class="w-full px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Save Role</button>
        </form>
    </div>
</div>
@endsection