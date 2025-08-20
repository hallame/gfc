


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
