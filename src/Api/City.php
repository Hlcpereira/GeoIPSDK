<?php
/*
 * Copyright (C) 2021 Henrique Lima da Costa Pereira
 *
 * SPDX-License-Identifier: Apache-2.0
 */

namespace GeoIPSDK\Api;

class City {
    function getCity($ip) {
        $ip = $_SERVER['REMOTE_ADDR']; //TO-DO mover para o módulo
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, "http://ipinfo.io/$ip/geo"); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        $_jsonResp = json_decode($response, true);
        curl_close($ch);
        $_preparedData = validateResponse($_jsonResp);
        if ($_preparedData == null) {
            return array("resultado" => 0);
        }

        return $response["city"];
    }
}
