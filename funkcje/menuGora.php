<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of menuGora
 *
 * @author lukasz
 */
class menuGora {
    //put your code here
}

if (isset($_GET['action'])) {
    $menu = $_GET['action'];
    $uzytkownik = new Uzytkownik();

    switch ($menu) {
        case 'rejestracja':
            include 'funkcje/rejestracja.php';
            break;
        case 'wyloguj':

            $uzytkownik->WylogujUzytkownika();
            break;
        case 'potwierdz':
            include 'template/center/formularzPotwierdzenia.php';
            break;
        case 'dodaj':
            include './dodajPodmiot.php';
            break;
    }
}
?>
