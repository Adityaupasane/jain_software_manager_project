<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <?php
        $pname=$_POST['pname'];
        $pdesc=$_POST['pdesc'];
        $proto=$_POST['proto'];
        $sdate=$_POST['sdate'];
       $ddate=$_POST['ddate'];
       $man=$_POST['man'];
       $dev=$_POST['dev'];
       $pstatus=$_POST['pstatus'];
        $con=mysqli_connect('localhost','root','','management');
        $q="insert into projects values('$pname','$pdesc','$proto','$sdate','$ddate','$man','$dev','$pstatus')";
        $ch=mysqli_query($con,$q);
          echo"
    <script>
alert('Added Succesfully');
window.location='manager.php';
    </script>
    
    ";


?>
    </body>
</html>