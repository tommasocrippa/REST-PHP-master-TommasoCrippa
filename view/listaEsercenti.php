<?php
    function visualizzaEsercenti($r){?>
    <?php
        $nomesito = "Lista_Esercenti";
        require __DIR__ . '/parcials/header.php'; ?>
    <style>
        table {
            width:80%;
            margin-left: auto;
            margin-right: auto;
        }
        table, th, td {
            border: 1px solid #000000;
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
        <tr><th>ID</th><th>Nome</th><th>E-mail</th><th>Data</th></tr>
        <?php while($row = mysqli_fetch_array($r,MYSQLI_ASSOC)) {
            echo "<tr><td>" . $row['id_amministratore'] . "</td><td>" . $row['nome'] . "</td><td>" . $row['email'] . "</td><td>" . $row['data'] . "</td></tr>";
        }?>
    </table>
    </body>
    </html>
<?php  }?>
