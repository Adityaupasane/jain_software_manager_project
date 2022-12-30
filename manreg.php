<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <?php
        $mname=$_POST['mname'];
        $mcontact=$_POST['mcontact'];
        $memail=$_POST['memail'];
        $mcompany=$_POST['mcompany'];
       $mpass=$_POST['mpass'];
        $con=mysqli_connect('localhost','root','','management');
        $q="insert into manager values('$mname',$mcontact,'$memail','$mcompany','$mpass')";
        $ch=mysqli_query($con,$q);
          echo"
    <script>
alert('Registered Succesfully');
window.location='index.php';
    </script>
    
    ";


?>
    </body>
</html>