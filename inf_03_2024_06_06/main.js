formularz = 1;
function nastepna() {
    form1 = document.getElementById("form_1");
    form2 = document.getElementById("form_2");
    form3 = document.getElementById("form_3");

    if (formularz == 1) {
        form1.style.visibility = "hidden";
        form2.style.visibility = "visible";
        formularz++;
    } else {
        form2.style.visibility = "hidden";
        form3.style.visibility = "visible";
        formularz++;
    }
}

function zatwierdz() {
    haslo1 = document.getElementById("haslo");
    haslo2 = document.getElementById("haslo_2");

    imie = document.getElementById("imie").value;
    nazwisko = document.getElementById("nazwisko").value;

    if (haslo1.value != haslo2.value) {
        alert("Podane hasła różnią się");
    } else {
        console.log("Witaj " + imie + " " + nazwisko);
    }
}
