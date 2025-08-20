<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GFC – Plateforme officielle | Accueil</title>
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

  <!-- Header -->
  <header id="site-header" class="relative sticky top-0 z-50 border-b border-white/10 bg-[var(--brand-primary)]/85 backdrop-blur">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6 py-3 text-white">
      <a href="#" class="flex items-center gap-3" aria-label="Accueil GFC">
        <span class="w-10 h-10 rounded-[var(--radius)] bg-gradient-to-br from-[var(--brand-gold)] to-[var(--brand-gold-2)] shadow-[var(--shadow-soft)]"></span>
        <span class="font-extrabold tracking-wide">GFC</span>
      </a>
      <!-- Desktop nav with MEGA menu -->
      <nav class="hidden lg:flex items-center gap-2 text-sm" aria-label="Navigation principale">
        <a href="#about" class="px-3 py-2 rounded-md hover:text-[var(--brand-gold-2)]">À propos</a>

        <!-- MEGA: Enseignements / Thèmes / Séries -->
        <div id="mega-container" class="relative">
          <button id="mega-toggle" class="flex items-center gap-2 px-3 py-2 rounded-md hover:text-[var(--brand-gold-2)]" aria-haspopup="true" aria-expanded="false" aria-controls="mega-panel">
            <span>Enseignements</span>
            <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.118l3.71-3.886a.75.75 0 111.08 1.04l-4.24 4.44a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
          </button>

          <!-- Panel -->
          <div id="mega-panel" class="invisible opacity-0 translate-y-2 transition duration-200 ease-out absolute left-0 right-0 top-full">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 pt-3">
              <div class="rounded-2xl bg-white text-[var(--brand-ink)] shadow-[var(--shadow-strong)] ring-1 ring-slate-200/70 overflow-hidden">
                <div class="grid grid-cols-12 gap-6 p-6">
                  <!-- Col 1: Enseignements -->
                  <div class="col-span-12 md:col-span-4">
                    <div class="flex items-center gap-2 mb-3">
                      <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-[var(--brand-gold)] to-[var(--brand-gold-2)]"></div>
                      <h3 class="font-serif font-bold text-lg">Enseignements</h3>
                    </div>
                    <ul class="space-y-2 text-sm">
                      <li><a href="#teachings" class="flex justify-between items-center px-3 py-2 rounded-lg hover:bg-[var(--brand-100)]">Doctrine <span class="text-xs text-slate-500">Articles & audio</span></a></li>
                      <li><a href="#videos" class="flex justify-between items-center px-3 py-2 rounded-lg hover:bg-[var(--brand-100)]">Prédications <span class="text-xs text-slate-500">Vidéos HD</span></a></li>
                      <li><a href="#news" class="flex justify-between items-center px-3 py-2 rounded-lg hover:bg-[var(--brand-100)]">Études <span class="text-xs text-slate-500">Séries thématiques</span></a></li>
                      <li><a href="#" class="flex justify-between items-center px-3 py-2 rounded-lg hover:bg-[var(--brand-100)]">Archives PDF <span class="text-xs text-slate-500">Téléchargements</span></a></li>
                    </ul>
                    <a href="#teachings" class="mt-4 inline-flex items-center gap-2 px-3 py-2 rounded-full bg-[var(--brand-ink)] text-white text-sm">Tous les enseignements →</a>
                  </div>

                  <!-- Col 2: Thèmes -->
                  <div class="col-span-12 md:col-span-4">
                    <div class="flex items-center gap-2 mb-3">
                      <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-sky-400 to-indigo-400"></div>
                      <h3 class="font-serif font-bold text-lg">Thèmes</h3>
                    </div>
                    <div class="grid grid-cols-2 gap-2 text-sm">
                      <a href="#" class="px-3 py-2 rounded-lg border border-[var(--brand-200)] hover:bg-[var(--brand-50)]">Foi</a>
                      <a href="#" class="px-3 py-2 rounded-lg border border-[var(--brand-200)] hover:bg-[var(--brand-50)]">Sainteté</a>
                      <a href="#" class="px-3 py-2 rounded-lg border border-[var(--brand-200)] hover:bg-[var(--brand-50)]">Service</a>
                      <a href="#" class="px-3 py-2 rounded-lg border border-[var(--brand-200)] hover:bg-[var(--brand-50)]">Prière</a>
                      <a href="#" class="px-3 py-2 rounded-lg border border-[var(--brand-200)] hover:bg-[var(--brand-50)]">Famille</a>
                      <a href="#" class="px-3 py-2 rounded-lg border border-[var(--brand-200)] hover:bg-[var(--brand-50)]">Leadership</a>
                    </div>
                  </div>

                  <!-- Col 3: Séries -->
                  <div class="col-span-12 md:col-span-4">
                    <div class="flex items-center gap-2 mb-3">
                      <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-emerald-400 to-teal-500"></div>
                      <h3 class="font-serif font-bold text-lg">Séries</h3>
                    </div>
                    <div class="space-y-3">
                      <a href="#" class="flex gap-3 p-3 rounded-xl hover:bg-[var(--brand-100)]">
                        <div class="w-14 h-10 rounded-lg bg-gradient-to-br from-slate-200 to-white"></div>
                        <div>
                          <div class="font-semibold leading-tight">La vie en Christ</div>
                          <div class="text-xs text-slate-500">6 épisodes • 2h14</div>
                        </div>
                      </a>
                      <a href="#" class="flex gap-3 p-3 rounded-xl hover:bg-[var(--brand-100)]">
                        <div class="w-14 h-10 rounded-lg bg-gradient-to-br from-amber-200 to-yellow-50"></div>
                        <div>
                          <div class="font-semibold leading-tight">La prière efficace</div>
                          <div class="text-xs text-slate-500">4 épisodes • 1h28</div>
                        </div>
                      </a>
                      <a href="#" class="flex gap-3 p-3 rounded-xl hover:bg-[var(--brand-100)]">
                        <div class="w-14 h-10 rounded-lg bg-gradient-to-br from-sky-200 to-emerald-100"></div>
                        <div>
                          <div class="font-semibold leading-tight">Le cœur du serviteur</div>
                          <div class="text-xs text-slate-500">5 épisodes • 1h52</div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <a href="#verse" class="px-3 py-2 rounded-md hover:text-[var(--brand-gold-2)]">Verset du jour</a>
        <a href="#videos" class="px-3 py-2 rounded-md hover:text-[var(--brand-gold-2)]">Vidéos</a>
        <a href="#news" class="px-3 py-2 rounded-md hover:text-[var(--brand-gold-2)]">Actualités</a>
        <a href="#events" class="px-3 py-2 rounded-md hover:text-[var(--brand-gold-2)]">Événements</a>
        <a href="#contact" class="px-3 py-2 rounded-md hover:text-[var(--brand-gold-2)]">Contact</a>
      </nav>

      <!-- Actions -->
      <div class="flex items-center gap-2">
        <button id="open-search" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/20 hover:bg-white/10" aria-label="Ouvrir la recherche">🔎 <span class="hidden md:inline">Rechercher</span></button>
        <a href="#donate" class="inline-flex items-center px-4 py-2 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold hover:scale-[1.03] transition">Faire un don</a>
        <button id="menu-toggle" class="lg:hidden ml-1 p-2 rounded-md hover:bg-white/10" aria-expanded="false" aria-controls="mobile-menu">☰</button>
      </div>
    </div>

    <!-- Mobile drawer -->
    <div id="mobile-menu" class="hidden fixed inset-0 z-50">
      <div class="absolute inset-0 bg-black/60" data-close="drawer"></div>
      <div class="ml-auto h-full w-[92%] max-w-sm bg-[var(--brand-primary)] text-white p-6 shadow-[var(--shadow-strong)] overflow-y-auto">
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-3"><span class="w-9 h-9 rounded-lg bg-gradient-to-br from-[var(--brand-gold)] to-[var(--brand-gold-2)]"></span><span class="font-bold">GFC</span></div>
          <button class="p-2 rounded hover:bg-white/10" data-close="drawer">✕</button>
        </div>
        <nav class="mt-6 grid gap-1 text-base" aria-label="Navigation mobile">
          <a href="#about" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">À propos</a>

          <!-- Mobile collapsible for Enseignements -->
          <details class="group">
            <summary class="list-none flex items-center justify-between px-3 py-2 rounded-md hover:bg-white/10 cursor-pointer">
              <span>Enseignements</span>
              <svg class="w-4 h-4 transition group-open:rotate-180" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.118l3.71-3.886a.75.75 0 111.08 1.04l-4.24 4.44a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
            </summary>
            <div class="pl-4 mt-1 grid gap-1">
              <a href="#teachings" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Doctrine</a>
              <a href="#videos" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Prédications</a>
              <a href="#news" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Études</a>
              <a href="#" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Archives PDF</a>

              <div class="mt-2 text-xs uppercase tracking-wide opacity-80">Thèmes</div>
              <div class="grid grid-cols-2 gap-1 text-sm">
                <a href="#" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Foi</a>
                <a href="#" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Prière</a>
                <a href="#" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Service</a>
                <a href="#" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Famille</a>
              </div>

              <div class="mt-2 text-xs uppercase tracking-wide opacity-80">Séries</div>
              <a href="#" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">La vie en Christ</a>
              <a href="#" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">La prière efficace</a>
              <a href="#" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Le cœur du serviteur</a>
            </div>
          </details>

          <a href="#verse" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Verset du jour</a>
          <a href="#videos" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Vidéos</a>
          <a href="#news" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Actualités</a>
          <a href="#events" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Événements</a>
          <a href="#contact" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Contact</a>
          <a href="#donate" class="mt-3 inline-flex w-max px-4 py-2 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold" data-close="drawer">Faire un don</a>
        </nav>
      </div>
    </div>
  </header>

  <main id="main">
    <!-- Hero (bleu profond) -->
    <section class="relative overflow-hidden text-white bg-gradient-to-tr from-[var(--brand-primary)] via-[var(--brand-primary-2)] to-[var(--brand-primary-3)]">
      <div class="absolute -top-24 -left-24 w-[520px] h-[520px] bg-[var(--brand-surface)]/40 blur-3xl rounded-full"></div>
      <div class="absolute -bottom-24 -right-24 w-[560px] h-[560px] bg-[var(--brand-surface-2)]/35 blur-3xl rounded-full"></div>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 py-20">
        <div class="grid lg:grid-cols-2 gap-10 items-center">
          <div>
            <span class="inline-block px-3 py-1 rounded-full bg-white/10 backdrop-blur text-xs uppercase tracking-wide">Plateforme officielle</span>
            <h1 class="mt-4 text-4xl md:text-5xl font-serif font-bold leading-tight">GFC – Enseignements, vidéos & événements fidèles au Rév. Jean AGOUNKPE</h1>
            <p class="mt-4 text-lg text-white/85 max-w-2xl">Une référence doctrinale et historique, pensée pour la clarté, la sécurité et le référencement.</p>
            <div class="mt-6 flex flex-wrap gap-3">
              <a href="#teachings" class="px-5 py-3 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold shadow-[var(--shadow-soft)] hover:scale-[1.03] transition">Découvrir les enseignements</a>
              <a href="#events" class="px-5 py-3 rounded-full border border-white/30 hover:bg-white/10 transition">Voir les événements</a>
            </div>
            <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 gap-4 text-center">
              <div class="rounded-[var(--radius)] border border-white/15 bg-white/5 p-4"><div class="text-2xl font-bold">Doctrine</div><div class="text-sm text-white/80">Contenus vérifiés</div></div>
              <div class="rounded-[var(--radius)] border border-white/15 bg-white/5 p-4"><div class="text-2xl font-bold">Vidéos</div><div class="text-sm text-white/80">Lecteur intégré</div></div>
              <div class="rounded-[var(--radius)] border border-white/15 bg-white/5 p-4"><div class="text-2xl font-bold">SEO</div><div class="text-sm text-white/80">Schéma & méta</div></div>
            </div>
          </div>
          <div class="rounded-[var(--radius)] border border-white/20 p-6 shadow-[var(--shadow-soft)] bg-white/5">
            <div class="grid sm:grid-cols-3 gap-4">
              <div class="rounded-[var(--radius)] bg-gradient-to-br from-slate-100 to-slate-50 p-4 text-[var(--brand-ink)]">
                <span class="text-xs font-semibold uppercase">Série</span>
                <h3 class="mt-1 font-bold">La foi authentique</h3>
                <p class="text-sm text-slate-700">3 enseignements • 42 min</p>
              </div>
              <div class="rounded-[var(--radius)] bg-gradient-to-br from-amber-100 to-yellow-50 p-4 text-[var(--brand-ink)]">
                <span class="text-xs font-semibold uppercase">Événement</span>
                <h3 class="mt-1 font-bold">Convention GFC 2025</h3>
                <p class="text-sm text-slate-700">24–27 Oct. • Cotonou</p>
              </div>
              <div class="rounded-[var(--radius)] bg-gradient-to-br from-sky-100 to-emerald-50 p-4 text-[var(--brand-ink)]">
                <span class="text-xs font-semibold uppercase">Vidéo</span>
                <h3 class="mt-1 font-bold">Message du Rév.</h3>
                <p class="text-sm text-slate-700">Clip 6 min</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about" class="py-16">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex items-end justify-between gap-6 mb-6">
          <h2 class="text-3xl font-serif font-bold">Qui sommes-nous ?</h2>
          <a href="#" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-full border border-[var(--brand-300)] hover:bg-white">Lire l'historique →</a>
        </div>
        <p class="text-slate-600 max-w-4xl">Le GFC a pour mission d’annoncer l’Évangile et d’enseigner une doctrine saine et équilibrée. Cette plateforme rassemble les ressources fidèles au <strong>Rév. Jean AGOUNKPE</strong> : enseignements, méditations, vidéos, archives et événements majeurs.</p>
      </div>
    </section>

    <!-- Verse of the day -->
    <section id="verse" class="py-16">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 grid lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-[var(--radius)] shadow-[var(--shadow-soft)] border border-[var(--brand-200)] p-6">
          <div class="flex items-center justify-between">
            <h3 class="text-xl font-serif font-bold">Verset du jour</h3>
            <span id="verse-date" class="inline-flex px-3 py-1 rounded-full text-xs bg-[var(--brand-100)]">Aujourd’hui</span>
          </div>
          <p id="verse-text" class="mt-3 text-lg leading-8">« Car Dieu a tant aimé le monde qu'il a donné son Fils unique, afin que quiconque croit en lui ne périsse point, mais qu'il ait la vie éternelle. »</p>
          <div id="verse-ref" class="mt-2 font-semibold">Jean 3:16</div>
          <div class="mt-4 flex flex-wrap gap-2">
            <button id="btn-copy" class="px-4 py-2 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold">Copier</button>
            <a id="btn-share" href="#" class="px-4 py-2 rounded-full border border-[var(--brand-300)] hover:bg-[var(--brand-50)]">Partager</a>
            <a href="#" class="px-4 py-2 rounded-full bg-[var(--brand-ink)] text-white">Méditation</a>
          </div>
        </div>
        <aside class="bg-[var(--brand-surface)] text-white rounded-[var(--radius)] border border-white/10 p-6 grid place-items-center min-h-[220px]">
          <div class="text-center">
            <svg class="mx-auto" width="88" height="88" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 3h14a2 2 0 0 1 2 2v14l-4-3-4 3-4-3-4 3V5a2 2 0 0 1 2-2Z" stroke="white" stroke-opacity=".85" stroke-width="1.1"/></svg>
            <p class="mt-3 opacity-90">Espace réservé au <strong>flyer du jour</strong> (verset + visuel). Intégration dynamique prévue.</p>
          </div>
        </aside>
      </div>
    </section>

    <!-- Teachings -->
    <section id="teachings" class="py-16">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex items-end justify-between gap-6 mb-6">
          <h2 class="text-3xl font-serif font-bold">Derniers enseignements</h2>
          <a href="#" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-full border border-[var(--brand-300)] hover:bg-white">Tous les enseignements →</a>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
          <article class="bg-white rounded-[var(--radius)] border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]">
            <div class="aspect-video bg-gradient-to-br from-[var(--brand-100)] to-white"></div>
            <div class="p-4">
              <h3 class="font-semibold">La persévérance dans la foi</h3>
              <p class="text-sm text-slate-500">Doctrine • 18 min</p>
            </div>
          </article>
          <article class="bg-white rounded-[var(--radius)] border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]">
            <div class="aspect-video bg-gradient-to-br from-amber-100 to-yellow-50"></div>
            <div class="p-4">
              <h3 class="font-semibold">L’obéissance qui honore Dieu</h3>
              <p class="text-sm text-slate-500">Message • 24 min</p>
            </div>
          </article>
          <article class="bg-white rounded-[var(--radius)] border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]">
            <div class="aspect-video bg-gradient-to-br from-sky-100 to-emerald-50"></div>
            <div class="p-4">
              <h3 class="font-semibold">Le cœur du serviteur</h3>
              <p class="text-sm text-slate-500">Série • 32 min</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Videos -->
    <section id="videos" class="py-16">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex items-end justify-between gap-6 mb-6">
          <h2 class="text-3xl font-serif font-bold">Vidéos récentes</h2>
          <a href="#" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-full border border-[var(--brand-300)] hover:bg-white">Toute la vidéothèque →</a>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
          <article class="group bg-white rounded-[var(--radius)] border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)] cursor-pointer video-card" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ">
            <div class="aspect-video grid place-items-center bg-[var(--brand-100)]">
              <button class="px-4 py-2 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold group-hover:scale-105 transition">▶ Lire</button>
            </div>
            <div class="p-4">
              <h3 class="font-semibold">Exhortation du jour</h3>
              <p class="text-sm text-slate-500">Clip • 6 min</p>
            </div>
          </article>
          <article class="group bg-white rounded-[var(--radius)] border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)] cursor-pointer video-card" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ">
            <div class="aspect-video grid place-items-center bg-[var(--brand-100)]">
              <button class="px-4 py-2 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold group-hover:scale-105 transition">▶ Lire</button>
            </div>
            <div class="p-4">
              <h3 class="font-semibold">Témoignage</h3>
              <p class="text-sm text-slate-500">Interview • 12 min</p>
            </div>
          </article>
          <article class="group bg-white rounded-[var(--radius)] border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)] cursor-pointer video-card" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ">
            <div class="aspect-video grid place-items-center bg-[var(--brand-100)]">
              <button class="px-4 py-2 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold group-hover:scale-105 transition">▶ Lire</button>
            </div>
            <div class="p-4">
              <h3 class="font-semibold">Prédication dominicale</h3>
              <p class="text-sm text-slate-500">Prédication • 38 min</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Events -->
    <section id="events" class="py-16">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex items-end justify-between gap-6 mb-6">
          <h2 class="text-3xl font-serif font-bold">Événements à venir</h2>
          <a href="#" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-full border border-[var(--brand-300)] hover:bg-white">Tous les événements →</a>
        </div>
        <div class="grid md:grid-cols-2 gap-5">
          <div class="grid grid-cols-[88px_1fr] gap-4 items-center bg-white rounded-[var(--radius)] border border-[var(--brand-200)] p-4 shadow-[var(--shadow-soft)]">
            <div class="grid place-items-center rounded-xl bg-gradient-to-b from-sky-500 to-[var(--brand-primary-2)] text-white p-4">
              <div class="text-2xl font-bold leading-none">24</div>
              <div class="text-xs uppercase">Oct.</div>
            </div>
            <div>
              <h3 class="font-semibold">Convention GFC 2025</h3>
              <p class="text-sm text-slate-500">Cotonou • 24–27 Octobre</p>
            </div>
          </div>
          <div class="grid grid-cols-[88px_1fr] gap-4 items-center bg-white rounded-[var(--radius)] border border-[var(--brand-200)] p-4 shadow-[var(--shadow-soft)]">
            <div class="grid place-items-center rounded-xl bg-gradient-to-b from-emerald-500 to-teal-600 text-white p-4">
              <div class="text-2xl font-bold leading-none">12</div>
              <div class="text-xs uppercase">Nov.</div>
            </div>
            <div>
              <h3 class="font-semibold">Retraite de prière</h3>
              <p class="text-sm text-slate-500">Parakou • 12–14 Novembre</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- News -->
    <section id="news" class="py-16">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex items-end justify-between gap-6 mb-6">
          <h2 class="text-3xl font-serif font-bold">Actualités</h2>
          <a href="#" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-full border border-[var(--brand-300)] hover:bg-white">Toutes les actualités →</a>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
          <article class="bg-white rounded-[var(--radius)] border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]">
            <div class="aspect-video bg-gradient-to-br from-[var(--brand-100)] to-white"></div>
            <div class="p-4">
              <h3 class="font-semibold">Lancement de la plateforme</h3>
              <p class="text-sm text-slate-500">Annonce • 20 août 2025</p>
            </div>
          </article>
          <article class="bg-white rounded-[var(--radius)] border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]">
            <div class="aspect-video bg-gradient-to-br from-amber-100 to-yellow-50"></div>
            <div class="p-4">
              <h3 class="font-semibold">Retour sur la croisade</h3>
              <p class="text-sm text-slate-500">Reportage • 5 août 2025</p>
            </div>
          </article>
          <article class="bg-white rounded-[var(--radius)] border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]">
            <div class="aspect-video bg-gradient-to-br from-sky-100 to-emerald-50"></div>
            <div class="p-4">
              <h3 class="font-semibold">Nouvelle série doctrinale</h3>
              <p class="text-sm text-slate-500">Blog • 22 juillet 2025</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Newsletter CTA -->
    <section id="newsletter" class="py-16">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="grid lg:grid-cols-2 gap-6 items-center rounded-3xl border border-white/10 bg-gradient-to-tr from-[var(--brand-primary)] to-[var(--brand-primary-3)] text-white p-8 shadow-[var(--shadow-soft)]">
          <div>
            <h3 class="text-2xl font-serif font-bold">Restez informé</h3>
            <p class="mt-2 text-white/85">Abonnez-vous pour recevoir les enseignements, méditations et actualités du GFC.</p>
          </div>
          <form class="flex flex-wrap gap-3" onsubmit="return false" aria-label="Formulaire newsletter">
            <label for="email" class="sr-only">Email</label>
            <input id="email" type="email" required placeholder="Votre adresse email" class="flex-1 min-w-[220px] rounded-full px-5 py-3 text-[var(--brand-ink)] placeholder:text-slate-500" />
            <button type="submit" class="px-6 py-3 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold">S’abonner</button>
          </form>
        </div>
      </div>
    </section>

    <!-- Founder Spotlight -->
    <section id="founder" class="py-16">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 grid lg:grid-cols-[1.1fr_1fr] gap-8 items-center">
        <div class="order-2 lg:order-1">
          <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[var(--brand-100)] text-xs">Rév. Jean AGOUNKPE • Vision</span>
          <h2 class="mt-3 text-3xl font-serif font-bold">Une voix, une doctrine, une vision</h2>
          <p class="mt-3 text-slate-600 max-w-2xl">Ministère dédié à la formation de disciples solides et équilibrés. Fidélité aux Écritures, christocentrisme et intégrité.</p>
          <div class="mt-6 flex flex-wrap gap-3">
            <a href="#" class="px-5 py-3 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold shadow-[var(--shadow-soft)]">Lire la vision</a>
            <a href="#videos" class="px-5 py-3 rounded-full border border-[var(--brand-300)] bg-white hover:bg-[var(--brand-50)]">Voir les messages</a>
          </div>
          <ul class="mt-6 grid sm:grid-cols-3 gap-3 text-sm">
            <li class="rounded-xl bg-white border border-[var(--brand-200)] p-4">+20 ans de ministère</li>
            <li class="rounded-xl bg-white border border-[var(--brand-200)] p-4">Séries doctrinales</li>
            <li class="rounded-xl bg-white border border-[var(--brand-200)] p-4">Événements internationaux</li>
          </ul>
        </div>
        <div class="order-1 lg:order-2">
          <div class="relative">
            <div class="absolute -inset-2 bg-gradient-to-tr from-[var(--brand-primary-2)] to-[var(--brand-primary-3)] rounded-[calc(var(--radius)+6px)] blur opacity-20"></div>
            <div class="relative rounded-[var(--radius)] overflow-hidden border border-[var(--brand-200)] shadow-[var(--shadow-strong)] bg-white aspect-[4/3] grid place-items-center">
              <span class="text-slate-400">Portrait du Rév. (placeholder)</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Doctrinal Pillars -->
    <section id="pillars" class="py-16">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex items-end justify-between gap-6 mb-8">
          <h2 class="text-3xl font-serif font-bold">Piliers doctrinaux</h2>
          <a href="#teachings" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-full border border-[var(--brand-300)] bg-white">Consulter la doctrine →</a>
        </div>
        <div class="grid md:grid-cols-3 gap-5">
          <article class="rounded-2xl bg-white border border-[var(--brand-200)] p-6 shadow-[var(--shadow-soft)]">
            <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-sky-200 to-indigo-100"></div>
            <h3 class="mt-3 font-semibold">Christ au centre</h3>
            <p class="mt-2 text-slate-600">Toute doctrine et toute pratique prennent leur sens dans la personne et l’œuvre de Jésus-Christ.</p>
          </article>
          <article class="rounded-2xl bg-white border border-[var(--brand-200)] p-6 shadow-[var(--shadow-soft)]">
            <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-amber-200 to-yellow-100"></div>
            <h3 class="mt-3 font-semibold">Intégrité des Écritures</h3>
            <p class="mt-2 text-slate-600">Lecture fidèle, contexte respecté, application pratique et équilibrée.</p>
          </article>
          <article class="rounded-2xl bg-white border border-[var(--brand-200)] p-6 shadow-[var(--shadow-soft)]">
            <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-emerald-200 to-teal-100"></div>
            <h3 class="mt-3 font-semibold">Disciples engagés</h3>
            <p class="mt-2 text-slate-600">Former des croyants mûrs : caractère, service et mission.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- Content Hub (Tabs) -->
    <section id="content-hub" class="py-16">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex items-end justify-between gap-6 mb-6">
          <h2 class="text-3xl font-serif font-bold">Derniers contenus</h2>
          <div class="hidden sm:flex gap-2" role="tablist" aria-label="Onglets contenus">
            <button class="tab-btn px-4 py-2 rounded-full border border-[var(--brand-300)] bg-white" data-target="#tab-teachings" aria-selected="true" role="tab">Enseignements</button>
            <button class="tab-btn px-4 py-2 rounded-full border border-[var(--brand-300)] bg-white" data-target="#tab-videos" role="tab">Vidéos</button>
            <button class="tab-btn px-4 py-2 rounded-full border border-[var(--brand-300)] bg-white" data-target="#tab-articles" role="tab">Articles</button>
          </div>
        </div>

        <div id="tab-teachings" role="tabpanel">
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <article class="bg-white rounded-2xl border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]">
              <div class="aspect-video bg-gradient-to-br from-[var(--brand-100)] to-white"></div>
              <div class="p-4"><h3 class="font-semibold">La foi qui agit</h3><p class="text-sm text-slate-500">Doctrine • 22 min</p></div>
            </article>
            <article class="bg-white rounded-2xl border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]">
              <div class="aspect-video bg-gradient-to-br from-[var(--brand-100)] to-white"></div>
              <div class="p-4"><h3 class="font-semibold">La grâce et l’obéissance</h3><p class="text-sm text-slate-500">Étude • 18 min</p></div>
            </article>
            <article class="bg-white rounded-2xl border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]">
              <div class="aspect-video bg-gradient-to-br from-[var(--brand-100)] to-white"></div>
              <div class="p-4"><h3 class="font-semibold">Le service fidèle</h3><p class="text-sm text-slate-500">Série • 30 min</p></div>
            </article>
          </div>
        </div>

        <div id="tab-videos" class="hidden" role="tabpanel">
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <article class="group bg-white rounded-2xl border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)] cursor-pointer video-card" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ">
              <div class="aspect-video grid place-items-center bg-[var(--brand-100)]"><button class="px-4 py-2 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold group-hover:scale-105 transition">▶ Lire</button></div>
              <div class="p-4"><h3 class="font-semibold">Exhortation</h3><p class="text-sm text-slate-500">Clip • 6 min</p></div>
            </article>
            <article class="group bg-white rounded-2xl border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)] cursor-pointer video-card" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ">
              <div class="aspect-video grid place-items-center bg-[var(--brand-100)]"><button class="px-4 py-2 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold group-hover:scale-105 transition">▶ Lire</button></div>
              <div class="p-4"><h3 class="font-semibold">Prédication</h3><p class="text-sm text-slate-500">Message • 38 min</p></div>
            </article>
            <article class="group bg-white rounded-2xl border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)] cursor-pointer video-card" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ">
              <div class="aspect-video grid place-items-center bg-[var(--brand-100)]"><button class="px-4 py-2 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold group-hover:scale-105 transition">▶ Lire</button></div>
              <div class="p-4"><h3 class="font-semibold">Témoignage</h3><p class="text-sm text-slate-500">Interview • 12 min</p></div>
            </article>
          </div>
        </div>

        <div id="tab-articles" class="hidden" role="tabpanel">
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <article class="bg-white rounded-2xl border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]">
              <div class="aspect-[16/7] bg-gradient-to-br from-[var(--brand-100)] to-white"></div>
              <div class="p-4"><h3 class="font-semibold">Pourquoi la sainteté ?</h3><p class="text-sm text-slate-500">Doctrine • 20 août 2025</p></div>
            </article>
            <article class="bg-white rounded-2xl border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]">
              <div class="aspect-[16/7] bg-gradient-to-br from-[var(--brand-100)] to-white"></div>
              <div class="p-4"><h3 class="font-semibold">Les disciplines spirituelles</h3><p class="text-sm text-slate-500">Étude • 12 août 2025</p></div>
            </article>
            <article class="bg-white rounded-2xl border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]">
              <div class="aspect-[16/7] bg-gradient-to-br from-[var(--brand-100)] to-white"></div>
              <div class="p-4"><h3 class="font-semibold">Comprendre la grâce</h3><p class="text-sm text-slate-500">Blog • 2 août 2025</p></div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials (carousel) -->
    <section id="testimonials" class="py-16">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex items-end justify-between gap-6 mb-6">
          <h2 class="text-3xl font-serif font-bold">Témoignages</h2>
          <div class="flex gap-2">
            <button class="ts-left px-3 py-2 rounded-full border border-[var(--brand-300)] bg-white">←</button>
            <button class="ts-right px-3 py-2 rounded-full border border-[var(--brand-300)] bg-white">→</button>
          </div>
        </div>
        <div class="ts-track flex gap-5 overflow-x-auto scroll-smooth snap-x snap-mandatory">
          <figure class="min-w-[320px] snap-start bg-white rounded-2xl border border-[var(--brand-200)] p-6 shadow-[var(--shadow-soft)]">
            <blockquote class="text-slate-700">« Ces enseignements ont transformé ma marche avec Dieu. »</blockquote>
            <figcaption class="mt-3 text-sm text-slate-500">— M., Cotonou</figcaption>
          </figure>
          <figure class="min-w-[320px] snap-start bg-white rounded-2xl border border-[var(--brand-200)] p-6 shadow-[var(--shadow-soft)]">
            <blockquote class="text-slate-700">« Clarté doctrinale et fruits visibles dans la vie de l’église. »</blockquote>
            <figcaption class="mt-3 text-sm text-slate-500">— M.A., Parakou</figcaption>
          </figure>
          <figure class="min-w-[320px] snap-start bg-white rounded-2xl border border-[var(--brand-200)] p-6 shadow-[var(--shadow-soft)]">
            <blockquote class="text-slate-700">« Un enseignement équilibré, sans compromis. »</blockquote>
            <figcaption class="mt-3 text-sm text-slate-500">— R., Porto-Novo</figcaption>
          </figure>
        </div>
      </div>
    </section>

    <!-- Donate CTA -->
    <section id="donate-cta" class="py-16">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 grid lg:grid-cols-2 gap-6 items-center rounded-3xl border border-white/10 bg-gradient-to-tr from-[var(--brand-primary)] to-[var(--brand-primary-3)] text-white p-8 shadow-[var(--shadow-soft)]">
        <div>
          <h2 class="text-3xl font-serif font-bold">Soutenir l’œuvre</h2>
          <p class="mt-2 text-white/85">Chaque don aide à diffuser la Parole : hébergement, production, missions et actions sociales.</p>
          <div class="mt-6 flex flex-wrap gap-2">
            <button class="amt px-4 py-2 rounded-full bg-white text-[var(--brand-ink)]">5 000 F</button>
            <button class="amt px-4 py-2 rounded-full bg-white/80 text-[var(--brand-ink)]">10 000 F</button>
            <button class="amt px-4 py-2 rounded-full bg-white/80 text-[var(--brand-ink)]">25 000 F</button>
            <button class="amt px-4 py-2 rounded-full bg-white/80 text-[var(--brand-ink)]">50 000 F</button>
          </div>
        </div>
        <form class="bg-white/10 rounded-2xl p-6 grid gap-4" onsubmit="return false" aria-label="Don rapide">
          <label class="text-sm" for="don-amount">Montant libre</label>
          <input id="don-amount" inputmode="numeric" class="rounded-xl px-4 py-3 text-[var(--brand-ink)]" placeholder="Ex : 15000" />
          <button id="don-go" class="px-5 py-3 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold">Faire un don</button>
          <div class="mt-2 text-xs text-white/80">Paiements sécurisés • Reçu disponible</div>
        </form>
      </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-16">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <h2 class="text-3xl font-serif font-bold mb-6">Questions fréquentes</h2>
        <div class="grid md:grid-cols-2 gap-4">
          <details class="group rounded-2xl bg-white border border-[var(--brand-200)] p-5 shadow-[var(--shadow-soft)]">
            <summary class="cursor-pointer list-none font-semibold flex items-center justify-between">
              Comment suivre les enseignements ?
              <span class="ml-3 text-slate-400 group-open:rotate-180 transition">▾</span>
            </summary>
            <p class="mt-3 text-slate-600">Via la page Enseignements (audio/texte) et la Vidéothèque (vidéos HD). Abonnez-vous à la newsletter pour les mises à jour.</p>
          </details>
          <details class="group rounded-2xl bg-white border border-[var(--brand-200)] p-5 shadow-[var(--shadow-soft)]">
            <summary class="cursor-pointer list-none font-semibold flex items-center justify-between">
              Comment participer aux événements ?
              <span class="ml-3 text-slate-400 group-open:rotate-180 transition">▾</span>
            </summary>
            <p class="mt-3 text-slate-600">Consultez la page Événements : calendrier, lieux et inscriptions.</p>
          </details>
          <details class="group rounded-2xl bg-white border border-[var(--brand-200)] p-5 shadow-[var(--shadow-soft)]">
            <summary class="cursor-pointer list-none font-semibold flex items-center justify-between">
              Où trouver la doctrine écrite ?
              <span class="ml-3 text-slate-400 group-open:rotate-180 transition">▾</span>
            </summary>
            <p class="mt-3 text-slate-600">Rubrique Enseignements → Archives PDF : documents à lire et télécharger.</p>
          </details>
          <details class="group rounded-2xl bg-white border border-[var(--brand-200)] p-5 shadow-[var(--shadow-soft)]">
            <summary class="cursor-pointer list-none font-semibold flex items-center justify-between">
              Comment faire un don en toute sécurité ?
              <span class="ml-3 text-slate-400 group-open:rotate-180 transition">▾</span>
            </summary>
            <p class="mt-3 text-slate-600">Bouton “Soutenir l’œuvre” → paiement sécurisé, confirmation instantanée et reçu.</p>
          </details>
        </div>
      </div>
    </section>

    <!-- Partners strip -->
    <section id="partners" class="py-10">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="rounded-2xl border border-[var(--brand-200)] bg-white p-6 shadow-[var(--shadow-soft)]">
          <div class="text-sm text-slate-500 mb-3">Partenaires & ministères associés</div>
          <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 gap-6 items-center">
            <div class="h-10 bg-[var(--brand-100)] rounded"></div>
            <div class="h-10 bg-[var(--brand-100)] rounded"></div>
            <div class="h-10 bg-[var(--brand-100)] rounded"></div>
            <div class="h-10 bg-[var(--brand-100)] rounded"></div>
            <div class="h-10 bg-[var(--brand-100)] rounded"></div>
            <div class="h-10 bg-[var(--brand-100)] rounded"></div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer id="contact" class="bg-[var(--brand-surface)] text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-14 grid md:grid-cols-3 gap-10">
      <div>
        <div class="flex items-center gap-3 mb-3"><span class="w-10 h-10 rounded-[var(--radius)] bg-gradient-to-br from-[var(--brand-gold)] to-[var(--brand-gold-2)]"></span><span class="font-bold">GFC</span></div>
        <p class="opacity-90 max-w-md">Plateforme officielle du GFC. Ressources doctrinales fidèles au Rév. Jean AGOUNKPE : enseignements, vidéos, méditations, actualités et événements.</p>
      </div>
      <div>
        <h4 class="font-semibold mb-3">Navigation</h4>
        <nav class="grid gap-2" aria-label="Navigation secondaire">
          <a href="#about" class="hover:text-[var(--brand-gold-2)]">À propos</a>
          <a href="#teachings" class="hover:text-[var(--brand-gold-2)]">Enseignements</a>
          <a href="#verse" class="hover:text-[var(--brand-gold-2)]">Verset du jour</a>
          <a href="#videos" class="hover:text-[var(--brand-gold-2)]">Vidéos</a>
          <a href="#events" class="hover:text-[var(--brand-gold-2)]">Événements</a>
          <a href="#news" class="hover:text-[var(--brand-gold-2)]">Actualités</a>
        </nav>
      </div>
      <div>
        <h4 class="font-semibold mb-3">Contact</h4>
        <ul class="space-y-1">
          <li>Email : <a href="mailto:contact@gfc.org" class="hover:text-[var(--brand-gold-2)]">contact@gfc.org</a></li>
          <li>Téléphone : <a href="tel:+22900000000" class="hover:text-[var(--brand-gold-2)]">+229 00 00 00 00</a></li>
          <li>Adresse : Cotonou, Bénin</li>
        </ul>
      </div>
    </div>
    <div class="border-t border-white/10 py-5 text-center text-sm text-white/80">© <span id="year"></span> GFC. Tous droits réservés.</div>
  </footer>

  <!-- Video modal -->
  <div id="video-modal" class="hidden fixed inset-0 z-50 bg-black/80 grid place-items-center p-4">
    <div class="relative w-full max-w-5xl aspect-video bg-black rounded-[var(--radius)] overflow-hidden shadow-[var(--shadow-strong)]">
      <button id="video-close" class="absolute top-3 right-3 px-3 py-1.5 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold">✕</button>
      <iframe id="video-frame" class="w-full h-full" src="" title="YouTube video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
  </div>

  <!-- Structured data (SEO) -->
  <script type="application/ld+json">
  {"@context":"https://schema.org","@type":"Organization","name":"GFC","url":"https://www.exemple-gfc.org/","logo":"https://www.exemple-gfc.org/assets/images/logo.png","founder":"Rév. Jean AGOUNKPE"}
  </script>
  <script type="application/ld+json">
  {"@context":"https://schema.org","@type":"WebSite","name":"GFC – Plateforme officielle","url":"https://www.exemple-gfc.org/","potentialAction":{"@type":"SearchAction","target":"https://www.exemple-gfc.org/recherche?q={query}","query-input":"required name=query"}}
  </script>

  <!-- App JS (vanilla) -->
  <script>
    // Year
    document.getElementById('year').textContent = new Date().getFullYear();

    // Mobile drawer
    const toggle = document.getElementById('menu-toggle');
    const drawer = document.getElementById('mobile-menu');
    toggle?.addEventListener('click', () => drawer.classList.toggle('hidden'));
    drawer?.querySelectorAll('[data-close="drawer"]').forEach(el => el.addEventListener('click', () => drawer.classList.add('hidden')));

    // Verse helpers
    const d = new Date();
    const opts = { weekday:'long', year:'numeric', month:'long', day:'numeric'};
    document.getElementById('verse-date').textContent = d.toLocaleDateString('fr-FR', opts);

    const btnCopy = document.getElementById('btn-copy');
    btnCopy?.addEventListener('click', async ()=>{
      try{
        const t = document.getElementById('verse-text').textContent + ' — ' + document.getElementById('verse-ref').textContent;
        await navigator.clipboard.writeText(t);
        btnCopy.textContent='Copié ✓'; setTimeout(()=>btnCopy.textContent='Copier',1500);
      }catch{ alert('Copie impossible'); }
    });

    const btnShare = document.getElementById('btn-share');
    btnShare?.addEventListener('click', async (e)=>{
      e.preventDefault();
      const data = {title:'Verset du jour', text:document.getElementById('verse-text').textContent, url:location.href};
      if(navigator.share){ try{ await navigator.share(data);}catch{} } else { alert('Partage non supporté'); }
    });

    // Video modal
    const videoCards = document.querySelectorAll('.video-card');
    const videoModal = document.getElementById('video-modal');
    const videoFrame = document.getElementById('video-frame');
    const videoClose = document.getElementById('video-close');
    const closeVideo = () => { videoFrame.src=''; videoModal.classList.add('hidden'); };
    videoCards.forEach(card => card.addEventListener('click', () => { videoFrame.src = card.getAttribute('data-video') + '?autoplay=1'; videoModal.classList.remove('hidden'); }));
    videoClose.addEventListener('click', closeVideo);
    videoModal.addEventListener('click', (e)=>{ if(e.target===videoModal) closeVideo(); });
  </script>
  <!-- App JS additions for MEGA -->
  <script>
    // Existing year & modal code remains above…
    (function(){
      const container = document.getElementById('mega-container');
      const toggle = document.getElementById('mega-toggle');
      const panel = document.getElementById('mega-panel');
      if(!container || !toggle || !panel) return;

      let open = false; let closeTimer;
      const setOpen = (v)=>{
        open = v;
        toggle.setAttribute('aria-expanded', String(v));
        panel.classList.toggle('invisible', !v);
        panel.classList.toggle('opacity-0', !v);
        panel.classList.toggle('translate-y-2', !v);
      };

      // Open on hover
      container.addEventListener('mouseenter', ()=>{ clearTimeout(closeTimer); setOpen(true); });
      container.addEventListener('mouseleave', ()=>{ closeTimer = setTimeout(()=>setOpen(false), 120); });

      // Keyboard / click toggle
      toggle.addEventListener('click', (e)=>{ e.preventDefault(); setOpen(!open); });
      toggle.addEventListener('keydown', (e)=>{ if(e.key==='Escape'){ setOpen(false);} });

      // Close on Escape when focusing inside the panel
      panel.addEventListener('keydown', (e)=>{ if(e.key==='Escape'){ setOpen(false); toggle.focus(); } });

      // Click outside to close
      document.addEventListener('click', (e)=>{
        if(!container.contains(e.target)) setOpen(false);
      });
    })();
  </script>
  <!-- Enhancements JS for new sections -->
  <script>
    // Tabs (Content Hub)
    document.querySelectorAll('.tab-btn').forEach(btn=>{
      btn.addEventListener('click', ()=>{
        const target = document.querySelector(btn.dataset.target);
        document.querySelectorAll('#content-hub [role="tabpanel"]').forEach(p=>p.classList.add('hidden'));
        document.querySelectorAll('#content-hub .tab-btn').forEach(b=>b.setAttribute('aria-selected','false'));
        target?.classList.remove('hidden');
        btn.setAttribute('aria-selected','true');
      });
    });

    // Testimonials controls
    (function(){
      const track = document.querySelector('#testimonials .ts-track');
      if(!track) return;
      document.querySelector('#testimonials .ts-left')?.addEventListener('click', ()=> track.scrollBy({left:-360, behavior:'smooth'}));
      document.querySelector('#testimonials .ts-right')?.addEventListener('click', ()=> track.scrollBy({left: 360, behavior:'smooth'}));
    })();

    // Donation quick amounts
    (function(){
      const amts = document.querySelectorAll('#donate-cta .amt');
      const input = document.getElementById('don-amount');
      const go = document.getElementById('don-go');
      amts.forEach(a=>a.addEventListener('click', ()=>{
        amts.forEach(x=>x.classList.remove('bg-white','text-[var(--brand-ink)]'));
        amts.forEach(x=>x.classList.add('bg-white/80'));
        a.classList.remove('bg-white/80'); a.classList.add('bg-white');
        input.value = (a.textContent||'').replace(/[^0-9]/g,'');
      }));
      go?.addEventListener('click', (e)=>{
        e.preventDefault();
        const val = input.value.trim();
        if(!val) return alert('Veuillez saisir un montant.');
        alert('Don simulé : ' + val + ' F');
      });
    })();
  </script>
</body>
</html>
