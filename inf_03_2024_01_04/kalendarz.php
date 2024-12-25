<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <div id="spinacz">
        <section id="baner_1">
            <img src="logo1.png" alt="lipiec">
        </section>
        <section id="baner_2">
            <h1>TERMINARZ</h1>
            <p>najbliższe zadania: </p>
            <?php
                $connection = mysqli_connect('localhost', 'root', '', 'terminarz');
            
                $query = "SELECT DISTINCT wpis FROM zadania WHERE dataZadania IN ('2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07') AND wpis != ''";

                $query_result = mysqli_query($connection, $query);

                echo "<p>";

                foreach($query_result as $row){
                    echo $row['wpis']."; ";
                }

                echo "</p>";
                mysqli_close($connection);
            ?>
        </section>
    </div>

    <main>
        <?php
            $connection = mysqli_connect('localhost', 'root', '', 'terminarz');
        
            $query = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec';";

            $query_result = mysqli_query($connection, $query);


            foreach($query_result as $row){
                echo "<div id='blok'><h6>".$row['dataZadania']."</h6><p>".$row['wpis']."</p></div>";
            }

            mysqli_close($connection);
        ?>
    </main>
    <footer>
        <a href="sierpien.html">Terminarz na sierpień</a>
        <p>Stronę wykonał: Krzysztof Gadzina</p>
    </footer>
</body>
</html>