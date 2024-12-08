<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <header id="baner_lewy">
            <h1>Internetowa wypożyczalnia filmów</h1>
        </header>
        <section id="baner_prawy">
            <table>
                <tr>
                    <td>Kryminal</td>
                    <td>Horror</td>
                    <td>Przygodowy</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>30</td>
                    <td>20</td>
                </tr>
            </table>
        </section>
    </header>
    <main>
        <section id="polecane">
            <h3>Polecamy</h3>

            <?php
                $connection = mysqli_connect('localhost', 'root', '', 'dane3');

                $query = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id IN (18, 22, 23, 25);";

                $query_result = mysqli_query($connection, $query);

                foreach($query_result as $row){
                    echo "<div id='blok_filmu'><h4>".$row['id'].". ".$row['nazwa']."</h4>";
                    echo "<img src='".$row['zdjecie']."' alt='film'>";
                    echo "<p>".$row['opis']."</p></div>";
                }
                mysqli_close($connection);
            ?>
        </section>

        <section id="fantastyczne">
        <h3>Filmy fantastyczne</h3>

        <?php
                $connection = mysqli_connect('localhost', 'root', '', 'dane3');

                $query = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id = 12;";

                $query_result = mysqli_query($connection, $query);

                foreach($query_result as $row){
                    echo "<div id='blok_filmu'><h4>".$row['id'].". ".$row['nazwa']."</h4>";
                    echo "<img src='".$row['zdjecie']."' alt='film'>";
                    echo "<p>".$row['opis']."</p></div>";
                }
                mysqli_close($connection);
            ?>
        </section>
    </main>
    <footer>
        <form action="video.php" method="post">
            <label>
                Usuń film nr.:
                <input type="number" name="nr_filmu">
            </label>
            <button type="submit">Usuń film</button>
        </form>
        <?php
            if(isset($_POST['nr_filmu'])){
                $connection = mysqli_connect('localhost', 'root', '', 'dane3');

                $query = "DELETE FROM produkty WHERE id ='".$_POST['nr_filmu']."';";

                $query_result = mysqli_query($connection, $query);

                mysqli_close($connection);
            }
        ?>

        <p>Stronę wykonał: <a href="mailto:ja@poczta.com">Krzysztof Gadzina</a></p>
    </footer>
</body>
</html>