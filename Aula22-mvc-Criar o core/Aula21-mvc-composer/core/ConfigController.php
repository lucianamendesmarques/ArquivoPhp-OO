<?php

namespace Core;

/**
 * Description of ConfigController
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class ConfigController {

    private $Url;
    private $UrlConjunto;
    private $UrlControlle;
    private $UrlMetodo;

    public function __construct() {
        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {
            $this->Url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            $this->UrlConjunto = explode("/", $this->Url);

            if ((isset($this->UrlConjunto[0])) AND ( isset($this->UrlConjunto[1]))) {
                $this->UrlControlle = $this->UrlConjunto[0];
                $this->UrlMetodo = $this->UrlConjunto[1];
            } else {
                $this->UrlControlle = 'home';
                $this->UrlMetodo = 'index';
            }
        } else {
            $this->UrlControlle = 'home';
            $this->UrlMetodo = 'index';
        }

        echo "Classe: {$this->UrlControlle} - Método: {$this->UrlMetodo} <br>";
        //echo "URL: {$this->Url} <br>";
    }

}
