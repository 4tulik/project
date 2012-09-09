
<?php
error_reporting(0);
//ini_set('display_errors', 'off');
session_start(); 

require_once 'data/dataBaseConnection.php';
require_once 'funkcje/menuWlasciwe.php';
require_once 'funkcje/pokazPodmiot.php';
require_once 'funkcje/obrobkaWpisow.php';
require_once 'funkcje/uzytkownicy.php';
require_once 'funkcje/dodajOpinie.php';
require_once 'funkcje/metaTagi.php';
require_once 'funkcje/opinieUzytkownikow.php';
require_once 'funkcje/wyszukiwanie.php';
require_once 'funkcje/a_unsort.php';
include ('./template/muse/index.php');
//include './template/simple/main.html';



//                        require_once 'data/dataBaseConnection.php';
//                        require_once 'funkcje/obrobkaWpisow.php';
//                                  require_once 'funkcje/menuWlasciwe.php';
//                        $query='SELECT * FROM `przedszkola` WHERE `miejscowosc`="Warszawa"';
//                        $temp = mysql_query($query);
//                        $i=0;
    //                        while($podmiot = mysql_fetch_row($temp) && $i<20){
//                        $i++;
//                        echo $podmiott->ObrobkaWstepna($podmiot[8])."<br>";
//                        }   
//                                                require_once 'data/dataBaseConnection.php';
//\KONIEC;

?>

