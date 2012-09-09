<?php

class dodajOpinie {

    public function pobierzDaneFormularzaOpinii($id_podmiotu) {
        if (isset($_POST['nauczyciele']) && isset($_POST['wyposazenie']) && isset($_POST['zajecia']) && isset($_POST['tresc'])) {
            $imie = $_POST['imie'];
            $ocena_nauczyciele = $_POST['nauczyciele'];
            $ocena_wyposazenie = $_POST['wyposazenie'];
            $ocena_zajecia = $_POST['zajecia'];
            $ocena = ($ocena_nauczyciele + $ocena_wyposazenie + $ocena_zajecia) / 3;
            $tresc = $_POST['tresc'];


            $this->wyswietl($ocena_nauczyciele, $ocena_wyposazenie, $ocena_zajecia, $ocena, $tresc, $imie);
        }
    }

    private function zapiszOpinie($ocena_nauczyciele, $ocena_wyposazenie, $ocena_zajecia, $ocena, $tresc, $imie) {
        $query = "INSERT INTO opinie(widoczna, id_podmiotu, id_uzytkownika, ocena, ocena_nauczyciele, ocena_wyposazenie, ocena_zajecia, tresc) values('0', '$id_podmiotu', '1', '$ocena', '$ocena_nauczyciele', '$ocena_wyposazenie', '$ocena_zajecia', '$tresc')";
        $result = mysql_query($query);
    }

    private function wyswietl($ocena_nauczyciele, $ocena_wyposazenie, $ocena_zajecia, $ocena, $tresc, $imie) {

        $id_opinii = sha1(rand(321111, 4214121));
        $opinia = new opinieUzytkownikow();
        $ocena = round($ocena, 0);
        $ocena = $opinia->Ocena($ocena, 'ocena_ogolna', $id_opinii);

        $ocena_nauczyciele = $opinia->Ocena($ocena_nauczyciele, 'nauczyciele', $id_opinii);

        $ocena_wyposazenie = $opinia->Ocena($ocena_wyposazenie, 'wyposazenie', $id_opinii);
        $data = date("Y-m-d H:i:s");
        $ocena_zajecia = $opinia->Ocena($ocena_zajecia, 'zajecia', $id_opinii);
        echo <<< KONIEC
        
        <div class="opinia">

        <div class="o_etykieta">
        <strong>Ocena ogólna:</strong><br/>
        Nauczyciele:<br />
        Wyposażenie:<br/>
        Zajęcia:
        </div>
        <div class="o_ocena">
        <strong>&nbsp;
        $ocena</strong><br/>
        &nbsp;
        $ocena_nauczyciele<br/>
        &nbsp;
        $ocena_wyposazenie<br/>
        &nbsp;
        $ocena_zajecia
        </div>
        <div class="o_imie">Dodana przez: $imie</div>
        <div class="o_data">$data</div>
        <div class="o_tresc">
        $tresc
        </div>

        </div>
KONIEC;
    }

}
?>

