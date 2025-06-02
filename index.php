<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>早餐店後台系統</title>
</head>

<body>
    <h1>泰山小吃部</h1>
    <h2>餐點項目</h2>

    <?php
    $dsn = "mysql:host=localhost;dbname=store;charset=utf8";

    $pdo = new PDO($dsn, 'root', '');

    $items= $pdo->query("SELECT `name`,`price` FROM items")->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <table>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>

</html>