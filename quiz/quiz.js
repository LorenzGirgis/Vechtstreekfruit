let reset = document.createElement("button");
reset.style.display = "none";
var quiz = {
    data: [{
            q: "In welke landen groeien appels die we in Nederland kunnen kopen?",
            o: [
                "Nederland, Frankrijk, Spanje, Zuid-Afrika, China, Nieuw-Zeeland",
                "Noorwegen, Turkije, Alaska, Canada, Nigeria",
                "Appels komen uit al deze landen",
            ],
            a: 0
        },
        {
            q: "Welke appel is geen Nederlandse appel?",
            o: [
                "Elstar",
                "Goudreinet",
                "Jonagold",
                "Fuji"
            ],
            a: 3
        },
        {
            q: "Kun je een appel eten met schil?",
            o: [
                "ja",
                "nee",
            ],
            a: 0
        },
        {
            q: "Welke appel is het populairste ras in Nederland?",
            o: [
                "Elstar",
                "Goudreinet",
                "Rubens",
            ],
            a: 0
        },
        {
            q: "Wanneer worden de meeste Nederlandse appels geoogst?",
            o: [
                "In mei en juni",
                "In juli en augustus",
                "In september en oktober"
            ],
            a: 2
        }
    ],

hWrap: null,
hQn: null,
hAns: null,

now: 0,
score: 0,

init: () => {
    quiz.hWrap = document.getElementById("quizWrap");


    quiz.hQn = document.createElement("div");
    quiz.hQn.id = "quizQn";
    quiz.hWrap.appendChild(quiz.hQn);

    quiz.hAns = document.createElement("div");
    quiz.hAns.id = "quizAns";
    quiz.hWrap.appendChild(quiz.hAns);

    quiz.draw();
},

draw: () => {
    quiz.hQn.innerHTML = quiz.data[quiz.now].q;

    quiz.hAns.innerHTML = "";
    for (let i in quiz.data[quiz.now].o) {
        let radio = document.createElement("input");
        radio.type = "radio";
        radio.name = "quiz";
        radio.id = "quizo" + i;
        quiz.hAns.appendChild(radio);
        let label = document.createElement("label");
        label.innerHTML = quiz.data[quiz.now].o[i];
        label.setAttribute("for", "quizo" + i);
        label.dataset.idx = i;
        label.addEventListener("click", () => {
            quiz.select(label);
        });
        quiz.hAns.appendChild(label);
    }
},
select: (option) => {
    let all = quiz.hAns.getElementsByTagName("label");
    for (let label of all) {
        label.removeEventListener("click", quiz.select);
    }

    let correct = option.dataset.idx == quiz.data[quiz.now].a;
    if (correct) {
        quiz.score++;
        option.classList.add("correct");
    } else {
        option.classList.add("wrong");
    }

    quiz.now++;
    setTimeout(() => {
        if (quiz.now < quiz.data.length) {
            quiz.draw();
        } else {
            quiz.hQn.innerHTML = `Je hebt ${quiz.score} van de ${quiz.data.length} goed.`;
            quiz.hAns.innerHTML = "";
            reset.style.display = "block";
        }
    }, 1000);
},

reset: () => {
    quiz.now = 0;
    quiz.score = 0;
    quiz.draw(); 
reset.style.display = "none";   
}
};
window.addEventListener("load", quiz.init);


window.addEventListener("load", () => {
    reset.innerHTML = "Reset";
    reset.addEventListener("click", quiz.reset);
    document.getElementById("quizWrap").appendChild(reset);
});