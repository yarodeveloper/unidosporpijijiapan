<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Victoriano Rizo: La Cultura del Esfuerzo</title>
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
    </style>
</head>
<body class="font-body-md text-body-md overflow-x-hidden">
<!-- TopAppBar -->
<header class="fixed bg-background w-full top-0 left-0 z-50 border-b border-primary/20 transition-all duration-300">
    <nav class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop py-6 md:py-8 max-w-container-max mx-auto transition-all duration-300">
        <div class="font-display-lg text-[24px] md:text-display-lg uppercase tracking-tighter text-primary leading-none">
            VICTORIANO RIZO
        </div>
        <div class="hidden md:flex gap-12 font-body-md text-body-md uppercase tracking-widest items-center">
            <a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-300" href="#heritage">Heritage</a>
            <a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-300" href="#land">The Land</a>
            <a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-300" href="#legacy">Legacy</a>
            <a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-300" href="#">Chronicles</a>
        </div>
        <button class="bg-primary text-on-primary px-6 py-3 font-label-caps uppercase text-label-caps cursor-pointer hover:bg-primary/90 active:opacity-70 transition-all">
            Special Edition
        </button>
    </nav>
</header>
