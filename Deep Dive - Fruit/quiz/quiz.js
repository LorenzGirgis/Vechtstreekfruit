var quiz = {
    data: [{
            q: "Wat is een correcte manier om Hello world in Python te printen?",
            o: [
                "echo ('Hello world');",
                "print ('Hello world');",
                "p('Hello world');",
                "echo 'Hello world';"
            ],
            a: 1
        },
        {
            q: "Hoe eplaats je COMMENTS in Python code?",
            o: [
                "//* dit is een comment *//",
                "/*dit is een comment */",
                "//dit is een comment",
                "#dit is een comment"
            ],
            a: 3
        },
        {
            q: "Hoe maak je een variabele met de numerieke waarde 5?",
            o: [
                "x =5",
                "x = int(5)",
                "beide antwoorden zijn correct"
            ],
            a: 2
        },
        {
            q: "Wat is de juiste manier om een functie in Python te maken?",
            o: [
                "def myFunction():",
                "function myfunction():",
                "create myFunction():",
                "myFunction():"
            ],
            a: 0
        },
        {
            q: "== betekent gelijk",
            o: [
                "juist",
                "onjuist"
            ],
            a: 0
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
            }
        }, 1000);
    },

    reset: () => {
        quiz.now = 0;
        quiz.score = 0;
        quiz.draw();
    }
};
window.addEventListener("load", quiz.init);