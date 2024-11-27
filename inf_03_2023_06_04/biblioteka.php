<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Biblioteka w Ksiązkowicach Wielkich</h1>
    </header>
    <main>
        <section id="left">
            <h3>Polecamy dzieła autorów:</h3>
            <?php
                $connection = mysqli_connect('localhost', 'root', '', 'biblioteka');
            
                $query = "SELECT imie, nazwisko FROM autorzy ORDER BY nazwisko ASC;";

                $query_result = mysqli_query($connection, $query);
                
                echo "<ol>";

                foreach($query_result as $data){
                    echo "<li>".$data['imie']." ".$data['nazwisko']."</li>";
                }

                echo "</ol>";


                mysqli_close($connection);
            ?>
        </section>
        <section id="center">
            <h3>ul. Czytelnicza 25, Książkowice&nbspWielkie</h3>
            <p><a href="mailto:sekretariat@biblioteka.pl">Napisz do nas</a></p>
            <img src="biblioteka.png" alt="książki">
        </section>
        <div>
            <section id="right_top">
                <h3>Dodaj czytelnika</h3>
                <form method="post">
                    imię: <input type="text" name="imie"><br>
                    nazwisko: <input type="text" name="nazwisko"><br>
                    symbol <input type="number" name="symbol"><br>
                    <button type="submit">DODAJ</button>
                </form>
            </section>
            <section id="right_bottom">
                <?php
                    if(isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['symbol'])){
                        $connection = mysqli_connect('localhost', 'root', '', 'biblioteka');

                        echo "Czytelnik ".$_POST['imie']." ".$_POST['nazwisko']." został(a) dodany do bazy danych";
        
                        $query = "INSERT INTO czytelnicy (imie, nazwisko, kod) VALUES ('".$_POST['imie']."', '".$_POST['nazwisko']."', ".$_POST['symbol'].");";

                        $query_result = mysqli_query($connection, $query);

                        mysqli_close($connection);
                    }
                ?>
            </section>
        </div>
    </main>
    <footer>
        <p>Projekt strony: Krzysztof Gadzina</p>
    </footer>
</body>
</html>