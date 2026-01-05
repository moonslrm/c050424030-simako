@extends('layouts.app')

@section('content')
  <div class="max-w-7xl mx-auto">
    <h1 class="text-2xl font-semibold mb-6 text-primary-700">Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <div class="p-4 bg-white rounded shadow">
        <div class="text-sm text-gray-500">Members</div>
        <div class="text-2xl font-bold">{{ \App\Models\Member::count() }}</div>
      </div>
      <div class="p-4 bg-white rounded shadow">
        <div class="text-sm text-gray-500">Organizations</div>
        <div class="text-2xl font-bold">{{ \App\Models\Organization::count() }}</div>
      </div>
      <div class="p-4 bg-white rounded shadow">
        <div class="text-sm text-gray-500">Activities</div>
        <div class="text-2xl font-bold">{{ \App\Models\Activity::count() }}</div>
      </div>
    </div>

    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4">
      <a href="#" class="block p-4 bg-white rounded shadow hover:shadow-md">
        <div class="text-lg font-medium">Manage Members</div>
        <div class="text-sm text-gray-500">Create, edit, and remove members</div>
      </a>
      <a href="#" class="block p-4 bg-white rounded shadow hover:shadow-md">
        <div class="text-lg font-medium">Manage Organizations</div>
        <div class="text-sm text-gray-500">Create, edit, and remove organizations</div>
      </a>
    </div>
  </div>
@endsection
