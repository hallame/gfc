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
  <header id="site-header" class="sticky top-0 z-50 border-b border-white/10 bg-[var(--brand-primary)]/85 backdrop-blur">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6 py-3 text-white">
      <a href="#" class="flex items-center gap-3" aria-label="Accueil GFC">
        <span class="w-10 h-10 rounded-[var(--radius)] bg-gradient-to-br from-[var(--brand-gold)] to-[var(--brand-gold-2)] shadow-[var(--shadow-soft)]"></span>
        <span class="font-extrabold tracking-wide">GFC</span>
      </a>
      <nav class="hidden lg:flex items-center gap-6 text-sm" aria-label="Navigation principale">
        <a href="#about" class="hover:text-[var(--brand-gold-2)]">À propos</a>
        <a href="#teachings" class="hover:text-[var(--brand-gold-2)]">Enseignements</a>
        <a href="#verse" class="hover:text-[var(--brand-gold-2)]">Verset du jour</a>
        <a href="#videos" class="hover:text-[var(--brand-gold-2)]">Vidéos</a>
        <a href="#news" class="hover:text-[var(--brand-gold-2)]">Actualités</a>
        <a href="#events" class="hover:text-[var(--brand-gold-2)]">Événements</a>
        <a href="#contact" class="hover:text-[var(--brand-gold-2)]">Contact</a>
      </nav>
      <div class="flex items-center gap-2">
        <button id="open-search" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/20 hover:bg-white/10" aria-label="Ouvrir la recherche">🔎 <span class="hidden md:inline">Rechercher</span></button>
        <a href="#donate" class="inline-flex items-center px-4 py-2 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold hover:scale-[1.03] transition">Faire un don</a>
        <button id="menu-toggle" class="lg:hidden ml-1 p-2 rounded-md hover:bg-white/10" aria-expanded="false" aria-controls="mobile-menu">☰</button>
      </div>
    </div>

    <!-- Mobile drawer -->
    <div id="mobile-menu" class="hidden fixed inset-0 z-50">
      <div class="absolute inset-0 bg-black/60" data-close="drawer"></div>
      <div class="ml-auto h-full w-[92%] max-w-sm bg-[var(--brand-primary)] text-white p-6 shadow-[var(--shadow-strong)]">
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-3"><span class="w-9 h-9 rounded-lg bg-gradient-to-br from-[var(--brand-gold)] to-[var(--brand-gold-2)]"></span><span class="font-bold">GFC</span></div>
          <button class="p-2 rounded hover:bg-white/10" data-close="drawer">✕</button>
        </div>
        <nav class="mt-6 grid gap-3 text-base" aria-label="Navigation mobile">
          <a href="#about" class="hover:text-[var(--brand-gold-2)]" data-close="drawer">À propos</a>
          <a href="#teachings" class="hover:text-[var(--brand-gold-2)]" data-close="drawer">Enseignements</a>
          <a href="#verse" class="hover:text-[var(--brand-gold-2)]" data-close="drawer">Verset du jour</a>
          <a href="#videos" class="hover:text-[var(--brand-gold-2)]" data-close="drawer">Vidéos</a>
          <a href="#news" class="hover:text-[var(--brand-gold-2)]" data-close="drawer">Actualités</a>
          <a href="#events" class="hover:text-[var(--brand-gold-2)]" data-close="drawer">Événements</a>
          <a href="#contact" class="hover:text-[var(--brand-gold-2)]" data-close="drawer">Contact</a>
          <a href="#donate" class="mt-2 inline-flex w-max px-4 py-2 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold">Faire un don</a>
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
</body>
</html>
