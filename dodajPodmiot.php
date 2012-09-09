<form class="form" id="form0">

    <div class="clearfix">
        <label>Nazwa placówki</label>
        <div class="input"><input class="validate[required, custom[minSize[15]]] xlarge" rel="tooltips" title="nazwa placówki" type="text"  id="nazwa"/>
            <span class="info">Podaj pełną nazwę placówki</span></div>
    </div>
    <div class="clearfix">
        <label>Miejscowość</label>
        <div class="input">
            <input type="text" title="Znajdź miejscowość, w której znajduje się placówka" rel="tooltips" class=" validate[required] lista_miejscowosci" id="miejscowosc" />

        </div>
    </div>

    <div class="clearfix">
        <label>Ulica</label>
        <div class="input">
            <input class="validate[required]" type="text" title="Podaj nazwę ulicy bez nr domu" rel="tooltips" id="ulica"/>
            &nbsp;&nbsp;nr domu<input type="text" title="Numer domu" rel="tooltips" class=" validate[required custom[integer]] xmini"  id="nr_domu"/> /
            <input type="text" title="Numer lokalu" rel="tooltips" class="validate[custom[integer]] xmini" id="nr_lokalu"/>
        </div>
    </div>
    <div class="clearfix">
        <div class="clearfix">
            <label>Kod pocztowy</label>
            <div class="input">
                <input type="text" title="Kod Pocztowy" rel="tooltips" class="validate[required custom[integer]] xmini" id="kod_pocztowy_poczatek"/> -
                <input type="text" title="Kod Pocztowy" rel="tooltips" class="validate[required custom[integer]] mini" id="kod_pocztowy_koniec"/>
            </div>
        </div>

        <div class="clearfix">
            <label>Telefon stacjonarny</label>
            <div class="input">
                <input type="text" title="Nr kierunkowy z pominięciem zera" rel="tooltips" class="validate[required] custom[integer] xmini" id="nr_kierunkowy"/> - 
                <input type="text" title="Numer telefonu stacjonarnego" rel="tooltips" class="validate[required,custom[phone]]" id="nr_telefonu"/>

            </div>
        </div>
        <div class="clearfix">
            <label>Telefon komórkowy</label>
            <div class="input">
                <input type="text" title="Numer telefonu komórkowego" rel="tooltips" class="validate[custom[phone]] xlarge" value="+48 " id="telefon_komorkowy"/>

            </div>
        </div>

        <div class="clearfix">
            <label>Adres e-mail</label>
            <div class="input">
                <input type="text" title="Podaj adres e-mail" rel="tooltips" class="validate[required,custom[email]] xlarge" id="email"/>
                <span class="info">Adres musi być poprawny aby dodać placówkę</span></div>
        </div>
    </div>
    <div class="clearfix">
        <label>Strona WWW</label>
        <div class="input">
            <input type="text" class="validate[required,custom[url]] xlarge" value="http://" id="strona_www" />

        </div>
    </div>
    <div class="clearfix">
        <label>Kategoria placówki</label>
        <div class="validate[required] input" id="kategoria">
            <select>
                <option value="0">wybierz...</option>
                <optgroup label="Przedszkola">
                    <option>Publiczne</option>
                    <option>Prywatne</option></optgroup>
                <optgroup label="Żłobki">
                    <option>Publiczny</option>
                    <option>Prywatny</option></optgroup>
                <option>Kluby Malucha</option>
            </select>
        </div>
    </div>
    <div class="clearfix">
        <label>Informacje dodatkowe</label>
        <div class="input"><textarea class="xlarge" placeholder="Tutaj możesz zamieścić szczegółowe informacje o swojej placówce, zajęciach, godzinach otwarcia i opłatach. Ten opis pojawi się pod dodaną placówką."></textarea></div>
    </div>

    <div class="clearfix">
        <div class="input">
            <label>Hasło </label>
            <div class="input"><input type="password" id="password" class="validate[required] custom[minSize[6]" value="" /></div>
        </div>
    </div>
    <div class="clearfix">
        <div class="input">
            <label>Powtórz hasło </label>
            <div class="input"><input type="password" id="password2"  class="validate[required,equals[password]" value="" /></div>
        </div>
    </div>

    <div class="clearfix grey-highlight">
        <div class="input no-label">

            <input type="reset" class="button grey" value="Resetuj" />
            <input type="submit" class="button blue" value="+ Dodaj" />
        </div>
    </div>


</form>