<?php

// Checking for user logged in or not



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['r_email'];
    $haslo = $_POST['r_haslo'];
    $imie = $_POST['r_imie'];

    $rejestracja = $uzytkownik->RejestrujUzytkownika($email, $haslo, $imie);

    if ($rejestracja == TRUE) {

        echo 'Registration successful <a href="login.php">Click here</a> to login';
    } else {

        echo 'Registration failed. Email or Username already exits please try again';
    }
}
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']."?action=rejestracja"; ?>" name='rejestracja' >
    Imie
    <input type="text" name="r_imie"/>
    Email
    <input type="text" name="r_email"/>
    Password
    <input type="haslo" name="r_haslo"/>
    <input type="submit" value="Rejestruj"/>
</form>

