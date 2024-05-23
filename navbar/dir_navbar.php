<?php
function incluir_navbar() {
    // Obtiene la ruta absoluta del directorio actual
    $current_directory = realpath(dirname($_SERVER['SCRIPT_FILENAME']));
   

    // Define las rutas de los directorios de las barras de navegación
    $Controlador_dir = realpath(__DIR__ . '/../Controlador');
    $Modelo_dir = realpath(__DIR__ . '/../Modelo');
    $Vista_dir = realpath(__DIR__ . '/../Vista');
    

    // Incluye la barra de navegación correspondiente según la carpeta actual
    if ($current_directory === $Controlador_dir) {
        include __DIR__ . '/../Controlador/navbar_controlador.php';
    } elseif ($current_directory === $Modelo_dir) {
        include __DIR__ . '/../Modelo/navbar_modelo.php';
    } elseif ($current_directory === $Vista_dir) {
        include __DIR__ . '/../Vista/navbar_vista.php';
    } else {
        echo "No hay barra de navegación para esta carpeta.";
    }
}
?>
