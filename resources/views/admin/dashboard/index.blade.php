@extends("layout.auth")

@section("content")
<div class="flex items-center justify-center min-h-screen">
    <h1 class="text-3xl font-bold text-gray-700">Welcome , {{ auth()->user()->name }}</h1>
</div>
@endsection