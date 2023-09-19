<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Camisetas VL9</title>
</head>
<body>
    <header>
    <div class="centrar">
    <h3>Contador de visitas: </h3>
        <?php
            if(isset($_COOKIE['visita'])){
                $visita = $_COOKIE['visita'] + 1;
                setcookie('visita', $visita, time() + 31536000);
                echo "<h3>Esta es tu visita n° ", "$visita</h3>";
            }else{
                $visita = 1;
                setcookie('visita', $visita, time() + 31536000);
                echo "<h3>Es tu primera visita</h3>";
            }

            //duracion de un dia: 3600 segundos (1 hora)
            //duracion de un dia: 86400 segundos (24 horas)
            //duracion de una semana: 604800 segundos
            //duracion de un mes: 2592000
            //duracion de un año: 31536000
        ?>
    
        <a href="index.html">
            <div class="titulop">
                <h1>Camisetas de Futbol</h1>
                <h2>Futbol Argentino</h2>
            </div>
        </a>
        </div>

        <nav>
            <ul>
                <li><span class="titulo">Primera Division</span>
                    <ul class="lista">
                        <li><a href="#"></a>.</li>
                        <li><a href="#"></a>.</li>
                        <li><a href="#"></a>.</li>
                    </ul>
                </li>
                
             
                <li><span class="titulo">Primera B Nacional</span>
                    <ul class="lista">
                        <li><a href="#"></a>.</li>
                        <li><a href="#"></a>.</li>
                        <li><a href="#"></a>.</li>
                        <li><a href="#"></a>.</li>
                        <li><a href="#"></a>.</li>
                        <li><a href="#"></a>.</li>
                        <li><a href="#"></a>.</li>
                        <li><a href="#"></a>.</li>
                        <li><a href="#"></a>.</li>
                        
                    </ul>
                </li>
                
                
                <li><span class="titulo">Camisetas Historicas</span>
                    <ul class="lista">
                        <li><a href="#"></a>.</li>
                        <li><a href="#"></a>.</li>
                        <li><a href="#"></a>.</li>
                        <li><a href="#"></a>.</li>
                        <li><a href="#"></a>.</li>
                        <li><a href="#"></a>.</li>
                    </ul>
                </li>
                
            </ul>
        </nav>    
    </header>
    
    <div class="Camiseta1">
        <h1>¡¡Consigue tus camisetas favoritas!!</h1>
        <img src="img/camiseta1.png">
    </div>
    
    <div class="contenedor">
        <h2>¡¡OFERTA!!</h2>
        <a href="#">
            <div class="oferta">
                <img src="img/oferta.png">
            </div>
        </a>
    </div>

    <footer>
        <h1>VL9</h1>
        <div class="links">
            <a href="index.html">Inicio</a>
            <a href="">Contacto</a>
        </div>
        <div class="redes">
            <a href="https://www.instagram.com/frankoouu._/" target="_blank"><img id="instagram" src="img/instagram.png" alt="Instagram"></a>
            <a href="https://twitter.com/Nashe_1218" target="_blank"><img id="twitter" src="img/twitter.png" alt="Twitter"></a>
            <a href="https://www.tiktok.com/es/" target="_blank"><img id="tiktok" src="img/tiktok.png" alt="TikTok"></a>
        </div>
    </footer>

</body>
</html>
