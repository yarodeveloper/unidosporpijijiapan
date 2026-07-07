<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    
    <!-- SEO Principal -->
    <title>Unidos por Pijijiapan | Revista Digital de Actualidad y Liderazgo Comunitario</title>
    <meta name="description" content="Portal informativo sobre Pijijiapan, Chiapas. Conoce la trayectoria de Victoriano Rizo López y mantente al día con infraestructura, campo y comunidad."/>
    <meta name="keywords" content="Pijijiapan, Chiapas, Victoriano Rizo López, Desarrollo Comunitario, Bienes Comunales Pijijiapan, Infraestructura Pijijiapan, Noticias Pijijiapan."/>
    <meta name="author" content="Victoriano Rizo López"/>
    
    <!-- Open Graph / Redes Sociales -->
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://unidosporpijijiapan.mx/"/>
    <meta property="og:title" content="Unidos por Pijijiapan | Revista Digital de Actualidad y Liderazgo Comunitario"/>
    <meta property="og:description" content="Portal informativo sobre Pijijiapan, Chiapas. Conoce la trayectoria de Victoriano Rizo López y mantente al día con infraestructura, campo y comunidad."/>
    <meta property="og:image" content="https://unidosporpijijiapan.mx/assets/victorianocampo.webp"/>
    
    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="https://unidosporpijijiapan.mx/"/>
    <meta name="twitter:title" content="Unidos por Pijijiapan | Revista Digital de Actualidad y Liderazgo Comunitario"/>
    <meta name="twitter:description" content="Portal informativo sobre Pijijiapan, Chiapas. Conoce la trayectoria de Victoriano Rizo López y mantente al día con infraestructura, campo y comunidad."/>
    <meta name="twitter:image" content="https://unidosporpijijiapan.mx/assets/victorianocampo.webp"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&amp;family=Work+Sans:wght@400;600&amp;display=swap" rel="stylesheet"/>
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "outline": "#827472",
                        "tertiary-fixed-dim": "#eebd8e",
                        "surface-container-high": "#eae8e3",
                        "on-primary-fixed": "#2b1613",
                        "error-container": "#ffdad6",
                        "surface-variant": "#e4e2dd",
                        "background": "#fbf9f4",
                        "secondary": "#50652a",
                        "surface-tint": "#745853",
                        "on-error-container": "#93000a",
                        "on-background": "#1b1c19",
                        "inverse-primary": "#e3beb8",
                        "on-tertiary-container": "#b78c60",
                        "on-secondary-fixed": "#131f00",
                        "on-secondary-fixed-variant": "#394d14",
                        "tertiary": "#281300",
                        "on-surface": "#1b1c19",
                        "primary": "#271310",
                        "on-primary-fixed-variant": "#5b403c",
                        "on-tertiary": "#ffffff",
                        "surface-dim": "#dbdad5",
                        "primary-container": "#3e2723",
                        "on-primary-container": "#ae8d87",
                        "on-secondary": "#ffffff",
                        "secondary-fixed-dim": "#b6d088",
                        "surface-container-lowest": "#ffffff",
                        "secondary-container": "#cfe99f",
                        "on-secondary-container": "#546a2e",
                        "surface": "#fbf9f4",
                        "inverse-surface": "#30312e",
                        "on-error": "#ffffff",
                        "surface-bright": "#fbf9f4",
                        "tertiary-fixed": "#ffdcbd",
                        "tertiary-container": "#432604",
                        "on-tertiary-fixed-variant": "#61401b",
                        "on-tertiary-fixed": "#2c1600",
                        "inverse-on-surface": "#f2f1ec",
                        "primary-fixed": "#ffdad4",
                        "surface-container-low": "#f5f3ee",
                        "error": "#ba1a1a",
                        "surface-container": "#f0eee9",
                        "outline-variant": "#d3c3c0",
                        "on-surface-variant": "#504442",
                        "on-primary": "#ffffff",
                        "secondary-fixed": "#d2eca2",
                        "surface-container-highest": "#e4e2dd",
                        "primary-fixed-dim": "#e3beb8"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-desktop": "64px",
                        "gutter": "32px",
                        "container-max": "1280px",
                        "margin-mobile": "20px",
                        "section-gap": "120px"
                    },
                    "fontFamily": {
                        "headline-sm": ["Playfair Display"],
                        "display-lg": ["Playfair Display"],
                        "headline-md": ["Playfair Display"],
                        "pull-quote": ["Playfair Display"],
                        "display-lg-mobile": ["Playfair Display"],
                        "label-caps": ["Work Sans"],
                        "body-lg": ["Work Sans"],
                        "body-md": ["Work Sans"]
                    },
                    "fontSize": {
                        "headline-sm": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "display-lg": ["84px", {"lineHeight": "90px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "headline-md": ["42px", {"lineHeight": "48px", "fontWeight": "600"}],
                        "pull-quote": ["32px", {"lineHeight": "44px", "fontWeight": "400"}],
                        "display-lg-mobile": ["48px", {"lineHeight": "52px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "label-caps": ["12px", {"lineHeight": "16px", "letterSpacing": "0.15em", "fontWeight": "600"}],
                        "body-lg": ["20px", {"lineHeight": "32px", "fontWeight": "400"}],
                        "body-md": ["16px", {"lineHeight": "26px", "fontWeight": "400"}]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            background-color: #fbf9f4; /* Parchment Background */
            color: #271310;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .serif-italic { font-family: 'Playfair Display', serif; font-style: italic; }
        .divider-fine { height: 1px; background-color: rgba(39, 19, 16, 0.2); }
        .overlay-multiply { mix-blend-mode: multiply; }
        .letterbox { aspect-ratio: 21 / 9; }
        .golden-ratio { aspect-ratio: 1 / 1.618; }
        
        /* Smooth scrolling */
        html { scroll-behavior: smooth; }

        /* Drop cap styling */
        .drop-cap::first-letter {
            float: left;
            font-family: 'Playfair Display';
            font-size: 5rem;
            line-height: 1;
            padding-right: 0.5rem;
            color: #271310;
            font-weight: 700;
        }

        /* Custom scrollbar for sidebar */
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(39, 19, 16, 0.2); border-radius: 4px; }
        
        /* Hide scrollbar for carousels */
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="font-body-md text-body-md overflow-x-hidden">
<!-- TopAppBar -->
<header class="fixed bg-background w-full top-0 left-0 z-50 border-b border-primary/20 transition-all duration-300">
    <nav class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop py-6 md:py-8 max-w-container-max mx-auto transition-all duration-300">
        <a href="index.php" class="block">
            <img src="assets/logo.png" alt="Unidos por Pijijiapan" class="h-12 md:h-16 w-auto object-contain">
        </a>
        <a href="https://api.whatsapp.com/send?phone=529181227912&text=Hola,%20me%20gustaría%20unirme%20a%20la%20comunidad%20de%20Unidos%20por%20Pijijiapan." target="_blank" class="inline-flex items-center gap-2 bg-primary text-on-primary px-4 py-2 md:px-6 md:py-3 font-label-caps uppercase text-[10px] md:text-[12px] tracking-widest cursor-pointer hover:bg-primary/90 active:opacity-70 transition-all">
            <svg class="w-3 h-3 md:w-4 md:h-4 fill-current" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.522-2.961-2.638-.087-.117-.708-.941-.708-1.793 0-.852.448-1.271.607-1.441.159-.171.348-.215.463-.215.117 0 .231.001.332.005.109.004.258-.045.406.314.159.386.543 1.32.593 1.419.05.1.084.215.017.348-.067.133-.101.215-.203.332-.101.117-.213.262-.304.351-.101.1-.205.21-.087.415.117.205.521.861 1.116 1.392.769.687 1.414.9 1.617 1.001.203.1.323.084.443-.05.12-.133.521-.607.66-.812.139-.205.277-.171.463-.101.188.07 1.188.561 1.392.663.204.101.34.15.39.235.05.084.05.486-.094.891z"></path>
            </svg>
            <span class="hidden md:inline">Unirte al grupo</span>
            <span class="inline md:hidden">Unirme</span>
        </a>
    </nav>
</header>
