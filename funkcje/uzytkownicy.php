
<?php

class Uzytkownik {


    public function RejestrujUzytkownika($email, $haslo, $imie) {
        $haslo = md5($haslo);

        $query = "SELECT id_uzytkownika FROM uzytkownicy WHERE email = '$email'";
        $result = mysql_query($query);
        $no_rows = mysql_num_rows($result);
        if ($no_rows == NULL) {
            $query = "INSERT INTO uzytkownicy(email,haslo,imie) values('$email', '$haslo', '$imie')";
            $result = mysql_query($query);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function ZalogujUzytkownika($email, $haslo) {
        $haslo = md5($haslo);
        $query = "SELECT id_uzytkownika FROM uzytkownicy WHERE email = '$email' AND haslo = '$haslo'";
        $result = mysql_query($query);
        $user_data = mysql_fetch_array($result);
        $no_rows = mysql_num_rows($result);
        if ($no_rows == 1) {
            $_SESSION['login'] = true;
            $_SESSION['id_uzytkownika'] = $user_data['id_uzytkownika'];
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function SesjaUzytkonika() {
        if (isset($_SESSION['login']))
            return $_SESSION['login'];
        else
            return FALSE;
    }
    public function ImieUzytkownika($id_uzytkownika){
        $query = "SELECT imie FROM uzytkownicy WHERE id_uzytkownika = '$id_uzytkownika'";
        $result = mysql_query($query);
        $user_data = mysql_fetch_array($result);
        echo $user_data['imie'];
    }
    public function WylogujUzytkownika(){
        $_SESSION['login'] = FALSE;
        session_destroy();
    }
}

?>