<!-- Footer Call to Action -->
<section class="bg-primary-container py-24 text-on-primary">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center">
        <div class="max-w-2xl mx-auto">
            <span class="font-label-caps text-label-caps text-on-primary-container uppercase tracking-[0.3em] mb-6 block">Conexión Directa</span>
            <h2 class="font-headline-md text-headline-md mb-6">Únase a la Comunidad</h2>
            <p class="font-body-lg text-body-lg text-white/80 mb-10">
                Forme parte del legado. Reciba crónicas exclusivas y actualizaciones sobre la ganadería en Pijijiapan directamente en su dispositivo.
            </p>
            <a class="inline-flex items-center gap-4 bg-surface text-primary px-8 py-4 font-label-caps uppercase text-label-caps tracking-widest hover:opacity-90 transition-all" href="#">
                <svg class="w-5 h-5 fill-current" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.522-2.961-2.638-.087-.117-.708-.941-.708-1.793 0-.852.448-1.271.607-1.441.159-.171.348-.215.463-.215.117 0 .231.001.332.005.109.004.258-.045.406.314.159.386.543 1.32.593 1.419.05.1.084.215.017.348-.067.133-.101.215-.203.332-.101.117-.213.262-.304.351-.101.1-.205.21-.087.415.117.205.521.861 1.116 1.392.769.687 1.414.9 1.617 1.001.203.1.323.084.443-.05.12-.133.521-.607.66-.812.139-.205.277-.171.463-.101.188.07 1.188.561 1.392.663.204.101.34.15.39.235.05.084.05.486-.094.891z"></path>
                </svg>
                Unirse al Grupo de WhatsApp
            </a>
        </div>
    </div>
</section>

<footer class="bg-surface-container-highest w-full mt-section-gap">
    <div class="flex flex-col md:flex-row justify-between items-start w-full px-margin-mobile md:px-margin-desktop py-section-gap max-w-container-max mx-auto border-t border-primary/10">
        <div class="mb-12 md:mb-0 max-w-xs">
            <div class="font-headline-sm text-headline-sm text-primary mb-4">VICTORIANO RIZO</div>
            <p class="font-body-md text-body-md text-on-surface-variant mb-8">
                Custodio de la tierra, líder de hombres y pilar de la ganadería chiapaneca desde 1922.
            </p>
            <div class="flex gap-6">
                <a class="text-primary hover:opacity-70 transition-all" href="#"><span class="material-symbols-outlined">public</span></a>
                <a class="text-primary hover:opacity-70 transition-all" href="#"><span class="material-symbols-outlined">mail</span></a>
                <a class="text-primary hover:opacity-70 transition-all" href="#"><span class="material-symbols-outlined">description</span></a>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-12 md:gap-24">
            <div class="flex flex-col gap-4">
                <span class="font-label-caps text-label-caps uppercase text-primary">Explorar</span>
                <a class="text-on-surface-variant hover:text-primary transition-opacity duration-200" href="#heritage">Archives</a>
                <a class="text-on-surface-variant hover:text-primary transition-opacity duration-200" href="#land">Ranching Ethics</a>
                <a class="text-on-surface-variant hover:text-primary transition-opacity duration-200" href="#">Contact</a>
                <a class="text-on-surface-variant hover:text-primary transition-opacity duration-200" href="#">Legal</a>
            </div>
            <div class="flex flex-col gap-4">
                <span class="font-label-caps text-label-caps uppercase text-primary">Sede</span>
                <span class="text-on-surface-variant">Pijijiapan, Chiapas</span>
                <span class="text-on-surface-variant">México</span>
                <span class="text-on-surface-variant">+52 961 000 0000</span>
            </div>
        </div>
    </div>
    <div class="w-full py-8 border-t border-primary/5 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-center text-on-surface-variant text-[12px] font-body-md">
        <span>© 2024 The Rizo Estate. All rights reserved. Stewardship of the land since 1922.</span>
        <span class="mt-4 md:mt-0 font-label-caps uppercase tracking-widest italic opacity-60">Curated Legacy Collection</span>
    </div>
</footer>

<script>
    // Simple Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100', 'translate-y-0');
                entry.target.classList.remove('opacity-0', 'translate-y-10');
            }
        });
    }, observerOptions);

    document.querySelectorAll('section > div').forEach(el => {
        el.classList.add('transition-all', 'duration-1000', 'ease-out', 'opacity-0', 'translate-y-10');
        observer.observe(el);
    });

    // Sticky Navbar shrink effect
    window.addEventListener('scroll', () => {
        const header = document.querySelector('header');
        const nav = header.querySelector('nav');
        if (window.scrollY > 50) {
            header.classList.add('py-4');
            if(nav) {
                nav.classList.remove('py-6', 'md:py-8');
                nav.classList.add('py-2', 'md:py-2');
            }
        } else {
            header.classList.remove('py-4');
            if(nav) {
                nav.classList.remove('py-2', 'md:py-2');
                nav.classList.add('py-6', 'md:py-8');
            }
        }
    });
</script>
</body>
</html>
