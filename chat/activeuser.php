<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 4/26/17
 * Time: 2:17 PM
 */



session_start();
$uname = $_SESSION['username'];

$reci = $_SESSION['recipient'];


$con=mysqli_connect("localhost","root","","chatBox");



////user list printing

$user = mysqli_query($con, "SELECT * FROM users WHERE isActive = 1");
while ($user && $extract = mysqli_fetch_array($user)){
    echo "<a href='addReci.php?&reci=".$extract['username']."'><span class='singleuser' >".  $extract['username'] ."</span></a><br>";
}

?>