<?php

    $id='dPn8-dWlRsA';
    $cc_key = 'AIzaSyCcWlWXAHGWf6jqCV0P1l3_-yIM5RcRdJk';
    $url='https://www.googleapis.com/youtube/v3/videos?id='.$id.'&key='.$cc_key.'&part=snippet';
     $url2='https://www.googleapis.com/youtube/v3/videos?id='.$id.'&key='.$cc_key.'&part=snippet';

    $url3='&part=snippet&fields=items(snippet(title,description))';

    $filer = json_decode(file_get_contents($url),true);



    echo '<h4>Traido de youtube-Filtrado</h4><br>';
    echo $filer ['items'][0]['snippet']['title'];
    echo '<br>';
    echo $filer ['items'][0]['snippet']['description'];
    echo '<br>';
    echo '<h4>Metada completa-JSON</h4>';
    echo '<pre>';
    print_r($filer);
    echo '</pre>';

?>
