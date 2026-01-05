@extends('layouts.app')

@section('content')
  <div class="max-w-7xl mx-auto">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-xl font-semibold">Members</h2>
      <a href="#" class="btn-primary">Create Member</a>
    </div>

    <div class="bg-white rounded shadow overflow-hidden">
      <table class="w-full text-left">
        <thead class="bg-gray-50">
          <tr>
            <th class="p-3">#</th>
            <th class="p-3">Name</th>
            <th class="p-3">Email</th>
            <th class="p-3">Actions</th>
          </tr>
        </thead>
        <tbody>
          @if(isset($members) && $members->count())
            @foreach($members as $member)
              <tr>
                <td class="p-3">{{ $loop->iteration + ($members->currentPage()-1) * $members->perPage() }}</td>
                <td class="p-3">{{ $member->name ?? '-' }}</td>
                <td class="p-3">{{ $member->email ?? '-' }}</td>
                <td class="p-3"><a href="#" class="text-primary-600">Edit</a></td>
              </tr>
            @endforeach
          @else
            <tr>
              <td colspan="4" class="p-3">No members found.</td>
            </tr>
          @endif
        </tbody>
      </table>

      <div class="p-4">
        @if(isset($members))
          {{ $members->links() }}
        @endif
      </div>
    </div>
  </div>
@endsection
