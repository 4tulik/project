<div class="col_12">
    <div class="form">
        <div class="clearfix">
            <label>Nazwa placówki</label>
            <div class="input"><input class="xlarge" rel="tooltips" title="nazwa placówki" type="text" placeholder="Pełna nazwa placówski" />
                <span class="info">Podaj pełną nazwę placówki</span></div>
        </div>
        <div class="clearfix">
            <label>Miejscowość</label>
            <div class="input">
                <input type="text" title="podaj lokalizację placówki" rel="tooltips" class="xlarge" id="lista_miejscowosci" placeholder="Wybierz miejscowość"/>

            </div>
        </div>
        <div class="clearfix">
            <label>Adres</label>
            <div class="input">
                <input type="text" title="Podaj nazwę ulicy bez nr domu" rel="tooltips" class="large" placeholder="Ulica"/>
                <input type="text" title="Numer domu" rel="tooltips" class="xmini" placeholder="nr"/> /
                <input type="text" title="Numer lokalu" rel="tooltips" class="xmini" placeholder="nr"/>
            </div>
        </div>
        <div class="clearfix">
            <div class="clearfix">
                <label>Poczta</label>
                <div class="input">
                    <input type="text" title="Wybierz pocztę" rel="tooltips" class="medium" placeholder="Ulica"/> Kod
                    <input type="text" title="Kod Pocztowy" rel="tooltips" class="xmini" placeholder="00"/> -
                    <input type="text" title="Kod Pocztowy" rel="tooltips" class="mini" placeholder="000"/>
                </div>
            </div>

            <div class="clearfix">
                <label>Telefon stacjonarny</label>
                <div class="input">
                    <input type="text" title="Nr kierunkowy z pominięciem zera" rel="tooltips" class="xmini" placeholder="00"/> - 
                    <input type="text" title="Numer telefonu stacjonarnego" rel="tooltips" class="small" placeholder="000 00 00"/>

                </div>
            </div>
            <div class="clearfix">
                <label>Telefon komórkowy</label>
                <div class="input">
                    <input type="text" title="Numer telefonu komórkowego" rel="tooltips" class="tel_medium" placeholder="000 000 000"/>

                </div>
            </div>

            <div class="clearfix">
                <label>Adres e-mail</label>
                <div class="input">
                    <input type="text" title="Podaj adres e-mail" rel="tooltips" class="xlarge" placeholder="przykladowy@adres.pl"/>
                    <span class="info">Adres musi być poprawny aby dodać placówkę</span></div>
            </div>
        </div>
        <div class="clearfix">
            <label>Strona WWW</label>
            <div class="input">
                <input type="text" title="Podaj adres strony WWW" rel="tooltips" class="xlarge" placeholder="www.przykladowa-strona.pl"/>

            </div>
        </div>
        <div class="clearfix">
            <label>Kategoria placówki</label>
            <div class="input">
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


        <div class="clearfix grey-highlight">
            <div class="input no-label">

                <input type="reset" class="button grey" value="Resetuj"></input>
                <input type="submit" class="button blue" value="+ Dodaj"></input>
            </div>
        </div>
    </div>
</div>
