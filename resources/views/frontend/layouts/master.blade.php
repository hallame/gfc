<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>@yield('title') | GFC officiel</title>

    <meta name="description" content="Plateforme officielle du GFC : enseignements, vidéos, méditations, événements et ressources doctrinales fidèles au Rév. Jean AGOUNKPE." />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Palette centrale (variables utilisables partout) -->
    <style>
        :root{
        /* Bleu profond premium (remplace le violet) */
        --brand-ink: #0A1226;         /* Texte foncé */
        --brand-primary: #0B2545;     /* Bleu nuit */
        --brand-primary-2: #13315C;   /* Bleu royal */
        --brand-primary-3: #1B3A6B;   /* Bleu accent */
        --brand-surface: #0E1A34;     /* Fond sombre */
        --brand-surface-2: #0F2244;   /* Fond gradient */

        /* Or discret pour l'accent */
        --brand-gold: #F5B301;
        --brand-gold-2: #FFD66B;

        /* Neutres */
        --brand-50: #F7FAFC;
        --brand-100: #EDF2F7;
        --brand-200: #E2E8F0;
        --brand-300: #CBD5E1;

        /* Rayons & ombres */
        --radius: 18px;
        --shadow-soft: 0 10px 30px rgba(3, 12, 33, .18);
        --shadow-strong: 0 14px 44px rgba(3, 12, 33, .28);
        }
    </style>
    <script>
        tailwind.config = {
        theme: {
            extend: {
            fontFamily: { sans: ['Poppins','ui-sans-serif','system-ui'], serif: ['Merriweather','ui-serif','Georgia'] },
            }
        }
        }
    </script>
</head>
<body class="font-sans text-[var(--brand-ink)] bg-gradient-to-tr from-[var(--brand-50)] to-[var(--brand-100)] selection:bg-[var(--brand-gold-2)]/60">
  <!-- Skip link -->
  <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:top-3 focus:left-3 focus:bg-white focus:text-[var(--brand-ink)] focus:px-3 focus:py-2 focus:rounded-md focus:shadow">Aller au contenu</a>

     @include('frontend.layouts.header')


  <main id="main">
    @yield('content')
  </main>
    @include('frontend.layouts.footer')

  <!-- Video modal -->
  <div id="video-modal" class="hidden fixed inset-0 z-50 bg-black/80 grid place-items-center p-4">
    <div class="relative w-full max-w-5xl aspect-video bg-black rounded-[var(--radius)] overflow-hidden shadow-[var(--shadow-strong)]">
      <button id="video-close" class="absolute top-3 right-3 px-3 py-1.5 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold">✕</button>
      <iframe id="video-frame" class="w-full h-full" src="" title="YouTube video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
  </div>

    @include('frontend.layouts.scripts')
</body>
</html>
