<?php

namespace Sts\Controllers;
/**
 * Description of Home
 *
 * @ copyright (c) year, Luciana Mendes Marques
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
