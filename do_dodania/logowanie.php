<?php

require_once 'funkcje/uzytkownicy.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['l_email']) && isset($_POST['l_haslo'])) {
        $email = $_POST['l_email'];
        $haslo = $_POST['l_haslo'];
        $login = $uzytkownik->ZalogujUzytkownika($email, $haslo);
        if ($login) {
// Login Success
            header("location:index.php");
        } else {
// Login Failed
            echo 'Username / password wrong';
        }
        
    }

}
$uzytkownik = new Uzytkownik();
if ($uzytkownik->SesjaUzytkonika()) {
    
    $imie = $uzytkownik->ImieUzytkownika($id_uzytkownika);
    echo '<a href="?action=wyloguj">LOGOUT</a>';
} else {
    $action = $_SERVER['PHP_SELF'];
    echo "<form method=\"POST\" action=\"$action?action=login\" name=\"logowanie\">";
    echo <<< KONIEC
    Email or Username
    <input type="text" name="l_email"/>
    Password
    <input type="password" name="l_haslo"/>
    <input type="submit" value="Login"/>
    </form >
KONIEC;
}
?>

