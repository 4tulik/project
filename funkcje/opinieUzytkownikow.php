<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


interface opinie {

    public function pokazOpinie();
}

class opinieUzytkownikow {

    private function wyswietl($query) {

        $opinia = 'SELECT * FROM  `opinie` ' . $query;

        $z_opinia = mysql_query($opinia);

        while ($msc = mysql_fetch_array($z_opinia)) {
            $widoczna = $msc['widoczna'];
            if ($widoczna) {

                $id_uzytkownika = $msc['id_uzytkownika'];
                $id_opinii = $msc['id_opinii'];
                $uzytkownik = 'SELECT * FROM  `opinie` WHERE `id_uzytkownika` =' . $id_uzytkownika;
                $z_uzytkownik = mysql_query($uzytkownik);
                $uzytkownik = mysql_fetch_array($z_uzytkownik);

                $data = $msc['data'];
               // $email = $uzytkownik['email'];
                $imie = $msc['imie'];
                $opinia = substr($msc['tresc'], 0, 256);

                $ocena = $msc['ocena'];
//                $ocena = $this->Ocena($ocena, 'ocena_ogolna', $id_opinii);
                $nauczyciele = $msc['nauczyciele'];
//                $ocena_nauczyciele = $this->Ocena($ocena_nauczyciele, 'nauczyciele', $id_opinii);
                $wyposazenie = $msc['wyposazenie'];
//                $ocena_wyposazenie = $this->Ocena($ocena_wyposazenie, 'wyposazenie', $id_opinii);
                $zajecia = $msc['zajecia'];
//                $ocena_zajecia = $this->Ocena($ocena_zajecia, 'zajecia', $id_opinii);
                $czystosc = $msc['czystosc'];
                $plac_zabaw = $msc['plac_zabaw'];
                $wyzywienie = $msc['wyzywienie'];
                echo <<< KONIEC
           

               
	
                   <br/>
    <div class="widget clearfix" >
             <div class="widget_inside">
                 
        <div class="opinion">
                
      
                <div class="col_4">
                <div class="o_imie">Dodana przez: <strong>$imie</strong></div>
                </div>
                <div class="col_2 last" style="text-align:right; font-size:10px;">
                <div class="o_data">$data</div>
                </div><br /><br />
                <div class="o_tresc">                              
                $opinia
                </div>
                
                <div class = "col_2">
                <div class="score opinion">
                    <strong>Ocena ogólna</strong>      
                <div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all"   style="width: 100px; ">
                <div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: $ocena%; "></div></div></div>
                
                <div class="score opinion">
                    Nauczyciele  
                <div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all"   style="width: 100px; ">
                <div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: $nauczyciele%; "></div></div></div>
                </div>
                
                
                <div class = "col_2">
                <div class="score opinion">
                    Zajęcia  
                <div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all"   style="width: 100px; ">
                <div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: $zajecia%; "></div></div></div>
                
                <div class="score opinion">
                    Czystość  
                <div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all"   style="width: 100px; ">
                <div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: $czystosc%; "></div></div></div>
                </div>
                
                
                <div class = "col_2 last">
                <div class="score opinion">
                    Plac zabaw  
                <div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all"   style="width: 100px; ">
                <div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: $plac_zabaw%; "></div></div></div>
                
                <div class="score opinion">
                    Wyżywienie 
                <div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all"   style="width: 100px; ">
                <div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: $wyzywienie%; "></div></div></div>
                </div>
               
 </div> </div>
                </div>
           
           <br />
KONIEC;
            }
        }
    }

    public function pokazOpinie($id_podmiotu) {

        if (isset($_GET['action'])) {
            echo <<< KONIEC
<div id="opinia_uzytkownika">
   <div id="info_podglad">
    <strong>To jest podgląd.</strong> <br />Twoja opinia będzie publicznie dostępna po klinkięciu w link aktywujący w wiadomości e-mail!
</div>
            <div class="opinia_uzytkownika_tresc">

           
KONIEC;
            $id_podmiotu = $_GET['id_podmiotu'];
            $dodajOpinie = new dodajOpinie();
            $dodajOpinie->pobierzDaneFormularzaOpinii($id_podmiotu);
            echo <<< KONIEC
            </div></div>
             <hr class="center"/>
KONIEC;
        }

        $query = 'WHERE `id_podmiotu` =' . $id_podmiotu;
        echo '<div id=opinie>';
        $this->wyswietl($query);
        echo '</div>';
        if (!isset($_GET['action'])) {

            //  include 'template/muse/formularzOpinii.php';
        }
    }

//    public function Ocena($ocena, $element_oceny, $id_opinii) {
//        $ocena_gwiazdki = '';
//        $name = $element_oceny . '_' . $id_opinii;
//        for ($i = 1; $i <= 10; $i++) {
//            $title = $ocena / 2;
//            if ($i == $ocena) {
//
//                $ocena_gwiazdki .= "<input name=\"$name\" type=\"radio\" class=\"star\" disabled=\"disabled\" checked=\"checked\" title=\"$title\"/>";
//            }
//            else
//                $ocena_gwiazdki .= "<input name=\"$name\" type=\"radio\" class=\"star\" disabled=\"disabled\"  title=\"$title\" />";
//        }
//        return $ocena_gwiazdki;
//    }
//
}

?>
