<?php

/**
 * Class calculator
 */
class Calculator
{

    /**
     * Calculator
     *
     * @return string
     */
    public function Runcalculator()
    {

        if (!empty($_POST) and isset($_POST)) {

            $note1 = filter_var($_POST['1-note'], FILTER_VALIDATE_INT);
            $note2 = filter_var($_POST['2-note'], FILTER_VALIDATE_INT);
            $note3 = filter_var($_POST['3-note'], FILTER_VALIDATE_INT);
            return $this->calculate($note1, $note2, $note3);
        }
    }

    /**
     * Vérifie si l'etudiant est admis
     *
     * @param integer $moyenne
     * @return boolean
     */
    private function isAdmis(int $moyenne): bool
    {

        return $moyenne >= 14;
    }

    /**
     * Calcule la moyenne
     *
     * @param integer $note1
     * @param integer $note2
     * @param integer $note3
     * @return string
     */
    public function calculate(int $note1, int $note2, int $note3): string
    {
        $moyenne = ($note1 + $note2 + $note3) / 3;
        $admi = sprintf("
    <span class=\"alert-succes alert\">%s </span>
    ", "l'Etudiant est admis");
        $recale = sprintf("
    <span class=\"alert-danger alert\">%s </span>
    ", "désolé l'Etudiant est recalé ");
        return $this->isAdmis($moyenne) ? $admi : $recale;
    }
}
