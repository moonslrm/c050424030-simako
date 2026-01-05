@extends('layouts.app')

@section('content')
  <div class="max-w-7xl mx-auto">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-xl font-semibold">Users</h2>
      <a href="#" class="btn-primary">Create User</a>
    </div>
    <div class="bg-white rounded shadow p-4">
      @if(isset($users) && $users->count())
        <ul class="space-y-2">
          @foreach($users as $u)
            <li class="p-2 border rounded">{{ $u->name ?? $u->email }}</li>
          @endforeach
        </ul>
        <div class="mt-4">{{ $users->links() }}</div>
      @else
        No users found.
      @endif
    </div>
  </div>
@endsection
