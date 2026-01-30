<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Geolocalización</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>
<body>

<header>
    <h1>Geolocalización</h1>
</header>

<main class="faq-container">
    <?php
    // Definimos las preguntas en un array para mantener el HTML limpio y fácil de editar
    $faqs = [
        "¿Qué es la Geolocalización?" => "La geolocalización es una tecnología que permite identificar la ubicación geográfica de una persona, dispositivo u objeto utilizando datos como:
            <ul>
                <li>GPS</li>
                <li>Redes Wi-Fi</li>
                <li>Dirección IP</li>
                <li>Antenas de telefonía móvil</li>
            </ul>
            Se expresa comúnmente mediante coordenadas geográficas (latitud y longitud).",
        
        "¿Cuáles son los tipos de Geolocalización mas utilizados?" => "
            <p><strong>1. GPS:</strong> Usa satélites para precisión alta.</p>
            <p><strong>2. IP:</strong> Ubicación aproximada por red.</p>
            <p><strong>3. Wi-Fi:</strong> Escaneo de redes cercanas.</p>
            <p><strong>4. Red móvil:</strong> Triangulación por antenas.</p>
            <p><strong>5. Híbrida:</strong> Combina todas las anteriores.</p>",
        
        "Mencione 5 aplicaciones que usen geolocalización" => "
            <ul>
                <li><strong>Google Maps:</strong> Navegación.</li>
                <li><strong>Uber:</strong> Transporte en tiempo real.</li>
                <li><strong>WhatsApp:</strong> Compartir ubicación.</li>
                <li><strong>Instagram:</strong> Geo-etiquetado.</li>
                <li><strong>Rappi:</strong> Delivery.</li>
            </ul>",

        "¿Qué es una API?" => "Es un conjunto de reglas (Application Programming Interface) que permite que dos aplicaciones se comuniquen entre sí. Por ejemplo, insertar un mapa de Google en tu web.",

        "¿Cómo se genera una clave API?" => "
            <ol>
                <li>Registro en el proveedor (Google, Mapbox, etc).</li>
                <li>Crear proyecto en su consola.</li>
                <li>Activar el servicio de mapas.</li>
                <li>Generar la credencial (API Key).</li>
            </ol>
            <p>⚠️ No compartas nunca tu clave públicamente.</p>",

        "Mostrar los diferentes tipos de Ubicación" => "
            <ul>
                <li><strong>Absoluta:</strong> Coordenadas exactas.</li>
                <li><strong>Relativa:</strong> Referencia a otro punto.</li>
                <li><strong>Geográfica:</strong> Posición global.</li>
                <li><strong>Tiempo real:</strong> Seguimiento constante.</li>
            </ul>"
    ];

    // Iteramos el array para generar el contenido automáticamente
    foreach ($faqs as $pregunta => $respuesta) {
        echo '<div class="faq-item">';
        echo '  <button class="faq-question">' . $pregunta . '</button>';
        echo '  <div class="faq-answer">' . $respuesta . '</div>';
        echo '</div>';
    }
    ?>
</main>

<section id="mapa">
    <h2 style="text-align:center;">Mapa de Ubicación</h2>
    <div id="map" style="height: 400px;"></div> </section>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="script.js"></script>

</body>
</html>