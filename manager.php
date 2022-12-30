<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Management Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
</head>
  <body>
  <nav class="navbar bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Project Management Portal</a>
      <div>
      
<a href="allproject.php" type="button" class="btn btn-light">
List Of Projects
</a>
<a href="manlogout.php" type="button" class="btn btn-danger">
Logout
</a>
</div>
    </div>
  </nav>
  <h1 class="display-3 text-center">Add Project</h1>

  <center>
    <form method="POST" action="addproject.php">
    <div class="container shadow p-3 mb-5 bg-body-tertiary rounded">
  <table class="table table-borderless w-50 h3">
<tr>
    <td>Project Name</td>
    <td><input type="text" name="pname" class="form-control"/></td>
</tr>
<tr>
    <td>Project Description</td>
    <td><textarea class="form-control" name="pdesc"></textarea></td>
</tr>
<tr>
    <td>Prototype</td>
    <td><input type="text" name="proto" class="form-control" readonly value="PDF Format"/></td>
</tr>
<tr>
    <td>Start Date</td>
    <td><input type="date" name="sdate" class="form-control"/></td>
</tr>
<tr>
    <td>DeadLine</td>
    <td><input type="date" name="ddate" class="form-control"/></td>
</tr>
<tr>
    <td>Project Manager</td>
    <?php
         $con=mysqli_connect('localhost','root','','management');
         $q="select * from manager";
         $ch=mysqli_query($con,$q);
         while($row = mysqli_fetch_array($ch))
         {
?>
    <td class="h5">
    <div class="form-check">
  <input class="form-check-input" type="radio" name="man" id="<?php echo $row['name']; ?>" value="<?php echo $row['name']; ?>">
  <label class="form-check-label" for="<?php echo $row['name']; ?>">
  <?php echo $row['name']; ?>
  </label>
</div>
    <?php
         }
         ?>
    </td>
</tr>
<tr>
    <td>Project Developer</td>
    <td><input type="text" name="dev" class="form-control"/></td>
</tr>
<tr>
    <td>Project Status</td>
    <td><input type="text" name="pstatus" class="form-control" value="Pending" readonly/></td>
</tr>
<tr>
    <td colspan="2" class="text-center">
        <button type="submit" class="btn btn-primary">ADD</button>
    </td>
</tr>
  </table>
    </div>
    </form>
  </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>