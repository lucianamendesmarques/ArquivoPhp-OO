<?php

/**
 * Description of Bonus
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class Bonus extends FuncionarioProtected{
    
    public function verSalario() {
        parent::bonus(2500);
        return parent::verSalario();
    }
}
