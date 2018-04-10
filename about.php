<?php
$info = file_get_contents(__DIR__ . '/info.json');
$data = json_decode($info, true);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Записная книга</title>
</head>
<body>
<table>
    <thead>
       <tr>
      <th>Имя</th>
      <th>Фамилия</th>
      <th>Адрес</th>
      <th>Телефон</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $item): ?>
        <tr>
            <td><?php echo $item['firstName']; ?></td>
            <td><?php echo $item['lastName']; ?></td>
            <td><?php echo $item['address']; ?></td>
            <td><?php echo $item['phoneNumber']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>