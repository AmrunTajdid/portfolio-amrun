<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile['name'] }} — Web Developer &amp; Tech Enthusiast</title>
    <meta name="description" content="Portfolio profesional {{ $profile['name'] }}. Mengembangkan aplikasi web modern berbasis Laravel 12, sistem database terstruktur, dan landing page konversi terarah.">
    <meta name="author" content="{{ $profile['name'] }}">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $profile['name'] }} — Web Developer">
    <meta property="og:description" content="Karya terpilih Laravel 12: Keuangan Keluarga, Hajj Club, Amanah Protection, Maziah Tour, dan sistem pendaftaran haji terpadu.">
    <meta property="og:image" content="{{ asset('images/profile.jpeg') }}">

    <!-- Favicon AT (Browser Tab Icon) -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}?v=3">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}?v=3">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}?v=3">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}?v=3">

    <!-- Google Fonts: Outfit (Modern Crisp Headings) & Plus Jakarta Sans (Clean Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        heading: ['"Outfit"', 'system-ui', 'sans-serif'],
                        sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        dark: {
                            canvas: '#070b14',
                            surface: '#0d1527',
                            card: '#101a30',
                            cardHover: '#15223e',
                            border: 'rgba(255, 255, 255, 0.09)',
                            borderHover: 'rgba(99, 102, 241, 0.35)',
                        },
                        accent: {
                            blue: '#3b82f6',
                            indigo: '#6366f1',
                            violet: '#8b5cf6',
                            cyan: '#06b6d4',
                            emerald: '#10b981',
                            amber: '#f59e0b',
                            rose: '#f43f5e',
                        }
                    },
                    boxShadow: {
                        'glow-primary': '0 0 30px -5px rgba(99, 102, 241, 0.3)',
                        'glow-cyan': '0 0 30px -5px rgba(6, 182, 212, 0.3)',
                        'glow-emerald': '0 0 30px -5px rgba(16, 185, 129, 0.3)',
                        'modern-card': '0 10px 30px -10px rgba(0, 0, 0, 0.6)',
                        'lift-card': '0 20px 40px -15px rgba(0, 0, 0, 0.7)',
                    }
                }
            }
        }
    </script>

    <!-- Font Awesome 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Modern Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #070b14;
        }
        ::-webkit-scrollbar-thumb {
            background: #1e293b;
            border-radius: 9999px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #334155;
        }

        body {
            background-color: #070b14;
            color: #f1f5f9;
            font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', system-ui, sans-serif;
        }

        /* Subtle Ambient Glows - Memberi kedalaman warna alami yang hidup */
        .ambient-glow-top {
            background: radial-gradient(circle at 50% 0%, rgba(99, 102, 241, 0.15) 0%, rgba(6, 182, 212, 0.08) 35%, transparent 70%);
        }

        /* Modern Card Styling */
        .modern-card {
            background: #0e172a;
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.5);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .modern-card:hover {
            transform: translateY(-4px);
            border-color: rgba(99, 102, 241, 0.35);
            box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.7), 0 0 25px -5px rgba(99, 102, 241, 0.15);
        }
    </style>
</head>
<body class="bg-[#070b14] text-slate-100 antialiased selection:bg-indigo-500 selection:text-white min-h-screen flex flex-col relative">

    <!-- Ambient Subtle Glow at Top -->
    <div class="fixed top-0 left-0 right-0 h-[600px] ambient-glow-top pointer-events-none z-0"></div>

    <!-- Main Content Wrapper -->
    <div class="relative z-10 flex flex-col min-h-screen">
        @yield('content')
    </div>

    <!-- Modal Pop-Up Container -->
    @include('components.project-modal')

    <!-- Scripts Section -->
    @stack('scripts')

</body>
</html>
