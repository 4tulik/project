<?php

interface Unsort {

    public function SelfAdres();
}

class a_unsort implements Unsort {

    public function SelfAdres() {
        $skrypt = $_SERVER['SCRIPT_NAME'];

        $parametry = $_SERVER['QUERY_STRING'];

        $obecnyadres = $skrypt . '?' . $parametry;

        return $obecnyadres;
    }

}

?>
