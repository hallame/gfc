@extends('frontend.layouts.master')

@section('tile', 'Accueil')

@section('content')


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

@endsection
