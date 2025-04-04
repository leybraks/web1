<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doña Julia</title>
    <link rel="stylesheet" href="resources/css/styles_page_1.css">
    <link rel="shortcut icon" href="resources/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <header>
        <img src="resources/img/logo.png" alt="Logo">
        <h1>Anticuchería Doña Julia</h1>
        <div></div>
    </header>
    
    <main>
        <section>
            <div>
                <img src="resources/img/img1.jpg" alt="Comida 1" class="animado">
            </div>
            <label class="animado">Hace 30 años, Doña Julia, con pasión y creatividad, decidió darle su propio toque al clásico anticucho. Experimentando con especias y técnicas de cocción, creó una receta única que rápidamente conquistó paladares. Sus primeros clientes quedaron maravillados con el sabor, y con el tiempo, su fama creció. Hoy, su negocio sigue prosperando, y sus clientes, fieles a su sazón, aseguran que sus anticuchos son los mejores de la ciudad.</label>
        </section>
        <section>
            <label class="animado">El anticucho es parte de la identidad culinaria del Perú, pero hace 30 años, Doña Julia quiso hacerlo aún más especial. Creó su propia receta, perfeccionando la marinada y la cocción para lograr un sabor inconfundible. Sus clientes no solo disfrutan de un plato delicioso, sino que vuelven una y otra vez, convencidos de que no hay otro anticucho que se compare con el suyo. Hoy, su legado sigue creciendo, manteniendo viva la tradición con cada brocheta servida.</label>
            <div>
                <img src="resources/img/img2.avif" alt="Comida 2" class="animado">
            </div>
        </section>
        <button onclick="abrirModal()">ORDENAR</button>

        <div id="miModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="cerrarModal()">&times;</span>
                    <?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/intranet"; ?>
                    <form action="<?= $url; ?>/proIntranet.php" method="post" >
                        <h2 name="title">Iniciar Sesión</h2>
                        <input type="text" placeholder="Usuario" name="usuario"><br><br>
                        <input type="password" placeholder="Contraseña" name="clave"><br><br>
                        <input type="submit" value="Entrar" class="btn">
                    </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <img src="resources/img/logo.png" alt="Logo">
                <p>Anticuchería Doña Julia</p>
            </div>
            
            <div class="footer-links">
                <a href="#">Nosotros</a>
                <a href="#">Menú</a>
                <a href="#">Contacto</a>
            </div>
    
            <div class="footer-social">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
        
        <p class="footer-copy">&copy; 2024 Anticuchería Doña Julia. Todos los derechos reservados.</p>
    </footer>

    <script>
        function abrirModal() {
            let modal = document.getElementById("miModal");
            modal.style.display = "flex";
            setTimeout(() => {
                modal.classList.remove("hide");
                modal.classList.add("show");
            }, 10);
        }
        function cerrarModal() {
            let modal = document.getElementById("miModal");
            modal.classList.remove("show");
            modal.classList.add("hide");
            setTimeout(() => {
                modal.style.display = "none";
            }, 300);
        }
        document.addEventListener("DOMContentLoaded", function () {
            let modal = document.getElementById("miModal");
            modal.style.display = "none";
        });
        window.addEventListener("scroll", function () {
            var header = document.querySelector("header");
            if (window.scrollY > 50) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        });
        document.addEventListener("DOMContentLoaded", function () {
            let elementos = document.querySelectorAll(".animado");
    
            elementos.forEach((el, index) => {
                setTimeout(() => {
                    el.style.opacity = "1";
                    el.style.animation = "zoomBounce 0.8s ease-out forwards";
                }, index * 200);
            });
        });   
    </script>
</body>
</html>
