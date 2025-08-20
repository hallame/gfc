


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
