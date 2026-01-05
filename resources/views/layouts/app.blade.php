<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ config('app.name', 'SIMAKO') }}</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
      <!-- Fallback: load Tailwind via CDN & font jika npm/Vite tidak tersedia -->
      <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
      <script>
        /* Tailwind config before loading CDN so colors/fonts match your :root vars */
        window.tailwind = {
          config: {
            theme: {
              extend: {
                colors: {
                  primary: { DEFAULT: '#0077cc' },
                  accent: { DEFAULT: '#ff7a59' }
                },
                fontFamily: {
                  sans: ['"Instrument Sans"', 'ui-sans-serif', 'system-ui']
                }
              }
            }
          }
        }
      </script>
      <script src="https://cdn.tailwindcss.com"></script>
      <style>/* minimal fallback if CDN blocked */</style>
    @endif

    <!-- Theme variables & small utility styles: ubah variabel di sini untuk seluruh tampilan -->
    <style>
      :root{
        --brand-primary: #0077cc;
        --brand-accent: #ff7a59;
        --bg: #f8fafc;
        --text: #0f172a;
        --max-width: 1100px;
        --radius: 12px;
      }
      body{ background:var(--bg); color:var(--text); font-family: "Instrument Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; }
      .container{ width:100%; padding-left:1rem; padding-right:1rem; margin-left:auto; margin-right:auto; }
      @media(min-width:1024px){ .container{ max-width:var(--max-width); } }
      .card{ background:#fff; border-radius:var(--radius); padding:1.25rem; box-shadow:0 6px 18px rgba(15,23,42,0.06); }
      .btn{ display:inline-flex; align-items:center; gap:0.5rem; padding:0.5rem 0.875rem; border-radius:8px; background:var(--brand-primary); color:#fff; text-decoration:none; }
      .header-glass{ background:linear-gradient(90deg, rgba(255,255,255,0.04), rgba(255,255,255,0.02)); backdrop-filter:blur(6px); }
    </style>
  </head>
  <body class="min-h-screen bg-gray-50 text-gray-900">
    @include('partials.header')

    <div class="flex">
      @include('partials.sidebar')

      <main class="flex-1 p-6 lg:p-10">
        <div class="container">
          <div class="card">
            @yield('content')
          </div>
        </div>
      </main>
    </div>

    @include('partials.footer')
  </body>
</html>
