<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MenuWlasciwe
 *
 * @author lukasz
 */
//$query='SELECT DISTINCT `Województwo` FROM `podzial_terytorialny` WHERE 1';


class menuWlasciwe {

    public function okruszkoweMenu($param) {

        $menu = new obrobkaWpisow();

        $okruszkowe_menu = "<a href=\"index.php\">Strona główna</a>";

        if (isset($_GET['woj'])) {
            $query = 'SELECT DISTINCT `Województwo` FROM `podzial_terytorialny` WHERE `woj` = ' . $_GET['woj'];
            $temp = mysql_query($query);
            $msc = mysql_fetch_array($temp);
            $nazwa_dzialu = $menu->maleLitery($msc['Województwo']);
            $adres = "index.php?woj=" . $_GET['woj'];
            $okruszkowe_menu .= " / <a href=\"$adres\">$nazwa_dzialu</a>";
        }

        if (isset($_GET['pow']) && isset($_GET['woj'])) {
            $query = 'SELECT DISTINCT `Powiat`, `Województwo` FROM `podzial_terytorialny` WHERE `woj` = ' . $_GET['woj'] . ' AND `pow` =' . $_GET['pow'];
            $temp = mysql_query($query);
            $msc = mysql_fetch_array($temp);
            $nazwa_dzialu = $menu->maleLitery($msc['Powiat']);
            $adres = "index.php?woj=" . $_GET['woj'] . "&amp;pow=" . $_GET['pow'];
            $okruszkowe_menu .= " / <a href=\"$adres\">$nazwa_dzialu</a>";
        }
        if (isset($_GET['gm']) && isset($_GET['pow']) && isset($_GET['woj'])) {
            $query = 'SELECT DISTINCT `Gmina`, `Powiat`, `Województwo` FROM `podzial_terytorialny` WHERE `woj` = ' . $_GET['woj'] . ' AND `pow` =' . $_GET['pow'] . ' AND `gm` =' . $_GET['gm'];
            $temp = mysql_query($query);
            $msc = mysql_fetch_array($temp);
            $nazwa_dzialu = $menu->maleLitery($msc['Gmina']);
            $adres = "index.php?woj=" . $_GET['woj'] . "&amp;pow=" . $_GET['pow'] . "&amp;gm=" . $_GET['gm'];
            $okruszkowe_menu .= " / <a href=\"$adres\">$nazwa_dzialu</a>";
        }
        if ($param == 1) {
            return $okruszkowe_menu;
        } elseif ($param == 2) {
            return $adres;
        }
    }

    private function leweMenu($query, $param) {

        $menu = new obrobkaWpisow();
        $temp = mysql_query($query);
        $nr_elementu = 0;
        if ($param == 'miejscowosci') {
            while ($msc = mysql_fetch_array($temp)) {
                $element_menu = $menu->maleLitery($msc[0]);
                $id_gm = $msc['gm'];
                $id_pow = $msc['pow'];
                $id_woj = $msc['woj'];
                $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj&amp;pow=$id_pow&amp;gm=$id_gm&amp;msc='$element_menu'\">" . $element_menu . "</a></li>";
            }
        } elseif ($param == 'wojewodztwa') {
            while ($msc = mysql_fetch_array($temp)) {

                $element_menu = $menu->maleLitery($msc[0]);
                $id_woj = $msc['woj'];
                $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj\">" . $element_menu . "</a></li>";
            }
        } elseif ($param == 'powiaty') {
            $nr_elementu = 0;
            while ($msc = mysql_fetch_array($temp)) {

                $element_menu = $menu->maleLitery($msc[0]);
                $id_pow = $msc['pow'];
                $id_woj = $msc['woj'];
                $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj&amp;pow=$id_pow\">" . $element_menu . "</a></li>";
            }
        } elseif ($param == 'gminy') {
            $nr_elementu = 0;
            while ($msc = mysql_fetch_array($temp)) {

                $element_menu = $menu->maleLitery($msc[0]);
                $id_gm = $msc['gm'];
                $id_pow = $msc['pow'];
                $id_woj = $msc['woj'];
                $prawe_menu[$nr_elementu++] = "<li><a href=\"index.php?woj=$id_woj&amp;pow=$id_pow&amp;gm=$id_gm\">" . $element_menu . "</a></li>";
            }
        }

        foreach ($prawe_menu as $el_prawe_menu) {
            echo $el_prawe_menu;
        }
    }

    public function podzialGeograficzny() {

        if (isset($_GET['woj']) && isset($_GET['pow'])) {
            $this->leweMenu('SELECT DISTINCT `Gmina`, `gm`, `Powiat`, `pow`,`Województwo`, `woj` FROM `podzial_terytorialny` WHERE `woj` = ' . $_GET['woj'] . ' AND `pow` =' . $_GET['pow'], 'gminy');
        } elseif (isset($_GET['woj'])) {
            $this->leweMenu('SELECT DISTINCT `Powiat`, `pow`,`Województwo`, `woj` FROM `podzial_terytorialny` WHERE `woj` = ' . $_GET['woj'], 'powiaty');
        } elseif (!isset($_GET['woj'])) {

            $this->leweMenu('SELECT DISTINCT `Województwo`, `woj` FROM `podzial_terytorialny` WHERE 1', 'wojewodztwa');
        }
    }

    public function wybraneMiejscowosci() {

        if (isset($_GET['woj']) && isset($_GET['pow'])) {
            $this->leweMenu('SELECT `miejscowosc`, `woj`, `pow`, `gm`, count(*) as `ilosc` FROM `przedszkola` WHERE `woj` = ' . $_GET['woj'] . ' AND `pow` =' . $_GET['pow'] . ' GROUP BY `miejscowosc` ORDER BY `ilosc` DESC LIMIT 0, 5', 'miejscowosci');
        } elseif (isset($_GET['woj'])) {
            $this->leweMenu('SELECT `miejscowosc`, `woj`, `pow`, `gm`,   count(*) as `ilosc`  FROM `przedszkola` WHERE `woj` = ' . $_GET['woj'] . ' GROUP BY `miejscowosc` ORDER BY `ilosc` DESC LIMIT 0, 5', 'miejscowosci');
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

}
?>

