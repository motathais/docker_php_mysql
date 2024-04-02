<!DOCTYPE html>
<html>
<head>
    <title>Tabela de Exemplo</title>
</head>
<body>
    <h1>Tabela de Exemplo</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php
        $pdo = new PDO('mysql:host=mysql;dbname=test', 'root', 'password');

        $pdo->exec("create table if not exists usuarios (id int AUTO_INCREMENT PRIMARY KEY, nome varchar(255), email varchar(255));");
        $pdo->exec("insert into usuarios (id, nome, email) values (null, 'teste', 'teste@teste.com');");


        /*$stmt = $pdo->query('SELECT * FROM usuarios');
        while ($row = $stmt->fetch()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['nome']}</td><td>{$row['email']}</td></tr>";
        }*/
        ?>
    </table>
</body>
</html>
