<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ObrobkaWpisow
 *
 * @author lukasz
 */
interface wpis {

    public function maleLitery($string);

    public function poprawZnaki($string);

    public function toLower($string);

    public function tnijNazwy($string);
}

class obrobkaWpisow implements Wpis {

    public function poprawZnaki($string) {
        $convert_to = array(
            " nr", " publiczne", " niepubliczne", " samorządowe", " gminne", " w ",
            " integracyjne", " miejskie", " im.", " im. ", " komunalne", " prywatne", " językowe",
            " przedszkole", " i ", " ",
        );
        $convert_from = array(
            " Nr", " Publiczne", " Niepubliczne", " Samorządowe", " Gminne", " W ",
            " Integracyjne", " Miejskie", " Im.", " Im ", " Komunalne", " Prywatne", " Językowe",
            " Przedszkole", " i ", "Wojewodztwo. "
        );
        return $poprawione->string = str_replace($convert_from, $convert_to, $string);
    }

    public function maleLitery($string) {
        $convert_to = array(
            "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u",
            "v", "w", "x", "y", "z", "ą", "ż", "ś", "ź", "ę", "ć", "ń", "ó", "ł", "", "", ""
        );
        $convert_from = array(
            "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U",
            "V", "W", "X", "Y", "Z", "Ą", "Ż", "Ś", "Ź", "Ę", "Ć", "Ń", "Ó", "Ł", "\"", "'", ",,"
        );

        return $male->string = obrobkaWpisow::poprawZnaki(mb_convert_case(str_replace($convert_from, $convert_to, $string), MB_CASE_TITLE, "UTF-8"));
    }

    public function toLower($string) {
        $convert_to = array(
            "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u",
            "v", "w", "x", "y", "z", "ą", "ż", "ś", "ź", "ę", "ć", "ń", "ó", "ł", "", "", ""
        );
        $convert_from = array(
            "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U",
            "V", "W", "X", "Y", "Z", "Ą", "Ż", "Ś", "Ź", "Ę", "Ć", "Ń", "Ó", "Ł", "\"", "'", ",,"
        );
        return $tolower->string = str_replace($convert_from, $convert_to, $string);
    }

    public function tnijNazwy($string) {
        $convert_to = array(
            "", " ",
        );
        $convert_from = array(
            "WOJ. ", "Powiat ",
        );
        return obrobkaWpisow::toLower($pociete->string = str_replace($convert_from, $convert_to, $string));
    }

}

?> 
