<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Hurtownia z najlepszymi cenami</h1>
    </header>
    <main>
        <section id="left">
            <h2>Nasze ceny</h2>
            <?php
                $connection = mysqli_connect('localhost', 'root', '', 'sklep');
            
                $query = "SELECT nazwa, cena FROM towary LIMIT 4;";

                $query_result = mysqli_query($connection, $query);

                echo "<table>";
                foreach ($query_result as $data){
                    echo "<tr><td>".$data['nazwa']."</td>"."<td>".$data['cena']."</td></tr>";
                }
                echo "</table>";
            ?>  
        </section>
        <section id="center">
            <h2>Koszt zakupów</h2>
            <form method="post">
                <label for="towar">Wybierz artykuł:</label>
                <select name="towar">
                    <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                    <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
                    <option value="Cyrkiel">Cyrkiel</option>
                    <option value="Linijka 30 cm">Linijka 30 cm</option>
                </select>
                <br>
                <label for="l_sztuk">liczba sztuk:</label>
                <input type="number" name="sztuki">
                <br>
                <button type="submit" name="submit">OBLICZ</button>
            </form>

            <?php
                    if (isset($_POST['submit'])){
                        $nazwa = $_POST['towar'];
                        $sztuki = $_POST['sztuki'];
    
                        $query = "SELECT cena FROM towary WHERE nazwa = '$nazwa';";
                        

                        $query_result = mysqli_query($connection, $query);
    

                        
                        while($data = mysqli_fetch_array($query_result)){
                            $kwota = $data[0] * $sztuki;
                            echo "wartość zakupów: ".$kwota."";
                        }
                    }

                    mysqli_close($connection);
                ?>

        </section>
        <section id="right">
            <h2>Kontakt</h2>
            <img src="zakupy.png" alt="hurtownia">
            <p>e-mail: <a href="mailto:hurt@poczta2.pl">hurt@poczta2.pl</a></p>
        </section>
    </main>
    <footer>
        <h4>Witrynę wykonał: Krzysztof Gadzina</h4>
    </footer>
</body>
</html>