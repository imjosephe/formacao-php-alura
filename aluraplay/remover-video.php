<?php
    $pdo = new PDO('mysql:host=localhost;dbname=serenatto', 'root', 'Senhadificil123$');
    $id = $_GET['id'];
    $sql = 'DELETE FROM videos WHERE id = ?';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(1, $id);
    $statement->execute();

    if ($statement->execute() === false) {
        header('Location: /index.php?sucesso=0');
    } else {
        header('Location: /index.php?sucesso=1');
    }