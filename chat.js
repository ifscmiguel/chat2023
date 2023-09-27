// elementos
let chatDiv = document.getElementById("chat");
const nome = document.getElementById("nome");
const msg = document.getElementById("msg");
const form = document.querySelector("form");

function rolar() {
    chatDiv.scrollTop = chatDiv.scrollHeight;
}

form.addEventListener("submit", function(e) {
    e.preventDefault();
    enviar();
});

function enviar() {
    let data = new FormData();
    data.append("msg", msg.value);
    data.append("nome", nome.value);

    // enviar de forma assíncrona
    fetch("recebe.php", {
        method: "POST",
        body: data
    }).then(function(resposta) {
        if (!resposta.ok) {
            alert("não foi possível enviar");
        } else {
            msg.value = "";
        }
    });
}
// receber de forma assíncrona

let id = 0;

function ler() {
    let data = new FormData();
    data.append("id", id);
    fetch("ler.php", {
            method: "POST",
            body: data
        })
        .then(function(resposta) {
            return resposta.json();
        })
        .then(function(resposta) {
            resposta.forEach(function(r) {
                let div = document.createElement('div');
                div.innerHTML = `<strong>${r.nome}</strong>: ${r.msg}`;
                chatDiv.appendChild(div);
                id = r.id;
            });
        })
        .then(function() {
            let index = 1;
            let naoVistos = document.querySelectorAll(":not(.visto)");
            for (const m of naoVistos.values()) {
                setTimeout(() => {
                    m.classList.add('visto');
                    rolar();
                }, (index * 50));
                index++;
            }
        });

}

// chama a função ler() a cada 3 segundos
setInterval(ler, 2000);
ler();