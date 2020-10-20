<?php
include "conexion.inc.php";
$sql = "select 
sum(if(i.recidencia='01'and n.nota>50,1,0))as 'Chuquisca',
    sum(if(i.recidencia='02'and n.nota>50,1,0))as 'La Paz',
    sum(if(i.recidencia='03'and n.nota>50,1,0))as 'Cochabamba',
    sum(if(i.recidencia='04'and n.nota>50,1,0))as 'Oruro',
    sum(if(i.recidencia='05'and n.nota>50,1,0))as 'Potosi',
    sum(if(i.recidencia='06'and n.nota>50,1,0))as 'Tarija',
    sum(if(i.recidencia='07'and n.nota>50,1,0))as 'Santa Cruz',
    sum(if(i.recidencia='08'and n.nota>50,1,0))as 'Beni',
    sum(if(i.recidencia='09'and n.nota>50,1,0))as 'Pando'
from identificador as i
inner join nota as n on n.ci=i.ci";
$resultado = mysqli_query($conn, $sql);
$fila = mysqli_fetch_row($resultado);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="padre">
        <div class="hijo">


            <?php
            echo '
        <table border="1">
		<caption>Materias Aprobadas por Departamentos</caption>
		<tr>
			<th>Chiquisaca</th>
            <th>La Paz</th>
            <th>Cochabamba</th>
            <th>Oruro</th>
            <th>Potosi</th>
            <th>Tarija</th>
            <th>Santa Cruz</th>
            <th>Beni</th>
            <th>Pando</th>
		</tr>
		<tr>
			<td>' . $fila[0] . '</td>
            <td>' . $fila[1] . '</td>
            <td>' . $fila[2] . '</td>
            <td>' . $fila[3] . '</td>
            <td>' . $fila[4] . '</td>
            <td>' . $fila[5] . '</td>
            <td>' . $fila[6] . '</td>
            <td>' . $fila[7] . '</td>
            <td>' . $fila[8] . '</td>
		</tr>
		</table>
        ';
            ?>
        </div>
    </div>
</body>

</html>