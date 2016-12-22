<?php
    //Requeridos
    require('./src/constants.php');
    require('./src/channel.class.php');
    //instancia
    $bb = new Channel(CHANNEL_ID);
    $data_list=$bb->getChannelListVideos();
    //Inicializar Array para capturar info de video
    $video=[];
    //Obtenemos los id de los videos
    foreach ($data_list['items'] as $entry) {
        if (isset($entry['id']['videoId'])) {
            $video [] = $entry['id']['videoId'];
        }
    }
    //Cantidad de items en la lista
    $cant = count($video);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>YouTube APIv3| Test</title>
    <!--.css-->
        <!--Importar Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Importar materialize.css-->
    <link rel="stylesheet" href="./libs/materialize/css/materialize.min.css" media="screen,projection">
    <!--Hacer saber al navegador que la web esta optimizada para movil-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Favicon-->
    <link rel="shortcut icon" type=”image/png” href="./images/icon.png">
    <style>
        html{
            background-color: #fafafa;
        }
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        main {
            flex: 1 0 auto;
        }
        footer.page-footer{
            background-color: #d32f2f;
        }
    </style>
<head>
<body>
<header>
</header>
<main>
    <center>
        <img class="responsive-img" src="./images/logo.png" height="184" width="184" title=".dev" alt="Hipercube .dev">
        <h4>Bienvenido a Hipercube.dev</h4>        
        <h5>Ejemplo sencillo de uso de la APIv3 Youtube</h5>
        
    </center>
    <div class="row">

	<?php for($i=0; $i <$cant ; $i++):?>
    <!--Consulta la info del video segun sea su videoId-->
    <?php $resultado = $bb->getBasicInfoOnlyVideo($video[$i]);?>
      <div class="col s10 m10 l6 offset-s1 offset-m1 offset-l3">
        <div class="card-panel">
            <div class="video-container">
                <iframe width="853" height="480" src="//www.youtube.com/embed/<?php echo $video[$i];?>?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <!--imprimimimos el titulo y descripcion-->
            <h5><?php echo $resultado ['items'][0]['snippet']['title'];?></h5>
            <p><?php echo $resultado ['items'][0]['snippet']['description'];?></p>
        </div>
      </div>
	<?php endfor;?>
    </div>

</main> 
<!--footer-[pie]-->
<footer class="page-footer ">
    <div class="footer-copyright">
        <div class="container">
            <?php echo APP_COPYEAR;?>
            <a class="grey-text text-lighten-4 right" href="http://materializecss.com">Desarrollado con MaterializeCSS</a>
        </div>
    </div>
</footer>
    <!--.js-->
    <!-- Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!--Importar materialize.js-->
    <script src="./libs/materialize/js/materialize.min.js"></script>
</body>
</html>