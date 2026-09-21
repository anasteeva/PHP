<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px 15px;
        }

        pre {
            background: #f4f4f4;
            padding: 15px;
        }
    </style>
</head>
<body>

<h2>Расписание работы</h2>

<p>
    Сегодня:
    <strong><?php echo date('d.m.Y'); ?></strong>
</p>

<?php

$dayOfWeek = (int) date('N');

if ($dayOfWeek == 1 || $dayOfWeek == 3 || $dayOfWeek == 5) {
    $johnSchedule = "8:00-12:00";
} else {
    $johnSchedule = "Нерабочий день";
}

if ($dayOfWeek == 2 || $dayOfWeek == 4 || $dayOfWeek == 6) {
    $janeSchedule = "12:00-16:00";
} else {
    $janeSchedule = "Нерабочий день";
}

?>

<table>
    <tr>
        <th>№</th>
        <th>Фамилия Имя</th>
        <th>График работы</th>
    </tr>

    <tr>
        <td>1</td>
        <td>John Styles</td>
        <td><?php echo $johnSchedule; ?></td>
    </tr>

    <tr>
        <td>2</td>
        <td>Jane Doe</td>
        <td><?php echo $janeSchedule; ?></td>
    </tr>
</table>

<h2>Цикл for</h2>

<pre>
<?php

$a = 0;
$b = 0;

for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;

    echo "Шаг $i: a = $a, b = $b\n";
}

echo "End of the loop: a = $a, b = $b";

?>
</pre>

<h2>Цикл while</h2>

<pre>
<?php

$a = 0;
$b = 0;
$i = 0;

while ($i <= 5) {
    $a += 10;
    $b += 5;

    echo "Шаг $i: a = $a, b = $b\n";

    $i++;
}

echo "End of the loop: a = $a, b = $b";

?>
</pre>

<h2>Цикл do-while</h2>

<pre>
<?php

$a = 0;
$b = 0;
$i = 0;

do {
    $a += 10;
    $b += 5;

    echo "Шаг $i: a = $a, b = $b\n";

    $i++;
} while ($i <= 5);

echo "End of the loop: a = $a, b = $b";

?>
</pre>

</body>
</html>