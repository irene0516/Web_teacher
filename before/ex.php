<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:05
 */
$a=1234;
$n=$_POST['n'];
$m=$_POST['m'];
$r=$_POST['r'];
$g=$_POST['g'];
$b=$_POST['b'];
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
echo "<table style='background-color:rgb($r,$g,$b)'>";
for($i=1;$i<=$n;$i++){
    echo"<tr>";
    for($j=1;$j<=$m;$j++){
        echo "<td ><span style='fonr-size:2em'>".$i*$j."</span></td>";
    }
    echo"</tr>";
}
echo"</table>"
?>


</body>
</html>
