<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep dla uczniów</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Dzisiejsze promocje naszego sklepu</h1>
    </header>
    <main>
        <section id="left">
            <h2>Taniej o 30%</h2>
            <?php
                $connection = mysqli_connect('localhost', 'root', '', 'sklep');

                $query = "SELECT nazwa FROM towary WHERE promocja = 1;";

                $query_result = mysqli_query($connection, $query);
                
                echo "<ol>";

                foreach($query_result as $row){
                    echo "<li>".$row['nazwa']."</li>";
                }

                echo "</ol>";

                mysqli_close($connection);
            ?>
        </section>
        <section id="center">
            <h2>Sprawdź cenę</h2>

            <form method="post">
                <select name="nazwa">
                    <option value="Gumka do mazania">Gumka do mazania</option>
                    <option value="Cienkopis">Cienkopis</option>
                    <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
                    <option value="Markery 4 szt.">Markery 4 szt.</option>
                </select>
                <button type="submit" name="sprawdz">SPRAWDZ</button>
            </form>

            <?php
                if(isset($_POST["nazwa"])){
                    $connection = mysqli_connect('localhost', 'root', '', 'sklep');

                    $query = "SELECT cena FROM towary WHERE nazwa = '".$_POST["nazwa"]."';";

                    $query_result = mysqli_query($connection, $query);

                    while ($data = mysqli_fetch_array($query_result)){
                        $cena = $data['cena'] * 0.7;
                        echo "<div>cena regularna: ".$data['cena']."<br>cena w promocji 30%: ".$cena."</div>";
                    }

                    mysqli_close($connection);

                }
            ?>
        </section>
        <section id="right">
            <h2>Kontakt</h2>
            <p><a href="mailto:bok@sklep.pl">e-mail: bok@sklep.pl</a></p>
            <img src="promocja.png" alt="promocja">
        </section>
    </main>
    <footer>
        <h4>Autor strony: Krzysztof Gadzina</h4>
    </footer>


</body>
</html>