<?php

    $url = file_get_contents("https://server.segcontrol.com/segcontrole/navegador_leaflet/api/consulta_json.php?gmg=0");
    $file = json_decode($url, true);

    $data = array();


    foreach ($file as $index => $content):
        $data[] = array(
                        'lat'=>$content['lat'],
                        'lon'=>$content['lon'],
                        'vel'=>$content['vel'],
                        'ang'=>$content['ang'],
                        'date'=>$content['date'],
                        's'=>$content['s'],
                        'mot'=>$content['mot'],
                        'ativ'=>$content['ativ']
                    );
    endforeach;   

    $to_gejson = array(
        'type' => 'FeatureCollection',
        'features' => array(
            'type' => 'Feature',
            'geometry' => array('type' => 'Point', 'coordinates' => $data),
    ));
    
    $datas = json_encode($to_gejson,JSON_FORCE_OBJECT);
    print_r(array_key($datas));

?>