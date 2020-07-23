<?php
$operations = json_decode(file_get_contents("data/1.json"), 1);
require_once "Model.php";
$model = new Model();
$model->setOperations($operations);
$stocks = $model->getStocks();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<table border="1">
    <thead>
    <tr>
        <th rowspan="2">ID</th>
        <th rowspan="2">Type</th>
        <th rowspan="2">Credit</th>
        <th rowspan="2">Debit</th>
        <th rowspan="2">Price</th>
        <th rowspan="2">Sum</th>
        <th rowspan="2">***</th>
        <? foreach ($stocks as $stock) {?>
            <th colspan="2">Stock <?=$stock['id'];?></th>
        <?}?>
    </tr>
    <tr>
        <? foreach ($stocks as $stock) {?>
            <th>Remained Q</th>
            <th>Remained S</th>
        <?}?>
    </tr>
    </thead>
    <tbody>
        <? foreach ($operations as $operation) {?>
            <tr>
                <td><?=$operation['id'];?></td>
                <td><?=$operation['type'];?></td>
                <td><?=$operation['credit'];?></td>
                <td><?=$operation['debit'];?></td>
                <td><?=$operation['price'];?></td>
                <td><?=$operation['sum'];?></td>
                <td></td>
                <? foreach ($stocks as $stock) {?>
                    <td><?=$stock['remained_quantity'];?></td>
                    <td><?=$stock['remained_sum'];?></td>
                <?}?>
            </tr>
        <? }?>

    </tbody>
</table>
</body>
</html>
