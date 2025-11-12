<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¡Hola, mundo!</h1> 
    <table border='1'>
        <tr><td> Números del 1 al 10 </td></tr>
        <?php
        for ($i=1;  $i<=10;  $i++) {
            echo "<tr><td align='center'>".$i . "</td></tr>";
        }
        ?> 
    </table>
</body>
</html>