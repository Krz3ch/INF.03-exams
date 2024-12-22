function Switching(blok) {
    document.getElementById("blok1").style.display = "none";
    document.getElementById("blok2").style.display = "none";
    document.getElementById("blok3").style.display = "none";

    document.getElementById(blok).style.display = "block";
}

width = 4;

function BarProgression() {
    pasek = document.getElementById("pasek_postepu");

    width += 12;

    if (width > 100) {
        width = 100;
    }
    pasek.style.width = width + "%";
}

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("input").forEach((input) => {
        input.addEventListener("blur", BarProgression);
    });
});

function Zatwierdz() {
    imie = document.getElementById("imie").value;
    nazwisko = document.getElementById("nazwisko").value;
    data = document.getElementById("data_ur").value;
    ulica = document.getElementById("ulica").value;
    numer = document.getElementById("numer").value;
    miasto = document.getElementById("miasto").value;
    nr_tel = document.getElementById("nr_tel").value;
    rodo = document.getElementById("rodo").checked;

    console.log(
        imie +
            ", " +
            nazwisko +
            ", " +
            data +
            ", " +
            ulica +
            ", " +
            numer +
            ", " +
            miasto +
            ", " +
            nr_tel +
            ", " +
            rodo
    );
}
