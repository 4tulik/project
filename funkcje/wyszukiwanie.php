<?php
interface szukaj {

public function szukajMiejscowosci($miejscowosc);

}

class wyszukiwanie{
    public function szukajMiejscowosci($miejscowosc)
    {
       
        $query = ' `przedszkola` WHERE `miejscowosc` = ' . "'$miejscowosc'";
        pokazPodmiot::malyPodmiot($query);
    }
}



?>
