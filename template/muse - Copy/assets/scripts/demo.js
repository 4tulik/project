$(function() {

    // Autocomplete
    var countryList = ["Warszawa", "Kraków", "Poznań", "Łódź", "Wrocław", "Lublin", "Katowice", "Gdańsk", "Szczecin", "Białystok", "Bydgoszcz", "Bielsko-Biała", "Olsztyn", "Częstochowa", "Rzeszów", "Bytom", "Kielce", "Sosnowiec", "Zabrze", "Gdynia", "Rybnik", "Opole", "Toruń", "Gliwice", "Tarnów", "Tychy", "Gorzów Wielkopolski", "Piaseczno", "Zielona Góra", "Płock", "Ruda Śląska", "Elbląg", "Radom", "Siedlce", "Słupsk", "Kalisz", "Chorzów", "Koszalin", "Nowy Sącz", "Jastrzębie-Zdrój", "Legnica", "Dąbrowa Górnicza", "Jaworzno", "Piotrków Trybunalski", "Kędzierzyn-Koźle", "Leszno", "Wałbrzych", "Włocławek", "Mysłowice", "Tarnowskie Góry", "Przemyśl", "Ostrów Wielkopolski", "Piła", "Mińsk Mazowiecki", "Konin", "Cieszyn", "Będzin", "Tarnobrzeg", "Lubin", "Pruszków", "Zamość", "Gniezno", "Jelenia Góra", "Wodzisław Śląski", "Racibórz", "Tomaszów Mazowiecki", "Legionowo", "Głogów", "Otwock", "Grudziądz", "Żory", "Siemianowice Śląskie", "Chełm", "Mielec", "Pabianice", "Stalowa Wola", "Ząbki", "Luboń", "Swarzędz", "Zgierz", "Stargard Szczeciński", "Piekary Śląskie", "Świdnica", "Łuków", "Dębica", "Skierniewice", "Chrzanów", "Józefów", "Biała Podlaska", "Wołomin", "Ostrołęka", "Mikołów", "Czechowice-Dziedzice", "Oświęcim", "Puławy", "Łomża", "Marki", "Skarżysko-Kamienna", "Gorlice", "Nowa Wieś", "Grodzisk Mazowiecki", "Wejherowo", "Krosno", "Inowrocław", "Sopot", "Radomsko", "Lębork", "Rumia", "Jasło", "Malbork", "Brzeg", "Kołobrzeg", "Ełk", "Żywiec", "Świętochłowice", "Zduńska Wola", "Ciechanów", "Tczew", "Ostrowiec Świętokrzyski", "Olkusz", "Wieliczka", "Zawiercie", "Sieradz", "Suwałki", "Świecie", "Bolesławiec", "Knurów", "Nysa", "Nowa Sól", "Kraśnik", "Gostyń", "Oleśnica", "Myślenice", "Bełchatów", "Przasnysz", "Zgorzelec", "Starogard Gdański", "Ostróda", "Jarosław", "Goleniów", "Szczecinek", "Rawicz", "Żary", "Brzesko", "Łomianki", "Wyszków", "Śrem", "Dzierżoniów", "Zakopane", "Kwidzyn", "Lubliniec", "Łowicz", "Sochaczew", "Starachowice", "Kęty", "Świebodzin", "Kutno", "Bochnia", "Słubice", "Sanok", "Bielawa", "Ustroń", "Myszków", "Milanówek", "Szczytno", "Krotoszyn", "Lubartów", "Nowy Targ", "Zielonka", "Krasnystaw", "Łazy", "Czerwionka-Leszczyny", "Trzebinia", "Czeladź", "Świnoujście", "Rabka-Zdrój", "Konstancin-Jeziorna", "Kościerzyna", "Police", "Sandomierz", "Świdnik", "Nowy Dwór Mazowiecki", "Braniewo", "Łaziska Górne", "Żagań", "Augustów", "Kłodzko", "Pułtusk", "Żyrardów", "Suchy Las", "Łęczna", "Łańcut", "Chojnice", "Straszyn", "Andrychów", "Piastów", "Lipno", "Dąbrowa", "Giżycko", "Kluczbork", "Pszczyna", "Mława", "Pruszcz Gdański", "Łeba", "Błonie", "Mosina", "Środa Wielkopolska", "Prudnik", "Rydułtowy", "Pleszew", "Płońsk", "Nakło nad Notecią", "Kętrzyn", "Jarocin", "Bytów", "Kartuzy", "Chełmno", "Radzymin", "Końskie", "Iława", "Turek", "Biłgoraj", "Opoczno", "Ozorków", "Wałcz", "Murowana Goślina", "Namysłów", "Sułkowice", "Międzyrzecz", "Garwolin", "Brwinów", "Ząbkowice Śląskie", "Gryfino", "Kościan", "Krapkowice", "Kozienice", "Międzyrzec Podlaski", "Łęczyca", "Sokółka", "Nadarzyn", "Chodzież", "Nowy Tomyśl", "Września", "Strzelce Opolskie", "Łask", "Lubań", "Bogatynia", "Darłowo", "Bartoszyce", "Oborniki", "Złotów", "Laski", "Zalesie Górne", "Wisła", "Lidzbark Warmiński", "Wągrowiec", "Pyskowice", "Stara Wieś", "Bielsk Podlaski", "Góra Kalwaria", "Brodnica", "Reda", "Skawina", "Orzesze", "Tomaszów Lubelski", "Wschowa", "Wieluń", "Sławno", "Koło", "Sokołów Podlaski", "Nowogard", "Włoszczowa", "Międzychód", "Oława", "Siedlec", "Mogilno", "Krzeszowice", "Działdowo", "Przeźmierowo", "Kłobuck", "Praszka", "Radlin", "Zambrów", "Brzeziny", "Strzelno", "Olecko", "Wolsztyn", "Hrubieszów", "Białobrzegi", "Konstantynów Łódzki", "Milicz", "Syców", "Środa Śląska", "Sierpc", "Dębno", "Skarszewy", "Staszów", "Trzcianka", "Szamotuły", "Skoczów", "Grojec", "Sulechów", "Ropczyce", "Grajewo", "Borkowo", "Bystra", "Kobyłka", "Kępno", "Ostrzeszów", "Pawłowice", "Krosno Odrzańskie", "Leżajsk", "Hajnówka", "Puszczykowo", "Strzyżów", "Koziegłowy", "Wadowice", "Niepołomice", "Nowa Dęba", "Mszana Dolna", "Zdzieszowice", "Wiśniowa", "Dęblin", "Radzionków", "Kostrzyn nad Odrą", "Busko-Zdrój", "Przeworsk", "Lubsko", "Jawor", "Kamienna Góra", "Nowa Ruda", "Polkowice", "Raszyn", "Ożarów Mazowiecki", "Rogóźno", "Kościelec", "Brzezie", "Osiek", "Choszczno", "Biała", "Kolbuszowa", "Gorzyce", "Rawa Mazowiecka", "Myślibórz", "Słupca", "Brzeszcze", "Karczew", "Nowa Iwiczna", "Człuchów", "Kowale", "Żukowo", "Ustka", "Olesno", "Kamień Pomorski", "Zbąszyń", "Janów Lubelski", "Paczków", "Ryki", "Włodawa", "Jędrzejów", "Szprotawa", "Jabłonna", "Krzeszów", "Brzeg Dolny", "Węgrów", "Pińczów", "Jasienica", "Gubin", "Maszewo", "Sulęcin", "Koluszki", "Maków Mazowiecki", "Strzegom", "Przyborów", "Babice", "Dobre", "Głubczyce", "Białogard", "Pyrzyce", "Buk", "Dobra", "Żnin", "Ozimek", "Miasteczko Śląskie", "Biskupice", "Gostynin", "Chojnów", "Czersk", "Puck", "Złotoryja", "Dąbrowa Tarnowska", "Solec Kujawski", "Rypin", "Barlinek", "Łobez", "Wronki", "Złotniki", "Zawada", "Lubaczów", "Markowa", "Wieprz", "Głowno", "Oborniki Śląskie", "Pionki", "Korczyna", "Tuczno", "Zabierzów", "Morąg", "Zakliczyn", "Głuchołazy", "Sieniawa", "Piotrowice", "Suchowola", "Żurawica", "Brody", "Zelów", "Ostrów Mazowiecka", "Aleksandrów Łódzki", "Sierakowice", "Trzebnica", "Wielki Klincz", "Aleksandrów Kujawski", "Bobrowniki", "Kozy", "Mrągowo", "Nidzica", "Barcin", "Lipowa", "Pawłów", "Maków Podhalański", "Stężyca", "Pszów", "Skrzyszów", "Kożuchów", "Sokolniki", "Świebodzice", "Brzeźnica", "Sobótka", "Nowy Dwór Gdański", "Libiąż", "Złocieniec", "Połczyn-Zdrój", "Połaniec", "Miechów", "Kamionka", "Wola", "Radzyń Podlaski", "Głogów Małopolski", "Pieszyce", "Góra", "Siemiatycze", "Korytnica", "Tłuszcz", "Dobre Miasto", "Świerczyna", "Pakosław", "Zakrzewo", "Pniewy", "Istebna", "Kamiennik", "Stary Sącz", "Turka", "Jankowice", "Raszowa", "Baranów", "Sucha Beskidzka", "Łętownia", "Kalety", "Trawniki", "Nagoszyn", "Łękawica", "Czermin", "Mała Wieś", "Jasień", "Maciejowice", "Cegłów", "Zaczernie", "Osiecznica", "Frysztak", "Sulmierzyce", "Karpacz", "Wola Krzysztoporska", "Sulejówek", "Nasielsk", "Mieleszyn", "Strzelin", "Słowik", "Skorzewo", "Borzęcin", "Jurków", "Ciechocinek", "Szydłowiec", "Bolesław", "Ostrowite", "Kruszwica", "Sztum", "Wojkowice", "Żelisławice", "Budzyń", "Czaniec", "Krzyżowice", "Gryfice", "Zduny", "Rudnik", "Kozłów", "Tylicz", "Gołkowice Górne", "Ornontowice", "Goczałkowice-Zdrój", "Zaborze", "Kadłub", "Brzozów", "Tarnowiec", "Skwierzyna", "Jeleśnia", "Nowa Sarzyna", "Mostki", "Płoty", "Tuszyn", "Baranów Sandomierski", "Moszczenica", "Szklarska Poręba", "Łapy", "Polanica-Zdrój", "Radków", "Sejny", "Leśna", "Przemków", "Komorów", "Boguszów-Gorce", "Kąty Wrocławskie", "Cewice", "Trzciana", "Kamieniec Ząbkowicki", "Żarki", "Koronowo", "Liszki", "Szubin", "Niedźwiedź", "Laskowice", "Porąbka", "Bibice", "Rozogi", "Gołdap", "Czarnków", "Witkowo", "Dobczyce", "Sól", "Otmuchów", "Rudniki", "Bukowno", "Niemodlin", "Chełmek", "Pogórze", "Rudziczka", "Proszowice", "Zawadzkie", "Moszczanka", "Kłodawa", "Grodzisko Dolne", "Siedlisko", "Zebrzydowice", "Przecław", "Rudki", "Nienadówka", "Żychlin", "Nowe Miasto nad Pilicą", "Wilków", "Pogwizdów", "Dzikowiec", "Tymowa", "Lipnica", "Grądy", "Stare Miasto", "Jaworze", "Świątniki Górne", "Grębocin", "Limanowa", "Czaplinek", "Szewna", "Orneta", "Krobia", "Perzów", "Nowe Skalmierzyce", "Tulce", "Lusowo", "Tymbark", "Gogolin", "Stróże", "Dorohusk", "Krynica-Zdrój", "Wielowieś", "Chrząstowice", "Haczów", "Czarna", "Kamieniec", "Chełm Śląski", "Krościenko Wyżne", "Koszarawa", "Radziechowy", "Gdów", "Dąbrowice", "Sokołów Małopolski", "Jasionka", "Świętoszów", "Czarnocin", "Kowary", "Kudowa-Zdrój", "Kolno", "Ujazd", "Lwówek Śląski", "Józefosław", "Czarne", "Otrębusy", "Rzezawa", "Złota", "Zaborów", "Borówno", "Zwoleń", "Ślesin", "Mszczonów", "Michałowice", "Radziszów", "Lewin Brzeski", "Wilkowice", "Świdwin", "Opatów", "Pasłęk", "Plewiska", "Pobiedziska", "Kruszyna", "Pcim", "Harbutowice", "Rędziny", "Chróścina", "Spytkowice", "Wolbrom", "Wojnowice", "Kuźnia Raciborska", "Humniska", "Białka", "Radymno", "Kalinowice", "Łodygowice", "Lubrza", "Trześń", "Jagodne", "Sędziszów Małopolski", "Jaktorów", "Łąka", "Łaziska", "Działoszyn", "Rozprza", "Kosów", "Międzybórz", "Brusy", "Ustanów", "Jelcz-Laskowice", "Granica", "Przysucha", "Lipusz", "Prabuty", "Mosty", "Osieczna", "Izabelin C", "Działyń", "Miedzna", "Morawica", "Sępólno Krajeńskie", "Wilamowice", "Mąkoszyce", "Branice", "Tanowo", "Biskupiec", "Pisz", "Węgorzewo", "Grodzisk Wielkopolski", "Kórnik", "Czerniewice", "Poręba Wielka", "Koniecpol", "Chróścice", "Jordanów", "Osielec", "Świerklany", "Piaski", "Pilzno", "Radłów", "Lędziny", "Szynwałd", "Jedlicze", "Strzelce Krajeńskie", "Sława", "Warka", "Dobrocin", "Łosice", "Trębaczew", "Głuchów", "Wysokie Mazowieckie", "Lesznowola", "Ożarów", "Miastko", "Twardogóra", "Przechlewo", "Banino", "Czernica", "Węgry", "Szczurowa", "Kobylnica", "Żołędowo", "Pelplin", "Latchorzew", "Golub-Dobrzyń", "Łęczyce", "Szymbark", "Czernichów", "Gębice", "Żuromin", "Bukowiec", "Serock", "Jankowice Wielkie", "Chybie", "Mirosławiec", "Wieleń", "Krzywiń", "Opalenica", "Tuchola", "Kamienica Polska", "Piwniczna-Zdrój", "Barcice Górne", "Wysoka", "Głogówek", "Ustrzyki Dolne", "Jastrzębia", "Pustków", "Żabno", "Łączany", "Rzepin", "Szczytniki", "Głosków", "Książenice", "Tyczyn", "Rzgów", "Ksawerów", "Pajęczno", "Piechowice", "Włodowice", "Janów", "Szepietowo", "Stara Iwiczna", "Ostrówek", "Michałowice-Osiedle", "Kiełczów", "Ziębice", "Władysławowo", "Rudno", "Choczewo", "Modlnica", "Chełmża", "Niechorze", "Trzemeszno", "Golina", "Wiślica", "Blachownia", "Szczawnica", "Koszęcin", "Kup", "Psary", "Szaflary", "Parczew", "Kurów", "Sidzina", "Bieruń", "Wola Rzędzińska", "Cisiec", "Gierałtowice", "Nisko", "Nieporęt", "Wieliszew", "Grębów", "Wasilków", "Baranowo", "Zagórze", "Olszyna", "Mysiadło", "Komorniki", "Boguszyce", "Lublewo Gdańskie", "Słupno", "Wieruszów", "Stryków", "Wołów", "Brzoza", "Stare Babice", "Szczucin", "Wielgie", "Jerzmanowice", "Grodziec", "Recz", "Banie", "Widuchowa", "Zieleniewo", "Mielno", "Lipiany", "Korlino", "Biały Bór", "Ruda Maleniecka", "Bodzechów", "Włoszczowice", "Brzeście", "Koprzywnica", "Mirzec", "Rytwiany", "Dobromierz", "Rybno", "Stare Juchy", "Susz", "Lubomino", "Zyndaki", "Wieliczki", "Jonkowo", "Bartąg", "Pietrzwałd", "Ruciane-Nida", "Nowiny", "Kuźnica Czarnkowska", "Tarnówko", "Szczytniki Duchowne", "Karolew", "Rakoniewice", "Wilkowyja", "Prusy", "Stobno Siódme", "Opatówek", "Słupia pod Kępnem", "Łęka Opatowska", "Dąbie", "Przedecz", "Sompolno", "Racot", "Borzęciczki", "Lamki", "Dębnica", "Grabów nad Prosną", "Dziembówko", "Miasteczko Krajeńskie", "Grab", "Gizałki", "Kowalew", "Niepruszewo", "Szczodrzykowo", "Modrze", "Zalasewo", "Jutrosin", "Wilczna", "Sulęcinek", "Dolsk", "Kowale Pańskie", "Damasławek", "Przemęt", "Belęcin", "Kębłowo", "Gutowo Małe", "Skórka", "Skrzydlna", "Bysław", "Jakubowice", "Łukowica", "Choceń", "Drogomyśl", "Byczyna", "Słopnice", "Lubień Kujawski", "Złoty Potok", "Wołczyn", "Lubień", "Rogowo", "Hutki", "Brożec", "Trzemeśnia", "Drelów", "Jaskrów", "Rossosz", "Huta Stara B", "Kobielnik", "Biszcza", "Paniówki", "Bielice", "Siołkowa", "Rejowiec Fabryczny", "Słupsko", "Biała Nyska", "Korzenna", "Werbkowice", "Toszek", "Kałków", "Jazowsko", "Izbica", "Lipie", "Ujeździec", "Powroźnik", "Księżomierz", "Rębielice Królewskie", "Gorzów Śląski", "Zakrzówek", "Węglowice", "Wachów", "Maniowy", "Ostrów Lubelski", "Hadra", "Daniec", "Lasek", "Radawiec Duży", "Pawonków", "Czarnowąsy", "Rokiciny Podhalańskie", "Brynica", "Podlipie", "Stoczek Łukowski", "Niegowa", "Gracze", "Braciejówka", "Tuchowicz", "Golasowice", "Górki", "Karczmiska Pierwsze", "Kobyla", "Łącznik", "Brzezinka", "Nałęczów", "Chałupki", "Izbicko", "Rudze", "Polskowola", "Zawada Książęca", "Zalesie Śląskie", "Wohyń", "Bełk", "Żędowice", "Stary Bazanów", "Dydnia", "Zembrzyce", "Nakło", "Brzostek", "Łukowa", "Tarnawatka-Tartak", "Wieszowa", "Wola Radłowska", "Kornelówka", "Bojszowy", "Pruchnik", "Gołkowice", "Samoklęski", "Meszna Opacka", "Lubno", "Syrynia", "Werynia", "Wojnicz", "Dychów", "Pilica", "Świerzowa Polska", "Niedomice", "Międzybrodzie Żywieckie", "Kombornia", "Jurgów", "Kolsko", "Pewel Wielka", "Giedlarowa", "Rzyki", "Bieganów", "Kamesznica", "Narol", "Lanckorona", "Ogardy", "Pewel Mała", "Kosina", "Chocznia", "Torzym", "Trąbki", "Radomyśl Wielki", "Staniątki", "Babimost", "Bieliny", "Nowogród Bobrzański", "Stopnica", "Medyka", "Wyśmierzyce", "Warzyn Pierwszy", "Kosienice", "Sobków", "Kozodrza", "Szlichtyngowa", "Chmielnik", "Dynów", "Żelechów", "Kleszczów", "Nowa Słupia", "Kamień", "Zagnańsk", "Górno", "Błędów", "Buczek", "Garbatka-Letnisko", "Piątek", "Zagórz", "Zajezierze", "Łyszkowice", "Zaklików", "Michałów-Grabina", "Różyca", "Ostroszowice", "Ciepielów", "Dłutów", "Jerzmanowa", "Dąbrowica", "Niemojki", "Kiełczygłów", "Siciny", "Lesko", "Młynarze", "Dębe Wielkie", "Podgórzyn", "Kleosin", "Nowe Osiny", "Sobolewo", "Stobiecko Szlacheckie", "Lądek-Zdrój", "Brańsk", "Ludwikowice Kłodzkie", "Narew", "Kadzidło", "Chlewo", "Chocieszów", "Knyszyn", "Brok", "Godzianów", "Strzałkowice", "Dąbrowa Białostocka", "Rękawiec", "Raszówka", "Ciechanowiec", "Baniocha", "Osiedle Niewiadów", "Lubomierz", "Mokrsko", "Bierutów", "Parchowo", "Łbiska", "Grębień", "Ciachcin Nowy", "Gaworzyce", "Rzeczenica", "Gąbin", "Stary Ochędzyn", "Raciąż", "Zapolice", "Ujazd Górny", "Chmielno", "Lubianków", "Morawa", "Szopa", "Dawidy Bankowe", "Strzeszów", "Rzuców", "Mieroszów", "Długołęka", "Gardeja", "Kowala-Stępocina", "Rajbrot", "Ślęza", "Zakrzew", "Krzeczów", "Żórawina", "Łebień", "Łysów", "Kmiecin", "Wodynie", "Jastarnia", "Rościszewo", "Sufczyn", "Wojcieszów", "Ceranów", "Uście Solne", "Potęgowo", "Czerwonka", "Górzno", "Czarże", "Kokoszkowy", "Dziekanów Leśny", "Osielsko", "Rajkowy", "Blizne Łaszczyńskiego", "Starawieś", "Bobowa", "Łasin", "Bożepole Wielkie", "Krypy", "Zagórzany", "Urle", "Łosie", "Dobrzyń nad Wisłą", "Brańszczyk", "Wołowice", "Policzna", "Paterek", "Buczkowice", "Piotrków Kujawski", "Bielowicko", "Borek Szlachecki", "Przysiersk", "Łosiów", "Biały Kościół", "Meszna", "Bolechowice", "Lubicz Dolny", "Mnich", "Kietrz", "Tychowo", "Kalisz Pomorski", "Będzino", "Świeszyno", "Kołbaskowo", "Żabów", "Dobrzany", "Grzmiąca", "Różewo", "Pomyków", "Iwaniska", "Ćmielów", "Góry", "Stara Zagość", "Świniary Stare", "Skarżysko Kościelne", "Jurkowice", "Kurozwęki", "Chlewice", "Młynary", "Ryn", "Barciany", "Mikołajki", "Nowe Miasto Lubawskie", "Lamkowo", "Słupy", "Klewki", "Samborowo", "Orzyny", "Trelkowo", "Stróżewo", "Drawsko", "Rosko", "Fałkowo", "Podrzecze", "Wielichowo", "Mieszków", "Kotlin", "Koźminek", "Iwanowice", "Nowa Wieś Książęca", "Rychtal", "Korzecznik", "Budzisław Kościelny", "Stare Bojanowo", "Wijewo", "Sieraków", "Fabianów", "Lewków", "Westrza", "Mikstat", "Rzadkowo", "Ujście", "Dobrzyca", "Kościelna Wieś", "Sowina Błotna", "Owińska", "Wiry", "Skrzynki", "Rakownia", "Miejska Górka", "Powidz", "Obrzycko", "Otorowo", "Klęka", "Włościejewice", "Tuliszków", "Jabłkowo", "Mochy", "Stara Tuchorza", "Miłosław", "Kleparz", "Okonek", "Dziergowice", "Jodłownik", "Wąbrzeźno", "Ochaby Małe", "Polska Cerekiew", "Kasina Wielka", "Szpetal Górny", "Zabłocie", "Chocianowice", "Książ Mały", "Piechcin", "Osiny", "Bęczarka", "Konopiska", "Żyrowa", "Bysina", "Konstantynów", "Lubojna", "Głuszyna", "Tuczna", "Przyrów", "Karłowice Wielkie", "Lipnik", "Stanica", "Łambinowice", "Krużlowa Wyżna", "Siedliszcze", "Niwnica", "Tęgoborze", "Siennica Różana", "Miedźno", "Goszowice", "Młodów", "Trzydnik Duży", "Zawady", "Bodzanowice", "Firlej", "Boronów", "Kacwin", "Garbów", "Strzebiń", "Karczów", "Pyzówka", "Niedrzwica Kościelna", "Łagiewniki Małe", "Komprachcice", "Chabówka", "Stare Budkowice", "Klucze", "Huta-Dąbrowa", "Krasiejów", "Witeradów", "Jedlanka", "Studzionka", "Zimnice Wielkie", "Skidziń", "Zagłoba", "Radostowice", "Turawa", "Łęki", "Stary Pożóg", "Borucin", "Racławice Śląskie", "Wąwolnica", "Owsiszcze", "Jemielnica", "Wierzbno", "Komarówka Podlaska", "Samborowice", "Budzów", "Pstrążna", "Juszczyn", "Paprotnia", "Blizne", "Zborowice", "Bełżec", "Koty", "Pustynia", "Zaczarnie", "Miedary", "Ryglice", "Szczebrzeszyn", "Bogdaniec", "Czyżowice", "Jagodnik", "Wietrzychowice", "Wawrów", "Połomia", "Majdan Królewski", "Paleśnica", "Połupin", "Szczekociny", "Dukla", "Pasieka Otfinowska", "Wojaszówka", "Poronin", "Lubięcin", "Słotwina", "Tłuczań", "Rajcza", "Ryczów", "Kołczyn", "Węgierska Górka", "Husów", "Frydrychowice", "Wola Mielecka", "Kłaj", "Zbąszynek", "Wadowice Górne", "Koźmice Wielkie", "Szaniec", "Przedmieście Dubieckie", "Zabór", "Grochowce", "Gołymin-Ośrodek", "Sędziszów", "Gać", "Borowie", "Przewóz", "Kazimierza Wielka", "Lubzina", "Pilawa", "Cedzyna", "Kielanówka", "Pacyna", "Kluki", "Szumsko", "Palikówka", "Opypy", "Łanięta", "Świlcza", "Brzostowiec", "Sędziejowice-Kolonia", "Stary Waliszew", "Andrespol", "Pstrągowa", "Zegrze", "Niemcza", "Lutcza", "Krępa Kościelna", "Kazimierz", "Ślubów", "Serpelice", "Rząśnia", "Bolków", "Uherce Mineralne", "Gąsewo Poduchowne", "Czarna Białostocka", "Halinów", "Pęczniew", "Wola Paprotnia", "Pławno", "Niewodnica Kościelna", "Strzegowo", "Strzałków", "Domaszków", "Szczuczyn", "Pomiechówek", "Brąszewice", "Nowogród", "Myszyniec", "Warta", "Krotoszyce", "Wąsewo", "Mszadla", "Korycin", "Sobienie-Jeziory", "Rokiciny-Kolonia", "Chobienia", "Obory", "Naramice", "Wleń", "Udorpie", "Janczewice", "Załęcze Wielkie", "Miłowice", "Jazgarzew", "Kraszkowice", "Minkowice Oławskie", "Polnica", "Bodzanów", "Lututów", "Bielkówko", "Zaździerz", "Tyble", "Malczyce", "Nowe Miasto", "Tymienice", "Jaworzyna Śląska", "Brodnica Górna", "Leśmierz", "Żarów", "Kamienica Szlachecka", "Sękocin Stary", "Dziemiany", "Klwów", "Cikowice", "Garczyn", "Zatory", "Drwinia", "Rakowiec", "Polany", "Nowy Wiśnicz", "Siechnice", "Bojmie", "Chodów", "Mokrzyska", "Henryków", "Ostaszewo", "Borki-Kosy", "Maszkienice", "Pieńsk", "Kosakowo", "Iłów", "Gnojnik", "Świerzawa", "Niepoględzie", "Jabłonna Lacka", "Alwernia", "Koneck", "Jezierzyce", "Przywózki", "Zbiczno", "Lubichowo", "Bieniewice", "Nieczajna Górna", "Pinczyn", "Bronisze", "Luszowice", "Trzebcz Szlachecki", "Mała Słońca", "Strzeszyn", "Zbójno", "Kostkowo", "Łosiewice", "Kobylanka", "Świecie nad Osą", "Bolszewo", "Łużna", "Rojewo", "Ciemne", "Uście Gorlickie", "Skępe", "Dobieszowice", "Długosiodło", "Igołomia", "Szczyrk", "Zielona", "Bronów", "Puszcza Mariańska", "Mogilany", "Kamień Krajeński", "Międzyrzecze Górne", "Skorogoszcz", "Balice", "Brąchnówko", "Baborów", "Mała Nieszawka", "Ogrodzona", "Drawno", "Rewal", "Kołbacz", "Bonin", "Boleszkowice", "Trzebież", "Malechowo", "Redło", "Resko", "Nowy Kazanów", "Tarłów", "Działoszyce", "Dwikozy", "Linów", "Staw Kunowski", "Ruszcza", "Szydłów", "Kurzelów", "Bisztynek", "Lidzbark", "Lubawa", "Reszel", "Wipsowo", "Gietrzwałd", "Klebark Wielki", "Miłakowo", "Orzysz", "Dąbrowy", "Lubasz", "Żydowo", "Granowo", "Jaraczewo", "Łuszczanów", "Piotrów", "Dzierzbin", "Żelazków", "Mikorzyn", "Brdów", "Ruszków Pierwszy", "Skulsk", "Stare Oborzyska", "Kobylin", "Drzeczkowo", "Kwilcz", "Zębowo", "Ludomy", "Topola Mała", "Janków Przygodzki", "Czajków", "Zelgniewo", "Chocz", "Lutynia", "Kuchary", "Dopiewo", "Kostrzyn", "Czapury", "Mrowino", "Trzebosz", "Młodojewo", "Sokolniki Wielkie", "Murzynowo Leśne", "Manieczki", "Brudzew", "Władysławów", "Łekno", "Starkowo", "Targowa Górka", "Głubczyn", "Gostycyn", "Kończyce Wielkie", "Ostrożnica", "Laskowa", "Brześć Kujawski", "Międzyświeć", "Reńska Wieś", "Podobin", "Nakonowo", "Łojki", "Chudoba", "Lubostroń", "Rzerzęczyce", "Dąbrówka Górna", "Lelów", "Jastrzębie", "Siepraw", "Piszczac", "Idzikowice", "Tokarnia", "Włodary", "Biała Niżna", "Tereszpol-Zaorenda", "Wilcza", "Królowa Górna", "Łany Wielkie", "Czyrna", "Wierzchowiska Drugie", "Krzepice", "Stary Paczków", "Szczawnik", "Terpentyna", "Panki", "Pludry", "Olszana", "Urzędów", "Kalej", "Łowoszów", "Czarny Dunajec", "Kock", "Lisów", "Niedzica", "Jabłonna Pierwsza", "Rusinowice", "Dobrzeń Wielki", "Skawa", "Niemce", "Woźniki", "Kępa", "Spiczyn", "Ryczówek", "Gręzówka", "Frydek", "Karłowice", "Kąpiele Wielkie", "Chodel", "Piasek", "Tarnów Opolski", "Podedwórze", "Głębowice", "Klementowice", "Zabełków", "Przeciszów", "Wola Osowińska", "Budziska", "Staniszcze Wielkie", "Ulan-Majorat", "Gamów", "Naprawa", "Zwonowice", "Domaradz", "Lachowice", "Mełgiew", "Ożarowice", "Nozdrzec", "Stare Żukowice", "Łaszczów", "Wojska", "Łęki Górne", "Biskupice Radłowskie", "Wola Uhruska", "Imielin", "Munina", "Turza", "Godów", "Kołaczyce", "Zbylitowska Góra", "Lubomia", "Kolbuszowa Dolna", "Łopoń", "Kroczyce", "Wola Raniżowska", "Ilkowice", "Iwonicz-Zdrój", "Szerzyny", "Sopotnia Mała", "Zarzecze", "Dachnów", "Stare Kurowo", "Rychwałdek", "Albigowa", "Tomice", "Żabnica", "Żołynia", "Przybradz", "Skąpe", "Podłęże", "Podmokle Wielkie", "Rudnik nad Sanem", "Śledziejowice", "Nietków", "Pacanów", "Prałkowce", "Racula", "Żarczyce Duże", "Stubienko", "Gąsocin", "Brzegi", "Jagiełła", "Izdebno", "Sieniawa Żarska", "Bodzentyn", "Wolica Piaskowa", "Gończyce", "Domiechowice", "Pogwizdów Nowy", "Szczerców", "Tumlin-Węgle", "Ojrzanów-Towarzystwo", "Stobierna", "Nowotaniec", "Sieciechów", "Domaniewice", "Wierzbowa", "Zdziechowice Drugie", "Wólka Radzymińska", "Piława Górna", "Babica", "Łajski", "Godowa", "Huszlew", "Szczyty", "Czernina", "Wydrza", "Wola Wiewiecka", "Poniatów", "Mysłakowice", "Nowe Aleksandrowo", "Kałuszyn", "Wartkowice", "Marciszów", "Supraśl", "Ładzyń", "Kamieńsk", "Ołdrzychowice Kłodzkie", "Zabłudów", "Kazuń Nowy", "Biała Rawska", "Czeremcha", "Czerwin", "Jarocice", "Stronie Śląskie", "Goniądz", "Troszyn", "Bolimów", "Miłkowice", "Mielnik", "Regut", "Zaręba", "Zakręt", "Twarda", "Zamienie", "Krzyworzeka", "Borowy Młyn", "Baszkówka", "Popowice", "Rytel", "Tarczyn", "Chróścin", "Sobocisko", "Koczała", "Drobin", "Łubnice", "Górka Sobocka", "Buszkowy Górne", "Wyszogród", "Pszczółki", "Przodkowo", "Niesułków", "Prusice", "Sulęczyno", "Chorzele", "Czarny Bór", "Łubiana", "Wieniawa", "Nieszkowice Wielkie", "Stara Kiszewa", "Jedlińsk", "Świniary", "Kobierzyce", "Ryjewo", "Zalesice", "Dąbrówka", "Rzeplin", "Nowa Wieś Lęborska", "Mordy", "Przedborowa", "Stare Pole", "Wiśniew", "Czchów", "Złoty Stok", "Sztutowo", "Ruszów", "Leśniewo", "Bielany-Jarosławy", "Porąbka Iwkowska", "Szczypkowice", "Skrzeszew", "Zbrachlin", "Czarna Woda", "Chlewiska", "Myślachowice", "Dąbrowa Chełmińska", "Kampinos", "Niemcz", "Gniew", "Blizne Jasińskiego", "Maniów", "Grzybno", "Turze", "Liw", "Libusza", "Strzebielino", "Grabiny", "Stróżówka", "Gąski", "Chajęty", "Wola Łużańska", "Przeginia Duchowna", "Strzyżowice", "Kazanów", "Przeginia", "Potulice", "Bestwinka", "Siemiątkowo", "Czułów", "Zabrzeg", "Kopanka", "Więcbork", "Wierzbnik", "Pruszcz", "Dankowice", "Lubsza", "Rząska", "Górki Małe", "Przybiernów", "Cedynia", "Dziwnów", "Ustronie Morskie", "Polanów", "Karsko", "Łubowo", "Człopa", "Stąporków", "Sędowice", "Młodzawy Duże", "Postronna", "Bliżyn", "Wąchock", "Skorków", "Bebelno-Wieś", "Frombork", "Gronowo Elbląskie", "Zalewo", "Kozłowo", "Barczewo", "Dywity", "Olsztynek", "Jaroty", "Stare Jabłonki", "Gawrzyjałki", "Mikołajewo", "Kiszkowo", "Śniaty", "Witaszyce", "Roszków", "Wola Droszewska", "Stawiszyn", "Donaborów", "Grzegorzew", "Kazimierz Biskupi", "Wierzbinek", "Kiełczewo", "Rydzyna", "Bielsko", "Gorzyce Wielkie", "Raszków", "Kobyla Góra", "Kaczory", "Szydłowo", "Wieczyn", "Tursko", "Kuczków", "Robakowo", "Długa Goślina", "Jeziorki", "Szkaradowo", "Dolany", "Strzałkowo", "Chocicza", "Książ Wielkopolski", "Malanów", "Gołańcz", "Siekowo", "Jażyniec", "Kołaczkowo", "Podróżna", "Śliwice", "Pawłowiczki", "Mszana Górna", "Śmiłowice", "Zbytków", "Lubraniec", "Zawisna", "Tenczyn", "Rększowice", "Walce", "Borzęta", "Janów Podlaski", "Mstów", "Bukowa Śląska", "Biertowice", "Sławatycze", "Poczesna", "Goworowice", "Węglówka", "Frampol", "Przyszowice", "Jasienica Dolna", "Rudziniec", "Goświnowice", "Błażek", "Meszno", "Kadcza", "Siennica Nadolna", "Parzymiechy", "Unikowice", "Nawojowa", "Stróża-Kolonia", "Wąsosz Górny", "Kozłowice", "Moszczenica Niżna", "Wręczyca Wielka", "Wojciechów", "Jabłonka", "Bełżyce", "Kochcice", "Waksmund", "Kozubszczyzna", "Kośmidry", "Dobrzeń Mały", "Raba Wyżna", "Cyców", "Jełowa", "Bydlin", "Wola Gułowska", "Żarki-Letnisko", "Zederman", "Stanin", "Pielgrzymowice", "Ligota Prószkowska", "Jawiszowice", "Opole Lubelskie", "Tułowice", "Bielany", "Janowiec", "Łańce", "Gostomia", "Gołąb", "Krzyżanowice", "Krośnica", "Zator", "Brzozowica Duża", "Górki Śląskie", "Baczyn", "Ostrówki", "Gaszowice", "Toporzysko", "Rososz", "Ciężkowice", "Orzech", "Nowa Jastrząbka", "Tyszowce", "Bobrowa", "Zdrochec", "Skierbieszów", "Tapin", "Pogórska Wola", "Olza", "Osiek Jasielski", "Tuchów", "Lipki Wielkie", "Marklowice", "Widełka", "Gwoździec", "Budachów", "Wierbka", "Chorkówka", "Siedliszowice", "Przytoczna", "Gilowice", "Kościelisko", "Konotop", "Brzóza Królewska", "Targanice", "Ośno Lubuskie", "Ruda Różaniecka", "Mucharz", "Zwierzyn", "Świnna", "Kraczkowa", "Jaroszowice", "Gądków Wielki", "Chorzelów", "Rogoziniec", "Ławnica", "Siercza", "Bojadła", "Bircza", "Gorzków", "Niziny", "Orły", "Iłowa", "Nagłowice", "Wyszatyce", "Łaskarzew", "Lipinki Łużyckie", "Wodzisław", "Miastków Kościelny", "Stare Drzewce", "Piotrkowice", "Błażowa", "Łękińsko", "Piekoszów", "Krasne", "Chynów", "Głowaczów", "Świnice Warckie", "Tarnawa Dolna", "Nieborów", "Kotowa Wola", "Kąty Węgierskie", "Natolin", "Piława Dolna", "Gogołów", "Długowola Pierwsza", "Dobroń", "Kotla", "Skopanie", "Rusków", "Nowa Brzeźnica", "Wąsosz", "Średnia Wieś", "Różan", "Lipsk", "Ruda", "Gomulin", "Stara Kamienica", "Juchnowiec Dolny", "Mrozy", "Dobryszyce", "Suraż", "Masłowice", "Lewin Kłodzki", "Stare Pieścirogi", "Błaszki", "Przygórze", "Dylewo", "Goszczanów", "Krypno Wielkie", "Małkinia Górna", "Drzewce", "Różanystok", "Otwock Wielki", "Nowy Glinnik", "Szklary Górne", "Czyżew-Osada", "Borzytuchom", "Mroków", "Osjaków", "Dobroszyce", "Półczno", "Skomlin", "Danielowice", "Bielsk", "Czastary", "Grębocice", "Dobrzyków", "Pichlice", "Mikoszów", "Baboszewo", "Czechy", "Miechucino", "Popów Głowieński", "Pszenno", "Goręczyno", "Falenty", "Besiekierz Rudny", "Kryniczno", "Chwaszczyno", "Borkowice", "Bogucice", "Sokołowsko", "Kościerzyna-Wybudowanie", "Przemiarowo", "Stanisławice", "Mirków", "Korzeniewo", "Przytyk", "Łapanów", "Mietków", "Korczew", "Bardo", "Charbrowo", "Przesmyki", "Szklary", "Marzęcino", "Zbuczyn", "Studzieniec", "Biesiadki", "Damnica", "Rytele-Olechny", "Nieszawa", "Wrzeście", "Skibniew-Podawce", "Gromiec", "Jabłonowo Pomorskie", "Bobowo", "Rywałd", "Zalipie", "Kulice", "Zielonki-Parcela", "Biecz", "Kowalewo Pomorskie", "Radzyń Chełmiński", "Szemud", "Kryg", "Pakość", "Czernin", "Nowe Ręczaje", "Ropa", "Kikół", "Sączów", "Poręba Średnia", "Rybna", "Padniewo", "Siewierz", "Tenczynek", "Godziszka", "Świętoszówka", "Górna Grupa", "Bujaków", "Modlniczka", "Gruczno", "Olszanka", "Rudawa", "Brzozówka", "Iskrzyczyn", "Bierzwnik", "Wierzchowo", "Pobierowo", "Mieszkowice", "Międzyzdroje", "Biesiekierz", "Nowe Warpno", "Marianowo", "Nieświń", "Podgórze", "Michałów", "Miernów", "Chobrzany", "Suchedniów", "Szczeglice", "Wiązownica Duża", "Moskorzew", "Iłowo-Osada", "Wydminy", "Karolewo", "Piecki", "Kurzętnik", "Kronowo", "Sząbruk", "Purda", "Łukta", "Biała Piska", "Jedwabno", "Świętajno", "Margonin", "Krzyż Wielkopolski", "Niechanowo", "Pogorzela", "Wilkowo Polskie", "Bachorzew", "Żerków", "Lisków", "Staw", "Trzcinica", "Powiercie", "Kramsk", "Czempiń", "Śmigiel", "Garzyn", "Włoszakowice", "Wąsowo", "Odolanów", "Wtórek", "Sośnie", "Dziembowo", "Wyrzysk", "Galew", "Gołuchów", "Taczanów Drugi", "Kicin", "Biedrusko", "Tarnowo Podgórne", "Dłoń", "Cienin Kościelny", "Duszniki", "Grzymiszew", "Skoki", "Radomierz", "Tuchorza", "Nekla", "Tarnówka", "Łany", "Kamienica", "Książki", "Pierściec", "Mechnica", "Kasinka Mała", "Fabianki", "Bąków", "Gronowice", "Książ Wielki", "Gąsawa", "Rudnik Wielki", "Kórnica", "Droginia", "Domaszowice", "Leśna Podlaska", "Mykanów", "Pokój", "Wisznice", "Korfantów", "Grybów", "Markowicze", "Nieborowice", "Mańkowice", "Florynka", "Wierzbica-Osiedle", "Bargłówka", "Złotogłowice", "Mochnaczka Wyżna", "Stojeszyn Pierwszy", "Łobodno", "Dziewiętlice", "Żegiestów", "Mokra", "Brzezna", "Olbięcin", "Kuźnica Stara", "Borki Małe", "Jeziorzany", "Sieraków Śląski", "Strojec", "Frydman", "Mętów", "Sadów", "Sławice", "Tylmanowa", "Ciecierzyn", "Lisowice", "Ochodze", "Milejów", "Murów", "Jaroszowiec", "Krzywda", "Kobiór", "Szczedrzyk", "Trzebieszów Drugi", "Wisła Wielka", "Zasole", "Milanów", "Suszec", "Witkowice", "Końskowola", "Włosienica", "Żyrzyn", "Piotrówka", "Koszyce", "Zabiele", "Pietrowice Wielkie", "Rozmierka", "Palcza", "Swaty", "Lyski", "Krupski Młyn", "Jasienica Rosielna", "Gromnik", "Jarczów", "Boruszowice", "Podgrodzie", "Pleśna", "Hańsk Pierwszy", "Przezchlebie", "Lubcza", "Cieklin", "Koszyce Małe", "Jenin", "Rogów", "Cmolas", "Biadoliny Radłowskie", "Nowiny Wielkie", "Poręba", "Mazury", "Nieciecza", "Goleniowy", "Lubatówka", "Otfinów", "Trzciel", "Korbielów", "Roczyny", "Nowe Miasteczko", "Przytkowice", "Dobiegniew", "Zwardoń", "Wola Dalsza", "Stryszów", "Lubniewice", "Cięcina", "Wola Batorska", "Kosieczyn", "Jeżowe", "Mietniów", "Mikułowice", "Huwniki", "Przylep", "Prząsław", "Kuńkowce", "Grudusk", "Bożnów", "Słupia", "Kańczuga", "Trzebiel", "Skalbmierz", "Lipówki", "Łopuszno", "Wysoka Głogowska", "Sanniki", "Wola Wiązowa", "Osiedle Nowiny", "Strażów", "Ostrowy", "Kozietuły", "Marzenin", "Besko", "Świerże Górne", "Bielawy", "Pysznica", "Skierdy", "Justynów", "Czudec", "Stasi Las", "Drzewica", "Niebylec", "Pawliczka", "Glinka", "Ślęzaki", "Sarnaki", "Siemkowice", "Pomocne", "Sypniewo", "Janowice Wielkie", "Dobrzyniewo Duże", "Okuniew", "Poddębice", "Lubawka", "Michałowo", "Siennica", "Gomunice", "Bystrzyca Kłodzka", "Tykocin", "Szreńsk", "Żytno", "Wolibórz", "Zakroczym", "Barczew", "Ścinawka Dolna", "Piątnica Poduchowna", "Olszewo-Borki", "Wróblew", "Kunice", "Puńsk", "Maków", "Pobiedna", "Krynki", "Pęclin", "Ciebłowice Duże", "Rudna", "Szumowo", "Młynisko", "Cieszków", "Kołczygłowy", "Dzietrzniki", "Mierzyce", "Wierzchowo-Dworzec", "Miszewo Murowane", "Chojny", "Radwanice", "Kolbudy", "Radzanowo", "Walichnowy", "Miękinia", "Rokitnica", "Sochocin", "Krasków", "Dzierżążno", "Leźnica Wielka-Osiedle", "Gołubie", "Rybie", "Jeżów", "Jedlina-Zdrój", "Wiele", "Gawłów", "Wińsko", "Dziewin", "Smolec", "Ruda Wielka", "Borek", "Święta Katarzyna", "Bukowina", "Mokobody", "Łąkta Górna", "Stoszowice", "Miłoradz", "Skórzec", "Poręba Spytkowska", "Lubnów", "Drewnica", "Izdebki-Kosny", "Łoniowa", "Sulików", "Teresin", "Lewniowa", "Główczyce", "Kosów Lacki", "Regulice", "Raciążek", "Włynkówko", "Łazów", "Bolęcin", "Białe Błota", "Gręboszów", "Nowa Wieś Wielka", "Borzęcin Duży", "Skrzynka", "Lisewo", "Subkowy", "Grębków", "Luzino", "Kwiatonowice", "Dzierzgoń", "Mszanka", "Kozły", "Wysowa-Zdrój", "Tłuchowo", "Mierzęcice", "Lucynów Duży", "Iwanowice Włościańskie", "Kcynia", "Janowice", "Kuczbork-Osada", "Rynarzewo", "Radziejowice", "Skała", "Rudzica", "Skarbimierz Osiedle", "Słomniki", "Nowe", "Czernikowo", "Zielonki", "Zławieś Mała", "Simoradz", "Pełczyce", "Białuń", "Trzebiatów", "Trzcińsko-Zdrój", "Gościno", "Rosnowo", "Barnówko", "Ostrowiec", "Barwice", "Rąbino", "Węgorzyno", "Radoszyce", "Kije", "Bogucice Pierwsze", "Klimontów", "Zawichost", "Styków", "Sichów Duży", "Kluczewsko", "Konieczno", "Sępopol", "Wlewsk", "Prostki", "Kisielice", "Warpuny", "Cimochy", "Jeziorany", "Stawiguda", "Lipowiec", "Jędrzejewo", "Połajewo", "Zdziechowa", "Mielżyn", "Nosków", "Potarzyca", "Ceków-Kolonia", "Przyranie", "Mroczeń", "Siemianice", "Babiak", "Osiek Mały", "Lubstów", "Stary Lubosz", "Koźmin Wielkopolski", "Kąkolewo", "Kamionna", "Lwówek", "Ryczywół", "Czekanów", "Przygodzice", "Doruchów", "Białośliwie", "Łobżenica", "Broniszewice", "Koźminiec", "Więckowice", "Przebędowo", "Kiekrz", "Gortatowo", "Dubin", "Masłowo", "Kotunia", "Ostroróg", "Pięczkowo", "Wieszczyczyn", "Piekary", "Wiatrowo", "Chobienice", "Obra", "Pyzdry", "Krajenka", "Żalno", "Hażlach", "Gościęcin", "Ujanowice", "Strumień", "Większyce", "Lubanie", "Dąbrowa Zielona", "Lasowice Wielkie", "Skomielna Biała", "Łabiszyn", "Strzeleczki", "Osieczany", "Terespol", "Małusy Wielkie", "Ligota Książęca", "Chotyłów", "Huta Stara A", "Glichów", "Korczów", "Przechód", "Kąclowa", "Turobin", "Pławniowice", "Koperniki", "Mystków", "Sośnicowice", "Jasienica Górna", "Czarny Potok", "Lindów", "Trzeboszowice", "Złockie", "Gościeradów-Folwark", "Popów", "Dobrodzień", "Rytro", "Wilkołaz Pierwszy", "Truskolasy", "Sowczyce", "Kluszkowce", "Michów", "Herby", "Zębowice", "Gronków", "Piotrków Pierwszy", "Gwoździany", "Kamieńskie Młyny", "Łubniany", "Krzykawa", "Grabin", "Warszowice", "Popielów", "Józefów nad Wisłą", "Studzienice", "Przywory", "Gorzów", "Rzuchów", "Ligota Bialska", "Harmęże", "Markuszów", "Bieńkowice", "Szybowice", "Podolsze", "Czemierniki", "Nędza", "Leśnica", "Kielcza", "Ownia", "Niebocko", "Zawoja", "Tąpkowice", "Lisia Góra", "Michalów", "Zbrosławice", "Grabowiec", "Pawłosiów", "Skrbeńsko", "Nowy Żmigród", "Nowodworze", "Lubiszyn", "Nieboczowy", "Kolbuszowa Górna", "Wielka Wieś", "Bobrowice", "Ogrodzieniec", "Mechowiec", "Łęg Tarnowski", "Bledzew", "Międzybrodzie Bialskie", "Bytom Odrzański", "Sopotnia Wielka", "Wierzawice", "Zagórnik", "Cybinka", "Milówka", "Lisie Jamy", "Kalwaria Zebrzydowska", "Pewel Ślemieńska", "Handzlówka", "Wędrzyn", "Nidek", "Szczaniec", "Rzemień", "Nowe Kramsko", "Ulanów", "Kokotów", "Kargowa", "Solec-Zdrój", "Krzywcza", "Przybyszew", "Gozdnica", "Małogoszcz", "Gołotczyzna", "Miąsowa", "Iwierzyce", "Stary Pilczyn", "Chęciny", "Wielopole Skrzyńskie", "Wilga", "Drużbice", "Jeziorko", "Łowisko", "Podkowa Leśna", "Samsonów", "Wólka Niedźwiedzka", "Orątki Górne", "Trzebownisko", "Góra Świętej Małgorzaty", "Pakoszówka", "Stare Słowiki", "Kiernozia", "Nowogrodziec", "Lipa", "Zegrze Południowe", "Gałków Duży", "Stępina", "Janówek Pierwszy", "Przedmoście", "Wysoka Strzyżowska", "Niechlów", "Krasnosielc", "Bogumiłowice", "Wądroże Wielkie", "Sulejów", "Miłków", "Gródek", "Latowicz", "Zadzim", "Duszniki-Zdrój", "Grabówka", "Pustelnik", "Lgota Wielka", "Krosnowice", "Kaliszki", "Sadkowice", "Jugów", "Kleszczele", "Goworowo", "Burzenin", "Szczytna", "Jasionówka", "Prochowice", "Nurzec-Stacja", "Sobiekursk", "Będków", "Wąwał", "Gryfów Śląski", "Złotokłos", "Załęcze Małe", "Konarzyny", "Zagroba", "Żdżary", "Chocianów", "Łęg Probostwo", "Wójcin", "Przeworno", "Pręgowo Górne", "Szadek", "Ciechów", "Trąbki Wielkie", "Stanowice", "Wolica", "Gieczno", "Jednorożec", "Głuszyca", "Obryte", "Proszówki", "Jedlnia-Letnisko", "Lipnica Murowana", "Pustków Żurawski", "Sadlinki", "Bieniędzice", "Jodłówka", "Lubowidz", "Hołubla", "Bielcza", "Stolec", "Krynica Morska", "Seroczyn", "Biskupice Melsztyńskie", "Zawidów", "Hel", "Gozdowo", "Wola Dębińska", "Czerwona Woda", "Żelistrzewo", "Rozbity Kamień", "Sabnie", "Balin", "Skórcz", "Orońsko", "Ostromecko", "Smętowo Graniczne", "Mędrzechów", "Borki", "Ruchna", "Wilczyska", "Mełno", "Stoczek", "Janikowo", "Gościszewo", "Jadów", "Staszkówka", "Duczki", "Wojkowice Kościelne", "Czarnolas", "Dojazdów", "Bestwina", "Rączna", "Osięciny", "Iłownica", "Kopice", "Wrząsowice", "Pisarzowice", "Radwanowice", "Złotoria", "Nowa Cerekwia", "Karlino", "Drawsko Pomorskie", "Stepnica", "Chojna", "Golczewo", "Mścice", "Sianów", "Mierzyn", "Brzezin", "Chociwel", "Borne Sulinowo", "Baćkowice", "Sarnówek Duży", "Węchadłów", "Kozubów", "Łoniów", "Gózd", "Bogoria", "Koniemłoty", "Krasocin", "Wola Wiśniowa", "Pieniężno", "Milejewo", "Miłki", "Łęgajny", "Kieźliny", "Waplewo", "Świątki", "Tyrowo", "Dźwierzuty", "Romany", "Wyszyny", "Śmieszkowo", "Kłecko", "Pudliszki", "Łubnica", "Siedlemin", "Godziesze Wielkie", "Zbiersk", "Bralin", "Trębaczów", "Borysławice Kościelne", "Kleczew", "Wilczyn", "Rozdrażew", "Święciechowa", "Łowyń", "Kotowiecko", "Daniszyn", "Latowice", "Kraszewice", "Morzewo", "Stara Łubianka", "Żegocin", "Kucharki", "Lenartowice", "Czerwonak", "Kleszczewo", "Borówiec", "Łopuchowo", "Stęszew", "Lusówko", "Konary", "Orchowo", "Zagórów", "Gałowo", "Nowe Miasto nad Wartą", "Chrząstowo", "Przykona", "Mieścisko", "Bucz", "Kopanica", "Orzechowo", "Kaczanowo", "Lipka", "Szczyrzyc", "Kiczyce", "Wronin", "Raba Niżna", "Chodecz", "Pruchna", "Bogacica", "Miechów-Charsznica", "Kamionek", "Aleksandria", "Jawornik", "Kodeń", "Kuźnica Kiedrzyńska", "Smogorzów", "Krzywaczka", "Małaszewicze", "Wrzosowa", "Lipniki", "Goraj", "Żernica", "Lasocice", "Ptaszkowa", "Sawin", "Rachowice", "Berest", "Dzwola", "Świbie", "Wójcice", "Łącko", "Krupe", "Zimnowoda", "Wilamowa", "Huta Józefów", "Więcki", "Zdziechowice", "Abramów", "Kiczory", "Bychawa", "Kochanowice", "Narok", "Krempachy", "Niedrzwica Duża", "Łagiewniki Wielkie", "Chmielowice", "Ludwin", "Luboszyce", "Chechło", "Adamów", "Poraj", "Dylaki", "Żurada", "Kopina", "Ćwiklice", "Prószków", "Przecieszyn", "Poniatowa", "Kryry", "Kotórz Mały", "Bulowice", "Kazimierz Dolny", "Pogrzebień", "Rajsko", "Góra Puławska", "Tworków", "Otmice", "Niegardów", "Kąkolewnica Południowa", "Dziewkowice", "Bieńkówka", "Jejkowice", "Jasionów", "Świerklaniec", "Nowe Żukowice", "Ulhówek", "Świętoszowice", "Straszęcin", "Zalasowa", "Bodaczów", "Szówsko", "Gorzyczki", "Skołyszyn", "Wierzchosławice", "Santok", "Mszana", "Kupno", "Wróblowice", "Bytnica", "Rokitno", "Zręcin", "Pszczew", "Rychwałd", "Rymanów", "Witów", "Sienna", "Wola Żarczycka", "Juszczyna", "Oleszyce", "Bachowice", "Krzeszyce", "Ujsoły", "Sonina", "Klecza Dolna", "Boczów", "Podleszany", "Kręcko", "Jaślany", "Czerwieńsk", "Dubiecko", "Golkowice", "Trzebiechów", "Tuczępy", "Nehrybka", "Glinojeck", "Małomice", "Oksa", "Cudzynowice", "Gnojnica", "Parysów", "Daleszyce", "Boguchwała", "Skrzeszewy", "Łuszczanowice", "Raków", "Malawa", "Krośniewice", "Bratkowice", "Jasieniec", "Teodory", "Gniewoszów", "Czaszyn", "Chotomów", "Bełchów", "Iwiny", "Zbydniów", "Wola Kiełpińska", "Łagiewniki", "Lubla", "Lipsko", "Witoszyce", "Wola Baranowska", "Platerów", "Hoczew", "Rzewnie", "Gorzkowice", "Choroszcz", "Kobierne", "Wolbórz", "Ignatki", "Jeruzal", "Gidle", "Turośń Kościelna", "Radzanów", "Przedbórz", "Międzylesie", "Rajgród", "Kosewo", "Gruszczyce", "Stawiski", "Łyse", "Klonowa", "Rokitki", "Mońki", "Komorowo", "Lipce Reymontowskie", "Świeradów-Zdrój", "Kołbiel", "Lubochnia", "Wiercień", "Biała Rządowa", "Mirsk", "Dziadowa Kłoda", "Tuchomie", "Bobrowiec", "Polwica", "Ględowo", "Zągoty", "Galewice", "Cedry Wielkie", "Łąck", "Wiązów", "Łęgowo", "Czerwińsk nad Wisłą", "Ochraniew", "Mąkolice", "Witoszów Dolny", "Somonino", "Grotniki", "Żmigród", "Gielniów", "Liniewo", "Winnica", "Baczków", "Mareza", "Skaryszew", "Stary Wiśnicz", "Siemirowice", "Kotuń", "Okulice", "Ciepłowody", "Wicko", "Białki", "Jadowniki", "Borki-Wyrki", "Porąbka Uszewska", "Porajów", "Uszew", "Twardocice", "Dębnica Kaszubska", "Dzierzby-Włościańskie", "Kwaczała", "Bądkowo", "Redzikowo", "Grochów Szlachecki", "Pokrzydowo", "Kaliska", "Radzików", "Smęgorzów", "Wtelno", "Zblewo", "Radgoszcz", "Lipków", "Binarowa", "Dulsk", "Łochów", "Dominikowice", "Gościcino", "Lipinki", "Sękowa", "Wioska", "Rogoźnik", "Stare Bosewo", "Wawrzeńczyce", "Wylatowo", "Sławków", "Bieżuń", "Wola Filipowska", "Sadki", "Rybarzowice", "Bartniki", "Raciborowice", "Skrwilno", "Mazańcowice", "Wielkie Drogi", "Drzycim", "Kobiernice", "Przecza", "Przylesie", "Dębowiec", "Bierawa", "Moryń", "Wolin", "Bobolice", "Dziedzice", "Stara Dąbrowa", "Bełczna", "Lasocin", "Kunów", "Gacki", "Czyżów Szlachecki", "Smerdyna", "Secemin", "Górowo Iławeckie", "Narzym", "Tolkmicko", "Korsze", "Sorkwity", "Kowale Oleckie", "Ramsowo", "Biesal", "Butryny", "Małdyty", "Bemowo Piskie", "Pasym", "Wielbark", "Szamocin", "Lubcz Wielki", "Czerniejewo", "Poniec", "Rusko", "Janków Drugi", "Korzeniew", "Kokanin", "Krążkowy", "Wrząca Wielka", "Rychwał", "Bonikowo", "Czacz", "Krzemieniewo", "Chrzypsko Wielkie", "Michorzewo", "Parkowo", "Wysocko Wielkie", "Czarnylas", "Granowiec", "Rogaszyce", "Śmiłowo", "Osiek nad Notecią", "Karmin", "Kajew", "Zielona Łąka", "Miękowo", "Rosnówko", "Rogalinek", "Rokietnica", "Chludowo", "Bojanowo", "Chojno", "Cienin Zaborny", "Kaźmierz", "Krzykosy", "Zaniemyśl", "Słodków", "Wapno", "Kaszczor", "Świętno", "Zasutowo", "Jastrowie", "Stara Wiśniewka", "Cisek", "Zbludza", "Kowal", "Pokrzywnica", "Konina", "Izbica Kujawska", "Jasienie", "Janowiec Wielkopolski", "Kłomnice", "Żywocice", "Głogoczów", "Lgota Mała", "Smarchowice Wielkie", "Czasław", "Łomazy", "Stary Cykarzew", "Świerczów", "Krzczonów", "Starcza", "Ścinawa Nyska", "Chełmiec", "Tarnogród", "Pilchowice", "Sowin", "Kamionka Wielka", "Rejowiec", "Smolnica", "Jarnołtów", "Muszynka", "Modliborzyce", "Kamyk", "Gościce", "Muszyna", "Annopol", "Ostrowy nad Okszą", "Skoroszyce", "Podegrodzie", "Rzeczyca Ziemiańska", "Przystajń", "Borki Wielkie", "Ciasna", "Sternalice", "Łapsze Niżne", "Wilczopole", "Ochotnica Dolna", "Dys", "Polska Nowa Wieś", "Puchaczów", "Wyry", "Zagwiździe", "Kwaśniów Dolny", "Czerśl", "Stare Siołkowice", "Gołaczewy", "Wojcieszków", "Czarków", "Kosorowice", "Bobrek", "Mizerów", "Bierdzany", "Malec", "Krzanowice", "Łąka Prudnicka", "Polanka Wielka", "Rudy", "Kolonowskie", "Nowe Brzesko", "Krowiarki", "Jaryszów", "Oszczywilk", "Adamowice", "Grabownica Starzeńska", "Stryszawa", "Potępa", "Orzechówka", "Siemiechów", "Lubycza Królewska", "Tworóg", "Latoszyn", "Rzuchowa", "Urszulin", "Łowce", "Rzepiennik Biskupi", "Zwierzyniec", "Wola Dębowiecka", "Deszczno", "Turza Śląska", "Grabno", "Witnica", "Raniżów", "Stary Raduszec", "Żarnowiec", "Iwonicz", "Ołpiny", "Brójce", "Krzyżowa", "Grodzisko Górne", "Inwałd", "Otyń", "Pietrzykowice", "Nowe Sioło", "Stanisław Dolny", "Drezdenko", "Ślemień", "Cierpisz", "Stronie", "Słońsk", "Rakszawa", "Łagów", "Padew Narodowa", "Zabierzów Bocheński", "Dąbrówka Wielkopolska", "Strumiany", "Leśniów Wielki", "Wójcza", "Krasiczyn", "Drzonków", "Skroniów", "Ostrów", "Ojrzeń", "Łęknica", "Mokrsko Dolne", "Nowosielce", "Wola Rębkowska", "Tuplice", "Wzdół Rządowy", "Góra Ropczycka", "Sobolew", "Kostomłoty Drugie", "Szczawin Kościelny", "Rusiec", "Promnik", "Trzeboś", "Żabia Wola", "Strzelce", "Łukawiec", "Mogielnica", "Widawa", "Bukowsko", "Magnuszew", "Sobota", "Gromadka", "Radomyśl nad Sanem", "Bedoń-Wieś", "Wyżne", "Serby", "Dobrzechów", "Przedmieście Dalsze", "Raciszyn", "Stara Kornica", "Strzelce Wielkie", "Niedaszów", "Stary Szelków", "Przygłów", "Łomnica", "Fasty", "Długa Kościelna", "Uniejów", "Chełmsko Śląskie", "Ogrodniczki", "Stanisławów", "Gorzędów", "Jaszkowa Dolna", "Bożków", "Białowieża", "Brzeźnio", "Wambierzyce", "Śniadowo", "Rzekuń", "Złoczew", "Legnickie Pole", "Celestynów", "Kuźnica", "Wiązowna", "Smardzewice", "Ścinawa", "Długobórz Pierwszy", "Krośnice", "Brzeźno Szlacheckie", "Chyliczki", "Pątnów", "Łąg", "Wola Prażmowska", "Wierzchlas", "Bystrzyca", "Debrzno", "Brudzeń Duży", "Dzietrzkowice", "Borów", "Mrozów", "Juszkowo", "Kroczewo", "Jaroszów", "Kiełpino", "Młochów", "Pęgów", "Klukowa Huta", "Szczawno-Zdrój", "Karsin", "Gałki", "Łapczyca", "Grabowo Kościerskie", "Iłża", "Mikluszowice", "Mokronos Górny", "Barcice", "Wierzbica", "Bratucice", "Żerniki Wrocławskie", "Garczegorze", "Niwiski", "Żegocina", "Srebrna Góra", "Nowy Staw", "Suchożebry", "Szczepanów", "Mąkolno", "Stegna", "Ługi Wielkie", "Łysa Góra", "Węgliniec", "Krokowa", "Iwkowa", "Pobłocie", "Repki", "Olszyny", "Brudnowo", "Smołdzino", "Sterdyń", "Młoszowa", "Łochowo", "Szlachta", "Hornówek", "Wola Mędrzechowska", "Opalenie", "Unisław", "Swarożyn", "Rożnowice", "Mały Rudnik", "Rozłazino", "Sadowne", "Ropica Polska", "Gniewkowo", "Mikołajki Pomorskie", "Dręszew", "Szalowa", "Złotniki Kujawskie", "Brunary", "Sarnów", "Adelin", "Mrocza", "Kaniów", "Lutocin", "Kaszów", "Radziejów", "Ligota", "Wiskitki", "Wola Radziszowska", "Sośno", "Grodków", "Sułoszowa", "Osie", "Hecznarowice", "Kościerzyce", "Zelków", "Lubicz Górny", "Brenna", "Włodzienin", "Trojanowice", "Cekcyn", "Goleszów"];
        $("#lista_miejscowosci").autocomplete({
        source: countryList
    });

    // Accordion
    $(".accordion").accordion({ header: "h3" });

    // Tabs
    $('#tabs').tabs();

    // Dialog			
    $('#dialog').dialog({
        autoOpen: false,
        width: 600,
        buttons: {
            "Ok": function() {
                $(this).dialog("close");
            },
            "Cancel": function() {
                $(this).dialog("close");
            }
        },
        modal: true
    });

    // Dialog Link
    $('#dialog_link').button().click(function() {
        $('#dialog').dialog('open');
        return false;
    });

    // Datepicker
    $('#datepicker').datepicker().children().show();

    // Horizontal Slider
    $('#horizSlider').slider({
        range: true,
        values: [17, 67]
    })

    // Vertical Slider				
    $("#eq > span").each(function() {
        var value = parseInt($(this).text());
        $(this).empty().slider({
            value: value,
            range: "min",
            animate: true,
            orientation: "vertical"
        });
    });

    //hover states on the static widgets
    $('#dialog_link, ul#icons li').hover(
        function() {
            $(this).addClass('ui-state-hover');
        },
        function() {
            $(this).removeClass('ui-state-hover');
        }
    );

    // Button
    $("#divButton, #linkButton, #submitButton, #inputButton").button();

    // Icon Buttons
    $("#leftIconButton").button({
        icons: {
            primary: 'ui-icon-wrench'
        }
    });

    $("#bothIconButton").button({
        icons: {
            primary: 'ui-icon-wrench',
            secondary: 'ui-icon-triangle-1-s'
        }
    });

    // Button Set
    $("#radio1").buttonset();


    // Progressbar
    $("#progressbar").progressbar({
        value: 37
    }).width(500);
    $("#animateProgress").click(function(event) {
        var randNum = Math.random() * 90;
        $("#progressbar div").animate({ width: randNum + "%" });
        event.preventDefault();
    });


    //Datatable
    $('.dataTable').dataTable({
        "sPaginationType": "full_numbers",
        "bJQueryUI": true
    });

    //Tooltips
    $("[rel=tooltips]").twipsy({
        "placement": "right",
        "offset": 5
    });

    //WYSIWYG Editor
    $(".cleditor").cleditor();

    //HTML5 Placeholder for lesser browsers. Uses jquery.placeholder.1.2.min.shrink.js
    $.Placeholder.init();


    //Uses formvalidator
    $("#form0, #form1, #form2").validationEngine();

    //Calendar
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        editable: true,
        theme: true,
        defaultView: 'agendaWeek',
        events: [
            {
                title: 'All Day Event',
                start: new Date(y, m, 1)
            },
            {
                title: 'Long Event',
                start: new Date(y, m, d - 5),
                end: new Date(y, m, d - 2)
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d - 3, 16, 0),
                allDay: false
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d + 4, 16, 0),
                allDay: false
            },
            {
                title: 'Meeting',
                start: new Date(y, m, d, 10, 30),
                allDay: false
            },
            {
                title: 'Lunch',
                start: new Date(y, m, d, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false
            },
            {
                title: 'Birthday Party',
                start: new Date(y, m, d + 1, 19, 0),
                end: new Date(y, m, d + 1, 22, 30),
                allDay: false
            },
            {
                title: 'Click for Google',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'http://google.com/'
            }
        ]
    });

    $('#gcalendar').fullCalendar({
        // US Holidays
        events: 'http://www.google.com/calendar/feeds/usa__en%40holiday.calendar.google.com/public/basic',
        theme: true,

        eventClick: function(event) {
            // opens events in a popup window
            window.open(event.url, 'gcalevent', 'width=700,height=600');
            return false;
        },

        loading: function(bool) {
            if (bool) {
                $('#loading').show();
            } else {
                $('#loading').hide();
            }
        }
    });

});
























// Customize


$(function() {
    
    // Sliding Panel
    $(".trigger").click(function() {
        $(".panel").toggle("slow");
        $(this).toggleClass("active");
        return false;
    });

    // Color Picker for Demo

    $('#in-header').ColorPicker({
        color: '3d0707',
        onShow: function (colpkr) {
            
            $(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            $(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {
            $('header').css('backgroundColor', '#' + hex);
            $('#in-header').css('backgroundColor', '#' + hex);
            createCookie('headerCss', hex);
        }
    });

    // Cookies for Demo

    $('#in-nav').ColorPicker({
        color: '222936',
        onShow: function (colpkr) {
            $(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            $(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {
            $('nav, nav li, .sf-menu li li, .sf-menu li li li, #sidebar').css('backgroundColor', '#' + hex);
            $('#in-nav').css('backgroundColor', '#' + hex);
            createCookie('navCss', hex);
        }
    });

    $('#in-title').ColorPicker({
        color: '222936',
        onShow: function (colpkr) {
            $(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            $(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {
            $('#titlediv').css('backgroundColor', '#' + hex);
            $('#in-title').css('backgroundColor', '#' + hex);
            createCookie('titleCss', hex);
        }
    });

    var headerCss = readCookie('headerCss')
    var navCss = readCookie('navCss')
    var titleCss = readCookie('titleCss')
    var titleBG = readCookie('titleBG')
    var bodyBG = readCookie('bodyBG')

    if (headerCss != null) {
        $('header').css('backgroundColor', '#' + headerCss);
        $('#in-header').css('backgroundColor', '#' + headerCss);
    }

    if (navCss != null) {
        $('nav').css('backgroundColor', '#' + navCss);
        $('nav li').css('backgroundColor', '#' + navCss);
        $('.sf-menu li li').css('backgroundColor', '#' + navCss);
        $('.sf-menu li li li').css('backgroundColor', '#' + navCss);
        $('#in-nav').css('backgroundColor', '#' + navCss);
        $('#sidebar').css('backgroundColor', '#' + navCss);
    }

    if (titleCss != null) {
        $('#titlediv').css('backgroundColor', '#' + titleCss);
        $('#in-title').css('backgroundColor', '#' + titleCss);
    }

    if (titleBG != null) {
        $("#pattern").css("backgroundImage", "url(assets/images/background/" + titleBG + ")");
    }

    if (bodyBG != null) {
        $("body").css("backgroundImage", "url(assets/images/background/" + bodyBG + ")");
    }


    $('#colorChanger').change(function() {
        var str = $(this).val();
        var colors = str.split(',');

        $('header').css('backgroundColor', '#' + colors[0]);
        $('nav, nav li, .sf-menu li li, .sf-menu li li li, #sidebar').css('backgroundColor', '#' + colors[1]);
        $('.pagetitle').css('backgroundColor', '#' + colors[2]);
        $('#in-header').css('backgroundColor', '#' + colors[0]);
        $('#in-nav').css('backgroundColor', '#' + colors[1]);
        $('#sidebar').css('backgroundColor', '#' + colors[1]);
        $('#in-title').css('backgroundColor', '#' + colors[2]);

        //update cookies
        createCookie('headerCss', colors[0]);
        createCookie('navCss', colors[1]);
        createCookie('titleCss', colors[2]);
    });

});

function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}
function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
function eraseCookie(name) {
    createCookie(name, "", -1);
}
// /cookie functions
function changeTitlePattern() {
    var imgfile = $("#titlepattern").val();
    //alert("url(assets/images/background/"+imgfile+")");
    $("#pattern").css("backgroundImage", "url(assets/images/background/" + imgfile + ")");
    createCookie('titleBG', imgfile);
}

function changeBGPattern() {
    var imgfile = $("#backgroundpattern").val();
    //alert("url(assets/images/background/"+imgfile+")");
    $("body").css("backgroundImage", "url(assets/images/background/" + imgfile + ")");
    createCookie('bodyBG', imgfile);
}

function changePreset(){
    var preset = $("#preset").val();
    var presets = preset.split(",");
    $('header').css('backgroundColor', presets[0]);
    $('#in-header').css('backgroundColor', presets[0]);
    $('#in-header').ColorPickerSetColor( presets[0]);
    
    $('nav').css('backgroundColor', presets[1]);
    $('nav li').css('backgroundColor', presets[1]);
    $('#in-nav').css('backgroundColor', presets[1]);
    $('#in-nav').ColorPickerSetColor( presets[1]);
    
    $('#titlediv').css('backgroundColor',  presets[2]);
    $('#in-title').css('backgroundColor',  presets[2]);
    $('#in-title').ColorPickerSetColor( presets[2]);
    
    createCookie('headerCss', presets[0].replace("#",""));
    createCookie('navCss', presets[1].replace("#",""));
    createCookie('titleCss', presets[2].replace("#",""));
    $("#pattern").css("backgroundImage", "url(assets/images/background/" + presets[3] + ")");
    createCookie('titleBG', presets[3] );
    $("body").css("backgroundImage", "url(assets/images/background/" + presets[4] + ")");
    createCookie('bodyBG', presets[4]);
}