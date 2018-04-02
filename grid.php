<?php
$table = "<table>\n"; //opening table/body tags
$table .= "<tbody>";

function randomHex() 
{
    return str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);//dec-hex convert the random number and return it with it padded to the left with other hex
}

function randomColor()
{
    return randomHex() . randomHex() . randomHex(); //call 3 times and concatenate to produce the random color hex
}

for($rows = 1; $rows <= 10; $rows++) //create 10 rows
{
    $table .= "\t<tr>"; //every time through loop start new row
    for($cols = 1; $cols <= 10; $cols++)://create 10 columns 
        $tempColor = randomColor();//each time through this loop store the random color into the variable so you can display the color hex in the td and span
        $table .= "<td bgcolor = '" . $tempColor . "'>" . $tempColor; 
        $table .= "<br />" . "<span style='color:#ffffff;'>" . $tempColor . "</span>" . "</td>"; //creating the cells and storing the color hex in hte cell/span
    endfor;
    $table .= "\t</tr>\n"; //close row
}

$table .= "</tbody>";
$table .= "</table>\n"; //close table/body
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php echo $table; //output table
 ?>
</body>
</html>