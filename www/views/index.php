<html>
<!-- Это вью и логика вью. -->

<head>
</head>
<body>
<center>
    <table>
        <tr>
            <th>Дата</th>
            <th>Название</th>
            <th>Текст новости</th>
        </tr>
        <?php foreach ($items as $item): ?>
            <tr>
                <td><?php echo $item['date']; ?></td>
                <td><?php echo $item['title']; ?></td>
                <td><?php $home = $item['path'];
                    $homepage = file_get_contents(__DIR__ . "/../$home");
                    echo $homepage; ?></td>
            </tr>
        <?php endforeach; ?>
        </tr>
    </table>
</center>
<a href="/add.php">Добавить новость</a>
<?php include __DIR__ . '/form.php'; ?>

</body>
</html>