<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="index.html">indice</a>
        <a href="canciones.php">canciones</a>
    </nav>
    

<?php
        $canciones = array(
            "Narsicista por exelencia - Pxndx" => "https://youtu.be/kP6_nlTdPgI",
            "Moonson - Tokyo Hotel" => "https://youtu.be/Le_IyYLrUtQ",
            "Automatic - Tokyo Hotel" => "https://youtu.be/WhIlqBqRtuw",
            "Dreamer - Laufey" => "https://youtu.be/-xoxu1zHiSY",
            "Yellow CalX - Aphex Twin" => "https://youtu.be/q-eJSFfxy4I",
            "Mujer en la caja - Enjambre"=>"https://youtu.be/4p92JGNlst",
            "12:51 - The Strokes"=>"https://youtu.be/wbGCL8_sUnE",
            "weid fishes/arpeggi - Radiohead"=>"https://youtu.be/-1Gh325TMog",
            "Entre mis brazos - Los Bunkers"=>"https://youtu.be/w9bHi2sLJKw",
            "Mujer Amante - Rata Blanca"=>"https://youtu.be/V7q1jN7k5lg",
            "el Hada y eLa Leyenda dl Mago - Rata Blanca"=>"https://youtu.be/51cZsDsVOqc",
            "Aun estas en mis sueños - Rata Blanca"=>"https://youtu.be/grplVttindo",
            "Solo para Amarte - Rata Blanca"=>"https://youtu.be/s816q6l1-2w",
            "Procedimientos para llegar a un comun acuerdo - Pxndx"=>"https://youtu.be/tTZ18m4W3gY",
            "Disculpa los Malos Pensamientos - Pxndx"=>"https://youtu.be/xQfqhGPwacU",
            "Solo a Terceros - Pxndx"=>"https://youtu.be/6CztN_RzS68",
            "Nuestra Afliccion - Pxndx"=>"https://youtu.be/1uQG9yc-raQ",
            "My Happy Ending - Avril Lavinge"=>"https://youtu.be/QSZYuNjuAjY",
            "Love The Way You Lie - Eminem ft. Rihanna"=>"https://youtu.be/U-3-bwPvfmg",
            "Numb - Linkin Park"=>"https://youtu.be/geD646V9UiE",
            "Going Under - Evanescence"=>"https://youtu.be/nJOxMQixOZA",
            "Bring Me To Life - Evanescence"=>"https://youtu.be/4YbLSH-avpw",
            "The Cranberries — Zombie"=>"https://youtu.be/KIEdlw3zCdk",
            "Iris - Goo Goo Dolls"=>"https://youtu.be/yXElRn0UD_I",
            "Hoobastank - The Reason"=>"https://youtu.be/WQYKtVSuZyY",
            "Aerosmith - I Don't Want Miss a Thing"=>"https://youtu.be/JoyppZg9Tyo",
            "Guns N' Roses - Don't Cry"=>"https://youtu.be/HEX8K43yu4k",
            "aerosmith- dream on"=>"https://youtu.be/nChwfx5Ra78",
            "Green Day — Boulevard Of Broken Dreams"=>"https://youtu.be/bFmbREYGcbw",
            "Passenger - Let Her Go"=>"https://youtu.be/_jZnHJv4DBA",
            "Paramore: Decode"=>"https://youtu.be/RvnkAtWcKYg",
            "B.O.B Ft. Hayley Williams - Airplanes"=>"https://youtu.be/uoHQlNKdJjs",
            "Maroon 5 - Maps"=>"https://youtu.be/X2mQk2HSL_4",
        );




        if (isset($_POST["nombre"])) {
           
           
$busqueda = $_POST["nombre"];
            if (array_key_exists($busqueda, $canciones)) {
                $url = $canciones[$busqueda];
                header("Location: $url");
            } else {
               
               
echo "<p>La canción no se encontró en la lista.</p>";
            }
        }




        foreach ($canciones as $nombre => $url) {
            echo "<li><a href='$url'>$nombre</a></li>";
        }
       
       
?>

</body>
</html>