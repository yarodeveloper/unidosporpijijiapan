<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative w-full h-screen overflow-hidden flex flex-col justify-center items-center text-center">
    <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover object-top" src="assets/victorianocampo.webp" alt="Victoriano Rizo"/>
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
            <span class="font-label-caps text-label-caps text-secondary uppercase block mb-4">Trayectoria y Gestión</span>
            <h2 class="font-headline-md text-[36px] md:text-[48px] leading-tight text-primary">
                La Gestión que se construye a ras de suelo
            </h2>
            <div class="divider-fine mt-8 w-full"></div>
        </div>

        <!-- Bloque A: Raíces (Estilo Nota de Autor) -->
        <section class="grid md:grid-cols-2 gap-10 items-center">
            <div class="font-body-lg text-[17px] md:text-[18px] text-on-surface-variant leading-relaxed space-y-6">
                <p>
                    <strong class="font-semibold text-primary">Víctor Rizo López</strong>, nacido un 6 de octubre de 1971 en Pijijiapan, ha entendido desde joven que el progreso no nace del escritorio, sino de la constancia.
                </p>
                <p>
                    Su labor no es un ejercicio político tradicional; es un ejercicio de arraigo. Como Tesorero de los Bienes Comunales, su gestión ha estado marcada por una característica que hoy es poco común: la capacidad de escuchar directamente al productor, al ganadero y al vecino de la colonia, sin intermediarios.
                </p>
            </div>
            <div class="relative aspect-square md:aspect-[4/5] overflow-hidden rounded-xl shadow-md">
                <!-- Se requiere imagen real de Victoriano en asamblea -->
                <img class="w-full h-full object-cover" src="assets/victorianorizo.webp" alt="Victoriano Rizo en asamblea comunal"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute bottom-4 left-4 right-4 text-white">
                    <span class="bg-primary/90 px-3 py-1 rounded text-[10px] font-label-caps uppercase tracking-widest inline-block mb-2">Trabajo de Campo</span>
                    <p class="font-body-md text-[13px] opacity-90">Escuchando las necesidades reales de nuestra comunidad.</p>
                </div>
            </div>
        </section>

        <!-- Bloque B: Pilares de Confianza (Bento Grid) -->
        <section class="grid md:grid-cols-12 gap-6 mt-4">
            <div class="md:col-span-12 mb-2">
                <h3 class="font-headline-sm text-[26px] text-primary">Pilares de Confianza</h3>
            </div>
            
            <!-- Elemento 1: Transparencia -->
            <div class="md:col-span-6 bg-surface-container p-8 rounded-2xl border border-primary/5 hover:border-primary/20 transition-all shadow-sm flex flex-col">
                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-secondary mb-6 shadow-sm">
                    <span class="material-symbols-outlined">account_balance</span>
                </div>
                <h4 class="font-headline-sm text-[20px] text-primary mb-3">Transparencia</h4>
                <p class="font-body-md text-[15px] text-on-surface-variant leading-relaxed">
                    Administración con cuentas claras. Su paso por los Bienes Comunales ha sido definido por la rectitud en el manejo de los recursos, un pilar fundamental para recuperar la confianza ciudadana.
                </p>
            </div>

            <!-- Elemento 2: Cercanía -->
            <div class="md:col-span-6 bg-surface-container p-8 rounded-2xl border border-primary/5 hover:border-primary/20 transition-all shadow-sm flex flex-col">
                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-secondary mb-6 shadow-sm">
                    <span class="material-symbols-outlined">handshake</span>
                </div>
                <h4 class="font-headline-sm text-[20px] text-primary mb-3">Cercanía</h4>
                <p class="font-body-md text-[15px] text-on-surface-variant leading-relaxed">
                    Más que un líder, un vecino. Su presencia constante en las asambleas y recorridos por el municipio le ha permitido conocer cada problemática desde su origen, no por reportes, sino por vivencia propia.
                </p>
            </div>

            <!-- Elemento 3: Visión -->
            <div class="md:col-span-12 bg-secondary text-on-secondary rounded-2xl relative overflow-hidden shadow-sm flex flex-col md:flex-row mt-2">
                <div class="flex-1 p-8 md:p-10 relative z-10 flex flex-col justify-center">
                    <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-white mb-6">
                        <span class="material-symbols-outlined">visibility</span>
                    </div>
                    <h4 class="font-headline-sm text-[24px] mb-3">Visión enfocada en resultados</h4>
                    <p class="font-body-md text-[16px] text-white/90 leading-relaxed max-w-2xl">
                        Su agenda prioriza los temas que realmente mueven la economía local: el campo, el agua y la infraestructura necesaria para que las familias de Pijijiapan tengan un futuro aquí.
                    </p>
                </div>
                <div class="md:w-5/12 min-h-[300px] relative">
                    <img class="absolute inset-0 w-full h-full object-cover" src="assets/victoriano_gober.webp" alt="Victoriano Rizo - Visión enfocada en resultados"/>
                </div>
            </div>
        </section>

        <!-- Bloque C: El Factor Humano (Cita destacada) -->
        <section class="bg-primary-container p-10 md:p-14 rounded-2xl text-center relative overflow-hidden shadow-sm mt-4">
            <span class="material-symbols-outlined text-on-primary-container/20 text-[100px] absolute -top-4 -left-4 -z-0 rotate-180">format_quote</span>
            <span class="material-symbols-outlined text-on-primary-container/20 text-[100px] absolute -bottom-4 -right-4 -z-0">format_quote</span>
            <div class="relative z-10 max-w-3xl mx-auto">
                <blockquote class="font-headline-sm text-[22px] md:text-[28px] leading-relaxed text-on-primary-container italic mb-8">
                    "El verdadero valor de un proyecto en Pijijiapan no está en las grandes promesas, sino en la capacidad de tomar en cuenta a cada ciudadano. Estoy convencido de que, cuando caminamos unidos, la visión de uno solo se convierte en el bienestar de todos."
                </blockquote>
                <div class="w-16 h-px bg-on-primary-container/30 mx-auto mb-6"></div>
                <p class="font-headline-sm text-on-primary text-[20px]">— Victoriano Rizo López</p>
            </div>
        </section>


        
    </main>
</div>

<?php include 'includes/footer.php'; ?>
