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

    $items= $pdo->query("SELECT `id`,`name`,`price` FROM items")->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div>
    <button><a href='add_item.php'>+</a></button>
    <button><a href='sales_report.php'>銷售報表</a></button>
    </div>
    <table>
        <tr>
            <td>品項</td>
            <td>價格</td>
            <td>操作</td>
        </tr>

        <?php
        foreach ($items as $item):
            ?>
            <tr>
                <td><?=$item['name'];?></td>
                <td><?=$item['price'];?></td>
                <td>
                    <a href='update_item.php?id=<?=$item['id'];?>'>編輯</a>
                    <a href='./api/delete_item.php?id=<?=$item['id'];?>'>刪除</a>
            </td>
            </tr>
            <?php
            endforeach;
            ?>
                </table>
</body>

</html>