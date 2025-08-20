@extends('frontend.layouts.master')

@section('title', 'Accueil')

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


    <!-- SECTION: Founder Spotlight -->
    <section id="founder-spotlight" class="py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 grid lg:grid-cols-[1.1fr_1fr] gap-8 items-center">
            <div class="order-2 lg:order-1">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[var(--brand-100)] text-xs">Rév. Jean AGOUNKPE • Vision</span>
            <h2 class="mt-3 text-3xl font-serif font-bold">Une voix, une doctrine, une vision</h2>
            <p class="mt-3 text-slate-600 max-w-2xl">Ministère dédié à la formation de disciples solides et équilibrés. Fidélité aux Écritures, christocentrisme et intégrité.</p>
            <div class="mt-6 flex flex-wrap gap-3">
                <a href="/vision" class="px-5 py-3 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold shadow-[var(--shadow-soft)]">Lire la vision</a>
                <a href="/videos" class="px-5 py-3 rounded-full border border-[var(--brand-300)] bg-white hover:bg-[var(--brand-50)]">Voir les messages</a>
            </div>
            <ul class="mt-6 grid sm:grid-cols-3 gap-3 text-sm">
                <li class="rounded-xl bg-white border border-[var(--brand-200)] p-4">+20 ans de ministère</li>
                <li class="rounded-xl bg-white border border-[var(--brand-200)] p-4">Séries doctrinales</li>
                <li class="rounded-xl bg-white border border-[var(--brand-200)] p-4">Événements internationaux</li>
            </ul>
            </div>

            <div class="order-1 lg:order-2">
                <div class="relative">
                    <div aria-hidden="true"
                        class="pointer-events-none absolute -inset-2 bg-gradient-to-tr from-[var(--brand-primary-2)] to-[var(--brand-primary-3)] rounded-[calc(var(--radius)+6px)] blur opacity-20">
                    </div>

                    <div class="relative rounded-[var(--radius)] overflow-hidden border border-[var(--brand-200)]
                                shadow-[var(--shadow-strong)] bg-white aspect-[4/3] p-4 grid place-items-center">
                    <img
                        src="{{ asset('assets/front/images/reverend.jpg') }}"
                        alt="Portrait du Rév"
                        class="w-full h-full object-cover object-center block"
                        loading="lazy" decoding="async"
                    />
                    </div>
                </div>
            </div>

            {{-- <div class="order-1 lg:order-2">
                <div class="relative">
                    <div class="absolute -inset-2 bg-gradient-to-tr from-[var(--brand-primary-2)] to-[var(--brand-primary-3)] rounded-[calc(var(--radius)+6px)] blur opacity-20"></div>
                    <div class="relative rounded-[var(--radius)] overflow-hidden border border-[var(--brand-200)] shadow-[var(--shadow-strong)] bg-white aspect-[4/3] grid place-items-center">
                        <img
                        src="{{ asset('assets/front/images/reverend.jpg') }}"
                        alt="Portrait du Rév"
                        class="block max-w-full h-auto object-contain"
                        />
                    </div>
                </div>
            </div> --}}
        </div>
    </section>


    <!-- SECTION: Content Hub (Tabs) -->
    <section id="content-hub" class="py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
        <h2 class="text-3xl font-serif font-bold">Derniers contenus</h2>
        <div class="flex gap-2" role="tablist" aria-label="Onglets contenus">
            <button class="tab-btn px-4 py-2 rounded-full border border-[var(--brand-300)] bg-white" data-target="#hub-teachings" aria-selected="true" role="tab">Enseignements</button>
            <button class="tab-btn px-4 py-2 rounded-full border border-[var(--brand-300)] bg-white" data-target="#hub-videos" role="tab">Vidéos</button>
            <button class="tab-btn px-4 py-2 rounded-full border border-[var(--brand-300)] bg-white" data-target="#hub-articles" role="tab">Articles</button>
        </div>
        </div>

        <!-- Pane: Enseignements -->
        <div id="hub-teachings" role="tabpanel">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <!-- carte -->
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

        <!-- Pane: Vidéos -->
        <div id="hub-videos" class="hidden" role="tabpanel">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <article class="group bg-white rounded-2xl border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)] cursor-pointer video-card" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ">
            <div class="aspect-video grid place-items-center bg-[var(--brand-100)]">
                <button class="px-4 py-2 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold group-hover:scale-105 transition">▶ Lire</button>
            </div>
            <div class="p-4"><h3 class="font-semibold">Exhortation</h3><p class="text-sm text-slate-500">Clip • 6 min</p></div>
            </article>
            <!-- ... duplique 2 autres cartes si besoin -->
        </div>
        </div>

        <!-- Pane: Articles -->
        <div id="hub-articles" class="hidden" role="tabpanel">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <article class="bg-white rounded-2xl border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]">
            <div class="aspect-[16/7] bg-gradient-to-br from-[var(--brand-100)] to-white"></div>
            <div class="p-4"><h3 class="font-semibold">Pourquoi la sainteté ?</h3><p class="text-sm text-slate-500">Doctrine • 20 août 2025</p></div>
            </article>
        </div>
        </div>
    </div>
    </section>

    <script>
        (() => {
        const hub = document.querySelector('#content-hub');
        if (!hub) return;
        const tabs = hub.querySelectorAll('.tab-btn');
        tabs.forEach(btn => btn.addEventListener('click', () => {
            const target = hub.querySelector(btn.dataset.target);
            hub.querySelectorAll('[role="tabpanel"]').forEach(p => p.classList.add('hidden'));
            tabs.forEach(b => b.setAttribute('aria-selected','false'));
            target?.classList.remove('hidden');
            btn.setAttribute('aria-selected','true');
        }));
        })();
    </script>

    <!-- SECTION: Testimonials Carousel -->
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
            <blockquote class="text-slate-700">« Ces enseignements ont transformé ma marche avec Dieu. »</blockquote>
            <figcaption class="mt-3 text-sm text-slate-500">— M., Cotonou</figcaption>
        </figure>
        <figure class="min-w-[320px] snap-start bg-white rounded-2xl border border-[var(--brand-200)] p-6 shadow-[var(--shadow-soft)]">
            <blockquote class="text-slate-700">« Clarté doctrinale et fruits visibles dans l’église. »</blockquote>
            <figcaption class="mt-3 text-sm text-slate-500">— M.A., Parakou</figcaption>
        </figure>
        <figure class="min-w-[320px] snap-start bg-white rounded-2xl border border-[var(--brand-200)] p-6 shadow-[var(--shadow-soft)]">
            <blockquote class="text-slate-700">« Un enseignement équilibré, sans compromis. »</blockquote>
            <figcaption class="mt-3 text-sm text-slate-500">— R., Porto-Novo</figcaption>
        </figure>
        </div>
    </div>
    </section>

    <script>
        (() => {
        const root = document.querySelector('#testimonials');
        if (!root) return;
        const track = root.querySelector('.ts-track');
        root.querySelector('.ts-left')?.addEventListener('click', () => track.scrollBy({left: -360, behavior: 'smooth'}));
        root.querySelector('.ts-right')?.addEventListener('click', () => track.scrollBy({left:  360, behavior: 'smooth'}));
        })();
    </script>

    <!-- SECTION: Donate CTA -->
    <section id="donate-cta" class="py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 grid lg:grid-cols-2 gap-6 items-center rounded-3xl border border-white/10 bg-gradient-to-tr from-[var(--brand-primary)] to-[var(--brand-primary-3)] text-white p-8 shadow-[var(--shadow-soft)]">
        <div>
        <h2 class="text-3xl font-serif font-bold">Soutenir l’œuvre</h2>
        <p class="mt-2 text-white/85">Chaque don aide à diffuser la Parole : hébergement, production, missions et actions sociales.</p>
        <div class="mt-6 flex flex-wrap gap-2">
            <button class="amt px-4 py-2 rounded-full bg-white text-[var(--brand-ink)]">5 000 F</button>
            <button class="amt px-4 py-2 rounded-full bg-white/80 text-[var(--brand-ink)]">10 000 F</button>
            <button class="amt px-4 py-2 rounded-full bg-white/80 text-[var(--brand-ink)]">25 000 F</button>
            <button class="amt px-4 py-2 rounded-full bg-white/80 text-[var(--brand-ink)]">50 000 F</button>
        </div>
        </div>
        <form class="bg-white/10 rounded-2xl p-6 grid gap-4" onsubmit="return false" aria-label="Don rapide">
        <label class="text-sm" for="don-amount">Montant libre</label>
        <input id="don-amount" inputmode="numeric" class="rounded-xl px-4 py-3 text-[var(--brand-ink)]" placeholder="Ex : 15000" />
        <button id="don-go" class="px-5 py-3 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold">Faire un don</button>
        <div class="mt-2 text-xs text-white/80">Paiements sécurisés • Reçu disponible</div>
        </form>
    </div>
    </section>

    <script>
        (() => {
        const root  = document.querySelector('#donate-cta');
        if (!root) return;
        const amts  = root.querySelectorAll('.amt');
        const input = root.querySelector('#don-amount');
        const go    = root.querySelector('#don-go');
        amts.forEach(a => a.addEventListener('click', () => {
            amts.forEach(x => x.classList.replace('bg-white', 'bg-white/80'));
            a.classList.add('bg-white'); a.classList.remove('bg-white/80');
            input.value = (a.textContent||'').replace(/[^0-9]/g,'');
        }));
        go?.addEventListener('click', e => {
            e.preventDefault();
            const val = input.value.trim();
            if(!val) return alert('Veuillez saisir un montant.');
            // branche ici vers ta page / API de paiement
            alert('Don simulé : ' + val + ' F');
        });
        })();
    </script>


    <!-- SECTION: FAQ -->
    <section id="faq" class="py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <h2 class="text-3xl font-serif font-bold mb-6">Questions fréquentes</h2>
        <div class="grid md:grid-cols-2 gap-4">
        <details class="group rounded-2xl bg-white border border-[var(--brand-200)] p-5 shadow-[var(--shadow-soft)]">
            <summary class="cursor-pointer list-none font-semibold flex items-center justify-between">
            Comment suivre les enseignements ?
            <span class="ml-3 text-slate-400 group-open:rotate-180 transition">▾</span>
            </summary>
            <p class="mt-3 text-slate-600">Via la page Enseignements (audio/texte) et la Vidéothèque (vidéo). Abonnez-vous à la newsletter.</p>
        </details>
        <details class="group rounded-2xl bg-white border border-[var(--brand-200)] p-5 shadow-[var(--shadow-soft)]">
            <summary class="cursor-pointer list-none font-semibold flex items-center justify-between">
            Comment participer aux événements ?
            <span class="ml-3 text-slate-400 group-open:rotate-180 transition">▾</span>
            </summary>
            <p class="mt-3 text-slate-600">Consultez la page Événements : calendrier, lieux, inscriptions.</p>
        </details>
        <details class="group rounded-2xl bg-white border border-[var(--brand-200)] p-5 shadow-[var(--shadow-soft)]">
            <summary class="cursor-pointer list-none font-semibold flex items-center justify-between">
            Où trouver la doctrine écrite ?
            <span class="ml-3 text-slate-400 group-open:rotate-180 transition">▾</span>
            </summary>
            <p class="mt-3 text-slate-600">Rubrique Enseignements → Archives PDF : documents à lire et télécharger.</p>
        </details>
        <details class="group rounded-2xl bg-white border border-[var(--brand-200)] p-5 shadow-[var(--shadow-soft)]">
            <summary class="cursor-pointer list-none font-semibold flex items-center justify-between">
            Comment faire un don en sécurité ?
            <span class="ml-3 text-slate-400 group-open:rotate-180 transition">▾</span>
            </summary>
            <p class="mt-3 text-slate-600">Bouton “Soutenir l’œuvre” → paiement sécurisé, confirmation et reçu.</p>
        </details>
        </div>
    </div>
    </section>

    <!-- SECTION: Partners strip -->
    <section id="partners" class="py-10">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="rounded-2xl border border-[var(--brand-200)] bg-white p-6 shadow-[var(--shadow-soft)]">
        <div class="text-sm text-slate-500 mb-3">Partenaires & ministères associés</div>
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 gap-6 items-center">
            <!-- Remplace par <img src="..." alt="..."> -->
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




    <!-- SECTION A: Live & Prochain Direct (compte à rebours) -->
    <section id="live" class="py-16 text-white bg-gradient-to-tr from-[var(--brand-primary)] via-[var(--brand-primary-2)] to-[var(--brand-primary-3)]" data-target="2025-10-24T18:00:00">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 grid lg:grid-cols-[1.2fr_1fr] gap-8 items-center">
            <div>
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 backdrop-blur text-xs uppercase tracking-wide">Direct & Événement</span>
            <h2 class="mt-3 text-3xl font-serif font-bold">Prochain direct : Convention GFC</h2>
            <p class="mt-2 text-white/85">Rejoignez la diffusion en ligne ou sur place. Louange, Parole et moments de prière.</p>
            <div class="mt-6 grid grid-cols-2 sm:grid-cols-4 gap-3" aria-live="polite" aria-atomic="true">
                <div class="rounded-2xl border border-white/20 bg-white/10 p-4 text-center"><div class="text-3xl font-extrabold" id="dd">–</div><div class="text-xs uppercase">Jours</div></div>
                <div class="rounded-2xl border border-white/20 bg-white/10 p-4 text-center"><div class="text-3xl font-extrabold" id="hh">–</div><div class="text-xs uppercase">Heures</div></div>
                <div class="rounded-2xl border border-white/20 bg-white/10 p-4 text-center"><div class="text-3xl font-extrabold" id="mm">–</div><div class="text-xs uppercase">Minutes</div></div>
                <div class="rounded-2xl border border-white/20 bg-white/10 p-4 text-center"><div class="text-3xl font-extrabold" id="ss">–</div><div class="text-xs uppercase">Secondes</div></div>
            </div>
            <div class="mt-6 flex flex-wrap gap-3">
                <a href="/live" class="px-5 py-3 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold shadow-[var(--shadow-soft)]">Regarder en direct</a>
                <a href="/events" class="px-5 py-3 rounded-full border border-white/30 hover:bg-white/10 transition">Infos & inscription</a>
            </div>
            </div>
            <aside class="rounded-[var(--radius)] border border-white/20 bg-white/10 p-6 shadow-[var(--shadow-soft)]">
            <div class="grid gap-2 text-sm">
                <div class="flex justify-between"><span>Date</span><span class="font-semibold">24–27 Octobre</span></div>
                <div class="flex justify-between"><span>Lieu</span><span class="font-semibold">Cotonou</span></div>
                <div class="flex justify-between"><span>Orateur</span><span class="font-semibold">Rév. Jean AGOUNKPE</span></div>
            </div>
            <div class="mt-4 aspect-video rounded-xl bg-black/30 grid place-items-center">Bannière/teaser (placeholder)</div>
            </aside>
        </div>
    </section>

    <!-- SECTION B: Horaires & Lieux -->
    <section id="times-locations" class="py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 grid lg:grid-cols-2 gap-8">
            <div class="bg-white rounded-2xl border border-[var(--brand-200)] p-6 shadow-[var(--shadow-soft)]">
            <h3 class="text-xl font-serif font-bold">Horaires des cultes</h3>
            <ul class="mt-4 divide-y divide-[var(--brand-200)]">
                <li class="py-3 flex items-center justify-between"><span>Dimanche</span><span class="font-semibold">09:00 – 11:30</span></li>
                <li class="py-3 flex items-center justify-between"><span>Mercredi (Étude)</span><span class="font-semibold">18:30 – 20:00</span></li>
                <li class="py-3 flex items-center justify-between"><span>Vendredi (Prière)</span><span class="font-semibold">22:00 – 00:00</span></li>
            </ul>
            </div>
            <div class="grid sm:grid-cols-2 gap-4">
            <article class="bg-white rounded-2xl border border-[var(--brand-200)] p-5 shadow-[var(--shadow-soft)]">
                <h4 class="font-semibold">Campus Cotonou</h4>
                <p class="text-slate-600 mt-1">Zogbo • Rue…</p>
                <a href="#" class="mt-3 inline-flex px-4 py-2 rounded-full bg-[var(--brand-ink)] text-white text-sm">Itinéraire</a>
            </article>
            <article class="bg-white rounded-2xl border border-[var(--brand-200)] p-5 shadow-[var(--shadow-soft)]">
                <h4 class="font-semibold">Campus Parakou</h4>
                <p class="text-slate-600 mt-1">Place…</p>
                <a href="#" class="mt-3 inline-flex px-4 py-2 rounded-full bg-[var(--brand-ink)] text-white text-sm">Itinéraire</a>
            </article>
            </div>
        </div>
    </section>

    <!-- SECTION C: Bibliothèque (filtres PDF/Audio/Vidéo/Texte) -->
    <section id="library" class="py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex flex-wrap items-center justify-between gap-4">
            <h2 class="text-3xl font-serif font-bold">Bibliothèque</h2>
            <div class="flex flex-wrap gap-2">
                <button class="lib-chip px-4 py-2 rounded-full border border-[var(--brand-300)] bg-white" data-filter="all" aria-pressed="true">Tout <span class="ml-1 text-xs text-slate-500 badge">0</span></button>
                <button class="lib-chip px-4 py-2 rounded-full border border-[var(--brand-300)] bg-white/80" data-filter="pdf">PDF <span class="ml-1 text-xs text-slate-500 badge">0</span></button>
                <button class="lib-chip px-4 py-2 rounded-full border border-[var(--brand-300)] bg-white/80" data-filter="audio">Audio <span class="ml-1 text-xs text-slate-500 badge">0</span></button>
                <button class="lib-chip px-4 py-2 rounded-full border border-[var(--brand-300)] bg-white/80" data-filter="video">Vidéo <span class="ml-1 text-xs text-slate-500 badge">0</span></button>
                <button class="lib-chip px-4 py-2 rounded-full border border-[var(--brand-300)] bg-white/80" data-filter="texte">Texte <span class="ml-1 text-xs text-slate-500 badge">0</span></button>
            </div>
            </div>
            <div class="mt-6 grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <!-- cartes avec data-cat -->
            <article class="lib-card bg-white rounded-2xl border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]" data-cat="pdf">
                <div class="aspect-[16/7] bg-gradient-to-br from-[var(--brand-100)] to-white"></div>
                <div class="p-4"><h3 class="font-semibold">Doctrine — La Grâce</h3><p class="text-sm text-slate-500">PDF • 2.1 Mo</p></div>
            </article>
            <article class="lib-card bg-white rounded-2xl border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]" data-cat="audio">
                <div class="aspect-[16/7] bg-gradient-to-br from-amber-100 to-yellow-50"></div>
                <div class="p-4"><h3 class="font-semibold">Série Foi (Épisode 1)</h3><p class="text-sm text-slate-500">Audio • 24 min</p></div>
            </article>
            <article class="lib-card bg-white rounded-2xl border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]" data-cat="video">
                <div class="aspect-[16/7] bg-gradient-to-br from-sky-100 to-emerald-50"></div>
                <div class="p-4"><h3 class="font-semibold">Prédication — Persévérance</h3><p class="text-sm text-slate-500">Vidéo • 38 min</p></div>
            </article>
            <article class="lib-card bg-white rounded-2xl border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]" data-cat="texte">
                <div class="aspect-[16/7] bg-gradient-to-br from-[var(--brand-100)] to-white"></div>
                <div class="p-4"><h3 class="font-semibold">Article — La sainteté</h3><p class="text-sm text-slate-500">Texte • 5 min</p></div>
            </article>
            <article class="lib-card bg-white rounded-2xl border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]" data-cat="pdf">
                <div class="aspect-[16/7] bg-gradient-to-br from-[var(--brand-100)] to-white"></div>
                <div class="p-4"><h3 class="font-semibold">Guide — Prière</h3><p class="text-sm text-slate-500">PDF • 1.2 Mo</p></div>
            </article>
            <article class="lib-card bg-white rounded-2xl border border-[var(--brand-200)] overflow-hidden shadow-[var(--shadow-soft)]" data-cat="audio">
                <div class="aspect-[16/7] bg-gradient-to-br from-amber-100 to-yellow-50"></div>
                <div class="p-4"><h3 class="font-semibold">Podcast — Famille</h3><p class="text-sm text-slate-500">Audio • 19 min</p></div>
            </article>
            </div>
        </div>
    </section>

    <!-- SECTION D: Podcast / Lecteur audio -->
    <section id="podcast" class="py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 grid lg:grid-cols-[1.1fr_1fr] gap-8">
            <div class="bg-white rounded-2xl border border-[var(--brand-200)] p-6 shadow-[var(--shadow-soft)]">
            <h3 class="text-xl font-serif font-bold">Podcast GFC</h3>
            <audio id="audio" class="mt-4 w-full" controls preload="none"></audio>
            <div id="now" class="mt-2 text-sm text-slate-600">Sélectionnez un épisode…</div>
            </div>
            <ul class="grid gap-3">
            <li><button class="ep px-4 py-3 text-left rounded-xl border border-[var(--brand-200)] bg-white hover:bg-[var(--brand-50)] w-full" data-src="https://www.kozco.com/tech/organfinale.mp3" data-title="Foi authentique — Épisode 1">▶ Foi authentique — Épisode 1</button></li>
            <li><button class="ep px-4 py-3 text-left rounded-xl border border-[var(--brand-200)] bg-white hover:bg-[var(--brand-50)] w-full" data-src="https://www.kozco.com/tech/LRMonoPhase4.wav" data-title="Discipline spirituelle — Épisode 2">▶ Discipline spirituelle — Épisode 2</button></li>
            <li><button class="ep px-4 py-3 text-left rounded-xl border border-[var(--brand-200)] bg-white hover:bg-[var(--brand-50)] w-full" data-src="https://www.kozco.com/tech/piano2-CoolEdit.mp3" data-title="Famille & grâce — Épisode 3">▶ Famille & grâce — Épisode 3</button></li>
            </ul>
        </div>
    </section>

    <!-- SECTION E: Demande de prière (formulaire) -->
    <section id="prayer" class="py-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div class="rounded-2xl border border-[var(--brand-200)] bg-white p-6 shadow-[var(--shadow-soft)]">
            <h3 class="text-2xl font-serif font-bold">Demande de prière</h3>
            <form class="grid md:grid-cols-2 gap-4 mt-4" onsubmit="return false">
                <div class="md:col-span-1">
                <label class="text-sm text-slate-600">Nom complet</label>
                <input id="pr-name" class="mt-1 w-full rounded-xl border border-[var(--brand-300)] px-4 py-2" placeholder="Votre nom" />
                </div>
                <div class="md:col-span-1">
                <label class="text-sm text-slate-600">Email (facultatif)</label>
                <input id="pr-mail" type="email" class="mt-1 w-full rounded-xl border border-[var(--brand-300)] px-4 py-2" placeholder="vous@exemple.com" />
                </div>
                <div class="md:col-span-2">
                <label class="text-sm text-slate-600">Sujet</label>
                <input id="pr-subj" required class="mt-1 w-full rounded-xl border border-[var(--brand-300)] px-4 py-2" placeholder="Sujet de prière" />
                </div>
                <div class="md:col-span-2">
                <label class="text-sm text-slate-600">Votre message</label>
                <textarea id="pr-msg" required rows="5" class="mt-1 w-full rounded-xl border border-[var(--brand-300)] px-4 py-2" placeholder="Décrivez votre requête…"></textarea>
                </div>
                <label class="md:col-span-2 inline-flex items-center gap-2 text-sm"><input id="pr-anon" type="checkbox" class="accent-[var(--brand-primary-3)]"><span>Rester anonyme</span></label>
                <div class="md:col-span-2 flex items-center gap-3">
                <button id="pr-send" class="inline-flex px-5 py-2.5 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold">Envoyer</button>
                <span id="pr-toast" class="hidden text-sm px-3 py-1.5 rounded-full bg-emerald-100 text-emerald-700">Merci, nous prierons pour vous 🙏</span>
                </div>
            </form>
            </div>
        </div>
    </section>

    <!-- SECTION F: Sessions à venir (ruban horizontal) -->
    <section id="sessions" class="py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex items-end justify-between gap-6 mb-6">
            <h2 class="text-3xl font-serif font-bold">Sessions à venir</h2>
            <div class="flex gap-2">
                <button class="ss-left px-3 py-2 rounded-full border border-[var(--brand-300)] bg-white">←</button>
                <button class="ss-right px-3 py-2 rounded-full border border-[var(--brand-300)] bg-white">→</button>
            </div>
            </div>
            <div class="ss-track flex gap-5 overflow-x-auto scroll-smooth snap-x snap-mandatory">
            <!-- cartes jour -->
            <article class="min-w-[280px] snap-start bg-white rounded-2xl border border-[var(--brand-200)] p-5 shadow-[var(--shadow-soft)]">
                <div class="text-sm text-slate-500">Samedi 05 Oct.</div>
                <h4 class="mt-1 font-semibold">Atelier Leadership</h4>
                <p class="text-sm text-slate-600">09:00 – 12:00</p>
                <a href="#" class="mt-3 inline-flex px-4 py-2 rounded-full bg-[var(--brand-ink)] text-white text-sm">S’inscrire</a>
            </article>
            <article class="min-w-[280px] snap-start bg-white rounded-2xl border border-[var(--brand-200)] p-5 shadow-[var(--shadow-soft)]">
                <div class="text-sm text-slate-500">Dimanche 06 Oct.</div>
                <h4 class="mt-1 font-semibold">Culte & Sainte-Cène</h4>
                <p class="text-sm text-slate-600">09:00 – 11:30</p>
                <a href="#" class="mt-3 inline-flex px-4 py-2 rounded-full bg-[var(--brand-ink)] text-white text-sm">S’inscrire</a>
            </article>
            <article class="min-w-[280px] snap-start bg-white rounded-2xl border border-[var(--brand-200)] p-5 shadow-[var(--shadow-soft)]">
                <div class="text-sm text-slate-500">Mercredi 09 Oct.</div>
                <h4 class="mt-1 font-semibold">Étude biblique</h4>
                <p class="text-sm text-slate-600">18:30 – 20:00</p>
                <a href="#" class="mt-3 inline-flex px-4 py-2 rounded-full bg-[var(--brand-ink)] text-white text-sm">S’inscrire</a>
            </article>
            </div>
        </div>
    </section>

    <!-- SECTION G: Impact (compteurs animés) -->
    <section id="impact" class="py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="rounded-3xl border border-[var(--brand-200)] bg-white p-8 shadow-[var(--shadow-soft)]">
            <h2 class="text-3xl font-serif font-bold">Impact</h2>
            <div class="mt-6 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div><div class="text-4xl font-extrabold counter" data-target="320">0</div><div class="text-sm text-slate-500">Enseignements</div></div>
                <div><div class="text-4xl font-extrabold counter" data-target="180">0</div><div class="text-sm text-slate-500">Médias publiés</div></div>
                <div><div class="text-4xl font-extrabold counter" data-target="14">0</div><div class="text-sm text-slate-500">Pays touchés</div></div>
                <div><div class="text-4xl font-extrabold counter" data-target="120">0</div><div class="text-sm text-slate-500">Bénévoles</div></div>
            </div>
            </div>
        </div>
    </section>

    <!-- SECTION H: Restez connectés (YouTube / Spotify / WhatsApp / Telegram) -->
    <section id="connect" class="py-14">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="rounded-2xl border border-[var(--brand-200)] bg-white p-6 shadow-[var(--shadow-soft)]">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <h3 class="text-xl font-serif font-bold">Restez connectés</h3>
                <div class="flex flex-wrap gap-2">
                <a href="#" class="px-4 py-2 rounded-full border border-[var(--brand-300)] bg-white">▶︎ YouTube</a>
                <a href="#" class="px-4 py-2 rounded-full border border-[var(--brand-300)] bg-white">♫ Spotify</a>
                <a href="#" class="px-4 py-2 rounded-full border border-[var(--brand-300)] bg-white">🟩 WhatsApp</a>
                <a href="#" class="px-4 py-2 rounded-full border border-[var(--brand-300)] bg-white">✈︎ Telegram</a>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- ====== JS POUR TOUTES LES SECTIONS CI-DESSUS ====== -->
    <script>
        (() => {
        // A) LIVE: Compte à rebours
        const live = document.getElementById('live');
        if (live) {
            const target = new Date(live.dataset.target || '').getTime();
            const dd = live.querySelector('#dd'), hh = live.querySelector('#hh'), mm = live.querySelector('#mm'), ss = live.querySelector('#ss');
            if (target && dd && hh && mm && ss) {
            const tick = () => {
                const now = Date.now();
                let diff = Math.max(0, target - now);
                const d = Math.floor(diff / (1000*60*60*24)); diff -= d*(1000*60*60*24);
                const h = Math.floor(diff / (1000*60*60));     diff -= h*(1000*60*60);
                const m = Math.floor(diff / (1000*60));        diff -= m*(1000*60);
                const s = Math.floor(diff / 1000);
                dd.textContent = d; hh.textContent = String(h).padStart(2,'0'); mm.textContent = String(m).padStart(2,'0'); ss.textContent = String(s).padStart(2,'0');
            };
            tick(); setInterval(tick, 1000);
            }
        }

        // C) LIBRARY: Filtres + compteurs
        const lib = document.getElementById('library');
        if (lib) {
            const chips = lib.querySelectorAll('.lib-chip');
            const cards = lib.querySelectorAll('.lib-card');
            const updateBadges = () => {
            const cats = ['pdf','audio','video','texte'];
            const counts = { all: cards.length };
            cats.forEach(c => counts[c] = lib.querySelectorAll('.lib-card[data-cat="'+c+'"]').length);
            lib.querySelectorAll('.lib-chip').forEach(ch => {
                const f = ch.dataset.filter;
                const b = ch.querySelector('.badge');
                if (b) b.textContent = counts[f] ?? 0;
            });
            };
            updateBadges();
            chips.forEach(ch => ch.addEventListener('click', () => {
            chips.forEach(c => c.setAttribute('aria-pressed','false'));
            ch.setAttribute('aria-pressed','true');
            const f = ch.dataset.filter;
            cards.forEach(card => {
                const ok = (f === 'all') || (card.dataset.cat === f);
                card.classList.toggle('hidden', !ok);
            });
            }));
        }

        // D) PODCAST: Lecteur
        const pod = document.getElementById('podcast');
        if (pod) {
            const audio = pod.querySelector('#audio');
            const now   = pod.querySelector('#now');
            pod.querySelectorAll('.ep').forEach(btn => {
            btn.addEventListener('click', () => {
                const src = btn.dataset.src, title = btn.dataset.title || 'Épisode';
                audio.src = src; audio.play().catch(()=>{});
                now.textContent = '▶ ' + title;
                pod.querySelectorAll('.ep').forEach(b => b.classList.remove('ring','ring-[var(--brand-primary-3)]'));
                btn.classList.add('ring','ring-[var(--brand-primary-3)]');
            });
            });
        }

        // E) PRAYER: Formulaire (anonyme + toast)
        const pr = document.getElementById('prayer');
        if (pr) {
            const anon = pr.querySelector('#pr-anon');
            const name = pr.querySelector('#pr-name');
            const mail = pr.querySelector('#pr-mail');
            const subj = pr.querySelector('#pr-subj');
            const msg  = pr.querySelector('#pr-msg');
            const send = pr.querySelector('#pr-send');
            const toast= pr.querySelector('#pr-toast');
            anon.addEventListener('change', () => {
            [name, mail].forEach(i => { i.disabled = anon.checked; i.classList.toggle('opacity-50', anon.checked); });
            });
            send.addEventListener('click', (e) => {
            e.preventDefault();
            if (!subj.value.trim() || !msg.value.trim()) return alert('Sujet et message sont requis.');
            try {
                const store = JSON.parse(localStorage.getItem('gfc_prayers') || '[]');
                store.push({ t: Date.now(), anon: anon.checked, name: name.value, mail: mail.value, subj: subj.value, msg: msg.value });
                localStorage.setItem('gfc_prayers', JSON.stringify(store));
            } catch {}
            toast.classList.remove('hidden');
            setTimeout(() => toast.classList.add('hidden'), 3000);
            subj.value = ''; msg.value = '';
            if (!anon.checked) { name.value=''; mail.value=''; }
            });
        }

        // F) SESSIONS: Ruban
        const ss = document.getElementById('sessions');
        if (ss) {
            const track = ss.querySelector('.ss-track');
            ss.querySelector('.ss-left')?.addEventListener('click', () => track.scrollBy({ left: -320, behavior: 'smooth' }));
            ss.querySelector('.ss-right')?.addEventListener('click', () => track.scrollBy({ left:  320, behavior: 'smooth' }));
        }

        // G) IMPACT: Compteurs
        const imp = document.getElementById('impact');
        if (imp) {
            const counters = imp.querySelectorAll('.counter');
            const obs = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (!e.isIntersecting) return;
                const el = e.target; const target = +el.dataset.target || 0;
                let cur = 0; const step = Math.max(1, Math.ceil(target / 80));
                const id = setInterval(() => { cur += step; if (cur >= target) { cur = target; clearInterval(id); } el.textContent = cur.toLocaleString('fr-FR'); }, 20);
                obs.unobserve(el);
            });
            }, { threshold: 0.4 });
            counters.forEach(c => obs.observe(c));
        }
        })();
    </script>








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
