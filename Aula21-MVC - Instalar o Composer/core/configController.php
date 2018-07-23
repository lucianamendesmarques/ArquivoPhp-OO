<?php
namespace Core;
/**
 * Description of configController
 *
 * @ copyright (c) year, Luciana Mendes Marques
 */

    //put your code here
    
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
    
    //$classe carrega o caminho
    public function carregar() {
        $classe = "\\Sts\\Controllers\\".$this->UrlControlle;
        $classeCarregar = new $classe;
        $classeCarregar->index();
    }
}
