<?php

function criptoCesar($str, $shift)
{
    $char = range('a', 'z');
    $flip = array_flip($char);

    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array(strtolower($str{$i}), $char)) {
            $ord = $flip[strtolower($str{$i})];

            $ord = ($ord + $shift) % 26;

            if ($ord < 0) $ord += 26;

            $str{$i} = ($str{$i} == strtolower($str{$i})) ? $char[$ord]: strtoupper($char[$ord]);
        }
    }

    return $str;
}
?>
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
            <h1>criptoCesar</h1>
            <h3>Δεν μπορώ να πιστέψω ότι ήρθατε εδώ.</h3>
            <form method="post" class="meuform">
                <p>
                    <input type="text" name="texto" id="textToHashId" required placeholder="entre com um texto ex:123"/>
                    <input type="text" name="chave" id="textToHashId" required placeholder="chave/deslocamento"/>
                    <br>
                     <input class="btn-k" type="submit" value="Gerar"/>
                </p>

            </form>

            <?php
              if($_POST){
                echo criptoCesar($_POST['texto'],$_POST['chave']);
              }

            ?>
            </div>
        </body>
    </html>
