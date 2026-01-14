<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <title>Volatus</title>
    <link rel="icon" href="img/logoM.svg">
    <link rel="stylesheet" type="text/css" href="styles/styles.css?v=3">
</head>

<body>
    <!-- Pasek -->
    <div id="pasek">
        <a href="https://volatus.pl">
            <img src="img/logo.svg" alt="Logo">
        </a>
    </div>

    <div id="strona">
        <!-- Menu kafelkowe -->
        <div class="flex">
            <a href="#link-sponsors" class="tile">
                <img src="img/sponsoring.png" alt="Grafika przedstawiająca sponsoring">
                <b>Nasi sponsorzy</b>
            </a>
            <a href="#link-mission" class="tile">
                <img src="img/o-misji.png" alt="Zdjęcie CanSata">
                <b>O misji</b>
            </a>
            <a href="#link-about" class="tile">
                <img src="img/team.webp" alt="Zdjęcie zespołu">
                <b>O zespole</b>
            </a>
            <a href="#link-hardware" class="tile">
                <img src="img/technicznie.png" alt="Grafika przedstawiająca projekt">
                <b>Technicznie o CanSacie</b>
            </a>
            <a href="#link-updates" class="tile">
                <img src="img/volatus-setup-cut.jpg" alt="Zdjęcie stanowiska pracy Macieja">
                <b>Aktualności</b>
            </a>
            <a href="#link-contact" class="tile">
                <img src="img/socials4.png" alt="Grafika przedstawiająca logotypy mediów społecznościowych">
                <b>Kontakt i social media</b>
            </a>
        </div>
        <!-- Sponsorzy -->
        <h2 id="link-sponsors" class="c1">Nasi sponsorzy</h2>
        <div class="flex">
            <button onclick="sponsor1.showModal()" class="tile sponsor-tile">
                <div class="panel"><img src="img/sponsor/instalator.png" alt="logo firmy"></div>
                <b>Instalator Sp. j.</b>
            </button>
            <button onclick="sponsor2.showModal()" class="tile sponsor-tile">
                <div class="panel"><img src="img/sponsor/zib.png" alt="logo firmy"></div>
                <b>ZIB Sp. j.</b>
            </button>
            <button onclick="sponsor3.showModal()" class="tile sponsor-tile">
                <div class="panel"><img src="img/sponsor/stalzbyt.png" alt="logo firmy"></div>
                <b>Stalzbyt Plus</b>
            </button>
            <button onclick="sponsor4.showModal()" class="tile sponsor-tile">
                <div class="panel"><img src="img/sponsor/elan.png" alt="logo firmy"></div>
                <b>Elan Sp. z o.o. Sp.k</b>
            </button>
            <button onclick="sponsor5.showModal()" class="tile sponsor-tile">
                <div class="panel"><img src="img/sponsor/mrowka.png" alt="logo firmy"></div>
                <b>Eleo-Budmax Mrówka Brzozów</b>
            </button>
            <button onclick="sponsor6.showModal()" class="tile sponsor-tile">
                <div class="panel"><img src="img/sponsor/powiat-narrow.png" alt="logo firmy"></div>
                <b>Starostwo powiatowe w Brzozowie</b>
            </button>
        </div>
        <dialog id="sponsor1" class="sponsor-dialog">
            <div class="sd-flex">
                <div class="panel"><img src="img/sponsor/instalator.png" alt="logo firmy"></div>
                <h2 class="c1">Instalator Sp. j.</h2>
                <h3><a href="https://www.instalator-brzozow.pl/" class="p-link">Strona internetowa</a></h3>
                <form method="dialog">
                    <button>Wyjdź</button>
                </form>
            </div>
        </dialog>
        <dialog id="sponsor2" class="sponsor-dialog">
            <div class="sd-flex">
                <div class="panel"><img src="img/sponsor/zib.png" alt="logo firmy"></div>
                <h2 class="c1">ZIB Sp. j.</h2>
                <h3><a href="https://zib24.pl/" class="p-link">Strona internetowa</a></h3>
                <form method="dialog">
                    <button>Wyjdź</button>
                </form>
            </div>
        </dialog>
        <dialog id="sponsor3" class="sponsor-dialog">
            <div class="sd-flex">
                <div class="panel"><img src="img/sponsor/stalzbyt.png" alt="logo firmy"></div>
                <h2 class="c1">Stalzbyt Plus</h2>
                <h3><a href="https://www.facebook.com/p/Stalzbyt-Plus-100058717878633/" class="p-link">Strona na
                        Facebooku</a></h3>
                <form method="dialog">
                    <button>Wyjdź</button>
                </form>
            </div>
        </dialog>
        <dialog id="sponsor4" class="sponsor-dialog">
            <div class="sd-flex">
                <div class="panel"><img src="img/sponsor/elan.png" alt="logo firmy"></div>
                <h2 class="c1">Elan Sp. z o.o. Sp.k</h2>
                <h3><a href="https://elan.com.pl/" class="p-link">Strona internetowa</a></h3>
                <form method="dialog">
                    <button>Wyjdź</button>
                </form>
            </div>
        </dialog>
        <dialog id="sponsor5" class="sponsor-dialog">
            <div class="sd-flex">
                <div class="panel"><img src="img/sponsor/mrowka.png" alt="logo firmy"></div>
                <h2 class="c1">Eleo-Budmax Mrówka Brzozów</h2>
                <h3><a href="https://mrowkabrzozow.pl/" class="p-link">Strona internetowa</a></h3>
                <form method="dialog">
                    <button>Wyjdź</button>
                </form>
            </div>
        </dialog>
        <dialog id="sponsor6" class="sponsor-dialog">
            <div class="sd-flex">
                <div class="panel">
                    <img class="narrow-img" src="img/sponsor/powiat-narrow.png" alt="logo firmy">
                    <img class="wide-img" src="img/sponsor/powiat-wide.png" alt="logo firmy">
                </div>
                <h2 class="c1">Starostwo powiatowe w Brzozowie</h2>
                <h3><a href="https://powiatbrzozow.pl/starostwo/" class="p-link">Strona internetowa</a></h3>
                <form method="dialog">
                    <button>Wyjdź</button>
                </form>
            </div>
        </dialog>
        <!-- O misji -->
        <h2 class="c1" id="link-mission">O misji</h2>
        <div class="panel">
            <p>
                Konkurs CanSat to wyzwanie organizowane przez Europejską Agencję Kosmiczną dla młodzieży. Polega na
                zbudowaniu minisatelity wielkości puszki, który wykona zadania badawcze.
            </p>
            <p>
                Każda drużyna musi zrealizować dwie misje: misję podstawową, realizowaną przez wszystkich i misję
                dodatkową, wybieraną osobno przez każdy zespół. Misja podstawowa polega na zbadaniu temperatury i
                ciśnienia, na różnych wysokościach oraz na przesłaniu tych danych na ziemię.
            </p>
            <p>
                Naszym celem, który obraliśmy sobie jako naszą misję dodatkową jest przedstawienie działania technologii
                INS. Jest to system, który umożliwia poznanie swoich współrzędnych przy ograniczonym korzystaniu z GPS.
            </p>
            <p>
                Przed wylotem rakiety (która zabierze wszystkie CanSaty na wysokość około 2km) nasz minisatelita
                sprawdzi swoją pozycję przy pomocy GPS. Póżniej, już przy pomocy IMU — specjalnego zestawu czujników,
                będziemy sami obliczać swoją pozycję. Będzie się to jednak wiązało z pewnym niewielkim błędem, który
                będzie wynikał z ograniczeń IMU, którego będziemy mogli użyć, więc co za tym idzie, zsynchronizujemy
                swoją pozycję z GPS w połowie lotu. Wszelkie dane zebrane podczas misji będą wysłane do stacji
                naziemnej i zapisane na karcie SD naszego CanSata.
            </p>
        </div>
        <!-- O zespole -->
        <h2 class="c1" id="link-about">O zespole</h2>
        <div class="panel">
            <p>Jesteśmy zespołem z I Liceum Ogólnokształcącego w Brzozowie. W skład grupy wchodzi pięcioro uczniów klasy
                trzeciej i jeden uczeń z klasy drugiej, a naszym opiekunem jest pani Joanna Chęć.</p>
        </div>
        <div class="panel about">
            <div class="about-text">
                <h3>Joanna Chęć</h3>
                <p>Jestem nauczycielką matematyki i informatyki w I Liceum Ogólnokształcącym w Brzozowie. Interesuje
                    mnie zdrowy styl życia, szczególnie pod względem zdrowego odżywiania. Z tego powodu w wolnym czasie
                    zajmuję się prowadzeniem swojego ogródka z warzywami. Moją rolą w projekcie jest doradzanie członkom
                    zespołu Volatus w ich działaniach konkursowych. Sprawuję pozycję swojego rodzaju administratora i
                    inspektora, który czuwa nad pracą swoich podopiecznych oraz stanowi łączność między nimi, a
                    organizatorami konkursu.</p>
            </div>
            <div class="about-img">
                <img src="img/panichec.jpg" alt="Joanna Chęć">
            </div>
        </div>
        <div class="panel about">
            <div class="about-text">
                <h3>Filip Matwijczyk</h3>
                <p>Mam 17 lat i chodzę do klasy 3A. Rozszerzam matematykę, informatykę oraz angielski na poziomie
                    dwujęzycznym. Interesuję się sportami walki oraz montażem filmowym. Moją główną rolą w projekcie
                    jest jego dokumentacja w postaci pisania raportów (PDR, CDR, FDR) oraz zbierania funduszy na budowę
                    CanSata. Biorę udział w tym konkursie, bo chcę, aby był on dla mnie okazją dla rozwoju osobistego
                    oraz swojego rodzaju wyzwaniem, które wyciągnie mnie spoza własnej strefy komfortu i wzbogaci o nowe
                    doświadczenia oraz wspólne wspomnienia z innymi członkami drużyny.</p>
                <p><a class="p-link" href="filip-matwijczyk/">Więcej…</a></p>
            </div>
            <div class="about-img">
                <a href="filip-matwijczyk/"><img src="img/filipek.jpg" alt="Filip Matwijczyk"></a>
            </div>
        </div>
        <div class="panel about">
            <div class="about-text">
                <h3>Maciej Skarbek</h3>
                <p>Chodzę do klasy 3A i mam 16 lat. Rozszerzam matematykę, informatykę i angielski na poziomie
                    dwujęzycznym. Interesuję się programowaniem niskopoziomowym, reverse engineeringiem, Linuxem i
                    brydżem. W wolnych chwilach uczę się arabskiego. Moją rolą jest pisanie oprogramowania, dzięki
                    któremu nasz satelita zadziała oraz zajmowaniem się komunikacją radiową i stacją naziemną. Wziąłem
                    udział w tym konkursie, ponieważ interesuje się komunikacją radiową oraz zawsze chciałem napisać kod
                    na tego typu urządzenie.</p>
                <p><a class="p-link" href="maciej-skarbek/">Więcej…</a></p>
            </div>
            <div class="about-img">
                <a href="maciej-skarbek/"><img src="img/maciej.jpg" alt="Maciej Skarbek"></a>
            </div>
        </div>
        <div class="panel about">
            <div class="about-text">
                <h3>Magdalena Baran</h3>
                <p>Mam 17 lat, chodzę do klasy 3A i rozszerzam matematykę, informatykę i angielski na poziomie
                    dwujęzycznym. Interesuję się rysowaniem, projektowaniem, drukiem 3D, robotyką i montowaniem
                    filmów, a w wolnym czasie uczę się gry na gitarze. Moją główną rolą w projekcie jest prowadzenie
                    social mediów, zbieranie funduszy i tworzenie modelu 3D CanSata na drukarce 3D. Biorę udział w tym
                    konkursie, ponieważ jest to dla mnie idealna okazja, by rozwijać swoją wiedzę w zakresie budowy
                    maszyn i programowania; jest to też dla mnie szansa, by spróbować czegoś nowego, sprawdzic swoje
                    możliwości, a także możliwość poznania nowych ludzi i rozwijanie umiejętności pracy w zespole i
                    kreatywnego myślenia.</p>
                <p><a class="p-link" href="magdalena-baran/">Więcej…</a></p>
            </div>
            <div class="about-img">
                <a href="magdalena-baran/"><img src="img/magda.jpg" alt="Magdalena Baran"></a>
            </div>
        </div>
        <div class="panel about">
            <div class="about-text">
                <h3>Mateusz Rzepka</h3>
                <p>Chodzę do klasy 3A i mam 16 lat. Rozszerzam matematykę, informatykę oraz angielski na poziomie
                    dwujęzycznym. Interesuję się programowaniem, pisaniem stron internetowych, matematyką i technologią
                    kosmiczną. W czasie wolnym gram w brydża i uczę się języka łacińskiego. Biorę udział w tym
                    konkursie, ponieważ chcę przetestować swoje siły w zadaniu, które łączy naukę z pasją do technologii
                    i sprawdzić, jak poradzę sobie w obliczu czekających mnie wyzwań.</p>
                <p><a class="p-link" href="mateusz-rzepka/">Więcej…</a></p>
            </div>
            <div class="about-img">
                <a href="mateusz-rzepka/"><img src="img/mateusz.jpg" alt="Mateusz Rzepka"></a>
            </div>
        </div>
        <div class="panel about">
            <div class="about-text">
                <h3>Krzysztof Pisula</h3>
                <p>Mam 16 lat i uczęszczam do klasy 3A, gdzie rozszerzam matematykę, informatykę oraz angielski na
                    poziomie dwujęzycznym. Interesuję się programowaniem, modelowaniem 3D i geopolityką. Hobbystycznie
                    gram w brydża i uczę się języka greckiego. Moją rolą w tym projekcie jest zarządzanie pracą i
                    szeroko rozumiana grafika komputerowa. Ze względu na charakter projektu daje on duże możliwości
                    samorozwoju, jak i wdrażania zdobytej wiedzy w życie.</p>
                <p><a class="p-link" href="krzysztof-pisula/">Więcej…</a></p>
            </div>
            <div class="about-img">
                <a href="krzysztof-pisula/"><img src="img/krzysiu.jpg" alt="Krzysztof Pisula"></a>
            </div>
        </div>
        <div class="panel about">
            <div class="about-text">
                <h3>Jan Król</h3>
                <p>Mam 16 lat i chodzę do klasy 2A rozszerzając matematykę, fizykę i angielski. Interesuję się
                    astronomią, elektroniką oraz projektowaniem i modelowaniem 3D w programach CAD, CAM i CAE. W tym
                    zespole zajmuję się całym hardware'em i elektroniką. Biorę udział w tym konkursie, ponieważ
                    uwielbiam projekty techniczne takie jak ten, i myślę, że jest to idealna okazja na poszerzenie moich
                    umiejętności.</p>
                <p><a class="p-link" href="jan-krol/">Więcej…</a></p>
            </div>
            <div class="about-img">
                <a href="jan-krol/"><img src="img/janek.jpg" alt="Jan Król"></a>
            </div>
        </div>
        <!-- Hardware -->
        <h2 class="c1" id="link-hardware">Technicznie o CanSacie</h2>
        <div class="panel">
            <h3>Hardware</h3>
            <ul>
                <li>
                    BMP388 to cyfrowy barometr mierzący ciśnienie 300–1250&nbsp;hPa z bardzo wysoką dokładnością,
                    komunikujący się przez I2C lub SPI. Pozwala wyznaczać wysokość z precyzją do ok. 0,6&nbsp;m, dlatego
                    świetnie nadaje się do naszej misji.
                </li>
                <li>
                    TMP235 to analogowy czujnik temperatury o liniowym wyjściu napięciowym, idealny do mikrokontrolerów
                    z ADC. Jest stabilny, dokładny i nie wymaga żadnej konfiguracji poza odczytem napięcia.
                </li>
                <li>
                    Moduł GPS z USB oparty na MTK3333, który zapewnia dokładność aż do 3&nbsp;m i odświeżanie do
                    10&nbsp;Hz.
                </li>
                <li>
                    Waveschare to programator/debugger do STM32 i STM8 obsługujący protokoły SWD oraz SWIM. Jest zgodny
                    z oryginalnym ST-LINK i działa stabilnie w popularnych środowiskach jak STM32CubeIDE czy Keil.
                </li>
                <li>
                    MTI-3-5A-T to nasza IMU, czyli jednostka do nawigacji inercyjnej. Ma ona 3 osie żyroskopów, 3 osie
                    akcelerometrów oraz 3 osie magnetometrów. Żyroskopy pracują w zakresie do ±2000&nbsp;°/s, więc będą
                    one poprawnie mierzyć obrót CanSata podczas jego opadania na spadochronie, a akcelerometry
                    rejestrują dane aż do ±16&nbsp;g, co stanowi więcej niż 8&nbsp;g, które możemy napotkać w trakcie
                    startu rakiety.
                </li>
                <li>
                    STM32 Black Pill to niewielka, tania płytka rozwojowa oparta na mikrokontrolerze STM32. Oferuje
                    256&nbsp;KB Flash, 64&nbsp;KB RAM, zasilanie 3,3&nbsp;V, oraz bogaty zestaw peryferiów: GPIO, ADC,
                    I2C, SPI, UART, USB OTG. Programowanie i debugowanie odbywa się przez SWD z użyciem programatora
                    ST-Link, co czyni ją dobrą alternatywą dla Arduino w bardziej zaawansowanych projektach.
                </li>
            </ul>
        </div>
        <div class="panel">
            <h3>Software</h3>
            <p>
                Oprogramowanie samego CanSata zostało napisane z skupieniem na niezawodności. Oparte jest na platformie
                STM32 i bibliotece HAL (HAL został użyty głównie ze względu na oszczędność czasu — nie ma wtedy potrzeby
                czytania <i>reference manual</i> i <i>portability</i> przy ewentualnej zmianie mikrokontrolera),
                wykorzystuje mechanizm <i>Windowed Watchdog</i> obserwujący <i>main loop</i>. W celu zwiększenia
                stabilności oprogramowania, kod źródłowy mikrokontrolera został napisany zgodnie z rygorystycznym
                standardem NASA <i>„The Power of 10 Rules”</i> (stosowanie się do tych zasad nie będzie proste, jednakże
                będziemy mieli tylko jedną okazję na lot, więc nie możemy sobie pozwolić, aby misja zawiodła ze względu
                na kod), stosowanym w systemach klasy <i>safety-critical</i>.
            </p>
            <p>
                Warstwa naziemna realizuje komunikację w architekturze pośredniej: mikrokontroler stacji bazowej
                będzie dokonywał enkapsulacji ramek radiowych algorytmem COBS (wybór ten był podyktowany popularnością
                tego wyboru w innych tego typu projektach), przekazując strumień danych po UART do aplikacji działającej
                na standardowym PC napisanej w języku Python z biblioteką <i>threading</i>. Rozwiązanie to łączy
                wydajność niskopoziomowego przetwarzania z elastycznością nowoczesnego interfejsu użytkownika, oferując
                wizualizację parametrów w czasie rzeczywistym, obsługę komend oraz redundantną rejestrację danych.
            </p>
        </div>
        <!-- Ostatnie zmiany -->
        <h2 class="c1" id="link-updates">Aktualności</h2>
        <?php
        $allEvents = json_decode(file_get_contents('blog/blog.json'));
        $events = array_slice($allEvents, 0, 3);
        ?>
        <?php foreach ($events as $event): ?>
            <div class="panel">
                <h3>
                    <?= $event->date; ?>
                </h3>
                <p>
                    <?= $event->description; ?>
                </p>
            </div>
        <?php endforeach; ?>
        <p><a class="p-link" href="archiwum-aktualnosci/">Więcej…</a></p>
        <!-- Kontakt -->
        <h2 class="c1" id="link-contact">Gdzie nas spotkać?</h2>
        <div class="panel socials">
            <button class="social" id="przyciskEmail">
                <img src="img/mail.png" alt="Protonmail"><span id="email">E-mail</span>
                <span id="tooltip">Skopiowano</span>
            </button>
            <a class="social" href="https://www.tiktok.com/@volatuscs?_t=ZN-8zajjHHh5mA&_r=1">
                <img src="img/tiktok.avif" alt="TikTok"> TikTok
            </a>
            <a class="social" href="https://www.instagram.com/volatuscs?igsh=aTN2cjBqd2Z3YXFo">
                <img src="img/instagram.png" alt="Instagram"> Instagram
            </a>
            <a class="social" href="https://www.facebook.com/share/1Aj3updFuc/">
                <img src="img/facebook.png" alt=Facebook""> Facebook
            </a>
            <a class="social" href="https://github.com/volatus-CanSat">
                <img src="img/github.png" alt="GitHub"> GitHub
            </a>
            <a class="social" href="https://trello.com/b/yGrT05yV/cansat-2025-volatus">
                <img src="img/trello.png" alt="Trello"> Trello
            </a>
        </div>
    </div>

    <script>
        const adresEmail = document.getElementById("email");
        const przyciskEmail = document.getElementById("przyciskEmail");
        const tooltip = document.getElementById("tooltip");
        const mail = "volatus@lobrzozow.pl";
        przyciskEmail.addEventListener("click", (e) => {
            const currentText = adresEmail.textContent;
            if (currentText === mail) {
                navigator.clipboard.writeText(mail)
                    .then(() => {
                        tooltip.style.left = `${e.clientX}px`;
                        tooltip.style.top = `${e.clientY - 20}px`;
                        tooltip.classList.add('show');
                        setTimeout(() => tooltip.classList.remove('show'), 1000);
                    });
            } else {
                adresEmail.textContent = mail;
            }
        });
    </script>
</body>

</html>