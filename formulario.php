<?php
    if(isset($_POST['correo']) && isset($_POST['mensaje']) && isset($_POST['nombre']) && isset($_POST['telefono'])){
        $correo = $_POST['correo'];
        $mensajex = $_POST['mensaje'];   
        $telefono = $_POST['telefono'];
        $nombre = $_POST['nombre'];


        $header = "From: " . $correo . " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-type: text/html; charset=utf-8";
        
        $mensaje = "<html>".
        "<head><title>Email de Prueba</title>".
        "<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        @font-face {
            font-family: 'buffalo', sans-serif;
            src: url(http://fonts.cdnfonts.com/css/buffalo);
        }
        body {
            font-size: 35px;
            font-weight: 300;
            color: #fafafa;
            background-color:rgba(230, 225, 225, 0.5);
            line-height: 30px;
            text-align: center;
        }
        .contenedor{
            width: 80%;
            min-height:auto;
            text-align: center;
            margin: 0 auto;
            padding: 40px;
            background: #6E845F;
            border-top: 3px solid #9abbad;
        }
        .bold{
            color:#fafafa;
            font-size:25px;
            font-weight:bold;
        }
        img{
            margin-left: auto;
            margin-right: auto;
            display: block;
            padding:0px 0px 20px 0px;
        }

        .titulo{
            font-family: buffalo;
        }    
        </style>
    </head>".
        "<body>" .
            "<div class='contenedor'>".
                "<p>&nbsp;</p>" .
                "<p>&nbsp;</p>" .
                    "<span class='titulo'><strong class='bold'>Lucía, recibiste un e-mail de " . $nombre . " !!</strong></span>" .
                    "<p>&nbsp;</p>" .
                     "<p><strong class='bold'>Teléfono: " . $telefono . "</strong></p>" .
                    "<p>&nbsp;</p>" .
                     "<p><strong class='bold'>Email: " . $correo . "</strong></p>" .
                    "<p>&nbsp;</p>" .
                    "<p><strong class='bold'>Mensaje: " . $mensajex . "</strong> </p>" .
                    "<p>&nbsp;</p>" .
            "<p>&nbsp;</p>" .
            "<p><span class='bold'>Desde Ivoré Web</span></p>" .
            "<p>&nbsp;</p>" .
            "<p>".
                "<a title='Ivore Web'>". 
            "</p>" .
        "</div>" .
        "</body>" .
    "</html>";

        // HTML email ends here

        $from = 'De: ' . $correo . " \r\n"; 
        $to = "mhere92@gmail.com";
        $subject = "Nuevo mensaje de ". $nombre ." A través de tu sitio web, Ivoré Indumentaria";

        if(mail($to,$subject, $mensaje,$header)) {
            echo 1;
        }else{
            echo 0;
        };
    }else{
        echo 0;
    }
?>