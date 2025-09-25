<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <header>
        <h1>Bienvenido a mi página personal</h1>
    </header>
    <main>
        <section>
            <img src="descarga.jpeg" alt="Foto personal" />
            <p>Hola, soy un desarrollador web apasionado por crear soluciones innovadoras y funcionales. Me encanta trabajar con tecnologías modernas y siempre.</p>
        </section>
        <nav>
            <h2>Enlaces a otras páginas:</h2>
            <ul>
                <li><a href="tecnologias.html">Tecnologías que uso</a></li>
                <li><a href="rrss.html">Mis redes sociales</a></li>
            </ul>
        </nav>
        <section>
            <h2>Contacto</h2>
            <p><a href="alilek772@gmail.com">alilek772@gmail.com</a></p>
        </section>
        
         <section>
            <h2>Formulario de contacto</h2>
            <form action="#" method="post">
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre" required>
                <br><br>
                <label for="email">Correo electrónico:</label><br>
                <input type="email" id="email" name="email" required>
                <br><br>
                <label for="consulta">Consulta:</label><br>
                <textarea id="consulta" name="consulta" required></textarea>
                <br><br>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>
    <?php
        include("archivo.php");
        include("cabecera.inc.php");
        include("footer.inc.php");
    ?>
</body>
</html>