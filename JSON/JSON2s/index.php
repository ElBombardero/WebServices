<?php
    echo '<!DOCTYPE html>
    <html lang="es">
    <head>
        <style type="text/css">
            body{font-size: 12px; font-family: monospaced}
            ul, li{list-style-type: none}
            textarea{
                width: 300px;
                height: 300px;
            }
            .column{float: left; margin-right: 30px}
        </style>
    </head>
    <body>';

    $api_url = 'http://gdata.youtube.com/feeds/api/playlists/PL9m3-_Hv6qNhj0g5yr8EAhX_wuFyH8JNP';
    $json = json_decode(file_get_contents($api_url), true);
    $playlist_data = array();
    $videos_data = array();

    echo '<div class="column"><textarea>' . print_r($json, 1) . '</textarea></div>';

    foreach($json['data'] as $key => $value)
    {
        if(in_array($key, ['author', 'title', 'totalItems']))
            $playlist_data[$key] = $value;

        if($key == 'items')
        {
            foreach($value as $videoID => $data)
                foreach($data['video'] as $dataKey => $dataValue)
                {
                    if(in_array($dataKey, ['title', 'player']))
                    {
                        if($dataKey == 'player')
                        {

                            $videos_data[$videoID]['url'] = $dataValue['default'];
                            continue;
                        }

                        $videos_data[$videoID][$dataKey] = $dataValue;
                    }
                }
        }
    }

    echo '<div class="column">';
    echo 'La lista es: ' . sprintf('<strong>%s</strong><br>', $playlist_data['title']);
    echo 'total de videos: ' . sprintf('<strong>%s</strong><br>', $playlist_data['totalItems']);
    echo 'autor: ' . sprintf('<strong>%s</strong><br>', $playlist_data['author']);

    echo '<br><br>';

    echo '<strong>Los videos son:</strong>';
    echo '<ul>';

    foreach($videos_data as $id => $data)
    {
        echo '<li>
            <strong>' . $id . '</strong>
            <a href="' . $data['url'] . '">' . $data['title'] . '</a>
        </li>';
    }

    echo '</div><div style="clear:bottom"></div>';

    echo '<pre>' ; 

    echo '</body></html>';