<?php

//var_dump($_GET);exit();
// session_start();
// $_SESSION["user"]=$_POST['email'];
$usuarios = trim($_POST['email']);
$password = trim($_POST['pswd']);
$password = md5($password);

$connetion = new mysqli("localhost","root","","proyectozafira");

$stmt ="SELECT * from usuarios";

$mysql=mysqli_query($connetion,$stmt);

?>
<table>
    <tr>
        <th>id</th><th>nombre</th>
    </tr>
    <?php 
    while($res=mysqli_fetch_array($mysql)){
        ?>
        <tr>
            <td><?php echo $res['Usuario_id'];?></td> <td><?php echo $res['Nombre']." ";?></td>

        </tr>
        <?php
    }
    ?>
 </table>