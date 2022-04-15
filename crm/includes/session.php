<?php

function store_token($o_json)
{
    $se_obj = serialize($o_json);
    // almacenamos $s en algún lugar en el que page2.php puede encontrarlo.
    file_put_contents('store.dat', $se_obj);
    //var_dump($o_json);
}

function resto_token()
{
    echo "Restaurando token <br> \t\n";
    if(file_exists('store.dat')){
        $de_obj = file_get_contents('store.dat');
        $o_token = unserialize($de_obj);
    }else{

        $obj = new stdClass();
        $obj->access_token  = "CIjhvqDkLhICAQEYi5mzASDEx94FKOSwDjIZALeWNt-jV2hJSuyaEP7divSu5J4jpY7S3joaAAoCQQAADIACAAgAAAABAAAAAAAAABjAABNCGQC3ljbf-yOgrjd8anIjepn8-IS6Ot3EnGQ";
        $obj->refresh_token = "c2811b3a-394c-4ab4-ae20-f97a919a8d95";
        return $obj;
    }


    return $o_token;
}

function refresh_token2($client_id, $client_secret, $redirect_uri, $refresh_token)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.hubapi.com/oauth/v1/token?grant_type=refresh_token&client_id=".$client_id."&scope=contacts&&client_secret=".$client_secret."&redirect_uri=".$redirect_uri."&refresh_token=".$refresh_token,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => array(
      "content-type: application/x-www-form-urlencoded",
      "accept: application/json"
    ),
  ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        return json_decode($response);
    }
    ///echo "AAAAAAAAAAAAAAAAAAAAA".$response;
}

function info_token($token)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.hubapi.com/oauth/v1/access-tokens/".$token,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "accept: application/json"
    ),
  ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        return json_decode($response);
    }
}



?>