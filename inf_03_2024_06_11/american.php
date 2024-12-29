<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hodowla świnek morskich</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
    </header>
    <main>
        <nav id="lewo1">
            <a href="peruwiaka.php">Rasa Peruwianka</a>
            <a href="american.php">Rasa American</a>
            <a href="crested.php">Rasa Crested</a>
        </nav>
        <aside id="prawo1">
            <h3>Poznaj wszystkie rasy świnek morskich</h3>

            <?php
                $connection = mysqli_connect('localhost', 'root', '', 'hodowla');
                
                $query = "SELECT rasa FROM rasy";

                $query_result = mysqli_query($connection, $query);

                echo "<ol>";

                foreach($query_result as $row){
                    echo "<li>".$row['rasa']."</li>";
                }

                echo "</ol>";

                mysqli_close($connection);
            ?>
        </aside>
        <section id="lewo2">
            <img src="american.jpg" alt="Świnka morska rasy american">

            <?php
                $connection = mysqli_connect('localhost', 'root', '', 'hodowla');
                
                $query = "SELECT DISTINCT data_ur, miot, rasy.rasa FROM swinki JOIN rasy ON swinki.rasy_id = rasy.id WHERE rasy.id = 6;";

                $query_result = mysqli_query($connection, $query);

                echo "<div>";

                foreach($query_result as $row){
                    echo "<h2>Rasa: ".$row['rasa']."</h2>";
                    echo "<p>Data urodzenia: ".$row['data_ur']."</p>";
                    echo "<p>Oznaczenie miotu: ".$row['miot']."</p>";

                }

                echo "</div>";

                mysqli_close($connection);
            ?>

            <hr />
            <h2>Świnki w tym miocie</h2>

            <?php
                $connection = mysqli_connect('localhost', 'root', '', 'hodowla');
                
                $query = "SELECT imie, cena, opis FROM swinki WHERE rasy_id = 6;";

                $query_result = mysqli_query($connection, $query);

                echo "<div>";

                foreach($query_result as $row){
                    echo "<h2>".$row['imie']." - ".$row['cena']." zł</h2>";
                    echo "<p>".$row['opis']."</p>";


                }

                echo "</div>";

                mysqli_close($connection);
            ?>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: Krzysztof Gadzina</p>
    </footer>
</body>
</html>