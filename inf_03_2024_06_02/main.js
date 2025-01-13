function wyslij() {
    wiadomosc = document.getElementById("wiadomosc").value;
    blok = document.createElement("div");
    blok.classList.add("blok_j");

    zdjecie = document.createElement("img");
    zdjecie.setAttribute("src", "Jolka.jpg");
    zdjecie.setAttribute("alt", "Jolanta Nowak");

    paragraf = document.createElement("p");
    paragraf.innerText = wiadomosc;

    blok.appendChild(zdjecie);
    blok.appendChild(paragraf);

    document.querySelector("section").appendChild(blok);

    blok.scrollIntoView();
}

odpowiedzi_k = [
    "Świetnie!",
    "Kto gra główną rolę?",
    "Lubisz filmy Tego reżysera?",
    "Będę 10 minut wcześniej",
    "Może kupimy sobie popcorn?",
    "Ja wolę Colę",
    "Zaproszę jeszcze Grześka",
    "Tydzień temu też byłem w kinie na Diunie",
    "Ja funduję bilety",
];

function generuj() {
    wiadomosc = odpowiedzi_k[Math.floor(Math.random() * odpowiedzi_k.length)];

    blok = document.createElement("div");
    blok.classList.add("blok_k");

    zdjecie = document.createElement("img");
    zdjecie.setAttribute("src", "Krzysiek.jpg");
    zdjecie.setAttribute("alt", "Krzysztof Łukasiński");

    paragraf = document.createElement("p");
    paragraf.innerText = wiadomosc;

    blok.appendChild(zdjecie);
    blok.appendChild(paragraf);

    document.querySelector("section").appendChild(blok);

    blok.scrollIntoView();
}
