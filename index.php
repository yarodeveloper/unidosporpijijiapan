<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative w-full h-screen overflow-hidden flex flex-col justify-end md:justify-center pb-24 md:pb-0">
    <div class="absolute inset-0 z-0 select-none">
        <!-- Slides del Carrusel -->
        <div class="hero-slide absolute inset-0 opacity-100 transition-opacity duration-1000 ease-in-out">
            <img class="w-full h-full object-cover object-top" src="assets/hero3.webp" alt="Pijijiapan"/>
        </div>
        <div class="hero-slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
            <img class="w-full h-full object-cover object-top" src="assets/hero2.webp" alt="Pijijiapan"/>
        </div>
        <div class="hero-slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
            <img class="w-full h-full object-cover object-top" src="assets/hero1.webp" alt="Pijijiapan"/>
        </div>
        <!-- Gradiente adaptativo para móviles (abajo) y escritorio (derecha) -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent md:hidden z-10"></div>
        <div class="absolute inset-0 hidden md:block bg-gradient-to-r from-black/10 via-black/30 to-black/70 z-10"></div>
    </div>
    <div class="relative z-10 px-margin-mobile md:px-margin-desktop w-full max-w-container-max mx-auto flex flex-col items-center md:items-end text-center md:text-right mt-16 md:mt-0">
        <div class="max-w-3xl">
            <span class="font-label-caps text-[10px] md:text-label-caps uppercase tracking-[0.3em] text-white/90 mb-4 md:mb-6 block drop-shadow-md">Pijijiapan</span>
            <h1 class="font-display-lg-mobile md:font-display-lg text-[32px] md:text-[56px] leading-[1.1] text-white mb-6 md:mb-8 drop-shadow-lg">
                La Cultura del Esfuerzo. <br class="hidden md:block"/>
                <span class="serif-italic font-normal text-[20px] md:text-[32px] text-white/90">Un proyecto impulsado por ciudadanos comprometidos con el futuro de Pijijiapan.</span>
            </h1>
            <div class="divider-fine bg-white/40 w-24 mx-auto md:ml-auto md:mr-0 mb-6 md:mb-8"></div>
            <p class="font-headline-sm text-headline-sm text-white/90 serif-italic drop-shadow-md px-4 md:px-0">
                "La tierra no pide títulos, pide manos que sepan trabajarla."
            </p>
        </div>
    </div>
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce z-10">
        <span class="font-label-caps text-[10px] uppercase text-white/70">Explorar</span>
        <span class="material-symbols-outlined text-white">keyboard_double_arrow_down</span>
    </div>
</section>

<!-- Social Share Bar (Below Hero) -->
<div class="w-full bg-surface-container-high py-4 border-b border-primary/10">
    <div class="max-w-[1400px] mx-auto px-margin-mobile md:px-margin-desktop flex justify-center md:justify-end items-center gap-4">
        <span class="text-on-surface-variant text-[11px] font-label-caps uppercase tracking-widest">Compartir página:</span>
        <a href="https://www.facebook.com/sharer/sharer.php?u=https://unidosporpijijiapan.mx" target="_blank" class="w-8 h-8 rounded-full border border-primary/20 bg-surface flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-all" aria-label="Compartir en Facebook">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
        </a>
        <a href="https://api.whatsapp.com/send?text=Te%20invito%20a%20conocer%20este%20proyecto:%20https://unidosporpijijiapan.mx" target="_blank" class="w-8 h-8 rounded-full border border-primary/20 bg-surface flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-all" aria-label="Compartir en WhatsApp">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.522-2.961-2.638-.087-.117-.708-.941-.708-1.793 0-.852.448-1.271.607-1.441.159-.171.348-.215.463-.215.117 0 .231.001.332.005.109.004.258-.045.406.314.159.386.543 1.32.593 1.419.05.1.084.215.017.348-.067.133-.101.215-.203.332-.101.117-.213.262-.304.351-.101.1-.205.21-.087.415.117.205.521.861 1.116 1.392.769.687 1.414.9 1.617 1.001.203.1.323.084.443-.05.12-.133.521-.607.66-.812.139-.205.277-.171.463-.101.188.07 1.188.561 1.392.663.204.101.34.15.39.235.05.084.05.486-.094.891z"/></svg>
        </a>
        <a href="https://twitter.com/intent/tweet?text=Te%20invito%20a%20conocer%20este%20proyecto:%20https://unidosporpijijiapan.mx" target="_blank" class="w-8 h-8 rounded-full border border-primary/20 bg-surface flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-all" aria-label="Compartir en X">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
        </a>
    </div>
</div>

<div class="max-w-[1400px] mx-auto px-margin-mobile md:px-margin-desktop py-section-gap grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
    
    <!-- Sidebar: Pijijiapan al Día -->
    <aside class="lg:col-span-4 relative order-2 lg:order-1">
        <div class="sticky top-32">
            <div class="mb-8">
                <span class="font-label-caps text-label-caps text-secondary uppercase block mb-2">Noticias</span>
                <h3 class="font-headline-sm text-headline-sm text-primary">Pijijiapan al Día</h3>
                <div class="divider-fine mt-4 w-full"></div>
            </div>
            
            <!-- News Slider Component -->
            <div class="flex flex-col gap-6 max-h-[75vh] overflow-y-auto pr-4 custom-scrollbar pb-10">
                
                <!-- Noticia 1 -->
                <article class="bg-surface-container p-6 rounded-lg border border-primary/5 hover:border-primary/20 transition-all hover:-translate-y-1 shadow-sm">
                    <span class="font-label-caps text-[10px] text-secondary uppercase mb-2 block">1. Actividad Sísmica</span>
                    <h4 class="font-headline-sm text-[18px] leading-tight text-primary mb-3">Monitoreo sísmico regional</h4>
                    <p class="font-body-md text-sm text-on-surface-variant mb-4">El 3 de julio de 2026 se registró un sismo de magnitud 3.5 con epicentro a 10 km de la cabecera municipal, sin reporte de daños estructurales.</p>
                    <a href="https://heraldodemexico.com.mx/nacional/2026/7/3/sismo-de-magnitud-35-sacude-pijijiapan-chiapas-en-las-primeras-horas-del-jueves-843418.html" target="_blank" class="inline-flex items-center text-xs font-label-caps uppercase text-secondary hover:text-primary transition-colors">
                        Leer fuente <span class="material-symbols-outlined text-[14px] ml-1">arrow_forward</span>
                    </a>
                </article>
                
                <!-- Noticia 2 -->
                <article class="bg-surface-container p-6 rounded-lg border border-primary/5 hover:border-primary/20 transition-all hover:-translate-y-1 shadow-sm">
                    <span class="font-label-caps text-[10px] text-secondary uppercase mb-2 block">2. Infraestructura Urbana</span>
                    <h4 class="font-headline-sm text-[18px] leading-tight text-primary mb-3">Mejora de vialidades en la Colonia Obrera</h4>
                    <p class="font-body-md text-sm text-on-surface-variant mb-4">El 1 de julio inició el programa de pavimentación con concreto hidráulico, interviniendo una superficie superior a los 2,000 metros cuadrados.</p>
                    <a href="https://www.facebook.com/ChiapasEsNoticia/posts/m%C3%A1s-calles-dignas-para-pijijiapan-inicia-nueva-obra-de-pavimentaci%C3%B3n-con-concret/1485566313586923/" target="_blank" class="inline-flex items-center text-xs font-label-caps uppercase text-secondary hover:text-primary transition-colors">
                        Leer fuente <span class="material-symbols-outlined text-[14px] ml-1">arrow_forward</span>
                    </a>
                </article>

                <!-- Noticia 3 -->
                <article class="bg-surface-container p-6 rounded-lg border border-primary/5 hover:border-primary/20 transition-all hover:-translate-y-1 shadow-sm">
                    <span class="font-label-caps text-[10px] text-secondary uppercase mb-2 block">3. Conectividad Estratégica</span>
                    <h4 class="font-headline-sm text-[18px] leading-tight text-primary mb-3">Proyecto de vía rápida Pijijiapan-Tuxtla</h4>
                    <p class="font-body-md text-sm text-on-surface-variant mb-4">Se trabaja en el proyecto ejecutivo para una nueva conexión vial que reducirá el tiempo de traslado entre la Costa y la capital chiapaneca a solo 80 minutos.</p>
                    <a href="https://www.facebook.com/ChiapasTeInforma/posts/chiapas%EF%B8%8Fnuevo-tramo-carretero-pijijiapan-villaflores-chiapa-de-corzo-tuxtla%EF%B8%8Fgobe/1282699077197037/" target="_blank" class="inline-flex items-center text-xs font-label-caps uppercase text-secondary hover:text-primary transition-colors">
                        Leer fuente <span class="material-symbols-outlined text-[14px] ml-1">arrow_forward</span>
                    </a>
                </article>

                <!-- Noticia 4 -->
                <article class="bg-surface-container p-6 rounded-lg border border-primary/5 hover:border-primary/20 transition-all hover:-translate-y-1 shadow-sm">
                    <span class="font-label-caps text-[10px] text-secondary uppercase mb-2 block">4. Apoyo al Sector Primario</span>
                    <h4 class="font-headline-sm text-[18px] leading-tight text-primary mb-3">Fortalecimiento del Plan Nacional de Maíz Nativo</h4>
                    <p class="font-body-md text-sm text-on-surface-variant mb-4">Se realizó una asamblea informativa dirigida a productores de 26 comunidades milperas para brindar acompañamiento y soporte a sus actividades agrícolas.</p>
                    <a href="https://www.youtube.com/watch?v=hyu0r5BVfoc&t=38s" target="_blank" class="inline-flex items-center text-xs font-label-caps uppercase text-secondary hover:text-primary transition-colors">
                        Leer fuente <span class="material-symbols-outlined text-[14px] ml-1">arrow_forward</span>
                    </a>
                </article>
            </div>
            
            <div class="absolute bottom-0 left-0 w-full h-12 bg-gradient-to-t from-background to-transparent pointer-events-none"></div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="lg:col-span-8 flex flex-col gap-16 order-1 lg:order-2">
        
        <!-- Header de Sección -->
        <div class="mb-2">
            <span class="font-label-caps text-label-caps text-secondary uppercase block mb-4">Gestión para todos</span>
            <h2 class="font-headline-md text-[36px] md:text-[48px] leading-tight text-primary">
                Hacia una gestión de soluciones a ras de suelo.
            </h2>
            <div class="divider-fine mt-8 w-full"></div>
        </div>

        <!-- Bloque A: Raíces (Estilo Nota de Autor) -->
        <section class="grid md:grid-cols-2 gap-10 items-center">
            <div class="font-body-lg text-[17px] md:text-[18px] text-on-surface-variant leading-relaxed space-y-6">
                <p>
                    La administración pública en Pijijiapan exige una nueva forma de entender la gestión: salir del escritorio y entrar en el territorio. El modelo que hoy impulsa el trabajo de los Bienes Comunales demuestra que la capacidad de escuchar directamente al productor, al ganadero y al vecino de la colonia es el único camino para resolver necesidades reales sin intermediarios.
                </p>
                <p>
                    La constancia y el arraigo son los ejes que definen esta nueva etapa de servicio en nuestro municipio.
                </p>
            </div>
            <div class="relative aspect-square md:aspect-[4/5] overflow-hidden rounded-xl shadow-md">
                <!-- Se requiere imagen real de Victoriano en asamblea -->
                <img class="w-full h-full object-cover" src="assets/pescadores.jpg" alt="Pescadores en Pijijiapan"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute bottom-4 left-4 right-4 text-white">
                    <span class="bg-primary/90 px-3 py-1 rounded text-[10px] font-label-caps uppercase tracking-widest inline-block mb-2">Apoyo a Pescadores</span>
                    <p class="font-body-md text-[13px] opacity-90">Escuchando las necesidades reales de nuestra comunidad.</p>
                </div>
            </div>
        </section>

        <!-- Bloque B: Testimonios del trabajo comunitario -->
        <section class="mt-4">
            <div class="mb-6">
                <h3 class="font-headline-sm text-[26px] text-primary">Testimonios del trabajo comunitario en nuestra región.</h3>
                <div class="divider-fine mt-4 w-full"></div>
            </div>
            <div class="bg-surface-container p-8 md:p-10 rounded-2xl border border-primary/5 shadow-sm">
                <p class="font-body-lg text-[17px] md:text-[18px] text-on-surface-variant leading-relaxed">
                    En Pijijiapan, el progreso se construye a diario. En las asambleas y recorridos por nuestras comunidades, se hace evidente que cuando se trabaja con escucha activa, las soluciones son más efectivas. El ejercicio de gestión actual, desde los Bienes Comunales, pone al ciudadano al centro, priorizando el contacto directo para entender las urgencias de cada sector. Esta dinámica de trabajo es el reflejo del esfuerzo compartido que mueve a nuestro municipio.
                </p>
            </div>
        </section>

        <!-- Bloque Testimonios: Voces de nuestra gente -->
        <section class="mt-8">
            <div class="mb-6 flex justify-between items-end">
                <div>
                    <span class="font-label-caps text-label-caps text-secondary uppercase block mb-2">Comunidad</span>
                    <h3 class="font-headline-sm text-[26px] text-primary">Voces de nuestra gente</h3>
                </div>
                <!-- Navigation buttons for desktop -->
                <div class="hidden md:flex gap-2">
                    <button onclick="scrollTestimonials('left')" class="w-10 h-10 rounded-full border border-primary/20 bg-surface flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-all cursor-pointer" aria-label="Anterior testimonio">
                        <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                    </button>
                    <button onclick="scrollTestimonials('right')" class="w-10 h-10 rounded-full border border-primary/20 bg-surface flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-all cursor-pointer" aria-label="Siguiente testimonio">
                        <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                    </button>
                </div>
            </div>
            <div class="divider-fine mb-8 w-full"></div>

            <!-- Carousel Wrapper -->
            <div class="relative w-full">
                <div id="testimonials-carousel" class="flex overflow-x-auto gap-6 snap-x snap-mandatory hide-scrollbar pb-6 px-4 -mx-4 md:px-0 md:mx-0 scroll-smooth">
                    
                    <!-- Testimonio 1: Ganadero -->
                    <div class="relative min-w-[290px] md:min-w-[360px] max-w-[400px] flex-shrink-0 bg-surface-container p-6 rounded-2xl border border-primary/5 shadow-sm flex flex-col justify-between snap-center">
                        <div class="flex-grow">
                            <span class="material-symbols-outlined text-primary/10 text-[48px] block mb-2">format_quote</span>
                            <p class="font-body-md text-[14px] md:text-[15px] text-on-surface-variant leading-relaxed italic mb-6">
                                "Lo que más nos ha servido es ver que, por fin, se está tomando en cuenta la voz de quienes estamos en el campo. Cuando nos organizamos para gestionar la mejora de los caminos saca-cosechas, vimos que cuando hay apertura y transparencia, los apoyos llegan donde más se necesitan. Este proyecto nos ha demostrado que unidos logramos que las gestiones avancen."
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-primary/5 pt-4">
                            <img class="w-20 h-20 rounded-full object-cover border border-secondary/20 shadow-sm" src="assets/testimonio_julian.png" alt="Don Julián" />
                            <div>
                                <h4 class="font-headline-sm text-[16px] text-primary">Don Julián</h4>
                                <span class="text-[11px] font-label-caps uppercase tracking-wider text-secondary">Ganadero (Gestión colectiva)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonio 2: Pesquero -->
                    <div class="relative min-w-[290px] md:min-w-[360px] max-w-[400px] flex-shrink-0 bg-surface-container p-6 rounded-2xl border border-primary/5 shadow-sm flex flex-col justify-between snap-center">
                        <div class="flex-grow">
                            <span class="material-symbols-outlined text-primary/10 text-[48px] block mb-2">format_quote</span>
                            <p class="font-body-md text-[14px] md:text-[15px] text-on-surface-variant leading-relaxed italic mb-6">
                                "En la costa habíamos sentido por mucho tiempo que nuestras necesidades no eran prioridad. Lo que estamos construyendo ahora es diferente, porque por fin se están haciendo mesas de diálogo donde nosotros explicamos qué nos hace falta para trabajar mejor. Sentir que somos parte de la solución, y no solo un dato más, nos motiva a seguir adelante."
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-primary/5 pt-4">
                            <img class="w-20 h-20 rounded-full object-cover border border-secondary/20 shadow-sm" src="assets/testimonio_martha.png" alt="Doña Martha" />
                            <div>
                                <h4 class="font-headline-sm text-[16px] text-primary">Doña Martha</h4>
                                <span class="text-[11px] font-label-caps uppercase tracking-wider text-secondary">Cooperativa Pesquera (Escucha activa)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonio 3: Zona Urbana -->
                    <div class="relative min-w-[290px] md:min-w-[360px] max-w-[400px] flex-shrink-0 bg-surface-container p-6 rounded-2xl border border-primary/5 shadow-sm flex flex-col justify-between snap-center">
                        <div class="flex-grow">
                            <span class="material-symbols-outlined text-primary/10 text-[48px] block mb-2">format_quote</span>
                            <p class="font-body-md text-[14px] md:text-[15px] text-on-surface-variant leading-relaxed italic mb-6">
                                "En la colonia estábamos cansados de promesas que nunca llegaban. Empezar a trabajar con cuentas claras y con transparencia hizo toda la diferencia. Ver que las obras de pavimentación por fin se ejecutan como se debe nos devuelve la esperanza de que sí se puede mejorar nuestro entorno cuando la gente se involucra y se hace un trabajo honesto."
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-primary/5 pt-4">
                            <img class="w-20 h-20 rounded-full object-cover border border-secondary/20 shadow-sm" src="assets/testimonio_jorge.png" alt="Jorge" />
                            <div>
                                <h4 class="font-headline-sm text-[16px] text-primary">Jorge</h4>
                                <span class="text-[11px] font-label-caps uppercase tracking-wider text-secondary">Vecino de la Col. Obrera (Resultados y transparencia)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonio 4: Agrícola -->
                    <div class="relative min-w-[290px] md:min-w-[360px] max-w-[400px] flex-shrink-0 bg-surface-container p-6 rounded-2xl border border-primary/5 shadow-sm flex flex-col justify-between snap-center">
                        <div class="flex-grow">
                            <span class="material-symbols-outlined text-primary/10 text-[48px] block mb-2">format_quote</span>
                            <p class="font-body-md text-[14px] md:text-[15px] text-on-surface-variant leading-relaxed italic mb-6">
                                "Muchos productores estábamos trabajando cada quien por su lado, sufriendo las mismas dificultades. Al sumarnos a este proyecto, encontramos el respaldo para organizarnos y acceder a los programas que realmente nos ayudan con el maíz nativo. No es que nos regalen nada, es que nos dan el orden y la guía para que nuestro trabajo rinda frutos."
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-primary/5 pt-4">
                            <img class="w-20 h-20 rounded-full object-cover border border-secondary/20 shadow-sm" src="assets/testimonio_erasmo.png" alt="Don Erasmo" />
                            <div>
                                <h4 class="font-headline-sm text-[16px] text-primary">Don Erasmo</h4>
                                <span class="text-[11px] font-label-caps uppercase tracking-wider text-secondary">Productor agrícola (Apoyo organizado)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonio 5: Cultural/Deportivo -->
                    <div class="relative min-w-[290px] md:min-w-[360px] max-w-[400px] flex-shrink-0 bg-surface-container p-6 rounded-2xl border border-primary/5 shadow-sm flex flex-col justify-between snap-center">
                        <div class="flex-grow">
                            <span class="material-symbols-outlined text-primary/10 text-[48px] block mb-2">format_quote</span>
                            <p class="font-body-md text-[14px] md:text-[15px] text-on-surface-variant leading-relaxed italic mb-6">
                                "Siempre hemos creído que el deporte y la cultura son la mejor forma de cuidar a nuestros jóvenes, pero a veces faltaban los espacios adecuados. Ver que ahora se prioriza el apoyo a estas actividades, reconociendo que son parte de nuestra identidad y no un lujo, nos alienta a seguir impulsando el talento local. Es un esfuerzo que se nota en cada cancha y en cada evento."
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-primary/5 pt-4">
                            <img class="w-20 h-20 rounded-full object-cover border border-secondary/20 shadow-sm" src="assets/testimonio_leticia.png" alt="Leticia" />
                            <div>
                                <h4 class="font-headline-sm text-[16px] text-primary">Leticia</h4>
                                <span class="text-[11px] font-label-caps uppercase tracking-wider text-secondary">Promotora cultural y deportiva (Identidad y futuro)</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- JavaScript for Testimonials Carousel -->
            <script>
                function scrollTestimonials(direction) {
                    const carousel = document.getElementById('testimonials-carousel');
                    if (carousel) {
                        const cardWidth = 380; // card width + gap approx
                        if (direction === 'left') {
                            carousel.scrollBy({ left: -cardWidth, behavior: 'smooth' });
                        } else {
                            carousel.scrollBy({ left: cardWidth, behavior: 'smooth' });
                        }
                    }
                }
            </script>
        </section>

        <!-- Bloque C: Escuchar para transformar -->
        <section class="mt-8">
            <div class="mb-6">
                <h3 class="font-headline-sm text-[26px] text-primary">Escuchar para transformar: Nuestra prioridad</h3>
                <div class="divider-fine mt-4 w-full"></div>
            </div>
            <div class="bg-secondary/5 border-l-4 border-secondary p-8 rounded-r-2xl shadow-sm">
                <p class="font-body-lg text-[17px] md:text-[18px] text-on-surface-variant leading-relaxed">
                    La visión de desarrollo para Pijijiapan no puede ser lineal. Se requiere un ejercicio de escucha constante para traducir las necesidades de agricultores, pescadores y comerciantes en planes de acción concretos. Esta dinámica de trabajo a ras de suelo busca institucionalizar la participación, garantizando que cada voz en la colonia y el ejido sea parte fundamental de la ruta que trazamos para el futuro de nuestra comunidad.
                </p>
            </div>
        </section>

        <!-- Bloque C: El Factor Humano (Cita destacada) -->
        <section class="bg-primary-container p-10 md:p-14 rounded-2xl text-center relative overflow-hidden shadow-sm mt-4">
            <span class="material-symbols-outlined text-on-primary-container/20 text-[100px] absolute -top-4 -left-4 -z-0 rotate-180">format_quote</span>
            <span class="material-symbols-outlined text-on-primary-container/20 text-[100px] absolute -bottom-4 -right-4 -z-0">format_quote</span>
            <div class="relative z-10 max-w-3xl mx-auto">
                <blockquote class="font-headline-sm text-[22px] md:text-[28px] leading-relaxed text-on-primary-container italic mb-2">
                    "El verdadero valor de un proyecto en Pijijiapan no está en las grandes promesas, sino en la capacidad de tomar en cuenta a cada ciudadano. Estoy convencido de que, cuando caminamos unidos, la visión de uno solo se convierte en el bienestar de todos."
                </blockquote>
            </div>
        </section>

        <!-- JavaScript para Carrusel Automático del Hero Background -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                let currentSlide = 0;
                const slides = document.querySelectorAll('.hero-slide');
                if (slides.length > 0) {
                    setInterval(() => {
                        slides[currentSlide].classList.remove('opacity-100');
                        slides[currentSlide].classList.add('opacity-0');
                        
                        currentSlide = (currentSlide + 1) % slides.length;
                        
                        slides[currentSlide].classList.remove('opacity-0');
                        slides[currentSlide].classList.add('opacity-100');
                    }, 5000); // Cambia cada 5 segundos
                }
            });
        </script>

        
    </main>
</div>

<?php include 'includes/footer.php'; ?>
