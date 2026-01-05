@extends('layouts.app')

@section('content')
  <div class="max-w-7xl mx-auto">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-xl font-semibold">Activities</h2>
      <a href="#" class="btn-primary">Create Activity</a>
    </div>
    <div class="bg-white rounded shadow p-4">
      @if(isset($activities) && $activities->count())
        <ul class="space-y-2">
          @foreach($activities as $act)
            <li class="p-2 border rounded">{{ $act->title ?? '—' }}</li>
          @endforeach
        </ul>
        <div class="mt-4">{{ $activities->links() }}</div>
      @else
        Placeholder activity list — integrate controller later.
      @endif
    </div>
  </div>
@endsection
