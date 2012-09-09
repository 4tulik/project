<?php
error_reporting(E_ALL); ini_set('display_errors','off');
$poczatek_pozytywne = Array(
    "Przedszkole",
    "Placówka",
    "To przedszkole",
    "Ta placówka",
    "Te przedszkole",
    "Moja opinia na temat tego przedszkola jest nastepujaca:",
    "Wybor tego przedszkola byl doskonle trafiony",
    "Ciesze sie z poslania mojego dziecka wlasnie to tego przedszkola, bo",
    "Wspaniale przedszkole, naprawde godne polecenia",
    "Nigdy w zyciu nie widziałam, zeby przedszkole bylo ",
    "Tak naprawde to przedszkole jest",
    "Każde inne przedszkole, do ktorego posylałam moją pocieche nie bylo",
    "Wybor przedszkola okazal sie strzlem w dziesiatke",
    "Chce przestrzec rodziców przed posylaniem dzieci do tego przedszkola",
    "Jesli chodzi o mnie i moje dziecko to jestesmy zadwoleni"
);

$poczatek_neutralne = Array(
    "Nie chce być subiektywny, ale przedszkole",
    "Przedszkole",
    "Placówka",
    "To przedszkole",
    "Ta placówka",
    "Te przedszkole",
    "Moja opinia na temat tego przedszkola jest nastepujaca:",
    "Nie chce być subiektywny, ale przedszkole",
    "Wszystko co moge powiedziec to to, ze placowka",
    "Panuje powszechna opinia ze to przedszkole",
    "Moze nie jest to najlepsze przedszkole w okolicy, ale",
);

$poczatek_negatywne = Array(
    "Nie chce być subiektywny, ale przedszkole",
    "Przedszkole",
    "Placówka",
    "To przedszkole",
    "Ta placówka",
    "Te przedszkole",
    "Moja opinia na temat tego przedszkola jest nastepujaca:",
    "Nie chce być subiektywny, ale przedszkole",
    "Nie watro zawracac sobie glowy, przedszkole",
    "Krąży powszechna dobra opinia o tym przedszkolu, ale naprawde jest",
    "Pewnie moja opinia tutaj niczego nie zmieni , ale chce przestrzec innych,  bo",
    "Kazdy inny wybor bylby lepszy, przedszkole",
    "Chyba nie moglam trafic gorzej z wyborem przedszkola dla mojego malucha, bo",
    "Nigdy nie wybralabym tego przedszkola, poniewaz",
    "Nie posylajcie dzieci do tego przedszkola",
    "To byla udreka dla mnie i mojego dziecka",
);
$srodek_pozytywne = Array(
    "swietnie wyposazone",
    "posiada bardzo interesujacy plac zabaw",
    "panie przedszkolanki sa naprawde mile",
    "jedzenie jest swietne",
    "jest duzo zabawek",
    "panuje rodzinna atmosfera",
    "nauczycielki sa naprawde zyczliwem",
    "jest duzo zajec dodatkowych",
    "jest dodatkowy jezyk angielski",
    "sa organizowane wycieczki",
    "sa bardzo ciekawe zajecia z rytmiki",
    "organizowane sa zajecia dodatkowe",
    "stolowka jest naprawde swietna",
    "moja pociecha jest zadowolona",
    "moje dziecko jest szczesliwe",
    "moja malutka wraca do domu radosna",
    "jest wiele dodatkowych zajec dla maluchow",
    "sa nowe zabawki",
    "duzy plac zabaw",
    "dzieci spedzaja duzo czasu na swiezym powietrzu",
);
$srodek_negatywne = Array(
    "slabo wyposazone",
    "jedzenie jest bardzo kiepskie",
    "jest bardzo niewiele zabawek",
    "moje dziecko wraca do domu i nie chce wracac do przedszkola",
    "panie przedszkolanki sa nieuprzejme",
    "nauczycielki sa aroganckie",
    "pania dyrektor nic nie obchodzi",
    "plac zabaw jest bardzo maly",
    "moj maluch boi sie pani wychowawczyni",
    "dzieci praktycznie nie wychodza na dwor",
    "nie ma dodatkowych zajec, ktore bylyby interesujace",
    "wszystkie dodatkowe zajecia sa odplatne i kosztuja ktrocie",
    "zajecia z rytmiki prowadzone sa przez zupelnie niekompetentna osobe",
    "dziecko wraca do domu z placzem",
    "brak wyjsc",
    "brak wycieczek",
    "bardzo slabe wyzywienie, dziecko nie chce jesc",
    "wychowawczyni zmusza mojego malucha do jedzenie",
    "przedszkolanka na sile zmusza dziecko do lezakowania",
);

for ($i = 0; $i < 100; $i++) {
    $opinia[$i] = $poczatek_pozytywne[rand(1, sizeof($poczatek_pozytywne))] . " " . $srodek_pozytywne[rand(0, sizeof($srodek_pozytywne))] . ", " . $srodek_pozytywne[rand(0, sizeof($srodek_pozytywne))] . ".<br/><br/>";
    rand(0, sizeof($poczatek_neutralne));
    rand(0, sizeof($poczatek_negatywne));
    rand(0, sizeof($srodek_negatywne));
    rand(0, sizeof($srodek_pozytywne));
}
for ($i = 100; $i < 200; $i++) {
    $opinia[$i] = $poczatek_neutralne[rand(1, sizeof($poczatek_pozytywne))] . " " . $srodek_pozytywne[rand(0, sizeof($srodek_pozytywne))] . ", " . $srodek_negatywne[rand(0, sizeof($srodek_pozytywne))] . ".<br/><br/>";
    rand(0, sizeof($poczatek_neutralne));
    rand(0, sizeof($poczatek_negatywne));
    rand(0, sizeof($srodek_negatywne));
    rand(0, sizeof($srodek_pozytywne));
}
for ($i = 200; $i < 300; $i++) {
    $opinia[$i] = $poczatek_negatywne[rand(1, sizeof($poczatek_pozytywne))] . " " . $srodek_negatywne[rand(0, sizeof($srodek_pozytywne))] . ", " . $srodek_negatywne[rand(0, sizeof($srodek_pozytywne))] . ".<br/><br/>";
    rand(0, sizeof($poczatek_neutralne));
    rand(0, sizeof($poczatek_negatywne));
    rand(0, sizeof($srodek_negatywne));
    rand(0, sizeof($srodek_pozytywne));
}
print_r($opinia);
?>
