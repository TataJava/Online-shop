<!DOCTYPE html>
<html>
<body>
<?php
    $items = 
    array(  array("1","Air Jordan XXXVI Low Luka PF","฿6400","image/img1.jpg"),
            array("2","Nike Air Zoom G.T. Cut 2","฿6200","image/img2.jpg"),
            array("3","KD Trey 5 X EP","฿3400","image/img3.jpg"),
            array("4","Zion 2 PF","฿4700","image/img4.jpg"),
            array("5","Kyrie Infinity EP","฿5000","image/img5.jpg"),
            array("6","LeBron 19","฿7800","image/img6.jpg"),
            array("7","KD14 EP","฿5500","image/img7.jpg"),
            array("8","Air Jordan XXXVI PF","฿6400","image/img8.jpg"),
            array("9","Air Jordan 5 Retro Low PSG","฿7200","image/img9.jpg"),
            array("10","Nike Air Zoom G.T. Jump","฿6400","image/img10.jpg"),
    );

    echo '<table width"100%" border="1">
    <tr>
      <th>id</th>
      <th>name</th>
      <th>price</th>
      <th>img</th>
    </tr>
    ';

    for($i = 0;$i < 10;$i++)
    {
        $r = rand(0,256);
        $g = rand(0,256);
        $b = rand(0,256);
        echo "<tr>
        <td style ='color:rgb($r, $g, $b)'>".$items[$i][0]."</td>
        <td style ='color:rgb($r, $g, $b)'>".$items[$i][1]."</td>
        <td style ='color:rgb($r, $g, $b)'>".$items[$i][2]."</td>
        <td ><img src=".$items[$i][3]." width='230' height='298.5' /></td>
        </tr>";  
    }
   
    echo '</table>';
?>

</body>
</html>