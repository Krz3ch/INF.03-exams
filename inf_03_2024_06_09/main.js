aktualne_zdjecie = 1;

function nastepne() {
    img = document.querySelector("#main_c img");

    if (aktualne_zdjecie == 7) {
        aktualne_zdjecie = 1;
    } else {
        aktualne_zdjecie += 1;
    }

    img.src = aktualne_zdjecie + ".jpg";
}

function poprzednie() {
    img = document.querySelector("#main_c img");

    if (aktualne_zdjecie == 1) {
        aktualne_zdjecie = 7;
    } else {
        aktualne_zdjecie -= 1;
    }

    img.src = aktualne_zdjecie + ".jpg";
}
