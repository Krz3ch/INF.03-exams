<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Biblioteka w Książkowicach Małych</h1>
    </header>

    <main>
        <section id="main_l">
            <h4>Dodaj czytelnika</h4>
            <form action="biblioteka.php" method="post">
                <label for="imie">imię:</label>
                <input type="text" name="imie" id="imie">
                <br>
                

                <label for="nazwisko">nazwisko:</label>
                <input type="text" name="nazwisko" id="nazwisko">
                <br>
                
                <label for="symbol">symbol:</label>
                <input type="number" name="symbol" id="symbol">
                <br>


                <button name="submit" type="submit">AKCEPTUJ</button>
            </form>
            
            <?php
                $connection = mysqli_connect('localhost','root','','biblioteka');

                if(isset($_POST["submit"])){
                    $imie = $_POST['imie'];
                    $nazwisko = $_POST['nazwisko'];
                    $symbol = $_POST['symbol'];

                    $query1 = "INSERT INTO czytelnicy (imie, nazwisko, kod) VALUES ($imie, $nazwisko, $symbol);";

                    mysqli_query($connection, $query1);

                    echo "<p>Dodano czytelnika $imie $nazwisko</p>";

                }



            ?>
        </section>

        <section id="main_c">
            <img src="biblioteka.png" alt="biblioteka">
            <h6>ul. Czytelników 15;&nbsp;Książkowice Małe</h6>
            <p><a href="mailto:biuro@bib.pl">Czy masz jakieś uwagi?</a></p>
        </section>

        <section id="main_r">
            <h4>Nasi czytelnicy</h4>
            <ol>
                <?php

                    $query2 = "SELECT imie, nazwisko FROM czytelnicy ORDER BY nazwisko ASC;";

                    $query2_result = mysqli_query($connection, $query2);

                    foreach($query2_result as $row){
                        echo "<li>".$row['imie']." ".$row['nazwisko']."</li>";
                    }


                    mysqli_close($connection);
                ?>
            </ol>
        </section>
    </main>

    <footer>
        <p>Projekt witryny: Krzysztof Gadzina</p>
    </footer>

</body>
</html>