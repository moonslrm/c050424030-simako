<aside class="w-64 bg-white border-r min-h-screen p-4 hidden lg:block">
  <nav class="space-y-2">
    <a href="{{ route('dashboard') }}" class="block px-3 py-2 rounded hover:bg-primary-50 text-primary-700">Dashboard</a>
    <a href="{{ route('activities.index') }}" class="block px-3 py-2 rounded hover:bg-gray-100">Activities</a>
    <a href="{{ route('advisors.index') }}" class="block px-3 py-2 rounded hover:bg-gray-100">Advisors</a>
    <a href="{{ route('members.index') }}" class="block px-3 py-2 rounded hover:bg-gray-100">Members</a>
    <a href="{{ route('organizations.index') }}" class="block px-3 py-2 rounded hover:bg-gray-100">Organizations</a>
    <a href="{{ route('users.index') }}" class="block px-3 py-2 rounded hover:bg-gray-100">Users</a>
  </nav>
</aside>
