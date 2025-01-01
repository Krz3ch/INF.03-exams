<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motocykle</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <img src="motor.png" alt="motocykl">
    <header>
        <h1>Motocykle - moja pasja</h1>
    </header>
    
    <main>
        <section id="lewy">
            <h2>Gdzie pojechać?</h2>
            <dl>
                <?php
                    $connection = mysqli_connect('localhost', 'root', '', 'motory');

                    $query = "SELECT nazwa, opis, poczatek, zrodlo FROM wycieczki JOIN zdjecia ON zdjecia_id = zdjecia.id;";

                    $query_result = mysqli_query($connection, $query);

                    foreach($query_result as $row){
                        echo "<dt>".$row['nazwa']." rozpoczyna się w ".$row['poczatek'].", <a href='".$row['zrodlo']."'>zobacz zdjęcie</a></dt>";
                        echo "<dd>".$row['opis']."</dd>";
                    }

                    mysqli_close($connection);
                ?>
            </dl>
        </section>

            <section id="prawy_1">
                <h2>Co kupić?</h2>
                <ol>
                    <li>Honda CBR125R</li>
                    <li>Yamaha YBR125</li>
                    <li>Honda VFR800i</li>
                    <li>Honda CBR1100XX</li>
                    <li>BMW R1200GS LC</li>
                </ol>
            </section>
            <section id="prawy_2">
                <h2>Statystyki</h2>
                <p>
                    Wpisanych wycieczek:
                    <?php
                    $connection = mysqli_connect('localhost', 'root', '', 'motory');

                    $query = "SELECT COUNT(*) FROM wycieczki;";

                    $query_result = mysqli_query($connection, $query);

                    foreach($query_result as $row){
                        echo $row['COUNT(*)'];
                    }
                    mysqli_close($connection);
                ?>
                </p>
                <p>Użytkowników forum: 200</p>
                <p>Przesłanych zdjęć: 1300</p>
            </section>
    </main>

    <footer>
        <p>Stronę wykonał: Krzysztof Gadzina</p>
    </footer>
</body>
</html>