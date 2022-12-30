<?php
 session_start();
?>
<html>
    <head>
        <title>LOGIN</title>
    </head>
    <body>
        <?php
        $pass=$_GET['manpass'];
        $mail=$_GET['manmail'];
        $con=mysqli_connect('localhost','root','','management');
$q="select * from manager where email='$mail'";
$ch=mysqli_query($con,$q);
$row = mysqli_fetch_array($ch);
if ($row['email'] == $mail && $row['password'] == $pass) {
   
    $_SESSION['user']=$row['name'];
    $_SESSION['email']=$row['email'];
    echo "

<script>
alert('login succesfully');
window.location='manager.php';
</script>
";

} else {
    echo "
    <script>
    alert('login unsuccesfull');
    window.location='index.php';
    </script>
    ";
}


?>
    </body>
</html>