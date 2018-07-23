<?php

/**
 * Description of Funcionario
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class FuncionarioProtected {

    public $Nome;
    private $Salario;
    protected $Bonus;

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setSalario($Salario) {
        $this->Salario = $Salario;
    }

    function setBonus($Bonus) {
        $this->Bonus = $Bonus;
    }

    public function verSalario() {
        $this->Salario = $this->validarSalario($this->Salario);
        return "O funcionário {$this->Nome} tem o salário de R$ {$this->Salario} e o bônus de {$this->Bonus}";
    }

    private function validarSalario($Salario) {
        if (is_numeric($Salario) and ( $Salario > 0)):
            return $this->Salario = number_format($Salario, '2', ',', '.');
        else:
            die('Salário Inválido!');
        endif;
    }

    protected function bonus($Bonus) {
        $this->Bonus = $Bonus;
    }

}
