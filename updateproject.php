<html>
    <head>
        <title>Update</title>
    </head>
    <body>
        <?php
        $pname=$_POST['pname'];
        $pdesc=$_POST['pdesc'];
        $proto=$_POST['proto'];
        $sdate=$_POST['sdate'];
       $ddate=$_POST['ddate'];
       $dev=$_POST['dev'];
       $pstatus=$_POST['pstatus'];
        $con=mysqli_connect('localhost','root','','management');
        $q="update projects set name='$pname', description='$pdesc', prototype='$proto', startdate='$sdate', deadline='$ddate', developer='$dev', status='$pstatus' where name='$pname'";
        $ch=mysqli_query($con,$q);
          echo"
    <script>
alert('Updated Succesfully');
window.location='allproject.php';
    </script>
    
    ";


?>
    </body>
</html>