<?php

/**
 * Plugin Name: API Mandala Coins
 * Plugin URI: 
 * Description: 
 * Version: 1.0
 * Require at Least: 5.6
 * Author: Danilo Pires
 * Author URI: 
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: api-coins-mandala
 * Path Domain: /languages
 */

 if(! defined( 'ABSPATH' )){
    exit;
 }

 //Caso não exista a classe ApiCoinsMandala, cria a classe 
 if( ! class_exists( 'ApiCoinsMandala' )){
    class ApiCoinsMandala{
        function __construct(){
            $this->defineConstants();
        }

        public function defineConstants(){
            define( 'API_COINS_PATH', plugin_dir_path( '__FILE__' ));
            define( 'API_COINS_URL' , plugin_dir_url ( '__FILE__' ));
            define( 'API_COINS_VERSION' , '1.0.0');
        }
    }
 }


 //Caos a classe ApiCoinsMandala exista, instancia um objeto da classe
 if(class_exists( 'ApiCoinsMandala' )){
    $apiCoinsMandala = new ApiCoinsMandala();
 }