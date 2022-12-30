<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <?php
        $pname=$_POST['name'];
        $con=mysqli_connect('localhost','root','','management');
        $q="select * from projects where name='$pname'";
        $ch=mysqli_query($con,$q);
        $row = mysqli_fetch_array($ch);
          echo"
          <form method='POST' action='updateproject.php'>
          <table class='table table-borderless  h6'>
          <tr>
          <td>Project Name</td>
          <td><textarea class='form-control' name='pname'>$row[name]</textarea></td>
      </tr>
          <tr>
              <td>Project Description</td>
              <td><textarea class='form-control' name='pdesc'>$row[description]</textarea></td>
          </tr>
          <tr>
              <td>Prototype</td>
              <td><input type='text' name='proto' class='form-control' readonly value='PDF Format'/></td>
          </tr>
          <tr>
              <td>Start Date</td>
              <td><input type='date' name='sdate' class='form-control' value=$row[startdate]></td>
          </tr>
          <tr>
              <td>DeadLine</td>
              <td><input type='date' name='ddate' class='form-control' value=$row[deadline]></td>
          </tr>
          
          <tr>
              <td>Project Developer</td>
              <td><input type='text' name='dev' class='form-control' value=$row[developer]></td>
          </tr>
          <tr>
              <td>Project Status</td>
              <td><select class='form-select form-select mb-3' name='pstatus' aria-label='.form-select-lg example'>
              <option selected>Open this select menu</option>
              <option value='Pending'>Pending</option>
              <option value='Completed'>Completed</option>
              <option value='Hold'>Hold</option>
              <option value='Terminate'>Terminate</option>
            </select>
            
           </td>
          </tr>
          <tr>
              <td colspan='2' class='text-center'>
                  <button type='submit' class='btn btn-primary'>Update</button>
              </td>
          </tr>
            </table>
            </form>
    ";


?>
    </body>
</html>