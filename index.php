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
      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Manager Login
</button>
</div>
    </div>
  </nav>
  <!-- Modal MANAGER LOGIN -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<form  action="manlog.php">  
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Manager Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <table class="table table-borderless h3">
            <tr>
                <td>Enter Email</td>
                <td><input type="text" class="form-control" name="manmail"></td>
            </tr>
            <tr>
                <td>Enter Password</td>
                <td><input type="password" class="form-control" name="manpass" ></td>
            </tr>
        </table>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
  </form>
</div>



<h1 class="display-3 text-center">MANAGER REGISTRATION</h1>

  <center>
    <form method="POST" action="manreg.php">
    <div class="container shadow p-3 mb-5 bg-body-tertiary rounded">
  <table class="table table-borderless w-50 h3">
<tr>
    <td>Manager Name</td>
    <td><input type="text" name="mname" class="form-control"/></td>
</tr>
<tr>
    <td>Manager Contact</td>
    <td><input type="text" name="mcontact" class="form-control"/></td>
</tr>
<tr>
    <td>Manager Email</td>
    <td><input type="mail" name="memail" class="form-control"/></td>
</tr>
<tr>
    <td>Manager Company Name</td>
    <td><input type="text" name="mcompany" class="form-control"/></td>
</tr>
<tr>
    <td>Password</td>
    <td><input type="password" name="mpass" class="form-control"/></td>
</tr>
<tr>
    <td colspan="2" class="text-center">
        <button type="submit" class="btn btn-primary">Register</button>
    </td>
</tr>
  </table>
    </div>
    </form>
  </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>