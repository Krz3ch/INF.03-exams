console.log("dziala");
function obliczPaliwo() {
    var wynik = document.getElementById("wynik");
    var typ = parseFloat(document.getElementById("typ").value);
    var ilosc = parseFloat(document.getElementById("ilosc").value);

    if (typ == 1) {
        var cena = 4;
    } else if (typ == 2) {
        var cena = 3.5;
    } else {
        var cena = 0;
    }

    var wartosc = ilosc * cena;
    wynik.innerHTML = "koszt paliwa: " + wartosc + " zł";
}
console.log("dziala");
