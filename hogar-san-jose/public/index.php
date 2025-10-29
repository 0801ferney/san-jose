<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogar San Jose</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Bienvenido a Hogar San José</h1>
        <p>Un lugar de amor, cuidado y respeto para nuestros adultos mayores.</p>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="directores.php">Directores</a></li>
            <li><a href="contacto.php">Contáctenos</a></li>
            <li>
                <a href="#">Donaciones</a>
                <ul class="submenu">
                    <li><a href="aporte.php">Aporte</a></li>
                    <li><a href="donar.php">Donación</a></li>
                    <li><a href="apadrino.php">Apadrino</a></li>
                    <li><a href="empresa.php">Soy empresa</a></li>
                </ul>
            </li>
            <li><a href="registro.php" class="registro-btn">Registro de Visitantes</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>Acerca de Nosotros</h2>
            <p>
                Hogar San José es un hogar para adultos mayores ubicado en Fómeque, Colombia. 
                Nuestro objetivo es proporcionar un ambiente seguro, digno y acogedor para nuestros residentes, 
                donde puedan sentirse acompañados y respetados.
            </p>
            <ul>
                <li><strong>Misión:</strong> Brindar atención integral a los adultos mayores con amor y compromiso.</li>
                <li><strong>Visión:</strong> Ser reconocidos como uno de los mejores hogares de cuidado en la región.</li>
                <li><strong>Valores:</strong> Respeto, solidaridad, compromiso y amor.</li>
            </ul>
        </section>
        <section>
            <h2>Servicios que Ofrecemos</h2>
            <ul>
                <li>Atención médica y acompañamiento especializado.</li>
                <li>Alimentación balanceada y saludable.</li>
                <li>Actividades recreativas y culturales.</li>
                <li>Acompañamiento espiritual y emocional.</li>
            </ul>
        </section>
        <section>
            <h2>¿Quieres ayudar?</h2>
            <p>Puedes apoyar nuestra labor realizando una donación. ¡Tu aporte es muy valioso!</p>
            <a href="donar.php" class="donar-btn">Donar Ahora</a>
        </section>
    </main>
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; <?php echo date("Y"); ?> <strong>Hogar San José</strong>. Todos los derechos reservados.</p>
            <nav class="footer-nav">
                <a href="index.php">Inicio</a>
                <a href="contacto.php">Contacto</a>
                <a href="privacidad.php">Política de Privacidad</a>
            </nav>
        </div>
    </footer>
</body>
</html>