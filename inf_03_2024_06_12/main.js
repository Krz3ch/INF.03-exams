function Transform_1() {
    obraz = document.querySelector('img[src="pszczola.jpg"]');
    efekty = document.querySelectorAll('input[name="opcje_1"]');

    efekty.forEach((e) => {
        if (e.checked) {
            obraz.style.filter = e.value;
        }
    });
}

function kolorowy() {
    obraz = document.querySelector('img[src="pomarancza.jpg"]');

    obraz.style.filter = "none";
}

function czarnobiel() {
    obraz = document.querySelector('img[src="pomarancza.jpg"]');

    obraz.style.filter = "grayscale(100%)";
}

function Zast3() {
    obraz = document.querySelector('img[src="owoce.jpg"]');
    suwak = document.querySelector("#suwak_3");

    obraz.style.filter = "opacity(" + suwak.value + "%)";
}

function Zast4() {
    obraz = document.querySelector('img[src="zolw.jpg"]');
    suwak = document.querySelector("#suwak_4");

    obraz.style.filter = "brightness(" + suwak.value + "%)";
    console.log(suwak.value);
}
