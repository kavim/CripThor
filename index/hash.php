<!DOCTYPE html>
<html>
    <head>
          <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="UTF-8">
        <title>wubba lubba dub dub </title>
        <style>
            body{
                background-color:#1c1c1c;text-align:center;
                font-family: helvetica;
            }
            .caixa{
                background-color:#fff;
                margin:0 auto;
                margin-top: 5%;
                border-radius: 6px;
                padding: 20px;
                width: 80%;
            }
            .meuform{
                margin-bottom: 5%;
                width: 50%;
                margin: 0 auto;
            }

            .showdy{
                font-size: 25px;
                color: yellowgreen;
            }


            input[type=text], select {
            width: 79%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;

        }

        input[type=submit] {
            width: 19%;
            background-color: #4CAF50;
            color: white;
            padding: 13px 15px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }



        </style>
    </head>
    <body>

        <div class="caixa">
            <h1>cripTHOR</h1>
            <h3>digite uma "string" e selecione uma hash</h3>
            <form method="post" class="meuform">
                <p>
                    <input type="text" name="textToHash" id="textToHashId" required placeholder="entre com um texto ex:123"/>                    <input class="btn-k" type="submit" value="Gerar"/></p>
                <p>
                    <select name="hash-algorithm-used" size="1">
                        <option selected value="sha1">sha-1</option>
                        <option value="md5">md5</option>
                        <option value="base64">ENCODE64</option>
                        <option value="sha256">sha256</option>
                    </select>
                </p>
            </form>
            <?php

            if ($_POST) {
                $txt = $_POST['textToHash'];
                $alg = $_POST['hash-algorithm-used'];

                if ($alg === "md5") {
                    $hash = md5($txt);
                }
                if ($alg === "sha1") {
                    $hash = md5($txt);
                }
                if ($alg === "base64") {
                    $hash = base64_encode($txt);
                }
                if ($alg === "sha256") {
                    $hash = hash('sha256', $txt);
                }

                if ($txt === "wubba lubba dub dub") {
                    echo "<h1 style='color:red'>Para de assistir ricardo e martins</h1>";
                }

                echo "<p>hash utilizada&nbsp&nbsp<b>" . $alg . "</b></p><br>";
                echo "<p>texto criptografado&nbsp&nbsp<b class='showdy'>" . $hash . "</b></p><br>";
            }



            ?>
        </div>
    </body>
</html>
