<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>storemyresults</title>
  </head>
  <body style="min-height:100vh">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Store My results</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
    
              </li>
              <li class="nav-item dropdown">
    
              </li>
              <li class="nav-item">
    
              </li>
            </ul>
            <form class="d-flex">
              <a style="margin-right: 3px;" class="btn btn-danger" href="index.php" role="button">Log Out</a>
              <a style="margin-right: 3px;" class="btn btn-success" href="profile.php" role="button">Edit Profile</a>
            </form>
          </div>
        </div>
      </nav>
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <!-- <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="9.jpg" class="d-block w-100" style="z-index: -1; height:685px; width:100%; opacity: 1;"  alt="...">
          </div>
        </div> -->
        <div style="padding:30px">
        <p style="font-family:sans-serif">
        <b>Name: </b><?php include('insert.php');
        include('add.php');
        $query1="select * from studentdetails";
        $data1= mysqli_query($conn,$query1);
        $result1=mysqli_fetch_assoc($data1);
        echo $result1['firstname'];?>
        <br>
        <b>USN: </b><?php include('insert.php');
        include('add.php');
        $query1="select * from studentdetails";
        $data1= mysqli_query($conn,$query1);
        $result1=mysqli_fetch_assoc($data1);
        echo $result1['usn'];?>
        <br>
        <b>Branch: </b><?php include('insert.php');
        include('add.php');
        $query1="select * from studentdetails";
        $data1= mysqli_query($conn,$query1);
        $result1=mysqli_fetch_assoc($data1);
        echo $result1['branch'];?>
      </p>
        <br><br><h5><b>Semester: </b><?php include('insert.php');
        include('add.php');
        $query="select * from marksheet";
        $data= mysqli_query($conn,$query);
        $result=mysqli_fetch_assoc($data);
        echo $result['sem'];?>

        </h5>
        </div>
        <table class="table table-hover table-striped" style=" margin: 20">
          <thead class="table-dark">
              <tr>
                <th scope="col">S.No.</th>
                <th scope="col">Subject/Project</th>
                <th scope="col">Score</th>
                <th scope="col">Remarks</th>
                <th scope="col">Edit/Delete</th>
              </tr>
            </thead>
          <tbody>

          <?php
          include("insert.php");
          error_reporting(0);
          $emaill=$_GET['emaill'];
          // $emailid="select email from studentdetails";
          // if(isset($_POST["updateres"])) { $seml=$_POST["selsem"];

          $query= "SELECT * FROM marksheet";
          $query1="SELECT * FROM studentdetails";
          $data= mysqli_query($conn,$query);
          $data1= mysqli_query($conn,$query1);
          $result1=mysqli_fetch_assoc($data1);
          $num=1;
          while($result=mysqli_fetch_assoc($data)){
            if($result[emailid]==$result1[email]){
            echo "
            <tr>
              <td>$num</td>
              <td>$result[subname]</td>
              <td>$result[score]</td>
              <td>$result[remarks]</td>
              <td>
              <a href='edit.php?sub=$result[subname]&&un=$result[emailid]&&sc=$result[score]&&rm=$result[remarks]' class='btn btn-primary'>Edit</a>
              <a class='btn btn-danger' href='delete.php?sub=$result[subname]&&un=$result[emailid]' onclick='return checkdel ()'>Delete</a>
              </td>
            </tr>
            ";
            $num++;
          }
        }
          ?>
        <script>
          function checkdel(){
            return confirm('Are you sure you want to delete this Subject result?');
          }
        </script>

            <!-- <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr> -->
          </tbody>
        </table>
        <br>

        <div  style="text-align: center ">
        <!-- <button type="button" class="btn btn-dark">Add Subject/Project</button> -->
        <button type="button" class="btn btn-dark"  data-bs-toggle="modal" data-bs-target="#enterMarksModal">
        Add Subject/Project
        </button>
      </div>
      </div>

  <div class="modal fade" id="enterMarksModal" tabindex="-1" aria-labelledby="enterMarksModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="enterMarksModalLabel">Add a subject</h5>
         
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="add.php"  method="post">
                <div class="mb-3">
                <p class="form-label">Username/email</p> <input type="email" class="form-control" placeholder="user@gmail.com" name="emailid">
                </div>
                <div class="mb-3">
                <p class="form-label">Semester</p> <input type="text" class="form-control" placeholder="Enter Semester" name="sem">
                </div>
                <div class="mb-3">
                <p class="form-label">Subject/Project</p> <input type="text" class="form-control" placeholder="Subject Name/ Project Name" name="subname">
                </div>
                <div class="mb-3">
                <p class="form-label">Score/Points</p> <input type="text" class="form-control" placeholder="e.g. 100" name="score">
                </div>
                <div class="mb-3">
                <p class="form-label">Remarks</p> <input type="text" class="form-control" placeholder="Enter remarks" name="remarks">
                </div>
                <button class="btn btn-primary" type="submit" name="add" style="text-align:center">Add</button>
              </form>

        </div>
      </div>
    </div>
  </div>

      <footer class="bg-dark text-center text-lg-start sticky-footer" style="position:sticky; top:100%">
        <!-- Copyright -->
        <div class=" text-center p-3" style="color: white;">
          © 2021 Copyright
          <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      </footer>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>