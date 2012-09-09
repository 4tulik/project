<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    </head>
    <body>
        <?php
        include '../data/dataBaseConnection.php';
        error_reporting(E_ALL);
        ini_set('display_errors', 'off');
        $poczatek_pozytywne = Array(
            "Przedszkole wywaje mi sie atrakcyjne",
            "Placówka jest naprawde godna polecenia",
            "To przedszkole jest wspaniake",
            "Ta placówka jest super",
            "Te przedszkole",
            "Moja opinia na temat tego przedszkola jest nastepujaca:",
            "Wybor tego przedszkola byl doskonle trafiony",
            "Ciesze sie z poslania mojego dziecka wlasnie to tego przedszkola, bo",
            "Wspaniale przedszkole, naprawde godne polecenia",
            "Nigdy w zyciu nie widziałam, zeby przedszkole bylo ",
            "Tak naprawde to przedszkole jest",
            "Każde inne przedszkole, do ktorego posylałam moją pocieche nie bylo",
            "Wybor przedszkola okazal sie strzlem w dziesiatke",
            "Jesli chodzi o mnie i moje dziecko to jestesmy zadwoleni",
            "Jestem bardzo zadowolona z wyboru akurat tego przedszkola",
            "Cudowne przedszkole, nie wiem czy mozna wyobrazic sobie lepsze",
            "Przedszkole jest fantastyczne",
            "Bardzo trafiony wybor",
            "Jesli chodzi o mnie i moje dziecko wybor przedszkola byl bardzo trafny "
        );

        $poczatek_neutralne = Array(
            "Nie chce być subiektywny, ale przedszkole",
            "Przedszkole jest takie sobie",
            "Placówka jest srednia",
            "To przedszkole moze byc",
            "Ta placówka nie jest idealne ale",
            "Te przedszkole wydaje sie wporzadku",
            "Moja opinia na temat tego przedszkola jest nastepujaca:",
            "Nie chce być subiektywny, ale przedszkole",
            "Wszystko co moge powiedziec to to, ze placowka",
            "Panuje powszechna opinia ze to przedszkole",
            "Moze nie jest to najlepsze przedszkole w okolicy, ale",
            "Przedszkole takie sobie",
            "Nic nadzwyczajnego",
            "Niestety rzeczywistosc rozmija sie nieco z realiami",
            "Nie wyobrazłam sobie za duzo, i taka jest rzeczywistosc",
            "Nie jest najgorzej, ale",
            "Przedszkole mogloby byc lepsze",
            "Zastanawiam sie nad zmiana przedszkola",
        );

        $poczatek_negatywne = Array(
            "Nie chce być subiektywny, ale przedszkole",
            "Przedszkole jest beznadziejne",
            "Placówka jest bardzo kiepska",
            "To przedszkole nie jest godne polecenia",
            "Ta placówka nie jest miejcem gdzie poslalabym swoje dziecko",
            "Te przedszkole jest do kitu",
            "Moja opinia na temat tego przedszkola jest nastepujaca:",
            "Nie chce być subiektywny, ale przedszkole",
            "Nie watro zawracac sobie glowy, przedszkole",
            "Krąży powszechna dobra opinia o tym przedszkolu, ale naprawde jest",
            "Pewnie moja opinia tutaj niczego nie zmieni , ale chce przestrzec
            innych,  bo",
            "Kazdy inny wybor bylby lepszy, przedszkole",
            "Chyba nie moglam trafic gorzej z wyborem przedszkola dla mojego
            malucha, bo",
            "Nigdy nie wybralabym tego przedszkola, poniewaz",
            "Nie posylajcie dzieci do tego przedszkola",
            "To byla udreka dla mnie i mojego dziecka",
            "Nie poslalabym nigdy wiecej dziecka do tego przedszkola",
            "Bardzo atrakcyjnie sie reklamuja, ale nie ma to nic wspolnego z
            rzeczywiscoscia",
            "To byl wielki blad posylac mojego malucha do tego przedszla",
            "Nie wyobrazam sobie, zeby przedszkole moglo tak funkcjonowac",
            "Wielkie wyobrazenie mialam zanim poslalam dziecko do tego
             przedszkola, ale niestety",
            "Chce przestrzec rodziców przed posylaniem dzieci do tego przedszkola",
        );
        $srodek_pozytywne = Array(
            "swietnie wyposazone",
            "posiada bardzo interesujacy plac zabaw",
            "panie przedszkolanki sa naprawde mile",
            "jedzenie jest swietne",
            "jest duzo zabawek",
            "panuje rodzinna atmosfera",
            "nauczycielki sa naprawde zyczliwe",
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
            "bardzo dobra nauka jezyka obcego",
            "ciekawe imprezy okolicznosciowe",
            "moje dziecko wiele nauczylo sie chodzac do tego przedszkola",
            "dziecko z przyjemnoscia uczeszcza do przedszkola",
            "wiele dodatkowych zajec urozmaicajacych czas w przedszkolu",
            "bardzo ciekawe zajecia z rytmiki",
            "dzieci nie sa zmuszane do jedzenia",
            "sporo wycieczek i duzo czasu dzieci spedzaja na placu zabaw",
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
            "wada jes to, zedziecko wraca do domu glodne",
            "dodatkowe posilki sa bardzo drogie",
            "przedszkolanka ma beznadziejne podejscie pedagogiczne",
            "jedna z pan przedszkolanek chyba minela sie z powolaniem",
            "dziecko twierdzi, ze brak jest zabaw i jest znudzone przebywaniem
w tym przedszkolu",
            "nie prawda jest, ze lekcje jezyka angielskiego sa na wysokim poziomie",
            "dzieci niezapisane na dodatkowe zajecia sie nudza"
        );

        for ($i = 0; $i < 200; $i++) {
            $opinia[$i] = $poczatek_pozytywne[rand(1, sizeof($poczatek_pozytywne) - 1)] . " " . $srodek_pozytywne[rand(0, sizeof($srodek_pozytywne) - 1)] . ", " . $srodek_pozytywne[rand(0, sizeof($srodek_pozytywne) - 1)] . ".<br/><br/>";
            rand(0, sizeof($poczatek_neutralne));
            rand(0, sizeof($poczatek_negatywne));
            rand(0, sizeof($srodek_negatywne));
            rand(0, sizeof($srodek_pozytywne));
        }
        for ($i = 100; $i < 400; $i++) {
            $opinia[$i] = $poczatek_neutralne[rand(1, sizeof($poczatek_pozytywne) - 1)] . " " . $srodek_pozytywne[rand(0, sizeof($srodek_pozytywne) - 1)] . ", " . $srodek_negatywne[rand(0, sizeof($srodek_pozytywne) - 1)] . ".<br/><br/>";
            rand(0, sizeof($poczatek_neutralne));
            rand(0, sizeof($poczatek_negatywne));
            rand(0, sizeof($srodek_negatywne));
            rand(0, sizeof($srodek_pozytywne));
        }
        for ($i = 200; $i < 600; $i++) {
            $opinia[$i] = $poczatek_negatywne[rand(1, sizeof($poczatek_pozytywne) - 1)] . " " . $srodek_negatywne[rand(0, sizeof($srodek_pozytywne) - 1)] . ", " . $srodek_negatywne[rand(0, sizeof($srodek_pozytywne) - 1)] . ".<br/><br/>";
            rand(0, sizeof($poczatek_neutralne));
            rand(0, sizeof($poczatek_negatywne));
            rand(0, sizeof($srodek_negatywne));
            rand(0, sizeof($srodek_pozytywne));
        }
//print_r($opinia);

        $imiona = Array("Ada
", "Adela
", "Agata
", "Agnieszka
", "Aldona
", "Aleksandra
", "Alicja
", "Alina
", "Anastazja
", "Aneta
", "Angelika
", "Aniela
", "Anita
", "Anna
", "Antonina
", "Apolonia
", "Balbina
", "Barbara
", "Beata
", "Berenika
", "Bernadeta
", "Berta
", "Blanka
", "Bogumiła
", "Bogusława
", "Bożena
", "Brygida
", "Cecylia
", "Celina
", "Czesława
", "Dagmara
", "Daniela
", "Danuta
", "Daria
", "Diana
", "Dominika
", "Dorota
", "Edyta
", "Elena
", "Eleonora
", "Eliza
", "Elwira
", "Elżbieta
", "Emilia
", "Eugenia
", "Ewa
", "Ewelina
", "Felicja
", "Franciszka
", "Gabriela
", "Genowefa
", "Gertruda
", "Grażyna
", "Halina
", "Helena
", "Henryka
", "Honorata
", "Huberta
", "Ida
", "Iga
", "Irena
", "Irmina
", "Iwona
", "Iza
", "Izabela
", "Jadwiga
", "Janina
", "Joanna
", "Jolanta
", "Judyta
", "Julia
", "Justyna
", "Kalina
", "Kamila
", "Karolina
", "Katarzyna
", "Kinga
", "Klara
", "Klaudia
", "Klementyna
", "Kornelia
", "Krystyna
", "Laura
", "Lidia
", "Liliana
", "Lucyna
", "Ludmiła
", "Ludwika
", "Łucja
", "Magda
", "Magdalena
", "Maja
", "Malwina
", "Małgorzata
", "Marcelina
", "Maria
", "Marlena
", "Marta
", "Martyna
", "Marzena
", "Matylda
", "Milena
", "Monika
", "Natalia
", "Natasza
", "Nina
", "Olga
", "Oliwia
", "Otylia
", "Patrycja
", "Paulina
", "Regina
", "Renata
", "Roksana
", "Rozalia
", "Róża
", "Sabina
", "Salomea
", "Sandra
", "Sławomira
", "Stefania
", "Sylwia
", "Tekla
", "Teresa
", "Urszula
", "Wacława
", "Wanda
", "Weronika
", "Wiktoria
", "Wioletta
", "Władysława
", "Zofia
", "Zuzanna
", "Żaklina
", "Żaneta
", "
", "Adelajda
", "Adelajda
", "Adele
", "Adeline
", "Adria
", "Adrianna
", "Afrodyta
", "Agata
", "Agatce
", "Agaune
", "Agnes
", "Agnieszka
", "Ai
", "Aiko
", "Aimee
", "Ajtra
", "Akako
", "Akane
", "Akemi
", "Akiko
", "Akina
", "Aktajon
", "Akteon
", "Alanna
", "Albina
", "Aldona
", "Aleksandra
", "Alexandra
", "Alfreda
", "Alice
", "Alice
", "Alicja
", "Alina
", "Aline
", "Alkestis
", "Alkmena
", "Altea
", "Amalia
", "Amalteja
", "Amandine
", "Amedee
", "Amelia
", "Amelia
", "Amelie
", "Amfitryta
", "Amymone
", "Anastazja
", "Anatolia
", "Ancienta
", "Andromeda
", "Aneta
", "Angela
", "Angele
", "Angelika
", "Angelique
", "Ann
", "Anna
", "Anne
", "Annick
", "Annika
", "Antiope
", "Antoinette
", "Antonia
", "Antonina
", "Antygona
", "Apolonia
", "Arachne
", "Ariadna
", "Ariane
", "Arielle
", "Arletta
", "Artemis
", "Artemita
", "Astrid
", "Atena
", "Atropos
", "Atsuko
", "Aude
", "Audrey
", "Augustyna
", "Aurelia
", "Aurelie
", "Aurora
", "Autore
", "Aya
", "Ayako
", "Ayame
", "Ayane
", "Ayano
", "Babette
", "Balbina
", "Barbara
", "Beata
", "Beatrice
", "Beatrix
", "Beatrycze
", "Benedicte
", "Bernadette
", "Berta
", "Bess
", "Bessy
", "Bianka
", "Blandine
", "Blanka
", "Bogna
", "Bogumiła
", "Bogysława
", "Bożena
", "Brenadeta
", "Brigitte
", "Britta
", "Brittany
", "Bronisława
", "Brygida
", "Budzisława
", "Calista
", "Camille
", "Carine
", "Carla
", "Carole
", "Caroline
", "Catherine
", "Cecile
", "Cecily
", "Cecylia
", "Celestyna
", "Celina
", "Celine
", "Ceres
", "Chantal
", "Charlotte
", "Chiaki
", "Chie
", "Chieko
", "Chika
", "Chikuma
", "Chinatsu
", "Chitose
", "Chiyeko
", "Chiyo
", "Cho
", "Choroba
", "Christelle
", "Christiane
", "Christina
", "Christine
", "Chwalisława
", "Claire
", "Clarisse
", "Claude
", "Claudine
", "Clemence
", "Clotilde
", "Clover
", "Colette
", "Corinne
", "Czesława
", "Dafne
", "Dagmara
", "Danae
", "Daniela
", "Daniele
", "Danuta
", "Daphne
", "Daria
", "Deborah
", "Dein
", "Dejanira
", "Delfina
", "Delphine
", "Demeter
", "Demeter
", "Demetria
", "Denise
", "Devon
", "Diane
", "Dike
", "Dionizja
", "Dirke
", "Dobiesława
", "Dobrosława
", "Dola
", "Dolores
", "Dominika
", "Dominique
", "Dora
", "Doris
", "Dorota
", "Dorothee
", "Dorothy
", "Edith
", "Edwige
", "Edyta
", "Elais
", "Elektra
", "Eleonor
", "Eleonora
", "Elezuis
", "Eliane
", "Elisabeth
", "Eliza
", "Eloide
", "Eloise
", "Elsa
", "Elwira
", "Elżbieta
", "Emilia
", "Emilie
", "Emily
", "Emma
", "Emma
", "Emmanuelle
", "Eos
", "Erato
", "Erazma
", "Ergane
", "Ernesta
", "Erwina
", "Eryka
", "Estelle
", "Estera
", "Eualia
", "Eufemia
", "Eugenia
", "Eugenie
", "Eunomia
", "Euoe
", "Europa
", "Eurydyka
", "Eutrepe
", "Euzebia
", "Eva
", "Evangeline
", "Eve
", "Evelyne
", "Ewa
", "Ewelina
", "Fabienne
", "Fabiola
", "Fani
", "Faustyna
", "Fedra
", "Felicja
", "Felicyta
", "Fenicja
", "Filipina
", "Filomea
", "Filomela
", "Filomena
", "Fleur
", "Flora
", "Flora
", "Florence
", "Florentyna
", "Fortuna
", "France
", "Frances
", "Francine
", "Franciszka
", "Francois
", "Frederique
", "Fryderyka
", "Gabriela
", "Gaja
", "Gardenia
", "Geatane
", "Genevieve
", "Genowefa
", "Georgette
", "Geraldine
", "Germaine
", "Gertruda
", "Ghislaine
", "Gilberte
", "Gisele
", "Gizela
", "Gracja
", "Grażyna
", "Greta
", "Gwen
", "Gwyneyh
", "Halina
", "Hanna
", "Harmonia
", "Harriet
", "Harriot
", "Hebe
", "Heidi
", "Hekate
", "Helen
", "Helena
", "Helene
", "Helga
", "Henriette
", "Henryka
", "Hera
", "Hermenegilda
", "Hestia
", "Hiacynta
", "Higiena
", "Higija
", "Hipodremeja
", "Hipolita
", "Honorata
", "Hortense
", "Hortensja
", "Hugette
", "Hyacinte
", "Ida
", "Idalia
", "Ilona
", "Ines
", "Inez
", "Inga
", "Ingrid
", "Irena
", "Irene
", "Irene
", "Iris
", "Irmina
", "Isabel
", "Isabelle
", "Ismena
", "Iwetta
", "Iwona
", "Izabela
", "Izolda
", "Izyda
", "Jackie
", "Jacquineline
", "Jadwiga
", "Jagoda
", "Jakobina
", "Jam
", "Jane
", "Jane
", "Janina
", "Jarema
", "Jarmiła
", "Jean
", "Jeanine
", "Jeanne
", "Jemima
", "Jessica
", "Joan
", "Joanna
", "Joasiane
", "Joelle
", "Jokasta
", "Josephine
", "Jossieline
", "Józefa
", "Józefina
", "Judith
", "Judyta
", "Julia
", "Julianna
", "Julie
", "Julienne
", "Juliet
", "Juliette
", "Julita
", "Juona
", "Justine
", "Justyna
", "Kaja
", "Kalina
", "Kalina
", "Kalliope
", "Kaludia
", "Kamila
", "Karen
", "Karena
", "Karina
", "Karina
", "Karine
", "Karolina
", "Kasjopea
", "Katarzyna
", "Katherine
", "Kathleen
", "Katia
", "Katy
", "Kazimiera
", "Kiame
", "Kinga
", "Kira
", "Kirke
", "Kitty
", "Klara
", "Klaudyna
", "Klementyna
", "Kleo
", "Kleopatra
", "Klio
", "Klitajmestra
", "Kloto
", "Klotylda
", "Konstancja
", "Kordulia
", "Kore
", "Kornelia
", "Koronis
", "Kreuza
", "Kristin
", "Krolina
", "Krystyna
", "Ksenia
", "Ksjopea
", "Kunegunda
", "Kwiatosława
", "Kwiryna
", "Kybele
", "Lachezis
", "Lara
", "Larysa
", "Latona
", "Latona
", "Laura
", "Laure
", "Laurence
", "Laurencja
", "Leatitia
", "Leatitia
", "Leda
", "Lena
", "Lena
", "Leokadia
", "Leslie
", "Lidia
", "Ligia
", "Lilia
", "Liliane
", "Lily
", "Linda
", "Line
", "Lisa
", "Lisette
", "Liza
", "Loretta
", "Louise
", "Luba
", "Lubosława
", "Luce
", "Lucie
", "Lucienne
", "Lucisie
", "Lucy
", "Lucyna
", "Ludmiła
", "Ludwika
", "Ludwina
", "Luiza
", "Lukrecja
", "Luna
", "Lusia
", "Lycette
", "Lydie
", "Łucja
", "Madeleine
", "Magali
", "Magda
", "Magdalena
", "Maia
", "Maite
", "Malwina
", "Małgorzata
", "Manuelle
", "Marcela
", "Marcelina
", "Marcelle
", "Marcelline
", "Margaret
", "Marguerite
", "Maria
", "Marianna
", "Marianne
", "Marie
", "Marielle
", "Marietta
", "Marina
", "Mariola
", "Marion
", "Marjolaine
", "Marlena
", "Marlene
", "Marta
", "Marthe
", "Martine
", "Martyna
", "Maryla
", "Maryline
", "Maryna
", "Maryse
", "Marzena
", "Mathilde
", "Matylda
", "Maud
", "Maura
", "Mazo
", "Meduza
", "Mei
", "Melania
", "Melanie
", "Melanie
", "Melodia
", "Melpomene
", "Menrfa
", "Metanira
", "Mia
", "Michele
", "Micheline
", "Mieczysława
", "Migonette
", "Milapukala
", "Milena
", "Milene
", "Minerwa
", "Mirabella
", "Miranda
", "Mireille
", "Mirella
", "Mirosława
", "Mnemosyna
", "Mojra
", "Molly
", "Monika
", "Monique
", "Mścisława
", "Muriel
", "Murielle
", "Myriam
", "Nadege
", "Nadia
", "Nadine
", "Nadzieja
", "Nan
", "Nancy
", "Narcyza
", "Natalia
", "Natasza
", "Nathalie
", "Nel
", "Nelly
", "Nemczis
", "Nereida
", "Nicole
", "Nike
", "Nikita
", "Nimfa
", "Nina
", "Nina
", "Niobe
", "Noelle
", "Noemie
", "Nora
", "Nora
", "Odette
", "Odile
", "Ofelia
", "Ojno
", "Olga
", "Olimpia
", "Olivia
", "Omfalia
", "Orejtyja
", "Otylia
", "Ozanna
", "Pallas
", "Pandora
", "Paris
", "Partenos
", "Pascale
", "Patrica
", "Patrycja
", "Patty
", "Paule
", "Paulina
", "Pauline
", "Pax
", "Peggy
", "Pelagia
", "Pelagie
", "Persefona
", "Petronela
", "Pitia
", "Pitys
", "Plejada
", "Polias
", "Polichymnia
", "Prisca
", "Prokne
", "Promachos
", "Prozerpina
", "Prudence
", "Psyche
", "Pulcheria
", "Pyrra
", "Pytya
", "Queen
", "Ramona
", "Raymonde
", "Rebeka
", "Regina
", "Regine
", "Reine
", "Reja
", "Renata
", "Rita
", "Roksana
", "Rolande
", "Roma
", "Rosalie
", "Rosario
", "Rose
", "Roseline
", "Rozalia
", "Ruta
", "Saba
", "Sabina
", "Sabine
", "Sabrina
", "Salma
", "Salomea
", "Sam
", "Sandra
", "Sandrine
", "Sara
", "Sawa
", "Segolene
", "Selene
", "Semele
", "Severine
", "Sewera
", "Sfinks
", "Simone
", "Skylla
", "Sława
", "Sławomira
", "Solange
", "Solenne
", "Sonia
", "Sophie
", "Stanisława
", "Starość
", "Stefania
", "Stella
", "Stephane
", "Susan
", "Susie
", "Suzanne
", "Sybilla
", "Sylena
", "Sylviane
", "Sylvie
", "Sylwia
", "Syrkinks
", "Szeherezada
", "Szymoneta
", "Świętosława
", "Taleja
", "Tamara
", "Tara
", "Tatiana
", "Tekla
", "Telimena
", "Temida
", "Temis
", "Teodozja
", "Teresa
", "Terpsychoza
", "Thalia
", "Thecle
", "Therese
", "Toska
", "Tris
", "Troska
", "Trwoga
", "Tychne
", "Uni
", "Urania
", "Ursule
", "Urszula
", "Vanessa
", "Varerie
", "Veronique
", "Vic
", "Victoria
", "Virginie
", "Viviane
", "Wacława
", "Walentyna
", "Waleria
", "Wanda
", "Wendy
", "Wenus
", "Wera
", "Weronika
", "Westa
", "Westa
", "Whitney
", "Wiera
", "Wiesława
", "Wiktoria
", "Wilma
", "Wiola
", "Wirginia
", "Wojna
", "Yannick
", "Yolande
", "Yumi
", "Yvette
", "Yvonne
", "Zdzisława
", "Zefiryna
", "Zenobia
", "Ziemia
", "Zofia
", "Zuzanna
", "Zyta
", "Żaklina
", "Żalina
", "Żaneta
", "Żanna
", "Żegota");
        for ($i = 0; $i < 600; $i++) {
            $imie = $imiona[rand(0, sizeof($imiona) - 1)];
            $topinia = $opinia[$i];

            $nauczyciele = rand(20, 100);
            $wyposazenie = rand(40, 100);
            $zajecia = rand(30, 100);
            $czystosc = rand(60, 100);
            $plac_zabaw = rand(50, 100);
            $wyzywienie = rand(40, 100);
            $ocena = ($nauczyciele + $wyposazenie + $zajecia + $czystosc + $plac_zabaw + $wyzywienie) / 6;
            $rok = rand(2008, 2011);
            $miesiac = rand(1, 12);
            $dzien = rand(1, 28);
            $data = date_create($rok . '-' . $miesiac . '-' . $dzien);
            $data = date_format($data, 'Y-m-d');
            $id_podmiotu = rand(1, 8854);
            echo $query = "INSERT INTO opinie(widoczna, id_podmiotu, id_uzytkownika, ocena, nauczyciele, wyposazenie, zajecia, czystosc, plac_zabaw, wyzywienie, tresc, data, imie) values('1', '$id_podmiotu', '1', '$ocena', '$nauczyciele', '$wyposazenie', '$zajecia', '$czystosc', '$plac_zabaw', '$wyzywienie', '$topinia', '$data', '$imie')";
            $result = mysql_query($query);
        }
        ?>
        
        <!--    Pokazuje wygenerowane komentarze    -->
        
        <table>
            <tr>
                <td>
                    feewfew
                </td>
            </tr>
        </table>


    </body> 
</html>