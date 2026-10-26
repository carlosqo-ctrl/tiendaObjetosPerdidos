<?php

require_once __DIR__ . '/../lib/helpers.php';

$paginasIndependientes = [
    'login' => __DIR__ . '/../view/login/login.php',
    'registro' => __DIR__ . '/../view/registro/registro.php',
];

$pantalla = $_GET['pantalla'] ?? null;
if (is_string($pantalla) && isset($paginasIndependientes[$pantalla])) {
    include_once __DIR__ . '/../view/partials/header.php';
    echo '<body class="auth-page">';
    include $paginasIndependientes[$pantalla];
    echo '</body>'; 
    echo '</html>';
    exit;
}

$vista = $_GET['vista'] ?? 'principal/principal';
$vistaValida = is_string($vista)
    && preg_match('/\A[a-zA-Z0-9_-]+(?:\/[a-zA-Z0-9_-]+)*\z/', $vista) === 1;
$rutaVista = $vistaValida ? __DIR__ . '/../view/' . $vista . '.php' : '';

include_once __DIR__ . '/../view/partials/header.php';
echo '<body class="app-body">';
include_once __DIR__ . '/../view/partials/navbar.php';

echo '<div class="layout">';
include_once __DIR__ . '/../view/partials/sidebar.php';
echo '<main>';

if (isset($_GET['modulo'])) {
    resolve();
} elseif ($vistaValida && is_file($rutaVista)) {
    include $rutaVista;
} else {
    http_response_code(404);
    echo '<h1>Vista no encontrada</h1>';
}

echo '</main>';
echo '</div>';

include_once __DIR__ . '/../view/partials/footer.php';
echo '</body>';
echo '</html>';

?>