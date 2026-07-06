<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative w-full h-screen overflow-hidden flex flex-col justify-center items-center text-center">
    <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3TH-6UY2_PgmTDq9Wap9am9Vv_xCLhbdBL3hzclt106wEhvJRv67zjxdfZNITkjL-TNYLpHEgKVwP1jSWMJLxt0-aClipjeWaiq0pt_GOyM3cqXNbS-cMzGlU66n_Kbx3eDAA0grAXGyBCWBQfLxOwU9LihtcWkvRjzFe83bb_gd0YwH06i5AyeIJwfxGgfZ5LNyS0vL66Zd82uZe2rgsEToZQJa_XTucTFB0CQjB32EdOlAccY2rrdlHjz42xobwv6vtVHEgVUM"/>
        <div class="absolute inset-0 bg-primary/20"></div>
    </div>
    <div class="relative z-10 px-margin-mobile max-w-4xl">
        <span class="font-label-caps text-label-caps uppercase tracking-[0.3em] text-white/90 mb-6 block">Una Leyenda de Chiapas</span>
        <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-white mb-8">
            Victoriano Rizo: <br/><span class="serif-italic">La Cultura del Esfuerzo</span>
        </h1>
        <div class="divider-fine bg-white/40 w-24 mx-auto mb-8"></div>
        <p class="font-headline-sm text-headline-sm text-white/90 serif-italic max-w-2xl mx-auto">
            "La tierra no pide títulos, pide manos que sepan trabajarla."
        </p>
    </div>
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce">
        <span class="font-label-caps text-[10px] uppercase text-white/70">Explorar</span>
        <span class="material-symbols-outlined text-white">keyboard_double_arrow_down</span>
    </div>
</section>

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
    <main class="lg:col-span-8 flex flex-col gap-24 order-1 lg:order-2">
        
        <!-- Section 1: The Origin -->
        <section class="grid md:grid-cols-12 gap-8 items-center" id="heritage">
            <div class="md:col-span-5 order-2 md:order-1">
                <div class="relative aspect-[4/5] overflow-hidden rounded-xl shadow-md">
                    <img class="w-full h-full object-cover grayscale brightness-90 contrast-125" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrefciyZyWtvFb3QXPfuR2Wekjum9tiGbSfmp1iLxmCxl7rZkNnTL3cSomZWMLhhSpJEZd4yuS1p85IdINZpTyqQA3Kj78MmHWjubBeo4fPCVbH1Q8miIsHaOejEaScZ7M9GHoJzbTr3R7zqL49o1HHdTpDzHYiCi0RJd666Jlb1jLmV8wX4eUXE6pAUOcCakVwhxIcFlLzDqA9zF9AXB9hvRzbZNASb9JqqXHdrt__rbH6iIfUvOvSYp3NiOSnQqpkwVD6XO7qmo"/>
                </div>
                <p class="font-label-caps text-[10px] mt-4 text-on-surface-variant uppercase tracking-widest text-center md:text-left">
                    Fig 1.1 — La fuerza reside en la perseverancia.
                </p>
            </div>
            <div class="md:col-span-7 md:pl-8 order-1 md:order-2 mb-12 md:mb-0">
                <span class="font-label-caps text-label-caps text-secondary uppercase mb-4 block">Capítulo I: El Origen</span>
                <h2 class="font-headline-md text-[32px] md:text-headline-md leading-tight text-primary mb-8">Lecciones de la Tierra</h2>
                <div class="divider-fine mb-10 w-full"></div>
                <div class="font-body-lg text-body-lg text-on-surface-variant space-y-6 drop-cap">
                    Victoriano Rizo no necesitó de grandes academias para forjar su destino. Habiendo concluido únicamente la educación primaria, su verdadera formación comenzó en los campos de Pijijiapan, donde el sol dicta el horario y la tierra no perdona el descuido.
                    <br/><br/>
                    A través de décadas de labor incansable, transformó la humildad de sus inicios en un imperio ganadero que hoy sostiene a cientos de familias. Su legado no se mide en documentos, sino en cada hectárea conquistada al cansancio y cada res que lleva la marca de la honestidad.
                </div>
            </div>
        </section>

        <!-- Full Width Quote (adapted for main column) -->
        <section class="bg-primary-container py-16 text-center rounded-2xl overflow-hidden shadow-md">
            <div class="max-w-3xl mx-auto px-6">
                <span class="material-symbols-outlined text-on-primary-container text-4xl mb-6">format_quote</span>
                <blockquote class="font-pull-quote text-[24px] md:text-pull-quote leading-relaxed text-on-primary-container italic mb-8 px-4">
                    No hay secreto más grande que levantarse antes que el sol y no detenerse hasta que la tarea esté terminada. La educación te da palabras, pero el esfuerzo te da resultados.
                </blockquote>
                <div class="w-16 h-px bg-on-primary-container/30 mx-auto"></div>
            </div>
        </section>

        <!-- Section 2: The Landscape -->
        <section class="overflow-hidden" id="land">
            <div class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div class="max-w-md">
                    <span class="font-label-caps text-label-caps text-secondary uppercase mb-4 block">Capítulo II: El Entorno</span>
                    <h2 class="font-headline-md text-[32px] md:text-headline-md leading-tight text-primary">Pijijiapan: El Corazón del Ganado</h2>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-xs">
                    Un paisaje donde la bruma de la mañana se encuentra con las colinas esmeralda, definiendo la frontera entre el hombre y la naturaleza.
                </p>
            </div>
            <div class="relative w-full">
                <div class="relative aspect-[16/9] md:aspect-[21/9] overflow-hidden rounded-xl shadow-lg">
                    <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCP_ZHgsjAm9Bt6SNS3_MrSewlOB_yBbjXIVB_6xKOndmAHEVmH1g0ed0wqtY_qweb1uYGkCRI1YbZxLNBcGPGPoJcvJH2ex0444rnFB6IR92tc-D_4y7Ado7hc67rLADLFC06Kdq1YEojotZuungWGcDyAfghhTOOzJ23Bw-epRlLzHwu2hTvvFMibecfuygmi4f71uIrlNDMqxX4-xF9Rk2RdTNLfJbXN3WzL-3owcD76IgtJ1GsK7LbP_09DA6PWAmCaE2aMbAI"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 md:bottom-10 md:left-10">
                        <h3 class="text-white font-headline-sm text-headline-sm italic">Stewardship of the Sierra Madre</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: Leadership & Stats (Bento Grid) -->
        <section class="" id="legacy">
            <div class="grid md:grid-cols-12 gap-6">
                <!-- Impact Card -->
                <div class="md:col-span-4 bg-surface-container-high p-8 rounded-2xl flex flex-col justify-between shadow-sm">
                    <div>
                        <span class="font-label-caps text-label-caps text-secondary uppercase mb-6 block">Impacto Regional</span>
                        <h4 class="font-headline-sm text-[20px] md:text-headline-sm mb-4 text-primary">Motor de Pijijiapan</h4>
                        <p class="font-body-md text-sm text-on-surface-variant">
                            Sostenibilidad económica para una comunidad que ha crecido al ritmo de sus ranchos.
                        </p>
                    </div>
                    <div class="mt-8">
                        <span class="block text-4xl md:text-5xl font-display-lg text-primary">500+</span>
                        <span class="font-label-caps text-[10px] uppercase tracking-widest text-on-surface-variant">Empleos Directos e Indirectos</span>
                    </div>
                </div>
                <!-- Leadership Card -->
                <div class="md:col-span-8 bg-primary text-on-primary p-8 md:p-12 rounded-2xl relative overflow-hidden shadow-lg">
                    <div class="relative z-10">
                        <span class="font-label-caps text-label-caps text-on-primary-container uppercase mb-6 block">Liderazgo Moral</span>
                        <h4 class="font-headline-md text-[28px] md:text-headline-md mb-8">Un Hombre de Palabra</h4>
                        <div class="grid md:grid-cols-2 gap-8">
                            <div class="space-y-4">
                                <h5 class="font-label-caps text-[11px] md:text-label-caps uppercase text-on-primary-container">Ética Ganadera</h5>
                                <p class="font-body-md text-sm text-white/80">
                                    La calidad del ganado Victoriano Rizo es reconocida en todo el país, resultado de un manejo ético y profundo conocimiento del ciclo vital.
                                </p>
                            </div>
                            <div class="space-y-4">
                                <h5 class="font-label-caps text-[11px] md:text-label-caps uppercase text-on-primary-container">Visión Futura</h5>
                                <p class="font-body-md text-sm text-white/80">
                                    Preparando a la siguiente generación para entender que la tierra es un préstamo de sus hijos, no un regalo de sus padres.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -right-16 -bottom-16 opacity-[0.08]">
                        <span class="material-symbols-outlined text-[200px] md:text-[250px]">agriculture</span>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>

<?php include 'includes/footer.php'; ?>
