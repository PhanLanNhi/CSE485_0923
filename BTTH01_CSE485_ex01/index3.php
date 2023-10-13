<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, td, th {
        border: 1px solid #000;
        border-collapse: collapse;
    }
</style>
<body>
    <?php
        $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
    ?>
    <table>
        <thead>
            <tr>
                <th>Tên khóa học</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($arrs as $value) {
                    echo "<tr>";
                    echo "<td>" . $value . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>