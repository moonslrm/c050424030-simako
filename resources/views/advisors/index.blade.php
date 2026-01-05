@extends('layouts.app')

@section('content')
  <div class="max-w-7xl mx-auto">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-xl font-semibold">Advisors</h2>
      <a href="#" class="btn-primary">Create Advisor</a>
    </div>
    <div class="bg-white rounded shadow p-4">
      @if(isset($advisors) && $advisors->count())
        <ul class="space-y-2">
          @foreach($advisors as $adv)
            <li class="p-2 border rounded">{{ $adv->name ?? '—' }}</li>
          @endforeach
        </ul>
        <div class="mt-4">{{ $advisors->links() }}</div>
      @else
        Placeholder advisor list — integrate controller later.
      @endif
    </div>
  </div>
@endsection
