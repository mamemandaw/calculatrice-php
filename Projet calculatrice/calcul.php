<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculatrice</title>
</head>
<body>
<form action="calcul.php" method="POST">
<center>

<h2>CALCULATRICE</h2>
<br>
<input type="text" name="V1" placeholder="valeur 1">
<input type="text" name="V2" placeholder="valeur 2">
<br>
<table border="1" cellspacing="0">
<br>
<caption>Opération</caption>
<br>
<tr>
<td><font size="15px"><input type="radio" name="op" value="1">+</font></td>
<td><font size="15px"><input type="radio" name="op" value="2">-</font></td>
</tr>

<tr>
<td><font size="15px"><input type="radio" name="op" value="3">*</font></td>
<td><font size="15px"><input type="radio" name="op" value="4">/</font></td>
</tr>
</table>
<br>
<input type="submit" name="valider" value="CALCULER" >
<input type="reset" name="op" value="ANNULER" >


</center>
</form>
    <?php 
    if (isset($_POST['valider'])) {

        switch ($_POST['op']) {
            case '1':
                $total = $_POST['V1'] + $_POST['V2'];
                echo "<center>".$_POST['V1']."+".$_POST['V2']."=" .$total."</center>";
            break;
            
            case '2':
                $total = $_POST['V1'] - $_POST['V2'];
                echo"<center>".$_POST['V1']."-".$_POST['V2']."=" .$total."</center>";
            break;
            case '3':
                $total = $_POST['V1'] * $_POST['V2'];
                echo"<center>". $_POST['V1']."*".$_POST['V2']."=". $total."</center>";
            break;
            
            case '4':
                $total = $_POST['V1'] / $_POST['V2'];
                echo "<center>".$_POST['V1']. "/" .$_POST['V2']."=". $total."</center>";
            break;
        }
        
    }

    ?>
</body>
</html>