<?php

class kolory {

    public function zmieniaj($dol_czy_gora) {
        if (isset($_GET['publicznosc'])) {
            $publicznosc = $_GET['publicznosc'];
            if ($publicznosc == 2) {
                if ($dol_czy_gora == 1)
                    return '#033c57';
                elseif ($dol_czy_gora == 2)
                    return '#0774a7';
            }
            if ($publicznosc == 1) {
                if ($dol_czy_gora == 1)
                    return '#b85716';
                elseif ($dol_czy_gora == 2)
                    return '#db7a39';
            }
            if ($publicznosc == 3) {
                if ($dol_czy_gora == 1)
                    return '#267812';
                elseif ($dol_czy_gora == 2)
                    return '#53a33f';
            }
        }
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
            if ($action == 'przedszkola' || $action == 'zlobki' || $action == 'kluby_malucha') {
                if ($dol_czy_gora == 1)
                    return '#167087';
                elseif ($dol_czy_gora == 2)
                    return '#50a8d1';
            }
            elseif ($action == 'dla_nauczycieli' || $action == 'dla_rodzicow' || $action == 'dla_dzieci') {
                if ($dol_czy_gora == 1)
                    return '#ba3a78';
                elseif ($dol_czy_gora == 2)
                    return '#eb63a5';
            }
            elseif ($action == "dodaj") {
                if ($dol_czy_gora == 1)
                    return '#448021';
                elseif ($dol_czy_gora == 2)
                    return '#69b84a';
            }elseif ($action == "kontakt") {
                if ($dol_czy_gora == 1)
                    return '#b8920b';
                elseif ($dol_czy_gora == 2)
                    return '#d6b73c';
            }
        }
        else {
            if ($dol_czy_gora == 1)
                return '#033c57';
            elseif ($dol_czy_gora == 2)
                return '#0774a7';
        }
    }

}

?>
