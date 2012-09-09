<?php

require_once 'funkcje/sprawdzParametry.php';

interface menuLewe {

    public function podzialGeograficzny();

    public function ukryteMenu($query = NULL, $param = NULL);

    public function leweMenu($query = NULL, $param = NULL);

    public function etykietkalMenu();

    public function etykietkaCentralna();

    public function wybraneMiejscowosci();

    public function pokazWybraneMiejscowosci();

    public function okruszkoweMenu($param = NULL);
}

class menuWlasciwe implements menuLewe {

    //funkcja dzieli menu na wojewodztwa gminy i powiaty
    public function podzialGeograficzny() {

        if (sprawdzParametry::isset_woj() && sprawdzParametry::isset_gm()) {
            $woj = sprawdzParametry::wojewodztwo();
            $pow = sprawdzParametry::powiat();
            $query = 'SELECT DISTINCT `Gmina`, `gm`, `Powiat`, `pow`,`Wojewodztwo`, `woj` FROM `podzial_terytorialny` WHERE `woj` = ' . $woj . ' AND `pow` =' . $pow;
            menuWlasciwe::leweMenu($query, 'gminy');
        } elseif (sprawdzParametry::isset_woj()) {
            $woj = sprawdzParametry::wojewodztwo();
            $query = 'SELECT DISTINCT `Powiat`, `pow`,`Wojewodztwo`, `woj` FROM `podzial_terytorialny` WHERE `woj` = ' . $woj;
            menuWlasciwe::leweMenu($query, 'powiaty');
        } elseif (!sprawdzParametry::isset_woj()) {
            $query = 'SELECT DISTINCT `Wojewodztwo`, `woj` FROM `podzial_terytorialny` WHERE 1';
            menuWlasciwe::leweMenu($query, 'wojewodztwa');
        }
    }

public function UkrytaLista() {

        if (sprawdzParametry::isset_woj() && sprawdzParametry::isset_gm()) {
            $woj = sprawdzParametry::wojewodztwo();
            $pow = sprawdzParametry::powiat();
            $query = 'SELECT DISTINCT `Gmina`, `gm`, `Powiat`, `pow`,`Wojewodztwo`, `woj` FROM `podzial_terytorialny` WHERE `woj` = ' . $woj . ' AND `pow` =' . $pow;
            menuWlasciwe::ukryteMenu($query, 'gminy');
        } elseif (sprawdzParametry::isset_woj()) {
            $woj = sprawdzParametry::wojewodztwo();
            $query = 'SELECT DISTINCT `Powiat`, `pow`,`Wojewodztwo`, `woj` FROM `podzial_terytorialny` WHERE `woj` = ' . $woj;
            menuWlasciwe::ukryteMenu($query, 'powiaty');
        } elseif (!sprawdzParametry::isset_woj()) {
            $query = 'SELECT DISTINCT `Wojewodztwo`, `woj` FROM `podzial_terytorialny` WHERE 1';
            menuWlasciwe::ukryteMenu($query, 'wojewodztwa');
        }
    }
    public function ukryteMenu($query = null, $param = null) {

        $menu = new obrobkaWpisow();
        $temp = mysql_query($query);
        $nr_elementu = 0;
        $prawe_menu = Array();
        if ($param == 'miejscowosci') {
            while ($msc = mysql_fetch_array($temp)) {
                $element_menu = $msc[0];
                $id_gm = $msc['gm'];
                $id_pow = $msc['pow'];
                $id_woj = $msc['woj'];
                $miejscowosc = $msc['miejscowosc'];

                if (isset($_GET['publicznosc'])) {
                    $publicznosc = $_GET['publicznosc'];
                    $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj&amp;pow=$id_pow&amp;gm=$id_gm&amp;msc=$miejscowosc&amp;publicznosc=$publicznosc\">" . "Przedszkole ". $element_menu . "</a></li>";
                } else {
                    $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj&amp;pow=$id_pow&amp;gm=$id_gm&amp;msc=$miejscowosc\">" . "Przedszkole ". $element_menu . "</a></li>";
                }
            }
        } elseif ($param == 'wojewodztwa') {
            while ($msc = mysql_fetch_array($temp)) {

                $element_menu = $menu->maleLitery($msc[0]);
                $id_woj = $msc['woj'];

                if (isset($_GET['publicznosc'])) {
                    $publicznosc = $_GET['publicznosc'];
                    $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj&amp;publicznosc=$publicznosc\">" . "Przedszkole ". $element_menu . "</a></li>";
                } else {
                    $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj\">" . "Przedszkole ". $element_menu . "</a></li>";
                }
            }
        } elseif ($param == 'powiaty') {
            $nr_elementu = 0;
            while ($msc = mysql_fetch_array($temp)) {

                $element_menu = $menu->maleLitery($msc[0]);
                $id_pow = $msc['pow'];
                $id_woj = $msc['woj'];

                if (isset($_GET['publicznosc'])) {
                    $publicznosc = $_GET['publicznosc'];
                    $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj&amp;pow=$id_pow&amp;publicznosc=$publicznosc\">" . "Przedszkole ". $element_menu . "</a></li>";
                } else {
                    $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj&amp;pow=$id_pow\">" . "Przedszkole ". $element_menu . "</a></li>";
                }
            }
        } elseif ($param == 'gminy') {
            $nr_elementu = 0;
            while ($msc = mysql_fetch_array($temp)) {

                $element_menu = $menu->maleLitery($msc[0]);
                $id_gm = $msc['gm'];
                $id_pow = $msc['pow'];
                $id_woj = $msc['woj'];


                if (isset($_GET['publicznosc'])) {
                    $publicznosc = $_GET['publicznosc'];
                    $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj&amp;pow=$id_pow&amp;gm=$id_gm&amp;publicznosc=$publicznosc\">" . $element_menu . "</a></li>";
                } else {
                    $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj&amp;pow=$id_pow&amp;gm=$id_gm\">" . $element_menu . "</a></li>";
                }
            }
        }

        foreach ($prawe_menu as $el_prawe_menu) {
            echo $el_prawe_menu;
        }
    }
    public function leweMenu($query = null, $param = null) {

        $menu = new obrobkaWpisow();
        $temp = mysql_query($query);
        $nr_elementu = 0;
        $prawe_menu = Array();
        if ($param == 'miejscowosci') {
            while ($msc = mysql_fetch_array($temp)) {
                $element_menu = $msc[0];
                $id_gm = $msc['gm'];
                $id_pow = $msc['pow'];
                $id_woj = $msc['woj'];
                $miejscowosc = $msc['miejscowosc'];

                if (isset($_GET['publicznosc'])) {
                    $publicznosc = $_GET['publicznosc'];
                    $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj&amp;pow=$id_pow&amp;gm=$id_gm&amp;msc=$miejscowosc&amp;publicznosc=$publicznosc\" rel=\"nofollow\">" . $element_menu . "</a></li>";
                } else {
                    $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj&amp;pow=$id_pow&amp;gm=$id_gm&amp;msc=$miejscowosc\" rel=\"nofollow\">" . $element_menu . "</a></li>";
                }
            }
        } elseif ($param == 'wojewodztwa') {
            while ($msc = mysql_fetch_array($temp)) {

                $element_menu = $menu->maleLitery($msc[0]);
                $id_woj = $msc['woj'];

                if (isset($_GET['publicznosc'])) {
                    $publicznosc = $_GET['publicznosc'];
                    $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj&amp;publicznosc=$publicznosc\" rel=\"nofollow\">" . $element_menu . "</a></li>";
                } else {
                    $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj\" rel=\"nofollow\">" . $element_menu . "</a></li>";
                }
            }
        } elseif ($param == 'powiaty') {
            $nr_elementu = 0;
            while ($msc = mysql_fetch_array($temp)) {

                $element_menu = $menu->maleLitery($msc[0]);
                $id_pow = $msc['pow'];
                $id_woj = $msc['woj'];

                if (isset($_GET['publicznosc'])) {
                    $publicznosc = $_GET['publicznosc'];
                    $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj&amp;pow=$id_pow&amp;publicznosc=$publicznosc\" rel=\"nofollow\">" . $element_menu . "</a></li>";
                } else {
                    $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj&amp;pow=$id_pow\" rel=\"nofollow\">" . $element_menu . "</a></li>";
                }
            }
        } elseif ($param == 'gminy') {
            $nr_elementu = 0;
            while ($msc = mysql_fetch_array($temp)) {

                $element_menu = $menu->maleLitery($msc[0]);
                $id_gm = $msc['gm'];
                $id_pow = $msc['pow'];
                $id_woj = $msc['woj'];


                if (isset($_GET['publicznosc'])) {
                    $publicznosc = $_GET['publicznosc'];
                    $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj&amp;pow=$id_pow&amp;gm=$id_gm&amp;publicznosc=$publicznosc\" rel=\"nofollow\">" . $element_menu . "</a></li>";
                } else {
                    $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj&amp;pow=$id_pow&amp;gm=$id_gm\" rel=\"nofollow\">" . $element_menu . "</a></li>";
                }
            }
        }

        foreach ($prawe_menu as $el_prawe_menu) {
            echo $el_prawe_menu;
        }
    }

    public function etykietkalMenu() {

        if (isset($_GET['woj']) && isset($_GET['pow'])) {
            echo "Gminy";
        } elseif (isset($_GET['woj'])) {
            echo "Powiaty";
        } elseif (!isset($_GET['woj'])) {
            echo "Województwa";
        }
    }

    public function etykietkaCentralna() {

        if (isset($_GET['publicznosc'])) {
            $publicznosc = $_GET['publicznosc'];
            if ($publicznosc == 2) {
                echo "Przedszkola publiczne, niepubliczne i prywatne";
            }
            if ($publicznosc == 1) {
                echo "Przedszkola publiczne";
            }
            if ($publicznosc == 3) {
                echo "Przedszkola prywatne i niepubliczne";
            }
        } elseif (isset($_GET['szukaj'])) {
            echo "Wyniki wszukiwania";
        } else {
            echo "Lista placówek";
        }
    }

    public function wybraneMiejscowosci() {
        if (isset($_GET['woj']) && isset($_GET['pow'])) {
            $query = 'SELECT `miejscowosc`, `woj`, `pow`, `gm`, count(*) as `ilosc` FROM `przedszkola` WHERE `woj` = ' . $_GET['woj'] . ' AND `pow` =' . $_GET['pow'] . ' GROUP BY `miejscowosc` ORDER BY `ilosc` DESC LIMIT 0, 5';
            $this->leweMenu($query, 'miejscowosci');
        } elseif (isset($_GET['woj'])) {
            $query = 'SELECT `miejscowosc`, `woj`, `pow`, `gm`,   count(*) as `ilosc`  FROM `przedszkola` WHERE `woj` = ' . $_GET['woj'] . ' GROUP BY `miejscowosc` ORDER BY `ilosc` DESC LIMIT 0, 5';
            $this->leweMenu($query, 'miejscowosci');
        }
    }
    public function ukryteMiejscowosci() {
        if (isset($_GET['woj']) && isset($_GET['pow'])) {
            $query = 'SELECT `miejscowosc`, `woj`, `pow`, `gm`, count(*) as `ilosc` FROM `przedszkola` WHERE `woj` = ' . $_GET['woj'] . ' AND `pow` =' . $_GET['pow'] . ' GROUP BY `miejscowosc` ORDER BY `ilosc` DESC LIMIT 0, 5';
            $this->ukryteMenu($query, 'miejscowosci');
        } elseif (isset($_GET['woj'])) {
            $query = 'SELECT `miejscowosc`, `woj`, `pow`, `gm`,   count(*) as `ilosc`  FROM `przedszkola` WHERE `woj` = ' . $_GET['woj'] . ' GROUP BY `miejscowosc` ORDER BY `ilosc` DESC LIMIT 0, 5';
            $this->ukryteMenu($query, 'miejscowosci');
        }
    }
    public function pokazWybraneMiejscowosci() {

        if (isset($_GET['woj']) || isset($_GET['pow'])) {
            echo <<< KONIEC
        <div class="widget clearfix margin_bottom_45">
        <h2>Wybrane miasta</h2>

        <div class="widget_inside">

        <ul class="disc">

KONIEC;
            $this->wybraneMiejscowosci();

            echo <<< KONIEC
        </ul>
        </div>
        </div>
KONIEC;
        }
        
    }
    public function pokazUkryteMiejscowosci() {

        if (isset($_GET['woj']) || isset($_GET['pow'])) {
            echo <<< KONIEC
        <div class="menuMiejcowosci">
        <h1>Przedszkola</h1>



        <ul class="disc">

KONIEC;
            $this->ukryteMiejscowosci();

            echo <<< KONIEC
        </ul>

        </div>
KONIEC;
        }
        
    }
    public function okruszkoweMenu($param = null) {

        $menu = new obrobkaWpisow();

        $okruszkowe_menu = "<a href=\"index.php\">Strona główna</a>";

        if (isset($_GET['woj'])) {
            $query = 'SELECT DISTINCT `Wojewodztwo` FROM `podzial_terytorialny` WHERE `woj` = ' . $_GET['woj'];
            $temp = mysql_query($query);
            $msc = mysql_fetch_array($temp);
            $nazwa_dzialu = $menu->maleLitery($msc['Wojewodztwo']);

            if (isset($_GET['publicznosc'])) {
                $publicznosc = $_GET['publicznosc'];
                $adres = "index.php?woj=" . $_GET['woj'] . "&amp;publicznosc=$publicznosc";
            } else {
                $adres = "index.php?woj=" . $_GET['woj'];
            }

            $lokalizacja[0] = $nazwa_dzialu;
            $okruszkowe_menu .= " / <a href=\"$adres\">$nazwa_dzialu</a>";
        } if (isset($_GET['pow']) && isset($_GET['woj'])) {
            $query = 'SELECT DISTINCT `Powiat`, `Wojewodztwo` FROM `podzial_terytorialny` WHERE `woj` = ' . $_GET['woj'] . ' AND `pow` =' . $_GET['pow'];
            $temp = mysql_query($query);
            $msc = mysql_fetch_array($temp);
            $nazwa_dzialu = $menu->maleLitery($msc['Powiat']);
            if (isset($_GET['publicznosc'])) {
                $publicznosc = $_GET['publicznosc'];
                $adres = "index.php?woj=" . $_GET['woj'] . "&amp;pow=" . $_GET['pow'] . "&amp;publicznosc=$publicznosc";
            } else {
                $adres = "index.php?woj=" . $_GET['woj'] . "&amp;pow=" . $_GET['pow'];
            }
            $lokalizacja[1] = $nazwa_dzialu;
            $okruszkowe_menu .= " / <a href=\"$adres\">$nazwa_dzialu</a>";
        } if (isset($_GET['gm']) && isset($_GET['pow']) && isset($_GET['woj'])) {
            $query = 'SELECT DISTINCT `Gmina`, `Powiat`, `Wojewodztwo` FROM `podzial_terytorialny` WHERE `woj` = ' . $_GET['woj'] . ' AND `pow` =' . $_GET['pow'] . ' AND `gm` =' . $_GET['gm'];
            $temp = mysql_query($query);
            $msc = mysql_fetch_array($temp);
            $nazwa_dzialu = $menu->maleLitery($msc['Gmina']);

            if (isset($_GET['publicznosc'])) {
                $publicznosc = $_GET['publicznosc'];
                $adres = "index.php?woj=" . $_GET['woj'] . "&amp;pow=" . $_GET['pow'] . "&amp;gm=" . $_GET['gm'] . "&amp;publicznosc=$publicznosc";
            } else {
                $adres = "index.php?woj=" . $_GET['woj'] . "&amp;pow=" . $_GET['pow'] . "&amp;gm=" . $_GET['gm'];
            }


            $lokalizacja[2] = $nazwa_dzialu;
            $okruszkowe_menu .= " / <a href=\"$adres\">Gmina $nazwa_dzialu</a>";
        } if (isset($_GET['msc']) && !isset($_GET['id_podmiotu'])) {
            $query = 'SELECT DISTINCT `woj`, `pow`, `gm`, `miejscowosc`, `nazwa` FROM `przedszkola` WHERE `miejscowosc` = "' . $_GET['msc'] . '"';
            $temp = mysql_query($query);
            $msc = mysql_fetch_array($temp);
            $_GET['woj'] = $msc['woj'];
            $_GET['pow'] = $msc['pow'];
            $_GET['gm'] = $msc['gm'];
            $miejscowosc = $msc['miejscowosc'];
            $query = 'SELECT DISTINCT `Gmina`, `Powiat`, `Wojewodztwo` FROM `podzial_terytorialny` WHERE `woj` = ' . $_GET['woj'] . ' AND `pow` =' . $_GET['pow'] . ' AND `gm` =' . $_GET['gm'];
            $temp = mysql_query($query);
            $msc = mysql_fetch_array($temp);
            $nazwa_dzialu = $menu->maleLitery($miejscowosc);

            if (isset($_GET['publicznosc'])) {
                $publicznosc = $_GET['publicznosc'];
                $adres = "index.php?woj=" . $_GET['woj'] . "&amp;pow=" . $_GET['pow'] . "&amp;gm=" . $_GET['gm'] . "&amp;publicznosc=$publicznosc";
            } else {
                $adres = "index.php?woj=" . $_GET['woj'] . "&amp;pow=" . $_GET['pow'] . "&amp;gm=" . $_GET['gm'];
            }

            $lokalizacja[3] = $miejscowosc;
            $okruszkowe_menu .= " / <a href=\"$adres\">$nazwa_dzialu</a>";
        } if (isset($_GET['id_podmiotu'])) {
            $query = 'SELECT `id`, `woj`, `pow`, `gm`, `miejscowosc`, `nazwa` FROM `przedszkola` WHERE `id` = ' . $_GET['id_podmiotu'];
            $temp = mysql_query($query);
            $msc = mysql_fetch_array($temp);
            $_GET['woj'] = $msc['woj'];
            $_GET['pow'] = $msc['pow'];
            $_GET['gm'] = $msc['gm'];
            $miejscowosc = $msc['miejscowosc'];
            $nazwa = $msc['nazwa'];
            $query = 'SELECT  `Gmina`, `Powiat`, `Wojewodztwo`, `id`, `miejscowosc`  FROM `podzial_terytorialny`, `przedszkola` WHERE `podzial_terytorialny`.`woj` = ' . $_GET['woj'] . ' AND `podzial_terytorialny`.`pow` =' . $_GET['pow'] . ' AND `podzial_terytorialny`.`gm` =' . $_GET['gm'] . ' AND `przedszkola`.`id` =' . $_GET['id_podmiotu'];
            $temp = mysql_query($query);
            $msc = mysql_fetch_array($temp);

            $nazwa_dzialu = $menu->maleLitery($nazwa);
            if (isset($_GET['publicznosc'])) {
                $publicznosc = $_GET['publicznosc'];
                $adres = "index.php?woj=" . $_GET['woj'] . "&amp;pow=" . $_GET['pow'] . "&amp;gm=" . $_GET['gm'] . "&amp;msc=" . $miejscowosc . "&amp;id_podmiotu=" . $msc['id'] . "&amp;publicznosc=$publicznosc";
            } else {
                $adres = "index.php?woj=" . $_GET['woj'] . "&amp;pow=" . $_GET['pow'] . "&amp;gm=" . $_GET['gm'] . "&amp;msc=" . $miejscowosc . "&amp;id_podmiotu=" . $msc['id'];
            }


            $lokalizacja[4] = $nazwa;
            $lokalizacja[3] = $miejscowosc;
            $okruszkowe_menu .= " / <a href=\"$adres\">$miejscowosc</a> / <a href=\"$adres\">$nazwa_dzialu</a>";
        } elseif (isset($_GET['szukaj'])) {
            $zapytanie = $_GET['szukaj'];
            if (isset($_GET['publicznosc'])) {
                $publicznosc = $_GET['publicznosc'];
                $adres = "index.php?szukaj=" . $zapytanie . "&amp;publicznosc=$publicznosc";
            } else {
                $adres = "index.php?szukaj=" . $zapytanie;
            }

            $okruszkowe_menu .= " / <a href=\"#\">Wyszukiwanie</a> / <a href=\"$adres\">$zapytanie</a>";
            $lokalizacja[5] = $zapytanie;
        
        }
        if ($param == 1) {
            return $okruszkowe_menu;
        } elseif ($param == 2) {
            return $adres;
        } elseif ($param == 3)
            if (isset($lokalizacja))
                return $lokalizacja;
    }

}

?>