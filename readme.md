Kopeerige harjutustunni projekti (icd0007ex3) juurkausta sisu oma
projekti (icd0007) kausta "ex3". NB! .git ja .idea kataloogi ärge
kopeerige.

1.  Selle ülesande mõte on paremini aru saada serveri tööpõhimõttest.

    Kogu koodist arusaamine pole tingimata oluline aga peaks aru saama
    peamistest päringu töötlusega seotud sammudest:

    -   loe kliendi saadetud info;
    -   otsusta, mida sooviti;
    -   koosta vastus;
    -   saada vastus.

    a)  Käivitage server-hello.php.

        Kui saate vea "Call to undefined function socket_create()", siis
        peate lubama laienduse muutes php.ini faili. Leidke rida
        ";extension=sockets" ja eemaldage selle eest semikoolon. Käsk
        "php --ini" ütleb, millist ini faili (või faile) Php kasutab.

        Kui saate veateade "Address already in use in", siis valige mõni
        teine port (nt. 8081, 8082, jne).

        Minge brauseriga aadressile http://localhost:8080. (või
        ...:8081, kui selle valisite).

        Peaksite baruseris nägema kirja "Hello!".

        Sellest, mis on "HTTP/1.1 200 ..." räägime hilisemas loengus.

        "while (true)" on selleks, et programm pärast esimese päringu
        töötlust ära ei lõpetaks.

        Sulgege server (punane ruut PhpStorm-is üleval paremal).

    b)  Käivitage server-echo.php. Kui saate veateade "Address already
        in use in", siis valige mõni teine port (nt. 8081, 8082, jne).

        Avage server/form.html PhpStromis. Täitke vorm ja saatke see.
        Vorm saadetakse aadressile http://localhost:8080.

        Programm peaks väljastama selle info, mis brauser saatis. Otsige
        üles, kus on teie saadetud väärtused. Muutke vormi meetod
        POST-iks ja jälgige, milles on erinevus.

        See ülesanne peaks demonstreerima veebiserveri peamist
        tööpõimõtet: brauser saadab päringu teksti kujul ja server
        saadab vastuse teksti kujul. Antud näide saatis sama teksti
        tagasi, aga pole raske ette kujutada, et tagasi saadetakse
        midagi muud.

        "Päris" brauser töötab täpselt samadel alustel. Saadetud teksti
        põhjal tuleb otsustda, mida sooviti ja vastuseks on samuti
        tavaline tekst. Ehk sisult on tegemist teksti manipuleerimisega,
        mis peaks olema igati tuttav teema.

    c)  Käivitage server-php.php. Kui saate veateade "Address already in
        use in", siis valige mõni teine port (nt. 8081, 8082, jne).

        Minge brauseriga aadressile http://localhost:8080.

        Proovige koodist aru saada, mis juhtus ja kust selline vastus
        tuli.

        shell_exec() on Php funktsioon, mis käivitab argumendiga
        määratud välise programmi.

2.  Selle ülesande mõte on uurida Php arendusserveri peamist käitumist.

    Olge käsureal kataloogis ex3 ja käivitage server.

    > php -S localhost:8080

    Avage brauseris fail ex3/site/index.html.

    Sulgege server ja käivitage see uuesti projekti juurkataloogist
    (icd0007).

    Avage brauseris fail ex3/site/index.html.

    Sulgege server ja käivitage see uuesti projekti juurkataloogist
    andes ette kataloogi, kust faile serveerida.

    > php -S localhost:8080 -t ex3

    Avage brauseris fail ex3/site/index.html.

    Avage brauseris asukoht ex3/site/ ja veenduge, et link teisele lehle
    töötab.

    Avage brauseris asukoht ex3/site ja jälgige, kuhu seesama link
    viitab.

3.  Kataloogis "calc" on staatiline temperatuuri teisendamise rakenduse
    prototüüp (Html lehed).

    Lisage rakendusele vajalik Php kood, et see võimaldaks teisendada
    temperatuuri Celsiuse ja Fahrenheiti skaala vahel.

    Arvutamise valemid on failis calc/functions.php

    Kui kasutaja ei sisesta numbrilist väärtust peaks rakendust näitama
    prototüübis toodud veateadet. Seda saate kontrollida funktsiooniga
    is_numeric(). Teksti saate numbriks muuta funktsiooniga intval().
    Tulemuse ümardamiseks võite kasutada funktsiooni round().

4.  Selle ülesande mõte on uurida vormi postitamisel saadetavat infot.
    Elemendid käitumine on osati erinev ja siit võiksite saada esmase
    ülevaate.

    Kataloogis "form" on fail form.html vormi ja elementidega ning fail
    params.php, mis trükib saadetud info välja.

    Uurige mis kujul info erinevate vormi valikute puhul skriptini
    jõuab.

5.  Selle ülesande mõte on aru saada ümbersuunamisest (redirect) ja
    faili kaasamisest (include).

    Eesmärk on aru saada, mida need täpselt teevad, kus neid võiks
    kasutada ja millised on nende sarnasused ja erinevused.

    Kataloogis "flow" on vorm (form.html) ja skript, mis vormi salvestab
    (saver.php) ning teate näitamise leht (thanks.html).

    Praegu kasutab see faili kaasamist (include). Veenduge, et saate
    aru, kuidas see töötab. Kasutage ümbersuunamist (välja
    kommenteeritud rida) ja veenduge, et saate aru, kuidas see töötab.

6.  Selle ülesande mõte on õppida kasutama veebi teste. Eesmärk on aru
    saada testide üldisest tööpõhimõttest, üksikute testide koodist ja
    sellest, mida need täpselt testivad. Lisaks peaks võimalike vigade
    korral suutma tuvastada veateate põhjal vea põhjuse.

    Kasutage veebi teste kalkulaatori rakenduse (ül. 2) testimiseks.
    Testid leiate aadressilt https://github.com/mkalmo2/icd0007tests.
    Uuendage repot (git pull).

    Selle ülesande kohta käivad testid failist ex3a.php.

    Et testid leiaksid rakenduse üles peate käivtama serveri nii, et
    faile serveeritakse teie repo (icd0007) juurkataloogist.

    Temperatuuri kalkulaatori test eeldab:

    -   vaikimisi vaade on nimega index.html (muutke fail nimi ära);
    -   menüü linkidel on id-d "c2f" ja "f2c" (lisage need);
    -   arvutamise nupul on nimi "calculateButton" (lisage see);
    -   temperatuuri sisestusvälja nimi on "temperature" (muutke see
        vajadusel ära).

7.  Eesmärk on eelmistes harjutstundides tehtud rakenduse edasiarendus.
    Nüüd peaksite rakendusele veebiliidese lisama ehk võimaldama
    rakenduse kasutamise läbi brauseri.

    Rakenduse peamine arhitektuur on väga sarnane käsurea rakenduse
    arhitektuurile. Peamised erinevused on sisendite saatmises ja
    vastuvõtmises ning väljundi vormingus.

    Sisendid saadetakse seekord Html vormilt ja vastu saame need võtta
    läbi \$\_POST või \$\_GET sõnastiku.

    Väljundiks on tavalise teksti asemel Html kood.

    Kataloogis "pages" on rakenduse jaoks vajalikud Html ja Php failid.
    Need failid sisaldavad peamiselt Html koodi ja neid pole vaja muuta.
    Nende sisust ja tööpõhimõttest peaks kindlasti aru saama.

    Kogu vajaliku koodi peate kirjutama faili temps.php. See fail on
    samas rollis, milles oli samanimeline fail käsurea rakenduse juures.

    Fails temps.php ei peaks ühtegi rida Html koodi olema kogu vajaliku
    saab rakendus failide kaasamise teel (include) samal põhimõttel nagu
    see oli

    4.  ülesandes. Pisut koodi on seal ette kirjutatud. Eesmärk on aru
        saada, kuidas etteantud kood töötab ja selle põhjal rakendus
        lõpuni kirjutada.

    Selle ülesande lahenduse testimiseks on testid testide projektist ja
    failist ex3b.php.

8.  Commit-ige muudatused ja push-ige need Github-i.

    Lisage commit-ile tag ex3.

    Veenduge tulemuste lehelt, et kõik õnnestus.

Seletused ja lahendused: https://youtu.be/CWUiuTvVZyM
