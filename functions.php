<?php

Class Teste{
    function teste_api(){
    
    }
    
    function teste2_api(){
        $response = wp_remote_get('https://api.flowbtc.com.br:8443/ap/ping');
    
        echo"<prev>";
        print_r($response);
    }
}

//teste2_api();
print_r("TESTE");
$response1 = wp_remote_get('https://api.flowbtc.com.br:8443/ap/ping');
    
echo"<prev>";
print_r($response1);
print_r("TESTE2");
    
?>