<?php
function visualizzaQuestionari($r){?>
    <?php $nomesito = "Lista_Questionari"; require __DIR__ . '/parcials/header.php'; ?>
    <style>
        table {
            width:80%;
            margin-left: auto;
            margin-right: auto;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: center;
        }
        table tr:nth-child(even) {
            background-color: #eee;
        }
        table tr:nth-child(odd) {
            background-color: #aba;
        }
        table th {
            background-color: rgb(0, 0, 0);
            color: white;
        }
    </style>
    <body>
    <br>
    <br>

    <table>
        <tr><th>ID questionario</th><th>ID amministratore</th><th>Nome</th><th>Punti</th><th>Metodo invio</th></tr>
        <?php while($row = mysqli_fetch_array($r,MYSQLI_ASSOC)) {
            echo "<tr><td>" . $row['id_questionario'] . "</td><td>" . $row['id_amministratore'] . "</td><td>" . $row['nome'] .
                "</td><td>" . $row['punti'] . "</td><td>" . $row['metodo_invio'] ."</td></tr>";
        }?>
    </table>
    </body>
    </html>
<?php  }?>