
<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$pedido = $_POST["pedido"];

echo "<h1>Pedido recibido en Salteneria El Horno</h1>";

echo "<p>Nombre: " . htmlspecialchars($nombre) . "</p>";
echo "<p>Correo: " . htmlspecialchars($correo) . "</p>";
echo "<p>Pedido: " . htmlspecialchars($pedido) . "</p>";

$productos = [
    "Salteña de pollo - Bs 6",
    "Docena de salteñas - Bs 65",
    "Refresco de mocochinchi - Bs 5"
];

echo "<h2>Carta de la saltenería</h2>";
echo "<ul>";

foreach ($productos as $producto) {
    echo "<li>" . $producto . "</li>";
}

echo "</ul>";

echo "<p>Te atiende Natalia Crespo Ayala</p>";
?>
