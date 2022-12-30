<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Management Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script>
 $(document).ready(function(){
    $('#filldt').click(function(){
        $.post('editproject.php',{
            name:$("#pname").val()
        },function(dat){
        $('#dt').html(dat);
    })
    })

 })
 
 </script>
</head>
  <body>
  <nav class="navbar bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Project Management Portal</a>
      <div>
      
<a href="manager.php" type="button" class="btn btn-light">
Back
</a>
</div>
    </div>
  </nav>
  <h1 class="display-3 text-center">All Projects</h1>
  <div class="container w-50">
  <?php
         $con=mysqli_connect('localhost','root','','management');
         $q="select * from projects";
         $ch=mysqli_query($con,$q);
         while($row = mysqli_fetch_array($ch))
         {
?>

<div class="card">
  <div class="card-header">
  <?php echo $row['name']; ?>
  </div>
  <div class="card-body">
    <h5 class="card-text">Project Name-- <?php echo $row['name']; ?> </h5>
    <h5 class="card-text">Project Description--<?php echo $row['description']; ?></h5>
    <h5 class="card-text">Project StartDate--<?php echo $row['startdate']; ?></h5>
    <h5 class="card-text">Project Deadline--<?php echo $row['deadline']; ?></h5>
    <h5 class="card-text">Project Manager--<?php echo $row['manager']; ?></h5>
    <h5 class="card-text">Project Developer--<?php echo $row['developer']; ?></h5>
    <h5 class="card-text">Project Status--<?php echo $row['status']; ?></h5>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Edit Status
</button>
  </div>
</div>
<!-- Button trigger modal -->



<?php
         }
         ?>
         </div>
         <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update/Edit Projects</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="ed">
        <table class="table table-borderless  h6">
        <tr>
    <td>Project Name</td>
   
    <td> <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="pname" id="pname">
  <option selected>Choose Project Name</option>
  <?php
   $con=mysqli_connect('localhost','root','','management');
   $q="select * from projects";
   $ch=mysqli_query($con,$q);
   while($row = mysqli_fetch_array($ch))
   {
?>
  <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
  <?php
   }
   ?>
</select></td>
</tr>
<tr>
    <td colspan="2" class="text-center"><button class="btn btn-warning" id="filldt">Fill Data</button></td>
</tr>
</table>
<div class="container" id="dt"></div>
        
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>