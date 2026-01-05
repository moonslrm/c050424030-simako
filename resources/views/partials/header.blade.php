<header class="bg-white border-b shadow-sm">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      <div class="flex items-center gap-3">
        <a href="/" class="text-xl font-semibold text-primary-600">{{ config('app.name', 'SIMAKO') }}</a>
      </div>
      <div class="flex items-center gap-3">
        @auth
          <a href="{{ url('/dashboard') }}" class="px-3 py-1 text-sm text-gray-700">Dashboard</a>
          <form method="POST" action="{{ route('logout') }}">@csrf<button class="px-3 py-1 btn-primary">Logout</button></form>
        @else
          <a href="{{ route('login') }}" class="px-3 py-1 text-sm text-gray-700">Login</a>
        @endauth
      </div>
    </div>
  </div>
</header>
