<?php

/**
 * Description of Disciplina
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class Disciplina {

    public $Aluno;
    public $NotaTrabalho;
    public $NotaProva;
    public static $Media;

    function __construct($Aluno, $NotaTrabalho, $NotaProva) {
        $this->Aluno = $Aluno;
        $this->NotaTrabalho = $NotaTrabalho;
        $this->NotaProva = $NotaProva;
        self::$Media = $this->NotaProva + $this->NotaTrabalho;
    }

    function situacao() {
        if (self::$Media >= 7):
            return "Aluno(a) {$this->Aluno} esta <b>aprovado</b> com média " . self::$Media . ".<hr>";
        else:
            return "Aluno(a) {$this->Aluno} esta <b>reprovado</b> com média " . self::$Media . ".<hr>";
        endif;
    }
    
    static function situacaoAluno() {
        if (self::$Media >= 7):
            return "Média " . self::$Media . ".<hr>";
        else:
            return "Média " . self::$Media . ".<hr>";
        endif;
    }

}
