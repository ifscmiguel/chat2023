 const chat = document.getElementById("chat");
        const msg = document.getElementById("msg");
        const botaoEnviar = document.getElementById("enviar");
        const botaoReceber = document.getElementById("receber");

        botaoReceber.addEventListener("click", () => {
            fetch('http://localhost/miguel/projetochat2023/chat2023/ler.php')
                .then((response) => response.json())
                .then((data) => {
                    data.forEach(function(msg) {
                        let p = document.createElement("p");
                        p.innerHTML = `${msg.nome}: ${msg.msg}`;
                        console.log(msg.nome);
                        chat.appendChild(p);
                    });
                });
        })