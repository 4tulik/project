<?php

interface parametry {

    public function wojewodztwo();

    public function powiat();

    public function gmina();

    public function miejscowosc();

    public function idPodmiotu();

    public function isset_woj();

    public function isset_pow();

    public function isset_gm();

    public function isset_msc();

    public function isset_podmiot();
}

class sprawdzParametry implements parametry {

    public function wojewodztwo() {
        if (isset($_GET['woj']))
            return $wojewodztwo = $_GET['woj'];
        else
            echo "Parametr woj nie ustawiony!";
    }

    public function powiat() {
        if (isset($_GET['pow']))
            return $powiat = $_GET['pow'];
        else
            echo "Parametr pow nie ustawiony!";
    }

    public function gmina() {
        if (isset($_GET['gm']))
            return $gmina = $_GET['gm'];
        else
            echo "Parametr gm nie ustawiony!";
    }

    public function miejscowosc() {
        if (isset($_GET['msc']))
            return $miejscowosc = $_GET['msc'];
        else
            echo "Parametr msc nie ustawiony!";
    }

    public function idPodmiotu() {
        if (isset($_GET['id_podmiotu']))
            return $id_podmiotu = $_GET['id_podmiotu'];
        else
            echo "Parametr id_podmiotu nie ustawiony!";
    }

    public function isset_woj() {
        if (isset($_GET['woj']))
            return TRUE;
        else
            return FALSE;
    }

    public function isset_pow() {
        if (isset($_GET['pow']))
            return $powiat = $_GET['pow'];
        else
            echo "Parametr pow nie ustawiony!";
    }

    public function isset_gm() {
        if (isset($_GET['gm']))
            return TRUE;
        else
            return FALSE;
    }

    public function isset_msc() {
        if (isset($_GET['msc']))
            return TRUE;
        else
            return FALSE;
    }

    public function isset_podmiot() {
        if (isset($_GET['id_podmiotu']))
            return TRUE;
        else
            return FALSE;
    }

}

?>
