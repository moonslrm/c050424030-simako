@extends('layouts.app')

@section('content')
  <div class="max-w-7xl mx-auto">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-xl font-semibold">Organizations</h2>
      <a href="#" class="btn-primary">Create Organization</a>
    </div>
    <div class="bg-white rounded shadow p-4">
      @if(isset($organizations) && $organizations->count())
        <ul class="space-y-2">
          @foreach($organizations as $org)
            <li class="p-2 border rounded">{{ $org->name ?? '—' }}</li>
          @endforeach
        </ul>
        <div class="mt-4">{{ $organizations->links() }}</div>
      @else
        Placeholder organization list — integrate controller later.
      @endif
    </div>
  </div>
@endsection
