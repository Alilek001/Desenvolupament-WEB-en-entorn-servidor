<?php
include("cabecera.inc.php");

$nombre = $_POST["nombre"] ?? "";
$email = $_POST["email"] ?? "";
$consulta = $_POST["consulta"] ?? "";
$acepta = isset($_POST["acepta"]) ? "Sí" : "No";
$fecha = $_POST["fecha"] ?? "";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($nombre == "" || $email == "" || $consulta == "" || $fecha == "") {
        $error = "Por favor, rellena todos los campos obligatorios.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && $error == "") {
    echo "<h1>Registro completado correctamente</h1>";
    echo "<p><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Consulta:</strong> " . htmlspecialchars($consulta) . "</p>";
    echo "<p><strong>Fecha:</strong> " . htmlspecialchars($fecha) . "</p>";
    echo "<p><strong>Acepta condiciones:</strong> " . $acepta . "</p>";
    echo "<p>¡Registro realizado con éxito!</p>";
} else {
    if ($error != "") {
        echo "<p>$error</p>";
    }
    ?>
    <h1>Formulario de registro</h1>
    <form method="post" action="">
        Nombre: <input type="text" name="nombre" value="<?= htmlspecialchars($nombre) ?>" required><br><br>
        Email: <input type="email" name="email" value="<?= htmlspecialchars($email) ?>" required><br><br>
        Consulta: <textarea name="consulta" required><?= htmlspecialchars($consulta) ?></textarea><br><br>
        Fecha: <input type="date" name="fecha" value="<?= htmlspecialchars($fecha) ?>" required><br><br>
        <input type="checkbox" name="acepta" <?= ($acepta == "Sí" ? "checked" : "") ?> required> Acepto las condiciones<br><br>
        <input type="submit" value="Registrarse">
    </form>
    <?php
}

include("footer.inc.php");
?>