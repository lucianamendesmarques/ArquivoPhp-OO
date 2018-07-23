<?php

namespace Sts\Models;

use PDO;
/**
 * Description of StsListarBlog
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class StsListarBlog {
    
    public $Resultado;

    public function listar() {
        //echo "Pesquisa artigos no BD<br>";
        $listarArtigos = new \Sts\Models\Conn();
        //$listarArtigos->getConn();
        
        $limit = 10;
        $result_artigos = "SELECT * FROM artigos LIMIT :limit";
        $resultado_artigos = $listarArtigos->getConn()->prepare($result_artigos);
        $resultado_artigos->bindParam(':limit', $limit, PDO::PARAM_INT);
        $resultado_artigos->execute();
        
        $this->Resultado['artigos'] = $resultado_artigos->fetchAll();
        return $this->Resultado;
        //var_dump($this->Resultado);
    }
}
