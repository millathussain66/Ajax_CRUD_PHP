<?php

$host = "localhost";
$user = "root";
$userpass = "";
$dbname = "ajax_php_crud";

$db_conn = mysqli_connect($host,$user,$userpass,$dbname);



$show = "SELECT * FROM db_ajax";

$ex = mysqli_query($db_conn,$show);
?>

<?php

while ($row= mysqli_fetch_array($ex) ) { ?>


<tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['roll']?></td>
    <td><?php echo $row['address']?></td>
</tr>




<?php } ?> 