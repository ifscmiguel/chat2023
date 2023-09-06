<?php
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
if (!trim($nome)) {
    header("Location:index.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            height: 95vh;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        #chat {
            border: 1px solid black;
            border-radius: 5px;
            padding: 20px;
            box-sizing: border-box;
            flex-grow: 1;
            background-color: rgb(207, 194, 246);
            overflow-y: scroll;
            text-align: left;
        }

        #input_area {
            display: flex;
            gap: 10px;
        }

        input[type=submit] {
            min-width: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="chat">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut quibusdam praesentium, quae eius possimus accusamus numquam mollitia officia explicabo quis vitae deserunt consequatur iste natus nobis a vero voluptatibus pariatur!</p>
            <p>Suscipit, nobis aliquid sit quibusdam delectus quia, voluptas facilis quo pariatur, ratione necessitatibus. Est dolore laudantium, commodi harum illum error enim inventore maiores sint nesciunt. Dignissimos, ut. Magni, optio cumque?</p>
            <p>Laborum vitae harum, voluptas id temporibus magni suscipit eveniet sapiente corrupti sunt dicta omnis eos eaque dolores possimus ea nostrum repudiandae corporis exercitationem. Nobis rem facere accusantium reiciendis maiores numquam.</p>
            <p>Laboriosam laudantium, obcaecati est libero iusto at illo quas nulla itaque animi veritatis, voluptas perspiciatis, ducimus magnam sunt? Ab iusto sed eaque laudantium, nostrum molestias repudiandae facilis? Fuga, saepe ipsum.</p>
            <p>Laudantium ut dolorum fugit culpa quibusdam ducimus autem aperiam voluptatem suscipit? Totam veniam quibusdam officia eveniet, nihil velit laboriosam magnam tenetur facere sequi illum quaerat voluptates, debitis amet consectetur saepe.</p>
            <p>Placeat repellat in temporibus veritatis excepturi ducimus aut explicabo beatae, animi officia assumenda amet sunt facere aperiam unde quo quaerat voluptate? Dignissimos dolorem molestias debitis in aut, molestiae sint praesentium!</p>
            <p>Aliquam debitis magni impedit eius temporibus explicabo, nostrum ducimus commodi? Nobis eum tempora necessitatibus consequatur, rem dolore cupiditate quisquam! Odit, a animi nam tempora voluptas atque asperiores minus vitae eum!</p>
            <p>Maiores debitis pariatur molestias quibusdam possimus quasi officia suscipit, similique sequi sint sit accusamus itaque eaque natus vel eius laudantium esse consequatur a error doloribus vero. Magni quaerat tempora assumenda!</p>
            <p>Mollitia reprehenderit adipisci sit numquam odit expedita, at ullam amet. Velit, illo! Repudiandae et incidunt officia, odio temporibus modi veniam? Suscipit, voluptatum. Aut officia repellendus id cum voluptatem explicabo quia?</p>
            <p>Expedita, commodi? Numquam ipsa minus fugit consectetur doloribus reiciendis quidem? Nihil pariatur perferendis accusantium debitis quas repellat est suscipit adipisci, eveniet nesciunt ea sint sunt saepe amet, deleniti cum maiores?</p>
            <p>Quod quibusdam numquam reiciendis ut mollitia rem, et recusandae nihil illo itaque quam dolore maxime ipsam magni architecto dicta accusamus ex ullam non placeat, veritatis aliquam! Distinctio accusamus voluptatibus voluptas?</p>
            <p>Assumenda, facere, corporis debitis enim voluptatum nihil laborum quidem culpa, molestias expedita neque optio! Quae, perspiciatis reiciendis cumque officiis minus incidunt at possimus aut officia suscipit, eaque, veniam alias necessitatibus.</p>
            <p>Rem beatae est id deleniti in quae corporis, consequatur optio possimus sit quaerat porro dolorem consequuntur et vitae perspiciatis ea reiciendis, doloribus minus distinctio! Exercitationem a aspernatur non commodi veniam!</p>
            <p>Optio, magnam aliquam, neque adipisci a omnis placeat voluptatum mollitia ipsa alias quia non velit atque autem deleniti ipsam aperiam sit possimus voluptate dolore, et dicta! Non, ipsa. Architecto, est.</p>
            <p>Laboriosam repudiandae deleniti cupiditate maiores, ipsa illo, veniam dolorem harum modi quam sequi laborum excepturi quo alias accusantium. Qui, deleniti commodi? Dolores voluptate blanditiis voluptas inventore et! Harum, eveniet molestiae!</p>
        </div>

        <div id="input_area">
            <input type="hidden" name="nome" value="<?= $nome ?>">
            <input type="text" id="msg" name="msg">
            <input type="submit" value="enviar">
        </div>

    </div>

    <script>
        function rolar() {
            let chatDiv = document.getElementById("chat");
            chatDiv.scrollTop = chatDiv.scrollHeight;
        }
        rolar();
    </script>
</body>

</html>