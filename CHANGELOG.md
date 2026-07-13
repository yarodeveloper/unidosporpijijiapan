# Registro de Cambios - Unidos por Pijijiapan

Este documento registra las modificaciones, mejoras y características agregadas al proyecto web de Unidos por Pijijiapan.

## [Versión 1.2.0] - 2026-07-13

### ✍️ Actualizaciones de Contenido
- **Hero**: Se actualizó el título a "La Cultura del Esfuerzo. Un proyecto impulsado por ciudadanos comprometidos con el futuro de Pijijiapan." y el subtítulo a "Pijijiapan". Se convirtió el fondo en un carrusel rotativo automático que alterna suavemente entre `hero3.webp`, `hero2.webp` y `hero1.webp` cada 5 segundos.
- **Sección de Cita (El Factor Humano)**: Se removió la firma "— Victoriano Rizo López" de la cita destacada.
- **Sección "Trayectoria y Gestión"**: Cambiada a "Gestión para todos", con nuevo título "Hacia una gestión de soluciones a ras de suelo.", su correspondiente texto, la fotografía actualizada a `pescadores.jpg`, y su respectiva etiqueta de imagen cambiada a "Apoyo a Pescadores".
- **Sección "Pilares de Confianza"**: Modificada a "Testimonios del trabajo comunitario en nuestra región." y actualizada con un nuevo mensaje central de progreso y escucha activa.
- **Nueva Sección**: Agregada la sección "Escuchar para transformar: Nuestra prioridad" con su respectivo contenido reflexivo sobre la participación ciudadana en el desarrollo local.
- **Carrusel de Testimonios ("Voces de nuestra gente")**: Creada una nueva sección interactiva con carrusel horizontal que cuenta con retratos de ciudadanos locales (ampliados a tamaño `w-20 h-20` para mayor visibilidad) y testimonios detallados de los sectores Ganadero (Don Julián), Pesquero (Doña Martha), Urbano (Jorge), Agrícola (Don Erasmo) y Cultural/Deportivo (Leticia).
- **Remociones**: Eliminadas las subsecciones individuales de Transparencia, Cercanía y Visión enfocada en resultados para simplificar la narrativa visual.

## [Versión 1.1.0] - Modificaciones Recientes

### ✨ Nuevas Características
- **Carrusel de Sectores (Footer)**: Se eliminó el botón simple de CTA y se integró un carrusel interactivo horizontal con 5 tarjetas dinámicas (Agricultura, Pesca, Ganadería, Comercio, Cultura/Deporte).
- **Flechas de Navegación**: Se agregaron botones de desplazamiento lateral para el carrusel de sectores con diseño cristal (backdrop-blur) en escritorio.
- **Integración con WhatsApp**: 
  - Se configuró el número `529181227912` como destino principal en todos los botones de contacto.
  - Se añadieron mensajes predefinidos automáticos diferenciados. Por ejemplo, al dar clic en Agricultura, envía: *"Hola, me gustaría unirme al sector Agricultura de Unidos por Pijijiapan."*

### 📱 Optimización Móvil (Responsividad)
- **Doble Imagen en Portada (Hero)**: Se programó el sitio para mostrar automáticamente `victorianocampo.webp` en computadoras y cambiar a `victorianocampo_movil.webp` exclusivamente en pantallas de celular, previniendo recortes no deseados en el rostro.
- **Textos Flotantes (Hero)**: Se alineó el texto del Hero hacia la derecha (escritorio) y hacia el centro-inferior (móviles), apoyado por un gradiente de sombra dinámico que garantiza la legibilidad de las letras blancas sobre la fotografía.
- **Barra de Navegación Compacta**: Se redujo el tamaño del botón de "Unirme al grupo" en móviles para evitar el colapso del diseño en pantallas muy estrechas.

### 🔍 Mejoras de SEO y Metadatos (OpenGraph)
- **Título de la Página**: Actualizado a *"Unidos por Pijijiapan | Revista Digital de Actualidad y Liderazgo Comunitario"*.
- **Descripción Meta**: Ajustada a *"Portal informativo sobre Pijijiapan, Chiapas. Conoce la trayectoria de Victoriano Rizo López y mantente al día con infraestructura, campo y comunidad."*
- **Palabras Clave (Keywords)**: Se insertaron términos estratégicos de búsqueda local.
- **Tarjetas de Redes Sociales (OpenGraph)**: Se programaron las etiquetas `og:image`, `og:title` y `og:description`. Ahora, al pegar el enlace en Facebook o WhatsApp, se despliega automáticamente la tarjeta de vista previa con la imagen del Hero.

### 🖼️ Ajustes de Imágenes y Estilos
- **Alineación de Imágenes**: Se forzó la propiedad `object-top` para asegurar que el recorte automático siempre conserve la parte superior de las fotografías (cabezas/rostros).
- **Integración Visual (Bento Grid)**: Se añadió la imagen `victoriano_gober.webp` de forma armónica dentro de la tarjeta de "Visión enfocada a resultados".
- **Soporte para Imágenes de Sector**: Se preparó el código fuente para integrar fotografías descriptivas para cada una de las 5 áreas productivas (`sector_agricultura.webp`, `sector_pesca.webp`, etc.).
