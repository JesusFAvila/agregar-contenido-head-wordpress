<?php
/**
 * Debes cambiar "tu_codigo_de_verificacion_aqui" por tu código de verificación de Google, y reemplaza los demás datos en el script JSON-LD con los detalles de tu organización.
 * Este código crea una nueva función, agregar_contenido_head, que añade los datos que especificaste en el <head> de tu sitio. Luego, el add_action( 'wp_head', 'agregar_contenido_head' ); asegura que esta función se ejecuta cada vez que se genera el <head> en WordPress.
 */


  function agregar_contenido_head() {
      echo '<meta name="google-site-verification" content="tu_codigo_de_verificacion_aqui" />';
      echo '<script type="application/ld+json">
      {
          "@context": "https://schema.org",
          "@type": "Organization",
          "url": "https://www.tu-sitio-web.com",
          "name": "Nombre de tu organización",
          "contactPoint": {
              "@type": "ContactPoint",
              "telephone": "+1-401-555-1212",
              "contactType": "Atención al cliente"
          }
      }
      </script>';
  }

  add_action( 'wp_head', 'agregar_contenido_head' );
?>
