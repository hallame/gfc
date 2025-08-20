{{-- <!-- Header -->
<header id="site-header" class="sticky top-0 z-50 border-b border-white/10 bg-[var(--brand-primary)]/90 backdrop-blur">
  <div class="max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6 py-3 text-white">
    <!-- Brand -->
    <a href="/" class="flex items-center gap-3" aria-label="Accueil GFC">
      <span class="w-10 h-10 rounded-[var(--radius)] bg-gradient-to-br from-[var(--brand-gold)] to-[var(--brand-gold-2)] shadow-[var(--shadow-soft)]"></span>
      <span class="font-extrabold tracking-wide">GFC</span>
    </a>

    <!-- Desktop nav -->
    <nav class="hidden lg:flex items-center gap-1 text-sm" aria-label="Navigation principale">
      <a href="#about" class="px-3 py-2 rounded-md hover:text-[var(--brand-gold-2)]">À propos</a>

      <!-- Mega: Enseignements -->
      <div id="nav-mega" class="relative">
        <button id="nav-mega-btn"
                class="flex items-center gap-2 px-3 py-2 rounded-md hover:text-[var(--brand-gold-2)]"
                aria-haspopup="true" aria-expanded="false" aria-controls="nav-mega-panel">
          <span>Enseignements</span>
          <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.118l3.71-3.886a.75.75 0 111.08 1.04l-4.24 4.44a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd"/>
          </svg>
        </button>

        <!-- Panel -->
        <div id="nav-mega-panel"
             class="invisible opacity-0 translate-y-2 transition duration-200 ease-out absolute left-0 right-0 top-full">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 pt-3">
            <div class="rounded-2xl bg-white text-[var(--brand-ink)] shadow-[var(--shadow-strong)] ring-1 ring-slate-200/70 overflow-hidden">
              <div class="grid grid-cols-12 gap-6 p-6">
                <!-- Col 1: Catégories principales -->
                <div class="col-span-12 md:col-span-4">
                  <div class="flex items-center gap-2 mb-3">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-[var(--brand-gold)] to-[var(--brand-gold-2)]"></div>
                    <h3 class="font-serif font-bold text-lg">Catégories</h3>
                  </div>
                  <ul class="space-y-2 text-sm">
                    <li><a href="/teachings?type=doctrine" class="flex justify-between items-center px-3 py-2 rounded-lg hover:bg-[var(--brand-100)]">Doctrine <span class="text-xs text-slate-500">Articles & audio</span></a></li>
                    <li><a href="/teachings?type=predications" class="flex justify-between items-center px-3 py-2 rounded-lg hover:bg-[var(--brand-100)]">Prédications <span class="text-xs text-slate-500">Vidéos HD</span></a></li>
                    <li><a href="/teachings?type=etudes" class="flex justify-between items-center px-3 py-2 rounded-lg hover:bg-[var(--brand-100)]">Études <span class="text-xs text-slate-500">Séries thématiques</span></a></li>
                    <li><a href="/archives" class="flex justify-between items-center px-3 py-2 rounded-lg hover:bg-[var(--brand-100)]">Archives PDF <span class="text-xs text-slate-500">Téléchargements</span></a></li>
                  </ul>
                  <a href="/teachings" class="mt-4 inline-flex items-center gap-2 px-3 py-2 rounded-full bg-[var(--brand-ink)] text-white text-sm">Tous les enseignements →</a>
                </div>

                <!-- Col 2: Thèmes -->
                <div class="col-span-12 md:col-span-4">
                  <div class="flex items-center gap-2 mb-3">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-sky-400 to-indigo-400"></div>
                    <h3 class="font-serif font-bold text-lg">Thèmes</h3>
                  </div>
                  <div class="grid grid-cols-2 gap-2 text-sm">
                    <a href="/teachings?theme=foi" class="px-3 py-2 rounded-lg border border-[var(--brand-200)] hover:bg-[var(--brand-50)]">Foi</a>
                    <a href="/teachings?theme=sainte" class="px-3 py-2 rounded-lg border border-[var(--brand-200)] hover:bg-[var(--brand-50)]">Sainteté</a>
                    <a href="/teachings?theme=service" class="px-3 py-2 rounded-lg border border-[var(--brand-200)] hover:bg-[var(--brand-50)]">Service</a>
                    <a href="/teachings?theme=priere" class="px-3 py-2 rounded-lg border border-[var(--brand-200)] hover:bg-[var(--brand-50)]">Prière</a>
                    <a href="/teachings?theme=famille" class="px-3 py-2 rounded-lg border border-[var(--brand-200)] hover:bg-[var(--brand-50)]">Famille</a>
                    <a href="/teachings?theme=leadership" class="px-3 py-2 rounded-lg border border-[var(--brand-200)] hover:bg-[var(--brand-50)]">Leadership</a>
                  </div>
                </div>

                <!-- Col 3: Séries -->
                <div class="col-span-12 md:col-span-4">
                  <div class="flex items-center gap-2 mb-3">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-emerald-400 to-teal-500"></div>
                    <h3 class="font-serif font-bold text-lg">Séries</h3>
                  </div>
                  <div class="space-y-3">
                    <a href="/series/vie-en-christ" class="flex gap-3 p-3 rounded-xl hover:bg-[var(--brand-100)]">
                      <div class="w-14 h-10 rounded-lg bg-gradient-to-br from-slate-200 to-white"></div>
                      <div>
                        <div class="font-semibold leading-tight">La vie en Christ</div>
                        <div class="text-xs text-slate-500">6 épisodes • 2h14</div>
                      </div>
                    </a>
                    <a href="/series/priere-efficace" class="flex gap-3 p-3 rounded-xl hover:bg-[var(--brand-100)]">
                      <div class="w-14 h-10 rounded-lg bg-gradient-to-br from-amber-200 to-yellow-50"></div>
                      <div>
                        <div class="font-semibold leading-tight">La prière efficace</div>
                        <div class="text-xs text-slate-500">4 épisodes • 1h28</div>
                      </div>
                    </a>
                    <a href="/series/coeur-du-serviteur" class="flex gap-3 p-3 rounded-xl hover:bg-[var(--brand-100)]">
                      <div class="w-14 h-10 rounded-lg bg-gradient-to-br from-sky-200 to-emerald-100"></div>
                      <div>
                        <div class="font-semibold leading-tight">Le cœur du serviteur</div>
                        <div class="text-xs text-slate-500">5 épisodes • 1h52</div>
                      </div>
                    </a>
                  </div>
                </div>
              </div><!-- /grid -->
            </div><!-- /card -->
          </div><!-- /container -->
        </div><!-- /panel -->
      </div><!-- /mega -->

      <a href="#verse" class="px-3 py-2 rounded-md hover:text-[var(--brand-gold-2)]">Verset du jour</a>
      <a href="#videos" class="px-3 py-2 rounded-md hover:text-[var(--brand-gold-2)]">Vidéos</a>
      <a href="#news" class="px-3 py-2 rounded-md hover:text-[var(--brand-gold-2)]">Actualités</a>
      <a href="#events" class="px-3 py-2 rounded-md hover:text-[var(--brand-gold-2)]">Événements</a>
      <a href="#contact" class="px-3 py-2 rounded-md hover:text-[var(--brand-gold-2)]">Contact</a>
    </nav>

    <!-- Actions -->
    <div class="flex items-center gap-2">
      <button id="open-search" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/20 hover:bg-white/10" aria-label="Ouvrir la recherche">🔎 <span class="hidden md:inline">Rechercher</span></button>
      <a href="/donate" class="inline-flex items-center px-4 py-2 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold hover:scale-[1.03] transition">Faire un don</a>
      <button id="menu-toggle" class="lg:hidden ml-1 p-2 rounded-md hover:bg-white/10" aria-expanded="false" aria-controls="mobile-menu">☰</button>
    </div>
  </div>

  <!-- Mobile drawer -->
  <div id="mobile-menu" class="hidden fixed inset-0 z-50">
    <div class="absolute inset-0 bg-black/60" data-close="drawer"></div>
    <div class="ml-auto h-full w-[92%] max-w-sm bg-[var(--brand-primary)] text-white p-6 shadow-[var(--shadow-strong)] overflow-y-auto">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-3">
          <span class="w-9 h-9 rounded-lg bg-gradient-to-br from-[var(--brand-gold)] to-[var(--brand-gold-2)]"></span>
          <span class="font-bold">GFC</span>
        </div>
        <button class="p-2 rounded hover:bg-white/10" data-close="drawer" aria-label="Fermer">✕</button>
      </div>

      <nav class="mt-6 grid gap-1 text-base" aria-label="Navigation mobile">
        <a href="#about" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">À propos</a>

        <!-- Mobile: Enseignements (accordéon) -->
        <details class="group">
          <summary class="list-none flex items-center justify-between px-3 py-2 rounded-md hover:bg-white/10 cursor-pointer">
            <span>Enseignements</span>
            <svg class="w-4 h-4 transition group-open:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.118l3.71-3.886a.75.75 0 111.08 1.04l-4.24 4.44a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd"/>
            </svg>
          </summary>

          <div class="pl-4 mt-2 grid gap-2">
            <div class="text-xs uppercase tracking-wide opacity-80">Catégories</div>
            <a href="/teachings?type=doctrine" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Doctrine</a>
            <a href="/teachings?type=predications" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Prédications</a>
            <a href="/teachings?type=etudes" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Études</a>
            <a href="/archives" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Archives PDF</a>

            <div class="text-xs uppercase tracking-wide opacity-80 mt-2">Thèmes</div>
            <div class="grid grid-cols-2 gap-1 text-sm">
              <a href="/teachings?theme=foi" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Foi</a>
              <a href="/teachings?theme=priere" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Prière</a>
              <a href="/teachings?theme=service" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Service</a>
              <a href="/teachings?theme=famille" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Famille</a>
            </div>

            <div class="text-xs uppercase tracking-wide opacity-80 mt-2">Séries</div>
            <a href="/series/vie-en-christ" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">La vie en Christ</a>
            <a href="/series/priere-efficace" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">La prière efficace</a>
            <a href="/series/coeur-du-serviteur" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Le cœur du serviteur</a>
          </div>
        </details>

        <a href="#verse" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Verset du jour</a>
        <a href="#videos" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Vidéos</a>
        <a href="#news" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Actualités</a>
        <a href="#events" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Événements</a>
        <a href="#contact" class="px-3 py-2 rounded-md hover:bg-white/10" data-close="drawer">Contact</a>
        <a href="/donate" class="mt-3 inline-flex w-max px-4 py-2 rounded-full bg-[var(--brand-gold)] text-[var(--brand-ink)] font-semibold" data-close="drawer">Faire un don</a>
      </nav>
    </div>
  </div>
</header>

<!-- JS: mega-menu + mobile drawer -->
<script>
  // Shadow on scroll (optionnel)
  const siteHeader = document.getElementById('site-header');
  addEventListener('scroll', () => {
    siteHeader.style.boxShadow = (scrollY > 4) ? '0 6px 20px rgba(2, 6, 23, .20)' : 'none';
  }, { passive: true });

  // Mobile drawer
  const menuToggle = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  menuToggle?.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
  mobileMenu?.querySelectorAll('[data-close="drawer"]').forEach(el => {
    el.addEventListener('click', () => mobileMenu.classList.add('hidden'));
  });

  // Mega menu (desktop)
  const megaWrap  = document.getElementById('nav-mega');
  const megaBtn   = document.getElementById('nav-mega-btn');
  const megaPanel = document.getElementById('nav-mega-panel');
  if (megaWrap && megaBtn && megaPanel) {
    let open = false, t;
    const setOpen = v => {
      open = v;
      megaBtn.setAttribute('aria-expanded', String(v));
      megaPanel.classList.toggle('invisible', !v);
      megaPanel.classList.toggle('opacity-0', !v);
      megaPanel.classList.toggle('translate-y-2', !v);
    };

    // Hover open/close
    megaWrap.addEventListener('mouseenter', () => { clearTimeout(t); setOpen(true); });
    megaWrap.addEventListener('mouseleave', () => { t = setTimeout(() => setOpen(false), 120); });

    // Click toggle + keyboard
    megaBtn.addEventListener('click', e => { e.preventDefault(); setOpen(!open); });
    document.addEventListener('keydown', e => { if (e.key === 'Escape') setOpen(false); });

    // Click outside
    document.addEventListener('click', e => {
      if (!megaWrap.contains(e.target)) setOpen(false);
    });
  }
</script> --}}



  <!-- Header -->
  <header id="site-header" class="sticky top-0 z-50 border-b border-white/10 bg-gradient-to-tr from-[var(--brand-primary)] via-[var(--brand-surface)] to-[var(--brand-surface) backdrop-blur">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6 py-3 text-white">
      <a href="#" class="flex items-center gap-3" aria-label="Accueil GFC">
        {{-- <img src="{{ asset('assets/front/images/logo.jpg') }}" class="w-20 h-30 rounded-[var(--radius)] " alt=""> --}}
        <span class="w-10 h-10 rounded-[var(--radius)] bg-gradient-to-br from-[var(--brand-gold)] to-[var(--brand-gold-2)] shadow-[var(--shadow-soft)]"></span>
        <span class="font-extrabold tracking-wide text-5xl">GFC</span>
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
