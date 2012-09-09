<?php
interface tagi {

    public function pokazTagi();

    public function pokazTytul();

}
class  metaTagi implements tagi{

    public function pokazTagi() {
        $lokalizacja = menuWlasciwe::okruszkoweMenu(3);

        if (isset($lokalizacja[4])) {
            echo '<title>Przedszkolne.info :: ' . $lokalizacja[4] . ' </title>';
            echo '<meta name="description" content="Przeczytaj opinie i jaką renomę ma ' . $lokalizacja[4] . '. Dowiedz się więcej - zobacz ranking i podziel się swoją opinią z innymi!" />';
        } elseif (isset($lokalizacja[3])) {
            echo '<title>Przedszkolne.info :: Przedszkola ' . $lokalizacja[3] . ' </title>';
            if (isset($lokalizacja[2]))
                echo '<meta name="description" content="Przeczytaj opinie i sprawdź, na które przedszkole w miejscowości ' . $lokalizacja[2] . ' warto się zdecydować. Dowiedz się więcej - zobacz ranking i podziel się swoją opinią z innymi!" />';
            else
                echo '<meta name="description" content="Przeczytaj opinie i sprawdź, na które przedszkole w miejscowości ' . $lokalizacja[3] . ' warto się zdecydować. Dowiedz się więcej - zobacz ranking i podziel się swoją opinią z innymi!" />';
        } elseif (isset($lokalizacja[2])) {
            echo '<title>Przedszkolne.info :: Przedszkola ' . $lokalizacja[2] . '</title>';
            echo '<meta name="description" content="Przeczytaj opinie i sprawdź, na które przedszkole w miejscowości ' . $lokalizacja[2] . ' warto się zdecydować. Dowiedz się więcej - zobacz ranking i podziel się swoją opinią z innymi!" />';
        } elseif (isset($lokalizacja[1])) {
            echo '<title>Przedszkolne.info :: ' . $lokalizacja[1] . ' - przedszkola</title>';
            $lokalizacja = explode(" ", obrobkaWpisow::toLower($lokalizacja[1]));
            echo '<meta name="description" content="Przeczytaj opinie i sprawdź, które przedszkola z ' . $lokalizacja[0] . 'u ' . $lokalizacja[1] . 'ego warto się zdecydować. Dowiedz się więcej - zobacz ranking i podziel się swoją opinią z innymi!" />';
        } elseif (isset($lokalizacja[0])) {
            echo '<title>Przedszkolne.info :: ' . $lokalizacja[0] . ' Przedszkola</title>';
            echo '<meta name="description" content="Przeczytaj opinie i sprawdź, na które ' . obrobkaWpisow::toLower($lokalizacja[0]) . ' przedszkole warto się zdecydować. Dowiedz się więcej - zobacz ranking i podziel się swoją opinią z innymi!" />';
        }
    }

    public  function pokazTytul() {
        $lokalizacja = menuWlasciwe::okruszkoweMenu(3);

        if (isset($lokalizacja[5])) {
            echo 'Przedszkola ' . $lokalizacja[5];
        } else if (isset($lokalizacja[4])) {
            if (isset($lokalizacja[3]) && isset($lokalizacja[4])) {
                if (isset($_GET['publicznosc'])) {
                    $publicznosc = $_GET['publicznosc'];
                    if ($publicznosc == 1) {
                        echo 'Publiczne przedszkola ' . $lokalizacja[3] . ' - ' . $lokalizacja[4];
                    } else if ($publicznosc == 3) {
                        echo 'Niepubliczne i prywatne przedszkola ' . $lokalizacja[3] . ' - ' . $lokalizacja[4];
                    } elseif ($publicznosc == 2) {
                        echo ' Przedszkola ' . $lokalizacja[3] . ' - ' . $lokalizacja[4];
                    }
                }
            } else {
                echo ' Przedszkole ' . $lokalizacja[3] . ' - ' . $lokalizacja[4];
            }
        } elseif (isset($lokalizacja[3]) && isset($lokalizacja[4])) {
            if (isset($_GET['publicznosc'])) {
                $publicznosc = $_GET['publicznosc'];
                if ($publicznosc == 1) {
                    echo 'Publiczne przedszkola ' . $lokalizacja[3] . ' - ' . $lokalizacja[4];
                } else if ($publicznosc == 3) {
                    echo 'Niepubliczne i prywatne przedszkola ' . $lokalizacja[3];
                } elseif ($publicznosc == 2) {
                    echo ' Przedszkola ' . $lokalizacja[3] . ' - ' . $lokalizacja[4];
                }
            } else {
                echo ' Przedszkole ' . $lokalizacja[3] . ' - ' . $lokalizacja[4];
            }

            // echo '<meta name="description" content="Przeczytaj opinie i sprawdź, na które przedszkole w miejscowości ' . $lokalizacja[2] . ' warto się zdecydować. Dowiedz się więcej - zobacz ranking i podziel się swoją opinią z innymi!" />';
        } elseif (isset($lokalizacja[2])) {
            if (isset($_GET['publicznosc'])) {
                $publicznosc = $_GET['publicznosc'];
                if ($publicznosc == 1) {
                    echo 'Publiczne przedszkola ' . $lokalizacja[2];
                } else if ($publicznosc == 3) {
                    echo 'Niepubliczne i prywatne przedszkola ' . $lokalizacja[2];
                } elseif ($publicznosc == 2) {
                    echo ' Przedszkola ' . $lokalizacja[2];
                }
            } else {
                echo ' Przedszkola ' . $lokalizacja[2];
            }


            //  echo '<meta name="description" content="Przeczytaj opinie i sprawdź, na które przedszkole w miejscowości ' . $lokalizacja[2] . ' warto się zdecydować. Dowiedz się więcej - zobacz ranking i podziel się swoją opinią z innymi!" />';
        } elseif (isset($lokalizacja[1])) {
            if (isset($_GET['publicznosc'])) {
                $publicznosc = $_GET['publicznosc'];
                if ($publicznosc == 1) {
                    echo 'Publiczne przedszkola ' . $lokalizacja[1];
                } else if ($publicznosc == 3) {
                    echo 'Niepubliczne i prywatne przedszkola ' . $lokalizacja[1];
                } elseif ($publicznosc == 2) {
                    echo ' Przedszkola ' . $lokalizacja[1];
                }
            } else {
                echo ' Przedszkola ' . $lokalizacja[1];
            }

            $lokalizacja = explode(" ", obrobkaWpisow::toLower($lokalizacja[1]));
            //   echo '<meta name="description" content="Przeczytaj opinie i sprawdź, które przedszkola z ' . $lokalizacja[0] . 'u ' . $lokalizacja[1] . 'ego warto się zdecydować. Dowiedz się więcej - zobacz ranking i podziel się swoją opinią z innymi!" />';
        } elseif (isset($lokalizacja[0])) {
            if (isset($_GET['publicznosc'])) {
                $publicznosc = $_GET['publicznosc'];
                if ($publicznosc == 1) {
                    echo 'Publiczne przedszkola ' . obrobkaWpisow::toLower($lokalizacja[0]);
                } else if ($publicznosc == 3) {
                    echo 'Niepubliczne i prywatne przedszkola ' . obrobkaWpisow::toLower($lokalizacja[0]);
                } elseif ($publicznosc == 2) {
                    echo ' Przedszkola ' . obrobkaWpisow::toLower($lokalizacja[0]);
                }
            } else {
                echo ' Przedszkola ' . obrobkaWpisow::toLower($lokalizacja[0]);
            }

            //  echo '<meta name="description" content="Przeczytaj opinie i sprawdź, na które' . obrobkaWpisow::toLower($lokalizacja[0]) . ' przedszkole warto się zdecydować. Dowiedz się więcej - zobacz ranking i podziel się swoją opinią z innymi!" />';
        }
    }
    public function pokazOpis() {
        $lokalizacja = menuWlasciwe::okruszkoweMenu(3);

        if (isset($lokalizacja[4])) {
            return 'Przeczytaj opinie i jaką renomę ma ' . $lokalizacja[4] . '. Dowiedz się więcej - zobacz ranking i podziel się swoją opinią z innymi!';
        } elseif (isset($lokalizacja[3])) {
            if (isset($lokalizacja[2]))
                return 'Przeczytaj opinie i sprawdź, na które przedszkole w miejscowości ' . $lokalizacja[2] . ' warto się zdecydować. Dowiedz się więcej - zobacz ranking i podziel się swoją opinią z innymi!';
            else
                return 'Przeczytaj opinie i sprawdź, na które przedszkole w miejscowości ' . $lokalizacja[3] . ' warto się zdecydować. Dowiedz się więcej - zobacz ranking i podziel się swoją opinią z innymi!';
        } elseif (isset($lokalizacja[2])) {
            return 'Przeczytaj opinie i sprawdź, na które przedszkole w miejscowości ' . $lokalizacja[2] . ' warto się zdecydować. Dowiedz się więcej - zobacz ranking i podziel się swoją opinią z innymi!';
        } elseif (isset($lokalizacja[1])) {
    
            $lokalizacja = explode(' ', obrobkaWpisow::toLower($lokalizacja[1]));
            return 'Przeczytaj opinie i sprawdź, które przedszkola z ' . $lokalizacja[0] . 'u ' . $lokalizacja[1] . 'ego warto się zdecydować. Dowiedz się więcej - zobacz ranking i podziel się swoją opinią z innymi!';
        } elseif (isset($lokalizacja[0])) {
            return 'Przeczytaj opinie i sprawdź, na które ' . obrobkaWpisow::toLower($lokalizacja[0]) . ' przedszkole warto się zdecydować. Dowiedz się więcej - zobacz ranking i podziel się swoją opinią z innymi!';
        }
    }
}

?>
