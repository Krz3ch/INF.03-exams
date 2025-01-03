<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ważenie samochodów ciężarowych</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <section id="baner_l">
            <h1>Ważenie pojazdów we Wrocławiu</h1>
        </section>
        <section id="baner_r">
            <img src="obraz1.png" alt="waga">
        </section>
    </header>

    <main>
        <section id="glowny_l">
            <h2>Lokalizacje wag</h2>
            <ol>
                <?php
                    $connection = mysqli_connect('localhost', 'root', '', 'wazenietirow');

                    $query1 = "SELECT ulica FROM lokalizacje;";

                    $query_result = mysqli_query($connection, $query1);

                    foreach ($query_result as $row){
                        echo "<li>ulica ".$row['ulica']."</li>";
                    }



                ?>
            </ol>

            <h2>Kontakt</h2>
            <a href="mailto:wazenie@wroclaw.pl">napisz</a></a>
        </section>

        <section id="glowny_s">
            <h2>Alerty</h2>
            <table>
                <tr>
                    <th>rejestracja</th>
                    <th>ulica</th>
                    <th>waga</th>
                    <th>dzień</th>
                    <th>czas</th>
                </tr>
                <?php
                    

                    $query2 = "SELECT rejestracja, waga, dzien, czas, ulica FROM wagi JOIN lokalizacje ON lokalizacje.id = wagi.lokalizacje_id WHERE waga > 5;";

                    $query_result = mysqli_query($connection, $query2);

                    foreach ($query_result as $row){
                        echo "<tr><td>".$row['rejestracja']."</td>"."<td>".$row['ulica']."</td>"."<td>".$row['waga']."</td>"."<td>".$row['dzien']."</td>"."<td>".$row['czas']."</td>"."</tr>";
                    }


                ?>
            </table>

            <?php

                    $query3 = "INSERT INTO wagi (lokalizacje_id, waga, rejestracja, dzien, czas) VALUES (5, FLOOR(RAND()*10+1), 'DW12345', CURRENT_DATE, CURRENT_TIME);";

                    mysqli_query($connection, $query3);

                    header('refresh: 10;');

                    mysqli_close($connection);

            ?>
        </section>

        <section id="glowny_r">
            <img src="obraz2.jpg" alt="tir">
        </section>
    </main>

    <footer>
        <p>Stronę wykonał: Krzysztof Gadzina</p>
    </footer>
</body>
</html>