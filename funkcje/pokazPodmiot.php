<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author lukasz
 */
interface Pokaz {

    public function mPodmiot();

    public function malyPodmiot($query);
}

class pokazPodmiot implements Pokaz {

    public function malyPodmiot($query) {
        require_once 'obrobkaWpisow.php';
        require_once 'menuWlasciwe.php';
        if (isset($_GET['publicznosc'])) {
            $publicznosc = $_GET['publicznosc'];
            if ($publicznosc == 2) {
                $query;
            } else if ($publicznosc == 1) {
                $query = $query . " AND `publicznosc` = 001";
            } else if ($publicznosc == 3) {
                $query = $query . " AND `publicznosc` != 001";
            }
        }
        $count_query = 'SELECT COUNT(*) as c FROM' . $query;

        $temp = mysql_query($count_query);

        $temp = mysql_fetch_assoc($temp);
        $num_items = $temp['c'];

        $aktualny_adres = new menuWlasciwe();
        $base_url = $aktualny_adres->okruszkoweMenu(2);

        $per_page = 10;
        if (isset($_GET['start'])) {
            $start_item = $_GET['start'];
        } else {
            $start_item = 0;
        }
        echo '<div id="pager"> <ul class="pagination hor-list">' . pokazPodmiot::pagination($base_url, $num_items, $per_page, $start_item) . '</ul></div>';
        echo <<< koniec


koniec;

        $query .= " LIMIT $start_item, $per_page";
        $query = 'SELECT * FROM' . $query;
        $temp = mysql_query($query);
        $nr_elementu = 0;
        $podmiot = new obrobkaWpisow();


        while ($msc = mysql_fetch_array($temp)) {

            $id = $msc['id'];
            $nazwa = $podmiot->maleLitery($msc['nazwa']);
            $ulica = $podmiot->maleLitery($msc['ulica']);
            $telefon = $podmiot->maleLitery($msc['telefon']);
            $strona_www = strtolower($msc['strona_www']);
            $ulica = $podmiot->maleLitery($msc['ulica']);
            $nr_domu = $podmiot->maleLitery($msc['nr_domu']);
            $miejscowosc = $podmiot->maleLitery($msc['miejscowosc']);
            $kod_pocztowy = $podmiot->maleLitery($msc['kod_pocztowy']);
            $ocena = rand(0, 100);
            $opinie = mysql_fetch_row(mysql_query('SELECT COUNT(*)`ocena` FROM `opinie` WHERE `id_podmiotu` = ' . $msc['id']));
            $opinie = $opinie[0];
            $sql = mysql_query('SELECT `ocena` FROM `opinie` WHERE `id_podmiotu` = ' . $msc['id']);
            $wynik = 0;
            $srednia_ocena = 0;
            while ($mscc = mysql_fetch_array($sql)) {

                for ($i = 0; $i <= $opinie; $i++) {
                    if (isset($mscc[$i]))
                        $wynik += $mscc[$i];
                }
            }
            if ($opinie != 0)
                $srednia_ocena = $wynik / $opinie;
            else
                $srednia_ocena = 0;
            echo <<< KONIEC
                
<div class="row">
    <div class="col_12">
        <div class=" clearfix tlo_podmiotu">
            <div class="widget_inside col_11 podmiot">
                <div class="name"> 
                    <h5> <strong><a href="$base_url&id_podmiotu=$id">$nazwa</a></strong></h5>
                </div>
                <div class="row">                       
                    <div class="adres">&nbsp;$ulica&nbsp;$nr_domu </div>
                    <div class = "city"><strong>&nbsp;$miejscowosc</strong></div>
                    <div class="post_code">&nbsp;$kod_pocztowy</div>
                    <div class="telephone">&nbsp;$telefon</div>
                    <div class="contact"><a href="#">&nbsp;Wyślij e-mail</a></div>
                    <div class="www">&nbsp;<a href="#">$strona_www</a></div>
                    <div class="comments">&nbsp;<a href="$base_url&id_podmiotu=$id#Opinie">Opinie [ $opinie ]</a></div>
                    <div class="score opinion">&nbsp;Ocena przedszkola:      
                        <div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all"   style="width: 150px; ">
                            <div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 10%; ">  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
KONIEC;
        }
        echo '<div id="pager"> <ul class="pagination hor-list">' . pokazPodmiot::pagination($base_url, $num_items, $per_page, $start_item) . '</ul></div>';
    }

    public function duzyPodmiot($query) {
        $podmiot = new obrobkaWpisow();
        // $opinie = new opinieUzytkownikow();
        $query = 'SELECT * FROM' . $query;
        $temp = mysql_query($query);
        $msc = mysql_fetch_array($temp);

        $aktualny_adres = new menuWlasciwe();
        $base_url = $aktualny_adres->okruszkoweMenu(2);
        $publicznosc_p = $msc['publicznosc'];
        $nazwa = $podmiot->maleLitery($msc['nazwa']);
        $ulica = $podmiot->maleLitery($msc['ulica']);
        $telefon = $podmiot->maleLitery($msc['telefon']);
        $strona_www = strtolower($msc['strona_www']);
        $ulica = $podmiot->maleLitery($msc['ulica']);
        $nr_domu = $podmiot->maleLitery($msc['nr_domu']);
        $miejscowosc = $podmiot->maleLitery($msc['miejscowosc']);
        $kod_pocztowy = $podmiot->maleLitery($msc['kod_pocztowy']);
        $opinie = mysql_fetch_row(mysql_query('SELECT COUNT(*)`ocena` FROM `opinie` WHERE `id_podmiotu` = ' . $msc['id']));

        $id_podmiot = $msc['id'];

        echo <<< KONIEC

<div class="row">
    <div class="col_12">
        <div class=" clearfix tlo_podmiotu">
            <div class="widget_inside col_11 podmiot">
                <div class="name"> 
                    <h5> <strong><a href="$base_url&id_podmiotu=$id_podmiot">$nazwa</a></strong></h5>
                </div>
                <div class="row">                       
                    <div class="adres">&nbsp;$ulica&nbsp;$nr_domu </div>
                    <div class = "city"><strong>&nbsp;$miejscowosc</strong></div>
                    <div class="post_code">&nbsp;$kod_pocztowy</div>
                    <div class="telephone">&nbsp;$telefon</div>
                    <div class="contact"><a href="#">&nbsp;Wyślij e-mail</a></div>
                    <div class="www">&nbsp;<a href="#">$strona_www</a></div>
                    <div class="comments">&nbsp;<a href="#">Opinie [ $opinie[0] ]</a></div>

                    <div class="score opinion">&nbsp;Ocena przedszkola:      
                        <div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all"   style="width: 150px; ">
                            <div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 10%; ">  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
       
         
        
KONIEC;
        /*        <div class="mapa">
          <iframe width="250" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=
          $ulica $nr_domu $miejscowosc $kod_pocztowy &amp;ie=UTF8&amp;hnear=
          $ulica $nr_domu, $kod_pocztowy $miejscowosc&amp;output=embed"></iframe>

          </div>
          <hr class="center" /> */
//        if(isset($_GET['id_podmiotu'])){
//        $id_podmiotu = $_GET['id_podmiotu'];
//        $opinie->pokazOpinie($id_podmiotu);
//        }
        }


        public function mPodmiot() {
        if (isset($_GET['id_podmiotu'])) {
        $query = ' `przedszkola` WHERE `id` =' . $_GET['id_podmiotu'];
        $this->duzyPodmiot($query);
        } elseif (isset($_GET['woj']) && isset($_GET['pow']) && isset($_GET['gm']) && isset($_GET['msc'])) {
            $query = ' `przedszkola` WHERE `woj` = ' . $_GET['woj'] . ' AND `pow` =' . $_GET['pow'] . ' AND `gm` =' . $_GET['gm'] . ' AND `miejscowosc` =' . '"' . $_GET['msc'] . '"';
            $this->malyPodmiot($query);
        } elseif (isset($_GET['woj']) && isset($_GET['pow']) && isset($_GET['gm'])) {
            $query = ' `przedszkola` WHERE `woj` = ' . $_GET['woj'] . ' AND `pow` =' . $_GET['pow'] . ' AND `gm` =' . $_GET['gm'];
            $this->malyPodmiot($query);
        } elseif (isset($_GET['woj']) && isset($_GET['pow'])) {
            $query = ' `przedszkola` WHERE `woj` = ' . $_GET['woj'] . ' AND `pow` =' . $_GET['pow'];
            $this->malyPodmiot($query);
        } elseif (isset($_GET['woj'])) {
            $query = ' `przedszkola` WHERE `woj` = ' . $_GET['woj'];
            $this->malyPodmiot($query);
        }
    }

    /*
     * Funkcja oparta o phpBB, tworzy liste stron na podstawie parametrow
     * - $base_url - URL
     * - $num_items - liczba pozycji
     * - $per_page - ilosc pozycji na strone
     * - $start_item - pozycja poczatkowa
     * - $add_prevnext_text - czy wyswietlac etykiety nastepny, poprzedni (TODO: obsluga tegoz parametru)
     */

    function pagination($base_url, $num_items, $per_page, $start_item, $add_prevnext_text = true) {
        $seperator = '<li>';

        $total_pages = ceil($num_items / $per_page); // ilość stron

        $amp = strpos($base_url, '?') !== false ? '&amp;' : '?'; // czy łączyć "?" czy "&"
        if ($total_pages == 1 || !$num_items) { // ilość elementów = 1?
            if ($start_item % $per_page == 0) {
                return;
            } else {
                return ($add_prevnext_text ? '<a href="' . $base_url . $amp . 'start=0">&lt;&lt;</a>' . $seperator : '') . '<b>1</b>'; // 1 strona z linkiem do poczatku (<<)- zaczeto nierówno z iloscia postow na strone (1 user ma 10/str, inny ma 15 i daje linka temu pierwszemu)
            }
        }

        $on_page = floor($start_item / $per_page) + 1; // ilosc na strone
        $page_string = ($add_prevnext_text && $on_page != 1 || $start_item % $per_page != 0) ? '<li><a href="' . $base_url . $amp . 'start=' . max(0, ($on_page - 2) * $per_page) . '">&lt;&lt;</a></li>' . $seperator : '<li class="disabled"><a href="#">&lt;&lt;</a></li>' . $seperator; // poczatkowy << (o ile jestesmy dalej niz na 1 stronie)

        if ($total_pages > 10) { // wiecej niz 10 stron
            for ($i = 1; $i <= 3; $i++) { // poczatkowe 3 strony wyswietlane zawsze
                $page_string .= ($i == $on_page) ? '<li class="active"><a href="#">' . $i . '</a></li>' : '<a href="' . $base_url . $amp . "start=" . (($i - 1) * $per_page) . '">' . $i . '</a>';
                $page_string .= $seperator;
            }

            $start1 = max(4, floor($on_page / 2) - 1); // ustalenie poczatku i konca 2 czesci ( 3 ... [tutaj] ... srodek ... ... koniec)
            $end1 = max(4, min($total_pages - 3, floor($on_page / 2)));

            $start2 = max($end1 + 1, min($total_pages - 6, max(4, $on_page + 1))); // ustalenie poczatku i konca 3 czesci ( 3 ... ... ... [tutaj] ... ... koniec)
            $end2 = max(6, min($total_pages - 3, $on_page + 4));

            $start3 = max($end2 + 1, min($total_pages - 3, floor($on_page + ($total_pages - $on_page) / 2) - 2));  // ustalenie poczatku i konca 4 czesci ( 3 ... ... ...  ... ... [tutaj] ... koniec)
            $end3 = min($total_pages - 3, max(4, floor($on_page + ($total_pages - $on_page) / 2)));

//            if ($start1 > 4) {
//                $page_string .= '...' . $seperator; // jesli 2 czesc sie zaczyna dalej niz na 4 stronie
//            }
//            if ($start2 >= $end1) // jesli 2 czesc w ogole istnieje
//                for ($i = $start1; $i <= $end1; $i++) {
//                    $page_string .= ($i == $on_page) ? '<li class="active"><a href="#">'. $i .'</a></li>' : '<a href="' . $base_url . $amp . "start=" . (($i - 1) * $per_page) . '">' . $i . '</a>';
//                    $page_string .= $seperator;
//                }
            // jesli 2 czesc jest przynajmniej o 1 odlegla od nastepnej
            $page_string .= '<li class="disabled"><a href="#">...</a></li>' . $seperator;

            for ($i = $start2; $i <= $end2; $i++) { // srodkowa czesc
                $page_string .= ($i == $on_page) ? '<li class="active"><a href="#">' . $i . '</a></li>' : '<a href="' . $base_url . $amp . "start=" . (($i - 1) * $per_page) . '">' . $i . '</a>';
                $page_string .= $seperator;
            }

//            if ($start3 - $end2 > 1) { // jesli 4 czesc jest przynajmniej o 1 odlegla od nastepnej
//                $page_string .= '...' . $seperator;
//            }
//            for ($i = $start3; $i <= $end3; $i++) { // 4 czesc
//                $page_string .= ($i == $on_page) ? '<li class="active"><a href="#">'. $i .'</a></li>' : '<a href="' . $base_url . $amp . "start=" . (($i - 1) * $per_page) . '">' . $i . '</a>';
//                $page_string .= $seperator;
//            }


            $page_string .= '<li class="disabled"><a href="#">...</a></li>' . $seperator;


            for ($i = $total_pages - 2; $i <= $total_pages; $i++) { // koncowe strony
                $page_string .= ($i == $on_page) ? '<li class="active"><a href="#">' . $i . '</a></li>' : '<a href="' . $base_url . $amp . "start=" . (($i - 1) * $per_page) . '">' . $i . '</a>';
                if ($i < $total_pages) {
                    $page_string .= $seperator;
                }
            }
        } else { // mniej niz 10 sttron - wyswietlamy cala liste
            for ($i = 1; $i <= $total_pages; $i++) {
                $page_string .= ($i == $on_page) ? '<li class="active"><a href="#">' . $i . '</a></li>' : '<a href="' . $base_url . $amp . "start=" . (($i - 1) * $per_page) . '">' . $i . '</a>';
                if ($i < $total_pages) {
                    $page_string .= $seperator;
                }
            }
        } // dodanie koncowej >>, jesli nie jestesmy na ostatniej stronie
        $page_string .= ($on_page == $total_pages || !$add_prevnext_text) ? '<li class="disabled"><a href="#">&gt;&gt;</a></li>' . $seperator : $seperator . '<li><a href="' . $base_url . $amp . 'start=' . $on_page * $per_page . '">&gt;&gt;</a></li>';

        return $page_string;
    }

}

?>
