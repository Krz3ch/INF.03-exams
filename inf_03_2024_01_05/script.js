function obliczanie() {
    var peeling = document.getElementById("peeling").checked;
    var maska = document.getElementById("maska").checked;
    var masaz_twarzy = document.getElementById("masaz_twarzy").checked;
    var makijaz = document.getElementById("makijaz").checked;

    var wynik = document.getElementById("wynik");

    var suma = 0;

    if (peeling) {
        suma += 45;
    }

    if (maska) {
        suma += 30;
    }

    if (masaz_twarzy) {
        suma += 20;
    }

    if (makijaz) {
        suma += 50;
    }

    wynik.innerHTML = "Cena zabiegów " + suma;
}
