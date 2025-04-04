<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet | Doña Julia</title>
    <link rel="stylesheet" href="../resources/css/intranet.css">
    <link rel="shortcut icon" href="../resources/img/logo.png" type="image/x-icon">
</head>
<body>
    <header>
        <img src="../resources/img/logo.png" alt="Logo">
        <h1>Intranet | Doña Julia</h1>
        <button class="logout" onclick="cerrarSesion()">Cerrar Sesión</button>
    </header>
    
    <div class="container">
        <aside class="sidebar">
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Pedidos</a></li>
                    <li><a href="#">Reportes</a></li>
                    <li><a href="#">Usuarios</a></li>
                    <li><a href="#">Configuración</a></li>
                </ul>
            </nav>
        </aside>
        
        <main class="content">
            <h2>Bienvenido a la Intranet</h2>
        </main>
    </div>
    
    <script>
        function cerrarSesion() {
            window.location.href = "../index.php";
        }
    </script>
</body>
</html>
