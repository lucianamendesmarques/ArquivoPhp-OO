<?php

namespace Sts\Controllers;

/**
 * Description of Blog
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class Blog {
    
    public $Dados;

    public function index() {
        //echo "Controller da página blog<br>";

        $listarArtigo = new \Sts\Models\StsListarBlog();
        $this->Dados = $listarArtigo->listar();
        //var_dump($this->Dados);
        
        $carregarView = new \Core\ConfigView("sts/Views/blog/listarArtigo", $this->Dados);
        $carregarView->renderizar();
    }

}
