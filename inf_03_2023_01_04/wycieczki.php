<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <h1>BIURO TURYSTYCZNE</h1>
    </header>
    <section>
        <h3>Wycieczki, na które są wolne miejsca</h3>
        <?php
            $connection = mysqli_connect('localhost', 'root', '', 'biuro');

            $query = 'SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1;';

            $query_result = mysqli_query($connection, $query);


            echo '<ul>';

            while($data = mysqli_fetch_array($query_result)){
                echo '<li>'.$data['id'].' dnia '.$data['dataWyjazdu'].' jedziemy do '.$data['cel'].', cena: '.$data['cena'].'</li>';
            }

            echo '</ul>';
            
            mysqli_close($connection);
        ?>
    </section>
    <main>
        <div id="left">
            <h2>Bestselery</h2>
            <table>
                <tr>
                    <td>Wenecja</td>
                    <td>kwiecień</td>
                </tr>
                <tr>
                    <td>Londyn</td>
                    <td>lipiec</td>
                </tr>
                <tr>
                    <td>Rzym</td>
                    <td>wrzesień</td>
                </tr>
            </table>
        </div>
        <div id="center">
            <h2>Nasze zdjęcia</h2>

            <?php
                $connection = mysqli_connect('localhost', 'root', '', 'biuro');
    
                $query = 'SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC;';
    
                $query_result = mysqli_query($connection, $query);


                while($data = mysqli_fetch_array($query_result)){
                     echo '<img src="'.$data['nazwaPliku'].'" alt="'.$data['podpis'].'"/>';
                }

                
                mysqli_close($connection);
            ?>
        </div>
        <div id="right">
            <h2>Skontaktuj się</h2>
            <a href="mailto:turysta@wycieczki.pl">napisz do nas</a>
            <p>telefon: 111222333</p>
        </div>
    </main>
    <footer>
        <p>Stronę wykonał: Krzysztof Gadzina 4TP 22.11.2024</p>
    </footer>
</body>
</html>