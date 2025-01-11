akt_cytat = 1;
cytat1 = document.getElementById("cytat_1");
cytat2 = document.getElementById("cytat_2");
cytat3 = document.getElementById("cytat_3");

function zmienCytat() {
    switch (akt_cytat) {
        case 1:
            akt_cytat = 2;
            cytat_1.style.display = "none";
            cytat_2.style.display = "block";
            break;
        case 2:
            akt_cytat = 3;
            cytat_2.style.display = "none";
            cytat_3.style.display = "block";
            break;
        case 3:
            akt_cytat = 1;
            cytat_3.style.display = "none";
            cytat_1.style.display = "block";
            break;
    }
}
