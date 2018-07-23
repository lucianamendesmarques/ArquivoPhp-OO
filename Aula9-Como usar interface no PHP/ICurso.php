<?php

/**
  os métodos que estiverem na classe interface e todos os dependentes como cursoGraduacao  cursoPosGraducao elas são obrigadas a implementar a deterninar as classes que ela determina exe: o metodo disciplina e professor
 */

interface ICurso {

    public function disciplina($NomeDisciplina);

    public function professor($NomeProfessor);
}

